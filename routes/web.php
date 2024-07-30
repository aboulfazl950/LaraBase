<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::prefix('user-management')->name('user-management.')->group(function () {

    Route::get('/users/list', function () {
        return view('user-management.users.list');
    })->name('user-list');

    Route::get('/users/view', function () {
        return view('user-management.users.view');
    })->name('user-view');

    Route::get('/roles/list', function () {
        return view('user-management.roles.list');
    })->name('role-list');

    Route::get('/roles/view', function () {
        return view('user-management.roles.view');
    })->name('role-view');

    Route::resource('/permissions', \App\Http\Controllers\Admin\PermissionManagementController::class);

})->middleware('auth');

Route::prefix('account')->name('account.')->group(function () {

    Route::get('/overview', function () {
        return view('account.overview');
    })->name('overview');

    Route::get('/settings', function () {
        return view('account.settings');
    })->name('settings');

    Route::get('/security', function () {
        return view('account.security');
    })->name('security');

    Route::post('/profile/{user}/profile-image', function (\Illuminate\Http\Request $request,User $user) {
        if($request->avatar) {
            $fileNamePrimaryImage = generateFileName($request->avatar->getClientOriginalName());
            //dd($fileNamePrimaryImage);
            $request->avatar->move(public_path(env('PROFILE_IMAGES_UPLOAD_PATH')), $fileNamePrimaryImage);

            $user->update([
                'profile_photo_path' => $fileNamePrimaryImage
            ]);
        }
        if($request->avatar_remove) {
            $image_path = public_path(env('PROFILE_IMAGES_UPLOAD_PATH')).$user->profile_photo_path;

            if(file_exists($image_path)) {
                unlink($image_path);
                $user->update([
                    'profile_photo_path' => null
                ]);
            }


        }

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
