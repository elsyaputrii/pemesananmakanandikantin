<!-- resources/views/list_product.blade.php -->
@extends('layout.list')

@section('content')
    <h1>Daftar Produk</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product['id'] }} - {{ $product['name'] }}</li>
        @endforeach
    </ul>
@endsection
