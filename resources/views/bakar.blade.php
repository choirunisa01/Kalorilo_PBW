@extends('template4')
@section('title','Kalorilo | Ayo Bakar Kalori')

@section('isi')
	
    <center>
        <div class="font">
            <h2><img src="/img/workout.png" width="75" height="75" style="margin-left : 10px;"/>Ayo Bakar Kalorimu!</h2>
            <p>Berikut ini berbagai olahraga yang bisa kamu lakukan untuk membakar kalori </p>
            <hr size="8px">
        </div>

        <div class="mt-5">
            <ul>
                <li>
                    <a href="#" class="fontmenu">
                        <div id="ss">
                            <img src="/img/olahraga/berenang.png" width="100" height="100">
                            <p>Berenang/jam </br>840 kalori </p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="fontmenu">
                        <div id="ss">
                            <img src="/img/olahraga/lari.png" width="100" height="100">
                            <p>Berlari/jam </br>1500 kalori </p>
                        </div>
                    </a>
                </li>   
                
                <li>
                    <a href="#" class="fontmenu">
                        <div id="ss">
                            <img src="/img/olahraga/tali.png" width="100" height="100"> 
                            <p>Lompat Tali/jam </br>850 kalori </p>
                        </div>
                    </a>
                </li> 

                <li>
                    <a href="#" class="fontmenu">
                        <div id="ss">
                            <img src="/img/olahraga/tangga.png" width="100" height="100">
                            <p>Naik Turun Tangga/jam </br>830 kalori </p>
                        </div>
                    </a>
                </li>
                
                <br/> 

            </ul>
        </div>

        <div class="mt-5">
            <ul>
                <li>
                    <a href="#" class="fontmenu">
                        <div id="ss">
                            <img src="/img/olahraga/sepeda.png" width="100" height="100">
                            <p>Bersepeda/jam </br>1000 kalori </p>
                        </div>
                    </a>
                </li>   
                
                <li>
                    <a href="#" class="fontmenu">
                        <div id="ss">
                            <img src="/img/olahraga/boxing.png" width="100" height="100"> 
                            <p>Kick Boxing/jam</br> 800 kalori </p>
                        </div>
                    </a>
                </li> 

                <li>
                    <a href="#" class="fontmenu">
                        <div id="ss">
                            <img src="/img/olahraga/tenis.png" width="100" height="100">
                            <p>Tenis Meja/jam</br>728 kalori </p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="fontmenu">
                        <div id="ss">
                            <img src="/img/olahraga/basket.png" width="100" height="100">
                            <p>Basket/jam </br>728 kalori </p>
                        </div>
                    </a>
                </li>

                <br/> 
                <br/> 
            </ul>
        </div>

    </center>


@endsection