@extends('app')

@section('title', env('APP_NAME'))

@section('content')
    <img src="/images/USA.jpg" alt="USA Flag">

    <h1>Hello from Quebec!</h1>

    <p>It's currently {{ date('h:i A') }}.</p>
@endsection