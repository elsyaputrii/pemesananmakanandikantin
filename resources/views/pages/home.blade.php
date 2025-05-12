@extends('layouts.app')

@section('content')
    @component('components.card', [
        'image' => asset('images/gambar3.jpg'),
        'title' => 'gambar elsya',
        'desc' => 'ini gambar elsya'
    ])
    @endcomponent
@endsection