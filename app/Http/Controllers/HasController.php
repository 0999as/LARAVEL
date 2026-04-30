<?php

namespace App\Http\Controllers;

use App\Models\User10; 
use Illuminate\Http\Request;

class HasController extends Controller
{
    public function HO1() {
        $user = User10::with('profiles')->get();
        dump($user);
        //return view('Show.index', compact('user'));
    }
    public function HO2($id) {
        $user = User10::with('profiles')->findOrFail($id);
        dump($user);
        //return view('Show.index', compact('user'));
    }
}