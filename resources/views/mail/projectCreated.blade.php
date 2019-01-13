@component('mail::message')
# New Project Created - {{$project->title}}

# Project Body:

{{$project->description}}

@auth
    
@endauth
@component('mail::button', ['url' => '/projects/'.$project->id])
View Porject
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
