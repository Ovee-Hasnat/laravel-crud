<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category', 'user')->latest()->paginate(6);

        return view('posts.view-all', [
            'posts' => $posts
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $latestPosts = Post::where('id', '!=', $post->id)
            ->latest()
            ->take(4)
            ->get();

        $categories = Category::all();

        return view('posts.view-one-post', ['post' => $post, 'latestPosts' => $latestPosts, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::guest()) {
            return redirect('/login');
        }

        $categories = Category::all();

        return view('posts.create-post', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
            'category' => ['required'],
            'title' => ['required'],
            'content' => ['required'],
        ]);

        $post = Post::create([
            "category_id" => request('category'),
            "title" => request('title'),
            "content" => request('content'),
            "user_id" => Auth::id()
        ]);


        // return redirect('/dashboard')->with('success', 'Post created successfully.');

        // Redirect to the created post
        return redirect()->route('posts.show', $post->id)
            ->with('success', 'Post created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('posts.edit-post', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        try {
            $post->update($request->fields());
            return redirect('/posts/' . $post->id)->with('success', 'Post updated successfully.');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/dashboard')->with('success', 'Post deleted successfully.');
    }
}
