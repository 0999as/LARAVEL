<?php

namespace App\Http\Controllers;

use App\Models\User10; 
use Illuminate\Http\Request;

class HasController extends Controller
{
    public function HO1() {
        $user10 = User10::;
        dump($user10->profile);
    }
}