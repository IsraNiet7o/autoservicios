@extends('backend.principal')
@section('title')Nuevos Articulos @stop

@section('content')
	<h1 class="page-header shadow-title ">Nuevo Articulo 
      <span><button  class="btn btn-default pull-right" data-toggle="modal" data-target="#modal-help"><i class="material-icons right">help</i>Ayuda</button></span>
   </h1>
   @if(Session::get('message'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('message') }}
      </div>
   @endif
<div class="row">
	<div class="col-xs-12">
      {!! Form::open(['route'=>'articles.store', 'method'=> 'POST','files' => true]) !!}

      @include('backend.articles.form-article')

      <div class="row">
         <div class="col-xs-12 text-center">
      <hr>
            <button type="submit" class="btn btn-default"><i class="material-icons right">save</i> Guardar Articulo</button>
         </div>
      </div>
      {!! Form::close() !!} 


      @include('backend.articles.partials.model-help')
	</div>
</div>
@stop 


@section('script')
   {!! Html::script('js/querys/articulos.js') !!}
   {!! Html::script('js/querys/script-articles.js') !!}
@stop 