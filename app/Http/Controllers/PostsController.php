<?php

namespace App\Http\Controllers;

use App\Models\Posts;

class PostsController extends Controller
{
  public function index()
  {
    $posts = Posts::findOrFail([1, 2]);

    return view('posts.index', compact('posts'));
  }
}