@extends('TableC.modelex',['ifmodal'=>"ImgBoton","titsle"=>"TituImg","yolo"=>"ImagenesSec"])
@section('TituImg','Previsualización de imagenes')
@section('ImagenesSec')

<center><img src="" alt="previsualización de imagenes" class="imgredirc" width="500" height="500"></center>
<center><a type="button" class="btn btn-primary imgredirc"  download="ImagenSeniat" style="color:white">Descargar</a></center>

@endsection
