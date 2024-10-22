<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Specify the fillable fields
    protected $fillable = [
        'name',
    ];

    // Define relationships
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
