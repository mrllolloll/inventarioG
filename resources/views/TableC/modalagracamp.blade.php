<!-- Modal -->
<div id="{{$idmodal}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #c40909; color:white; font-size: 15px">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@yield('titlemodal')</h4>
      </div>
      <div class="modal-body" >
          @yield('contentmodal')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
