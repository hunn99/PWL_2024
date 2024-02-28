<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/world', function () {
    return 'World';
});

Route::get('/selamatdatang', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM : 2241720107 Nama : Denny Malik Ibrahim';
});

//route parameters
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}', function ($Id) {
    return 'Halaman Artikel dengan ID ' . $Id;
});

//optional parameter
Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name;
});

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::get('/hello', [WelcomeController::class, 'hello']);

//Modifikasi hasil pada praktikum poin 2 (Routing) dengan konsep controller. Pindahkan 
//logika eksekusi ke dalam controller dengan nama PageController.

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles/{id}', [PageController::class, 'articles']);

// Modifikasi kembali implementasi sebelumnya dengan konsep Single Action Controller. 
// Sehingga untuk hasil akhir yang didapatkan akan ada HomeController, 
// AboutController dan ArticleController. Modifikasi juga route yang 
// digunakan.

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles', [ArticleController::class, 'articles']);


// Resource Controller
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

