<?php

namespace App\Http\Controllers;

class FrontendController extends Controller
{
    public function index(){
        $title = env('APP_NAME', 'Badminton');
        return view('welcome', compact('title'));
    }
}
