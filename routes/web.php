<?php

use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\RegisterUser;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Block;
use App\Livewire\ContactAdmin;
use App\Livewire\EditProfile;
use App\Livewire\Event;
use App\Livewire\Faculty;
use App\Livewire\Forum;
use App\Livewire\Home;
use App\Livewire\Message;
use App\Livewire\News;
use App\Livewire\Notification;
use App\Livewire\Profile;
use App\Livewire\Student;
use App\Livewire\StudentList;
use App\Livewire\Year;
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

Route::get('/', Home::class);
Route::get('/profile', Profile::class)->name('profile');
Route::get('/notification', Notification::class)->name('notification');
Route::get('/messages', Message::class)->name('messages');
Route::get('/editProfile', EditProfile::class)->name('editProfile');
Route::get('/contactAdmin', ContactAdmin::class)->name('contactAdmin');

Route::get('/students', Student::class)->name('student');
Route::get('/years', Year::class)->name('year');
Route::get('/blocks', Block::class)->name('block');
Route::get('/studentList', StudentList::class)->name('student-list');

Route::get('/events', Event::class)->name('event');

Route::get('/news', News::class)->name('news');

Route::get('/forums', Forum::class)->name('forum');

Route::get('/faculty', Faculty::class)->name('faculty');

Route::get('/login', Login::class)->name('login');
Route::get('register-user', RegisterUser::class)->name('register-user');
Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');
Route::get('/register', ResetPassword::class)->name('reset-password');
