<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::guest()) {
            return redirect('/login');
        }

        $categories = Category::all();

        $userId = Auth::id(); // Get the authenticated user's ID

        if (!$userId) {
            return abort(403); // Return unauthorized if not logged in
        }

        $posts = Post::with('category') // Eager load the category
            ->where('user_id', $userId) // Filter by user ID
            ->get();

        // dd($posts);

        return view('dashboard', [
            'categories' => $categories,
            'posts' => $posts
        ]);
    }
}
