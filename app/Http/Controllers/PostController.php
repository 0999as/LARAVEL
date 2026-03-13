<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class PostController extends Controller
{
    public function show() {
        $users = DB::table('users')->get();
        dd($users);
    }
    public function show1() {
        $users = DB::table('users')->get();
        foreach($users as $user) {
            dump($user);
        }
    }
    public function show3() {
        $users = DB::table('users')->where('id', '!=', 3)->get();
        dump($users);
    }
    public function show5() {
        $users = DB::table('users')->get();
        foreach($users as $user) {
            dump($user->name);
            dump($user->email);
        }
    }
    public function show7() {
        $users = DB::table('users')->where('age', '=', 30)->get();
        dump($users);
    }
    public function show8() {
        $users = DB::table('users')->where('age', '!=', 30)->get();
        dump($users);
    }
    public function show9() {
        $users = DB::table('users')->where('age', '>', 30)->get();
        dump($users);
    }
    public function show10() {
        $users = DB::table('users')->where('age', '<', 30)->get();
        dump($users);
    }
    public function show11() {
        $users = DB::table('users')->where('age', '<=', 30)->get();
        dump($users);
    }
    public function show12() {
        $users = DB::table('users')->where('age', '>=', 20)->where('age', '<=', 30)->get();
        dump($users);
    }
    public function show13() {
        $users = DB::table('users')->where('age', '=', 30)->orWhere(function($query){$query ->where('id', '>', 4);})->get();
        dump($users);
    }
}
