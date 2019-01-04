@extends('layout')

@section('title', 'Projects')

@section('content')

    <a href="/projects/create">Create new project</a>
    <hr>
    <h1 class="title">All the projects</h1>
    
    <ol>
        @foreach ($projects as $project)
        <li>
            <a href="/projects/{{$project->id}}">
                {{ $project->title }}
            </a>    
            <ul>
                <li>{{ $project->description }}</li>
            </ul>
        </li>
        @endforeach
    </ol>
    
@endsection