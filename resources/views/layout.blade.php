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
    html{
        background: cadetblue;
    }

    body{
        color: beige;
    }
    a {
        color: brown;
        font-size: 20px;
    }

    .title {
        color: yellowgreen;
    }

    .content, label{
        color: yellowgreen;
    }

    .navbar{
        background: darkcyan;
    }
    </style>
</head>
<body>
    <div class="global">
    <div class="container is-fluid">
        
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="{{ asset('img/favicon.ico') }}" width="30" height="28">
            </a>
        
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
            </div>
        
            <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/"> Home </a>
                <a class="navbar-item" href="/projects">Projects</a>
                <a class="navbar-item" href="/tasks">Tasks</a>
                <a class="navbar-item" href="/contact">Contact Us</a>
                <a class="navbar-item" href="/about">About Us</a>
                
            </div>
            </div>
        </nav>
    
      <hr>
      
            @yield('content')
      </div>
        

    </div>
</body>
</html>