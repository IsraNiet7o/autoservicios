@extends('backend.principal')
@section('title')Editar Articulos @stop

@section('content')
	<h1 class="page-header shadow-title ">Editar Articulo </h1>
	@if(Session::get('message'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('message') }}
      </div>
   @endif
<div class="row">
	<div class="col-xs-12">
      {!! Form::model($arti,['route' => ['articles.update',$arti->id], 'method' => 'PUT' ,'files' => true ]) !!}
      <div class="row">
         <div class="col-xs-12 col-sm-6">
            <div class="form-group">
               {!! Form::label('title', 'Marca del Equipo', ['class'=>'condensada-bolt']) !!}
               {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>'Marca del Equipo', 'required' => 'required']) !!}
            </div>
         </div>
         <div class="col-xs-12 col-sm-3">
            <div class="form-group">
              {!! Form::label('category_id', 'Categoría', ['class'=>'condensada-bolt']) !!}
              {!! Form::select('category_id', $categories, null,  ['class'=>'form-control', 'placeholder'=>'Selecciona Una','required' => 'required']) !!}
            </div>
         </div>
         <div class="col-xs-12 col-sm-3">
            <div class="form-group">
               {!! Form::label('subcategory_id', 'Subcategoría') !!}
               {!! Form::select('subcategory_id',$subcategories,null,['placeholder' => 'Selecciona Uno','required' => 'required', 'class'=>'form-control']) !!}
            </div>
         </div>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="form-group">
               {!! Form::label('developing', 'Mensaje') !!}
               <textarea class="form-control arti" id="developing" name="developing" placeholder="Desarrollo" required>{{ $arti->developing }}</textarea>
          </div>
        </div>
        <div class="col-xs-4">
          <h4>Helper</h4>
           @include('backend.articles.partials.helper')
        </div>{{-- termina --}}
      </div>
      <div class="row">
         <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="video"><i class="material-icons ico-align cyan-text">videocam</i> Vídeo Tutorial </label>
                <input  type="file" name="video" id="video" value="{{ $arti->video }}" />
                <p class="help-block">Seleccione un Archivo en formato .mp4</p>
            </div>
            <br>
         </div>
      </div>
      <div class="row">
         <div class="col-xs-12 col-sm-6">
            <button type="submit" class="btn btn-default"><i class="material-icons right">mode_edit</i> Actualizar Articulo
            </button>
         </div>
         <div class="col-xs-12 col-sm-6 text-right">
            <button type="button" class="btn btn-default btn-default-red" data-toggle="modal" data-target="#modal-delete"><i class="material-icons right">delete</i> Eleminar Articulo
            </button>
         </div>
         <hr>
      </div>
      {!! Form::close() !!}
	</div>
</div>


@include('backend.articles.partials.model-delete')


@stop 

@section('script')
   {!! Html::script('js/querys/articulos.js') !!}
   {!! Html::script('js/querys/script-articles.js') !!}
@stop