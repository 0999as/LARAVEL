<?php

namespace App\Http\Controllers;

use App\Models\User10;
use App\Models\Profiles;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $user = new User10();
        $user->Login = $request->input('login');
        $user->Password = bcrypt($request->input('password'));
        $user->save();

        $profile = new Profiles();
        $profile->Name = $request->input('name');
        $profile->Surname = $request->input('surname');
        $profile->Email = $request->input('email');

        $user->profiles()->save($profile);
    }
}
