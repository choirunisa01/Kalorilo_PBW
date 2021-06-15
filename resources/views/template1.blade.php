<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/template3.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>@yield('title')</title>
    </head>

    <body id="bg">
    <div id="basic">
        <nav style ="padding: 15px;" >           
                    <ul id="navigasi">         
                    <img src="/img/logo2.png" width="150" height="70">         
                        <li><a href="/" class="font" style= "margin-left :35rem;">Home</a></li>
                        <li><a href="/about" class="font" id="bg2">About</a></li>
                        <li class="dropdown"><a href="#" class="font">Content</a>
                            <ul class="isi-dropdown">
                                <li><a href="/kalori" class="font1"><img src="/img/daftar.png" width="30" height="30" style="margin-left : 10px;"/>Daftar Kalori</a></li>
                                <li><a href="/hitung" class="font1"><img src="/img/hitung.png" width="30" height="30" style="margin-left : 10px;"/>Hitung Kalorimu</a></li>
                                <li><a href="/bakar" class="font1"><img src="/img/workout.png" width="30" height="30" style="margin-left : 10px;"/>Ayo Bakar Kalori</a></li>
                            </ul>
                        </li>
                    </ul>
        </nav>
        </div>

        <div class="col">
            @yield('isi')
        </div>

    </body>


</html>
