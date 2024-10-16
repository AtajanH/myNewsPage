<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(Request $request)
{
    $news = News::orderBy('created_at', 'desc')->paginate(4);

    if ($request->ajax()) {
        return view('news.news-data', compact('news'))->render();
    }

    return view('news.index', compact('news'));
}


public function show($id)
{
    $news = News::findOrFail($id);
    return view('news.show', compact('news'));
}

public function showByApi($id)
{
     // новость по ID
     $news = News::find($id);

     // Если новость не найдена
     if (!$news) {
         return response()->json(['message' => 'News not found'], 404);
     }

     // новость с подробной информацией
     return response()->json($news);
}


}
