<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function form(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('test.form');
        }
        if ($request->isMethod('post')) {
            $number = $request->input('number');
            return view('test.result', ['number', $number]);
        }
    }
}
