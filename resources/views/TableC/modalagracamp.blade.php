<!-- Modal -->
<div id="{{$idmodal}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" id="Modals">
      <div class="modal-header" id="modal">
        <button type="button" class="close" data-dismiss="modal" id="cerrarHeadModal">&times;</button>
        <h4 class="modal-title" id="FontsModal">@yield('titlemodal')</h4>
      </div>
      <div class="modal-body" id="conModal">
          @yield('contentmodal')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
