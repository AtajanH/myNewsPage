<?php 
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


Route::get('/news/{id}', [NewsController::class, 'showByApi']);
