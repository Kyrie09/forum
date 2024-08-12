<?php


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('auth')->group(function () {
        Route::view('/', 'home')->middleware('auth');
        Route::view('/profile','profile')->name('profile');
        Route::view('/notification', 'notification')->name('notification');
        Route::view('/messages', 'message')->name('messages');
        Route::view('/editProfile', 'edit-profile')->name('editProfile');
        Route::view('/contactAdmin', 'contact-admin')->name('contactAdmin');

        Route::view('/students', 'student')->name('student');
        Route::view('/years/{id}', 'year')->name('year');
        Route::view('/blocks/{id}', 'block')->name('block');
        Route::view('/studentList/{id}', 'student-list')->name('student-list');

        Route::view('/events', 'event')->name('event');

        Route::view('/news', 'news')->name('news');
        Route::view('/createNews', 'create-news')->name('createNews');

        Route::view('/forums', 'forum')->name('forum');

        Route::view('/faculty', 'faculty')->name('faculty');
});

Route::middleware('guest')->group(function () {
    Route::view('/login', 'login')->name('login');
    Route::view('register-user', 'register')->name('register-user');
    Route::view('/forgot-password', 'forgot-password')->name('forgot-password');
    Route::view('/reset-password', 'reset-password')->name('reset-password');
});

