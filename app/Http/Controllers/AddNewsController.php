<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class AddNewsController extends Controller
{
    public function showAddNewsForm()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        // Валидация данных
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Валидация для изображения
        ]);

        // Получение файла
        $file = $request->file('image');

        // Формирование нового имени файла
        $newFileName = uniqid() . '_' . $file->getClientOriginalName();
        $newFileName = 'images/'.$newFileName;

        // Сохранение файла в папку public/images
        $file->move(public_path('images'), $newFileName);
       
        // Сохранение новости
        News::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $newFileName,
            'author' => Auth::user()->login, // Запись логина автора
        ]);

        return redirect()->route('personal')->with('success', 'Новость успешно добавлена.');
    }
}

