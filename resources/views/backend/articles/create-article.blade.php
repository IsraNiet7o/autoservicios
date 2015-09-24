@extends('backend.principal')
@section('title')Nuevos Articulos @stop

@section('content')
	<h1 class="page-header shadow-title ">Nuevo Articulo </h1>
	
<div class="row">
	<div class="col-xs-12">
      {!! Form::open() !!}

      
      

      <div class="row">
         <div class="col-xs-12 text-center">
      <hr>
            <button type="submit" class="btn btn-default"><i class="material-icons right">save</i> Guardar Articulo</button>
         </div>
      </div>
      {!! Form::close() !!}
	</div>
</div>
@stop 