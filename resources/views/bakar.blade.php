@extends('template1')
@section('title','Bakar')

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
                            <p>Berenang/jam 840 kalori </p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="fontmenu">
                        <div id="ss">
                            <img src="/img/olahraga/lari.png" width="100" height="100">
                            <p>Lari/jam 1500 kalori </p>
                        </div>
                    </a>
                </li>   
                
                <li>
                    <a href="#" class="fontmenu">
                        <div id="ss">
                            <img src="/img/olahraga/tali.png" width="100" height="100"> 
                            <p>Lompat Tali/jam 850 kalori </p>
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
                            <img src="/img/olahraga/tangga.png" width="100" height="100">
                            <p>Naik Turun Tangga/jam &emsp;830 kalori </p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="fontmenu">
                        <div id="ss">
                            <img src="/img/olahraga/sepeda.png" width="100" height="100">
                            <p>Bersepeda/jam 1000 kalori </p>
                        </div>
                    </a>
                </li>   
                
                <li>
                    <a href="#" class="fontmenu">
                        <div id="ss">
                            <img src="/img/olahraga/boxing.png" width="100" height="100"> 
                            <p>Kick Boxing/jam 800 kalori </p>
                        </div>
                    </a>
                </li> 

            </ul>
        </div>

    </center>


@endsection