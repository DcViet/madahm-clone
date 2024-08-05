<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home-screen');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/project/detail', function () {
    return view('project-screen');
});

Route::get('/project', function () {
    return view('project-show');
});

Route::get('/partners-list', function () {
    return view('partner-list');
});

Route::get('/info', function () {
    return view('info-section');
});

Route::get('/recruits', function () {
    return view('recruits-screen');
});

Route::get('/sign-in', function () {
    return view('signin-screen');
});

Route::get('/sign-up', function () {
    return view('signup-screen');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // Redirect đến trang chủ hoặc trang khác sau khi đăng xuất
})->name('logout');
