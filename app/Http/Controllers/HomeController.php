<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nama = "Elsya"; // Ganti dengan nilai yang sesuai
        $pekerjaan = "Programmer"; // Sesuaikan juga dengan yang ada di blade

        return view('home', compact('nama', 'pekerjaan'));
    }
}
