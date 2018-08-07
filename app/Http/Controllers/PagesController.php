<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;

class PagesController extends Controller
{
    public function index($cat_id = 0)
    {
        if ($cat_id <= 0) {
            
            $posts = Post::paginate(10);
        } else {
            $posts = Category::find($cat_id)->posts;
        }

        $categories = Category::all();
        return view('pages.index', compact('categories'))->with('posts', $posts);
    }

}
