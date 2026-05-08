<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PRController;
use App\Http\Controllers\HasController;
use App\Http\Controllers\SaveController;

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
Route::get('/LL', [PostController::class, 'show15']);
Route::get('/PR', [PRController::class, 'PR12']);
Route::get('/posts', [PostsController::class, 'index1']);

Route::get('/posts/new', [PostsController::class, 'newPost'])->name('post.create');
Route::post('/posts/new', [PostsController::class, 'newPost'])->name('post.store');

Route::get('/save', [PostsController::class, 'save']);

Route::match(['get', 'post'], '/post/edit/{id}', 'PostsController@editPost');

Route::post('/posts/set-same-title', [PostsController::class, 'setSameTitle'])->name('posts.setSameTitle');

Route::get('/HO/{id}', [hasController::class, 'HO2']);

Route::get('/users/create', [SaveController::class, 'create'])->name('users.create');
Route::post('/users', [SaveController::class, 'store'])->name('users.store');
?>