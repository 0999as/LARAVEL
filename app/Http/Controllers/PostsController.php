<?php

namespace App\Http\Controllers;

use App\Models\Posts;

class PostsController extends Controller
{
  public function index()
  {
    $posts = Posts::all();

    return view('posts.index', compact('posts'));
  }
}