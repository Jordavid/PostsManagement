@if ($errors->has('description'))
            
<div class="notification is-danger">
    @foreach ($errors->all() as $error)
        {{$error}}
    @endforeach
</div>

@endif