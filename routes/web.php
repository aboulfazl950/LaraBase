<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('demo');

Route::get('/add', function () {
    $user = User::create([
        'name' => 'modir',
        'username' => 'admin',
        'email' => 'admin@yahoo.com',
        'password' => \Illuminate\Support\Facades\Hash::make('1979891'),
        'profile_photo_path' => 'avatars/u1.jpg',
    ]);
})->name('add');
