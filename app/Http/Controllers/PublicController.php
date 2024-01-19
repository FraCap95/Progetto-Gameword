<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function welcome() {
        $consoles = Console::all();
        return view('welcome', compact('consoles'));
    }

    function userPage() {
        return view('user-page');
    }
    function userShow() {
        return view('user-show');
    }
    public function console_filter(Console $console){
        return view('console_filter', compact('console'));
    }
}
