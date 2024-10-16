<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PasswordController extends Controller
{
    public function showChangePasswordForm()
    {
        return view('auth.change-password');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'new_password' => 'required|min:6|confirmed',
        ]);

        // Получаем текущего пользователя
        $user = Auth::user();

        // Изменение пароля
        $user->password = Hash::make($request->new_password);
        
        if (!$user) {
            dd('Пользователь не найден'); // Это остановит выполнение, если пользователь не найден
        }
        // Сохраняем изменения
        $user->save();

        return redirect()->route('personal')->with('success', 'Пароль изменен успешно.');
    }
}
