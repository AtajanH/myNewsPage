<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AddNewsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PersonalCabinetController;
use App\Http\Controllers\PasswordController;


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Показ профиля
Route::get('/personal', [PersonalCabinetController::class, 'showPersonalForm'])->name('personal')->middleware('auth');
// Показ формы изменения пароля
Route::get('/change-password', [PasswordController::class, 'showChangePasswordForm'])->name('change.password');
Route::post('/change-password', [PasswordController::class, 'changePassword'])->name('update.password');

// Показ формы добавления новости
Route::get('/add-news', [AddNewsController::class, 'showAddNewsForm'])->name('add.news'); // Форма для добавления новости
Route::post('/add-news', [AddNewsController::class, 'store']); // Обработка данных и сохранение

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

//API
Route::get('api/news/{id}', [NewsController::class, 'showByApi']);


