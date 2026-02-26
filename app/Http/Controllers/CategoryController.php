<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller{
    public function show($id) {
        $users = [
            'user1' => 'city1',
            'user2' => 'city2',
            'user3' => 'city3',
            'user4' => 'city4',
            'user5' => 'city5',
        ];
        return $users[$id];
    }
}
