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
        <div class="col-xs-10 col-sm-10 col-md-11 col-lg-10" id="tabla-home">
            <div class="panel panel-default panel-central"x>
                <div class="panel-heading" id="fondoRojo">Tabla de Administracion
                  <div class="btn-toolbar pull-right" id="btn-grupo-home">
                      <div class="btn-group btn-group-md pull-right">
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
