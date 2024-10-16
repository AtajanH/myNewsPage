<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Валидация полей формы
        $request->validate([
            'login' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed', // проверка на подтверждение пароля
        ]);

        // Создание нового пользователя
        $user = User::create([
            'login' => $request->login,
            'password' => Hash::make($request->password), // Хеширование пароля
        ]);
        
        // Авторизация пользователя
        Auth::login($user);

        // Перенаправление на страницу новостей после регистрации
        return redirect('/news');
    }
}