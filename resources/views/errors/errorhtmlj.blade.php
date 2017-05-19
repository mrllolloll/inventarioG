@if($errors->has('nommodul'))
<style media="screen">
  .arre{
    margin-top: -20px;
    margin-bottom: 20px;
  }
</style>
<section class="arre row container-fluid">
  <section class="co-md-12 bg-danger">
    {{$errors->first('nommodul')}}
  </section>
</section>
@endif
