<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'author',
    ];

    public function getAuthorDetailsAttribute()
    {
        // Здесь мы получаем пользователя по его логину, который хранится в поле author
        return User::where('login', $this->author)->first();
    }
}

