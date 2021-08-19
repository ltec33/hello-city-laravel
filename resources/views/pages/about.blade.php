@extends('app')

@section('title', 'About Us | ' .config('app.name'))

@section('content')
<img src="{{ asset('/images/images.jpg') }}" alt="images Logo" class="my-12 rounded-full shadow-md">

    <h2 class="mb-5 text-yellow-500">
        Built with <span class="text-pink-500">&hearts;</span> by LES TEACHERS DU NET.
    </h2>

    <p><a href="{{ route('home') }}" class="text-red-400 hover:text-red-600 underline">Return to the home page</a></p>
@endsection
    
