<!-- Modal -->
<div id="{{$imodal}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header" id="modal">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@yield('titlmodal')</h4>
      </div>
      <div class="modal-body">
          @yield('contentmodl')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
