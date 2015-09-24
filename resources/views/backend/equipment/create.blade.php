@extends('backend.principal')
@section('title')Equipos - Nuevo  @stop

@section('content')
	<h1 class="page-header shadow-title ">Nuevo Equipo </h1>
	
<div class="row">
	<div class="col-xs-12">
      {!! Form::open() !!}
      
      @include('backend.equipment.form-equip')

      <div class="row">
         <div class="col-xs-12 text-center">
            <button type="submit" class="btn btn-default"><i class="material-icons right">save</i> Guardar Equipo</button>
         </div>
      </div>
      {!! Form::close() !!}
	</div>
</div>

	
@stop


@section('script')
   {!!Html::script('js/querys/servi.js')!!}
@stop