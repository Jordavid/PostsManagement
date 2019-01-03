@extends('layout')

@section('content')

    <h1 class="title">Taks</h1>
    <ul>
     @foreach ($tasks as $task)
    
        <li>{{$task}}</li>
    
    @endforeach
    </ul>
@endsection