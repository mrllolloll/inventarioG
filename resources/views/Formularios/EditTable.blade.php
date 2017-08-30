@extends('TableC.modelex',['ifmodal'=>"EditTable","titsle"=>"TitleEdit","yolo"=>"SectionEditTa"])
@section('TitleEdit','¿Desea Cambiar de orden los modulos?')
@section('SectionEditTa')
<form class="form-horizontal" action="{{url('/EditTable')}}" method="post">
  {{ csrf_field() }}
  @foreach($titutable as $EditTableT)
  <?php $IL=1;?>
    <div class="form-group">
      <label class="col-md-4 control-label" for="RSs{{CasoSelet101($EditTableT->nomtable)}}">{{CasoSelet100($EditTableT->nomtable)}}</label>
      <div class="col-md-4">
        <select name="{{$EditTableT->id}}" id="RSs{{CasoSelet101($EditTableT->nomtable)}}" class="form-control Rev" onclick="InterCambioSelect('RSs{{CasoSelet101($EditTableT->nomtable)}}')" required>
          <option value="" class="hide">Selecione Una Opcion</option>
          @foreach($titutable as $EditTable)
            <option value="{{$EditTable->id}}"  @if($EditTable->id==$EditTableT->id) selected="selected"  @endif>{{$IL}}</option>
            <?php $IL++;?>
          @endforeach
        </select>
      </div>
    </div>
  @endforeach
  <div class="form-group">
      <center><button id="singlebutton" name="singlebutton" class="btn btn-primary" style="color:white">Registrar</button></center>
  </div>
</form>
<script type="text/javascript">
  function InterCambioSelect(value){
      var op =0;
      <?php $iu=1; ?>
      @foreach($titutable as $EditTableL)

          if ("#RSs{{CasoSelet101($EditTableL->nomtable)}}"!="#"+value) {
            var selectedOption{{$iu}} = $("#RSs{{CasoSelet101($EditTableL->nomtable)}}").find('option:selected');
            if ($(selectedOption{{$iu}}).val() == $("#"+value).val()){
              $("#RSs{{CasoSelet101($EditTableL->nomtable)}}").each( function(){
                $(this).val("");
              });
            }
          }else {
            op={{$EditTableL->id}};
          }
          <?php $iu++; ?>
      @endforeach
     }
</script>
@endsection
