@extends('backend.principal')
@section('title')Técnicos - Editar  @stop

@section('content')
	<h1 class="page-header shadow-title ">Editar Técnico </h1>
	
<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
      {!! Form::open() !!}
            
         @include('backend.technical.form-tech')

         <div class="row">
            <div class="col-xs-12 text-center">
               <button type="submit" class="btn btn-default"><i class="material-icons right">save</i> Guardar Técnico</button>
            </div>
         </div>
      {!! Form::close() !!}
	</div>
</div>

	
@stop


@section('script')
   {!!Html::script('js/querys/servi.js')!!}
@stop