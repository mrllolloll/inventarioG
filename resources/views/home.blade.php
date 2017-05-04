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
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading" id="fondoRojo">Tabla de Administracion
                  <button type="button" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#Alo">
                    PDF
                  </button>
                  <button type="button" class="btn btn-default btn-xs pull-right" id="btnAgrInf" data-toggle="modal" data-target="#agreinfo">
                    Agregar Informacion.
                  </button>
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
