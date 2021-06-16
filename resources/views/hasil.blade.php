@extends('template4')
@section('title','Hitung Kalori')

@section('isi')

<center>
    <div class="font">
        <h2><img src="/img/hitung.png" width="75" height="75" style="margin-left : 10px;"/>Ayo hitung kalori yang sudah kamu makan hari ini !</h2>
    </div>      
</center>

<div>
    <ul>
    @foreach($hitung_kalori as $kalori)
        <li style="margin-left : 10rem; margin-top: 2rem;">
            <p class="hasil">{{ $kalori->menu }}</p>
        </li>

        <li style="margin-top: 2rem;">
            <p class="hasil">{{ $kalori->satuan }}</p>
        </li>
        
        <li style="margin-top: 2rem;">
            <p class="hasil">{{ $kalori->jumlah }}</p>
        </li>
   
        <br>
        <br>

    @endforeach
    </ul>    
</div>

<div>
    <h1 class="garis"></h1>
    <center>
        <p class="font2" > Total kalori yang sudah kamu makan hari ini yaitu : </p>

        <img src="/img/kal.png" width="60" height="60" />

        <p class="oval">820 Kalori</p>
           
        <p class="font3">*Hasil tersebut merupakan nilai perkiraan, bukan nilai mutlak</p>
    </center>

</div>


@endsection