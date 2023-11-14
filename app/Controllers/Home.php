<?php

namespace App\Controllers;

class Home extends Controller
{
    public function index()
    {
        return view('welcome_message');
    }
    
}
