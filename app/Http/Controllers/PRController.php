<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PRController extends Controller
{
    public function PR1()
    {
        return view('PR.PR', ['name' => 'User', 'age' => 18, 'salary' => 25000]);
    }
    public function PR2()
    {
        $CSS = 'container-fluid bg-light';
        return view('PR.PR', compact('CSS'));
    }
    public function PR3()
    {
        $name = 'User';
        $email = 'User@mail.com';
        $age = 18;
        return view('PR.PR', compact('name', 'email', 'age'));
    }
    public function PR4()
    {
        $color = 'color: red';
        return view('PR.PR', compact('color'));
    }
    public function PR5()
    {
        $text = 'Какая-то ссылка';
        $href = '#';
        return view('PR.PR', compact('text', 'href'));
    }
    public function PR6()
    {
        $data = date('d.m.Y');
        return view('PR.PR', compact('data'));
    }
    public function PR7()
    {
        return view('PR.PR', [
            'worker' =>
                [
                    ['name' => 'Иван', 'age' => '25', 'salary' => '25000']
                ]
        ]);
    }
    public function PR8()
    {
        return view('PR.PR', ['arr' => [1, 2, 3, 4, 5, 6, 7, 8, 9]]);
    }
    public function PR9()
    {
        return view('PR.PR', ['city' => '']);
    }
    public function PR10()
    {
        return view('PR.PR', [
            'location' =>
                [
                    ['country' => '', 'city' => 'Пенза'],
                    ['country' => 'Россия', 'city' => ''],
                    ['country' => 'Россия', 'city' => 'Омск']
                ]
        ]);
    }
    public function PR11()
    {
        $day = '15';
        $month = '02';
        $year = '';
        return view('PR.PR', compact('day', 'month', 'year'));
    }
    public function PR12()
    {
        $str = '<b>text</b>';
        return view('PR.PR', compact('str'));
    }
    public function PR14()
    {
        $age = '17';
        return view('PR.PR', compact('age'));
    }
    public function PR18()
    {
        return view('PR.PR', ['arr' => [1, 2, 3, 4, 5, 6, 7, 8, 9]]);
    }
    public function PR19()
    {
        return view('PR.PR', ['arr' => [1, 2, 3, 4, 5, 6, 7, 8, 9]]);
    }
    public function PR27()
    {
        return view('PR.PR', ['employees' => [['name' => 'user1', 'surname' => 'surname1', 'salary' => 1000,], ['name' => 'user2', 'surname' => 'surname2', 'salary' => 2000,], ['name' => 'user3', 'surname' => 'surname3', 'salary' => 3000,]]]);
    }
}