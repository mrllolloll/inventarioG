@extends('layouts.app')
@section('content')
@include('errors.errorhtmlj')
<div class="container">
    <div class="row">
      <aside class="col-md-2">
        @if(!isset($edit))
          @include('TableC.lateralbart')
        @endif
      </aside>
      <script type="text/javascript">
      $(function(){
          //Para escribir solo letras
          $('#nommodulid').on('input', function (e) {
     if (!/^[ a-záéíóúüñ]*$/i.test(this.value)) {
         this.value = this.value.replace(/[^ a-záéíóúüñ]+/ig,"");
     }
 });
      });
      $(function(){
          //Para escribir solo letras
          $('.textL').on('input', function (e) {
     if (!/^[ a-z0-9.áéíóúüñ]*$/i.test(this.value)) {
         this.value = this.value.replace(/[^ a-z0-9.áéíóúüñ]+/ig,"");
     }
 });
      });
      $(function(){
          //Para escribir solo letras
          $('.numL').on('input', function (e) {
     if (!/^[0-9]*$/i.test(this.value)) {
         this.value = this.value.replace(/[0-9]+/ig,"");
     }
 });
      });


      </script>
        <div class="col-xs-10 col-sm-10 col-md-11 col-lg-10" id="tabla-home">
            <div class="panel panel-default panel-central"x>
                <div class="panel-heading" id="fondoRojo">Tabla de Administracion
                  <div class="btn-toolbar pull-right" id="btn-grupo-home">
                      <div class="btn-group btn-group-md pull-right botonsed">
                        <button type="button" class="btn btn-blanco btn-xs" data-toggle="modal" data-target="#Alo">
                          PDF
                        </button>
                        <button type="button" class="btn btn-blanco btn-xs" id="btnAgrInf" data-toggle="modal" data-target="#agreinfo">
                          Agregar Informacion.
                        </button>
                      </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if(isset($edit))
                    @include('formularios.edit')
                    @else
                    @include('TableC.tablecentral')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@include('Formularios.getod')
@endsection
