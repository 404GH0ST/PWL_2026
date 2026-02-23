<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get("/hello", function () {
    return 'Hello World';
});

Route::get("/world", function () {
    return 'World';
});

Route::get('/about', function () {
    return '244107020049 - Agus Prasetyo';
});

Route::get("/user/{name?}", function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." dan Komentar ke-: ".$commentId;
});

Route::get("/articles/{id}", function ($articleId) {
    return 'Halaman Artikel dengan ID '.$articleId;
});