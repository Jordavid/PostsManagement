<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <title>@yield('title', "Laravel Training")</title>

    <style>
        .iscomplete{

            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <div class="container">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/tasks">Tasks</a></li>
            <li><a href="/contact">Contact us</a></li>
            <li><a href="/about">About us</a></li>
            <li><a href="/projects">Projects</a></li>
        </ul>


        @yield('content')

    </div>
</body>
</html>