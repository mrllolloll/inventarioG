<?php $campo1=''; ?>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#AgreCamp1">
          +
        </button>
        <button type="button" name="button" class="btn btn-default btn-sm">
          -
        </button>
      </h4>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Content
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        <table class="table">
          <tr>
            <td>
              Articles
            </td>
          </tr>
          <tr>
            <td>
              News
            </td>
          </tr>
          <tr>
            <td>
              ters
            </td>
          </tr>
          <tr>
            <td>
              Comments
              <span class="badge">42</span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Modules</a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table">
          <tr>
            <td>
              Orders <span class="label label-success">$ 320</span>
            </td>
          </tr>
          <tr>
            <td>
              Invoices
            </td>
          </tr>
          <tr>
            <td>
              Shipments
            </td>
          </tr>
          <tr>
            <td>
              <p>Tex</p>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<script>
$(".yolo").click(function(){
  alert("Hello World!");
});
</script>
@include('formularios.agrecamptable')
@include('formularios.agragrdat')
