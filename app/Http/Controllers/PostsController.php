<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Post;
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
      $post = new Posts();
      $post->title = $request->title;
      $post->desc = $request->desc;
      $post->text = $request->text;
      $post->save();
      return redirect()->route('post.create')->with('success', 'Данные добавлены');
    }
    return view('posts.create');
  }
  public function save()
  {
    $post = Posts::find(5);
    $post->title = 'jfjf';
    $post->save();
  }
  public function editPost(Request $request, $id)
  {
    $post = Posts::find($id);
    if ($request->has('submit')) {
      $post->title = $request->title;
      $post->desc = $request->desc;
      $post->date = $request->date;
      $post->text = $request->text;
      $post->save();
    }
    return view('posts.editPost', ['post' => $post]);
  }
  public function setSameTitle(Request $request)
  {
    Posts::query()->update(['title' => $request->title]);
    return redirect()->route('posts.index')->with('success' . $request->title);
  }
}
