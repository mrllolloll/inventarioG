@extends('TableC.modelex',['ifmodal'=>"mostrar","titsle"=>"Titulo1994","yolo"=>"section1994"])
@section('Titulo1994','Visualizador de imágenes')
@section('section1994')

  {{ csrf_field() }}
  
    <?php  ?>

    <section Class="col-md-8">
    	<div class="container">
    		<img src='imgInventario/' class="img-responsive" style="size: 30%">
    	</div>
    </section>

@endsection
