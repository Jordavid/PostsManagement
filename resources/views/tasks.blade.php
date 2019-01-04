@extends('layout')

@section('content')

    <h1 class="title"> Tasks </h1>
    <ul>
     @foreach ($tasks as $task)
    
        <li>{{$task}}</li>
    
    @endforeach
    </ul>
@endsection