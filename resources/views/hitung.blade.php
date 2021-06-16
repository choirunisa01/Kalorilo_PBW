@extends('template4')
@section('title','Hitung Kalori')

@section('isi')

<center>
    <div class="font">
        <h2><img src="/img/hitung.png" width="75" height="75" style="margin-left : 10px;"/>Ayo hitung kalori yang sudah kamu makan hari ini !</h2>
    </div>      
</center>


<form method="get" action="/hasil" >
    <div class="form">
    <ul>
        <li style="margin-left : 10rem;">
            <label class='labelan' for='menu'>Menu</label><br>
            <input class='inputan' id='menu' name='menu' type="text" value="" required autofocus><br>
        </li>

        <li>
            <label class='labelan' for='satuan'>Satuan</label><br>
            <input class='inputan' id='satuan' name='satuan' type="text" value="" required autofocus><br>
        </li>

        <li>
            <label class='labelan' for='jumlah'>Jumlah</label><br>
            <input class='inputan' id='jumlah' name='jumlah' type="number" value="" required autofocus><br>  
        </li>

    </ul>    

        <center>  <button id="submit-btn" type="submit" name="submit" value="Simpan" />Hitung</button> </center>
    </div>

</form>


@endsection