<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::prefix('account')->name('account.')->group(function () {

    Route::get('/overview', function () {
        return view('account.overview');
    })->name('overview');

    Route::get('/settings', function () {
        return view('account.settings');
    })->name('settings');

    Route::post('/profile/{user}/profile-image', function (\Illuminate\Http\Request $request,User $user) {
        $fileNamePrimaryImage = generateFileName($request->avatar->getClientOriginalName());
        //dd($fileNamePrimaryImage);
        $request->avatar->move(public_path(env('PROFILE_IMAGES_UPLOAD_PATH')), $fileNamePrimaryImage);

        $user->update([
            'profile_photo_path' => 'avatars/'.$fileNamePrimaryImage
        ]);
    })->name('save_profile');

})->middleware('auth');

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
