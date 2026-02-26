<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show() {
        return view('Post.layout', ['title' => 'page title', 'slot' => 'page content', 'arr' => [1, 2, 3, 4, 5, 6, 7, 8, 9],
        'isAuth' => true, 'num' => 0, 'users' => [['name' => 'user1', 'age' => 21], ['name' => 'user2', 'age' => 22], ['name' => 'user3', 'age' => 23]]]);
    }
}
