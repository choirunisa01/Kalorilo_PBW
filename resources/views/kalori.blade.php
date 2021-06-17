@extends('template2')
@section('title','Kalorilo | Daftar Kalori Makanan')

@section('isi')

<center>
<div style="color: white;">
<div class="mt-5">
            <ul style ="margin : 2rem;">
                <li>
                    <a href="/kalori" class="fontmenu">
                        <div>
                            <img src="/img/makanan/nasi.png" width="100" height="100">
                            <p>Nasi (1 mangkok)</br>204 kalori</p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="/kalori" class="fontmenu">
                        <div>
                            <img src="/img/makanan/daging.png" width="100" height="100">
                            <p>Daging (1 porsi)</br>245 kalori</p>
                        </div>
                    </a>
                </li>    

                <li>
                    <a href="/kalori" class="fontmenu">
                        <div>
                            <img src="/img/makanan/mie.png" width="100" height="100">
                            <p>Mie Instant (1 mangkok)</br>340 kalori</p>
                        </div>
                    </a>
                </li>  
                <br/>  

            </ul>
        </div>

        <div class="mt-5">
            <ul style ="margin : 2rem;">
                <li>
                    <a href="/kalori" class="fontmenu">
                        <div>
                            <img src="/img/makanan/cokelat.png" width="100" height="100">
                            <p>Cokelat (1 batang)</br>313 kalori</p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="/kalori" class="fontmenu">
                        <div>
                            <img src="/img/makanan/keju.png" width="100" height="100">
                            <p>Keju (1 mangkok)</br>455 kalori</p>
                        </div>
                    </a>
                </li>    

                <li>
                    <a href="/kalori" class="fontmenu">
                        <div>
                            <img src="/img/makanan/kentang.png" width="100" height="100">
                            <p>Kentang Goreng (1 mangkok)</br>222 kalori</p>
                        </div>
                    </a>
                </li> 
                <br/>   

            </ul>
        </div>

        <div class="mt-5">
            <ul style ="margin : 2rem;">
                <li>
                    <a href="/kalori" class="fontmenu">
                        <div>
                            <img src="/img/makanan/kacang.png" width="100" height="100">
                            <p>Kacang (1 mangkok)</br>828 kalori</p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="/kalori" class="fontmenu">
                        <div>
                            <img src="/img/makanan/ayam.png" width="100" height="100">
                            <p>Ayam Goreng (1 porsi)</br>781 kalori</p>
                        </div>
                    </a>
                </li>    

                <li>
                    <a href="/kalori" class="fontmenu">
                        <div>
                            <img src="/img/makanan/telur.png" width="100" height="100">
                            <p>Telur Goreng (1 butir)</br>89 kalori</p>
                        </div>
                    </a>
                </li>    

            </ul>
        </div>
</div>
</center>

@endsection