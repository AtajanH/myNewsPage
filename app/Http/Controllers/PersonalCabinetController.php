<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalCabinetController extends Controller
{
    public function showPersonalForm()
    {
        return view('personal');
    }
}
