<!DOCTYPE html>
<html>
	<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/template3.css">
        <title>@yield('title')</title>
    </head>

	<body id="bg">
    <div id="basic">
        <nav style ="padding: 15px;" >           
                    <ul id="navigasi">         
                    <img src="/img/logo2.png" width="150" height="70">         
                        <li><a href="/" class="font" style= "margin-left :35rem;">Home</a></li>
                        <li><a href="/about" class="font">About</a></li>
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

        <div class="row" id="body-row">
            <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
                <ul class="list-group">

                    <a href="/kalori" class="warna list-group-item"style = "margin-top : 10rem;">
                        <div>
                            <span class="menu-collapsed">Makanan</span>
                        </div>
                    </a>
                
                    <a href="/kaloriminuman" id="bg3">
                        <div>
                            <span class="menu-collapsed">Minuman</span>
                        </div>
                    </a>
                </ul>
            </div> 
        
            <div class="col">

                @yield('isi')

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
		
    </body>
</html>