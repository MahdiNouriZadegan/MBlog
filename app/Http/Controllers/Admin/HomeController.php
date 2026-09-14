<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $users = User::all();
        $posts = Post::count();
        $categories = Category::count();
        $comments = Comment::all();
        $tags = Tag::count();
        $views =  Post::sum('views');

        return view('admin.index', compact('users', 'posts', 'comments', 'views', 'categories', 'tags'));
    }
}
