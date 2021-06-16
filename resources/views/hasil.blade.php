@extends('template4')
@section('title','Hitung Kalori')

@section('isi')

<center>
    <div class="font">
        <h2><img src="/img/hitung.png" width="75" height="75" style="margin-left : 10px;"/>Ayo hitung kalori yang sudah kamu makan hari ini !</h2>
    </div>      
</center>


<div>
    <h1 class="garis"></h1>
    <center>
        <p class="font2" > Total kalori yang sudah kamu makan hari ini yaitu : </p>

       
        <img src="/img/kal.png" width="60" height="60" />
        <p class="oval"> Kalori</p>
           
    </center>

</div>


@endsection