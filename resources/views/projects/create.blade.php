@extends('layout')

@section('content')

        <h2 class="title">Create a new Project</h2>
        <form action="/projects" method="POST">

            @csrf
            
            <div class="field">
                <label for="title" class="label">Title</label>

                <div class="control">
                    <input type="text" name="title" class="input {{ $errors->has('title')? 'is-danger' : ""}}" id="title" placeholder="Project title" value="{{old('title')}}" required>
                </div>      
            </div>

            <div class="field">
                <label for="description" class="label">Description</label>

                <div class="control">
                    <textarea name="description" id="description" class="textarea {{ $errors->has('description')? 'is-danger' : ""}}" placeholder="Project Description goes here" required>{{old('description')}}</textarea>        
                </div>
                
            </div>

            <div class="field">
                <div class="contol">
                    <button type="submit" class="button is-link">Create Project</button>
                </div>
                    
            </div>

             {{--Display Error message in case of any error--}}
       @include('errors')

        </form>

       
@endsection