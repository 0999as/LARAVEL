<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
  public function index()
  {
    $posts = Posts::findOrFail([1, 2]);

    return view('posts.index', compact('posts'));
  }
  public function newPost(Request $request)
  {
    if ($request->isMethod('post')) {
      //$validated = $request->validate([]);
      //Posts::create($validated);
      $post = new Posts();
      $post->title = $request->title;
      $post->desc = $request->desc;
      $post->text = $request->text;
      $post->save();
      return redirect()->route('post.create')->with('success', 'Данные добавлены');
    }
    return view('posts.create');
  }
  public function save(){
    $post = Posts::find(6);
    $post->title = 'jfjf';
    $post->save();    
  }
  public function editPost() {
    return view('posts.editPost');
  }
}