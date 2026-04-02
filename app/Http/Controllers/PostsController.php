<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
  public function index()
  {
    $posts = Posts::findOrFail([1, 2]);

    return view('posts.index', compact('posts'));
  }
  public function newPost(Request $reguest)
  {
    if ($reguest->isMethod('post')) {
      $validated = $reguest->validate([
        'title' => 'requred|string|10',
        'desc' => 'requred|string|50',
        'text' => 'requared|string|250'
      ]);
      $posts = Posts::create($validated);
      return redirect()->route('post.create')->with('success', 'Данные добавлны');
    }
    return view('posts.view');
  }
}