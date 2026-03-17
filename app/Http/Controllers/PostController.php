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
    public function show14() {
        $users = DB::table('users')->where('age', '=', 30)->orWhere('id', '>', 4)->orWhere('salary', '=', 40000)->get();
        dump($users);
    }
    public function show15() {
        $users = DB::table('users')->where('salary', '=', 45000)->orWhere('age', '>=', 20)->where('age', '<=', 30)->get();
        dump($users);
    }
    public function show16() {
        $users = DB::table('users')->where('age', '>=', 20)->where('age', '<=', 30)->orWhereBetween('salary', [30000, 40000])->get();
        dump($users);
    }
    public function show17() {
        $users = DB::table('users')->where('id', '=', 3)->get();
        dump($users);
    }
    public function show23() {
        $users = DB::table('users')->whereBetween('age', [30, 40])->get();
        dump($users);
    }
    public function show24() {
        $users = DB::table('users')->whereNotBetween('age', [30, 40])->get();
        dump($users);
    }
    public function show25() {
        $users = DB::table('users')->whereIn('id', [1, 2, 3, 5])->get();
        dump($users);
    }
    public function show26() {
        $users = DB::table('users')->whereNotIn('id', [1, 2, 3, 5])->get();
        dump($users);
    }
}
