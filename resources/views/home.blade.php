@extends('layouts.app')
@section('content')
@include('errors.errorhtmlj')
<div class="container-fluid">
    <div class="row">
      <style media="screen">
      .sidebar1 {
          padding: 0px;
          background-color: #b71c1c;
          min-height: 100%;
          position: fixed;
          margin-left: -15%;
          z-index: 10;
          overflow-y:auto !important;
          -webkit-transition: margin-left 0.5s ease-out;
          -moz-transition:margin-left 0.5s ease-out;
          -o-transition: margin-left 0.5s ease-out;
          -ms-transition:margin-left 0.5s ease-out;
          transition: margin-left 0.5s ease-out;
        }
        .sidebar1:hover {
          margin-left: 0%;
        }

      </style>
      <nav class="sidebar1 hidden-xs hidden-sm col-md-2">
        @if(!isset($edit))
          @include('TableC.lateralbart')
        @endif
      </nav>
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
      <br>
        <div class="col-md-12">
            <div class="panel panel-default panel-central">
                <div class="panel-heading" id="fondoRojo">Tabla de Administracion
                  <div class="btn-toolbar pull-right" id="btn-grupo-home">
                    <div class="pull-left">
                        <div class="btn-group btn-group-md pull-right botonsed">
                          <button id="Butonrestriction" type="button" class="btn btn-blanco btn-xs pull-left" data-toggle="modal" data-target="#PropertiesIS">
                            <img src="{{asset('/images/IconProperties.png')}}" width="15" height="15" alt="Agregar propidades">
                          </button>
                          <button type="button" class="btn btn-blanco btn-xs pull-left" data-toggle="modal" data-target="#EditTable">
                            <img src="{{asset('/images/IcoEngranaje.png')}}" width="15" height="15" alt="Editar Orden de los modulos">
                          </button>
                        </div>
                      </div>
                      <div class="btn-group btn-group-md pull-right botonsed">
                        <button type="button" class="btn btn-blanco btn-xs" data-toggle="modal" data-target="#Alo">
                          PDF
                        </button>
                        <button type="button" class="btn btn-blanco btn-xs">
                          <form action="{{url('/Excel/ficheroExcel.php')}}" method="post" target="_blank" id="FormularioExportacion">
                              <a class="botonExcel">excel</a>
                              <input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
                          </form>
                        </button>
                        <a href="{{url('GeneradoDePlanillas')}}" class="btn btn-blanco btn-xs">Modelador de planillas</a>
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
