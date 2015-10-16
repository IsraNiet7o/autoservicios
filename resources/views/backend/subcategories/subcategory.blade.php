@extends('backend.principal')
@section('title') Subcategorías @stop


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
				  <div class="panel-heading"><h4> Subategorías <i class="material-icons left">format_list_numbered</i></h4></div>
				  <div class="panel-body">
				  	<h4>
				  		<button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#modal-subcategories">
				  		  <i class="material-icons right">add</i>Agregar
				  		</button>
				  		Todas las Subcategorías 
				  	</h4>
				  	<hr>
				  	<div id="msj-succes" class="alert alert-success alert-dismissible" role="alert" style="display:none">
				  		<button type="button" class="close" id="btn-close-asuccess">
				  		  <span aria-hidden="true">&times;</span>
				  		</button>
				  		<div id="ms-model"></div>
				  	</div>
		  			<div class="table-responsive">
		  	         <table class="table table-striped">
		  	           <thead>
		  	             <tr>
		  	               <th>Subcategoría</th>
		  	               <th>Categoría</th>
		  	               <th>Descripción Principal</th>
		  	               <th>Descripción Al Pie</th>
		  	              	<th></th>
		  	              	<th></th>
		  	             </tr>
		  	           </thead>
		  	           <tbody id="tbody">
		  	             
		  	           </tbody>
		  	         </table>
		  	        </div>
				  </div>
				</div>
			</div>
		</div>


		@include('backend.subcategories.partials.model-subcat')
		@include('backend.subcategories.partials.model-subcat-edit')
		@include('backend.subcategories.partials.model-subcat-delete')
		
		
		

@stop 

@section('script')
	{!! Html::script('js/querys/script-subcat.js') !!}
@stop 