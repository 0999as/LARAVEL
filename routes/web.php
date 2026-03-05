<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\PRController;

/*1*/
Route::get('/test', function () {
    return 'Тест';
});

/*2*/
Route::get('/dir/test', function () {
    return 'Тест а';
});

/*3*/
Route::get('/user0/{name}', function ($name) {
    return 'Привет' . ' ' . $name;
});

/*4*/
Route::get('/user1/{surname}/{name}', function ($surname, $name) {
    return 'Привет' . ' ' . $surname . ' ' . $name;
});

/*5*/
Route::get('/city/{city?}', function ($city = 'Omsk') {
    return 'Город' . ' ' . $city;
});

/*6*/
Route::get('/user2/{id}', function ($id) {
    return 'Пользователь номер' . ' ' . $id;
})->whereNumber('id');

/*7*/
Route::get('/user3/{id}/{name}', function ($id, $name) {
    return 'Пользователь номер/имя:' . ' ' . $id . '/' . $name;
})->whereNumber('id')->where('name', '[a-z_-]+');

/*13*/
Route::get('/user4/{id}', function ($id) {
    return 'id';
})->whereNumber('id');
Route::get('/user4/all', function () {
    return 'all';
});

/*14*/
Route::get('/user5', function () {
    return 'user';
});
Route::get('/user5/{id?}', function ($id = null) {
    return 'id';
})->whereNumber('id');
Route::get('/user5/all', function () {
    return 'all';
});

/*15*//*NN*/
Route::get('/user6/{id}', function ($id) {
    return 'id';
})->where('slug', '[a-z0-9_-]+');
Route::get('/user6/{id}', function ($id) {
    return 'id';
})->where('id', '[0-9]+');

/*16*/
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'all';
    });
    Route::get('/user/{id}', function ($id) {
        return 'id';
    });
});
/*
Route::get('/users/{id}', [CategoryController::class, 'show']);
*/
Route::get('/test1', [PostController::class, 'show']);
Route::get('/PR', [PRController::class, 'PR27']);