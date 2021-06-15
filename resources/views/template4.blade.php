<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/template.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>@yield('title')</title>
    </head>

    <body id="bg">
        <div id="basic">
            <nav style ="padding : 15px;" >
                <img src="/img/logo2.png" width="150" height="70" style= "margin-left :1rem;">
                <a href="/" class="font" style= "margin-left :50rem;">Home</a>
                <a href="/about" class="font">About</a>
                <a href="#" class="font">Content <i class="fas fa-caret-down"></i></a>
            </nav>
        </div>

        <div class="col">
            @yield('isi')
        </div>

    </body>


</html>
