@extends('layout')

@section('content')

    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">
        {{$project->description}}'
        <p>
            <a href="/projects/{{$project->id}}/edit" class="button">Edit Project</a>
        </p>
    </div>

    @if ($project->tasks->count())
            
        <div class="box">

            <h4 class="title">Tasks</h4>

            @foreach ($project->tasks as $task)

                <div>

                    <form action="/completed_tasks/{{ $task->id }}" method="POST">

                        @if ($task->completed)

                            @method('DELETE')
                        
                        @endif

                        @csrf

                            <label class="checkbox {{ $task->completed ? 'iscomplete' : '' }}" for="completed">

                                <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                
                                {{ $task->description }}

                            </label>

                    </form>
                </div>
            @endforeach
        </div>
    @endif
    
    {{-- Add a new Task to the project --}}

    <form method="POST" action="/projects/{{$project->id}}/tasks" class="box">

        @csrf

        <h3 class="title">Add new Task</h3>

        <div class="field">
            <label for="description">Description</label>
            
            <div class="control">
            <input type="text" class="input {{$errors->has('description')? 'is-danger':''}}" id="description" placeholder="Task Description" name="description" value="{{old('description')}}" required>
            </div>
            
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>

        {{--Display Error message in case of any error--}}

      @include('errors')

    </form>

@endsection