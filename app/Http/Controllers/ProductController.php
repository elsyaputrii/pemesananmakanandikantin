<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'Laptop'],
            ['id' => 2, 'name' => 'Mouse'],
            ['id' => 3, 'name' => 'Keyboard'],
        ];

        return view('list_product', compact('products'));
    }
}
