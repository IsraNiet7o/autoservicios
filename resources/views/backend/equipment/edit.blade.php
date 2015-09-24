@extends('backend.principal')
@section('title')Técnicos - Editar  @stop

@section('content')
	<h1 class="page-header shadow-title ">Editar Equipo </h1>
	
<div class="row">
	<div class="col-xs-12 ">
      {!! Form::open() !!}
            
         @include('backend.equipment.form-equip')

         <div class="row">
            <div class="col-xs-12 text-center">
               <button type="submit" class="btn btn-default"><i class="material-icons right">save</i> Editar Equipo</button>
            </div>
         </div>
      {!! Form::close() !!}
	</div>
</div>

	
@stop


@section('script')
   {!!Html::script('js/querys/servi.js')!!}
@stop