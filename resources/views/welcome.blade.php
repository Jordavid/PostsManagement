@extends('layout')

@section('title', "Welcome to Laravel Training")

@section('content')
    
    @foreach ($users as $user)
    
    <h1>Welcome {{ $user->name }},  to <b>Laravel</b> Training!</h1>

    @endforeach
@endsection