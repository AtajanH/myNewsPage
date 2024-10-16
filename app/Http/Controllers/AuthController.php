<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Отображение формы входа
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Логика входа
    public function login(Request $request)
    {
        $credentials = $request->only('login', 'password');

        if (Auth::attempt($credentials)) {
            // Если авторизация успешна, перенаправляем пользователя
            return redirect()->intended('/news');
        }

        //Если данные неверные
        return redirect()->back()->withErrors([
            'login' => 'Invalid login or password.',
        ]);
    }

    // Логика выхода
    public function logout()
    {
        Auth::logout();
        Session::flush(); // Очистить сессию
        return redirect('/news');
    }
}

