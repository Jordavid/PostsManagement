@extends('layout')

@section('content')
    
    <h1 class="title">Edit project</h1>
    
    <form action="/projects/{{ $project->id }}" method="POST" style="margin-bottom: 10px;">

        @method('PATCH')

        @csrf
    
        <div class="fied">
            <label class="label" for="title">Title</label>
            
            <div class="control">
                <input type="text" class="input" name="title" id="title" 
                                    value="{{ $project->title }}" placeholder="Title">
            </div>
        </div>

        <div class="field">

            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea name="description" class="textarea" id="description" placeholder="Description">{{ $project->description }}</textarea>
            </div>

            <div class="field">
                <div class="control">

                    <button type="submit" class="button is-link">Update Project</button>

                </div>
                
            </div>
        </div>

    </form>

    <form action="/projects/{{ $project->id }}" method="POST">
        @method('DELETE')

        @csrf

        <div class="field">
            <div class="control">
                    <button type="submit" class="button is-danger">Delete Project</button>
            </div>
            
        </div>

    </form>

@endsection