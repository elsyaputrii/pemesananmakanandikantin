<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewImageController extends Controller
{
    public function index()
    {
        return view('view_image');
    }
}