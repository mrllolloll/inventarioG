@extends('TableC.modelex',['ifmodal'=>"DetallesPrima","titsle"=>"TitleDetallesP","yolo"=>"SectionDetalleP"])
@section('TitleDetallesP','Visualización de Detalles')
@section('SectionDetalleP')
<script>
function realizaProceso(Value1){
        $.ajax({
                data:  Value1,
                url:   '/Rest/'+Value1,
                type:  'get',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#resultado").html(response);
                }
        });
}
</script>
<center><h4>Visualización de Registro</h4></center>
<section id="resultado" style="margin-top:0%; margin-left:-3.8%; margin-right:-4%;">
</section>
@endsection
