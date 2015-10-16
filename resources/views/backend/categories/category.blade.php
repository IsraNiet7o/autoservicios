@extends('backend.principal')
@section('title') Categorías @stop


@section('content')
	<div class="row">
		<div class="col-xs-12 text-center">
			<br>
			<img src="{!! asset('img/logo.png') !!}" alt="Ap Toner">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1">
			<div class="my-panel">
			  <div class="panel-heading black-text"><h4>Categorías <i class="material-icons left">storage</i></h4></div>
			  <div class="panel-body">
			  	<h4>
			  		<button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#modal-categories">
			  		  <i class="material-icons right">add</i>Agregar
			  		</button>
			  		Todas las Categorías 
			  	</h4>
			  	<hr>
			  	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
			  		<button type="button" class="close" id="btn-close-asuccess">
			  		  <span aria-hidden="true">&times;</span>
			  		</button>
			  		<div id="ms-model"></div>
			  	</div>
		  			<div class="table-responsive">
		  	         <table class="table table-striped">
		  	           <thead>
		  	             <tr>
		  	               <th>Categoría</th>
		  	               <th>Descripción General</th>
		  	               <th>Descripción </th>
		  	               <th>Icono</th>
		  	               <th></th>
		  	               <th></th>
		  	             </tr>
		  	           </thead>
		  	           <tbody id="datos">

		  	           </tbody>
		  	         </table>
		  	      </div>
			  </div>
			</div>
		</div>
	</div>
		
		@include('backend.categories.partials.model-categori')
		@include('backend.categories.partials.model-cat-edit')
		@include('backend.categories.partials.model-cat-delete')


@stop 

@section('script')
	{!! Html::script('js/querys/script-category.js') !!}
@stop 