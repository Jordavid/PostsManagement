@extends('layout')

@section('title', "Contact Us")

@section('content')
    <h1>Contact us</h1>
    <form action="">
        <label for="name">Name</label>
        <input type="text" placeholder="name">

        <button type="submit">Send</button>
    </form>
@endsection