@extends('layouts.app', ['title' => config('app.name')])

@section('content')
    <img src="{{ asset('/images/USA.jpg') }}" alt="USA Flag" class="rounded shadow-md h-100">

    <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-blue-900">Hello from USA!</h1>

    <p class="text-lg text-yellow-700">It's currently {{ date('h:i A') }}.</p>
@endsection