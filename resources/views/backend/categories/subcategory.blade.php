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
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
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
		  			<div class="table-responsive">
		  	         <table class="table table-striped">
		  	           <thead>
		  	             <tr>
		  	               <th>Subcategoría</th>
		  	               <th>Categoría</th>
		  	               <th></th>
		  	               <th></th>
		  	             </tr>
		  	           </thead>
		  	           <tbody>
		  	             <tr>
		  	               <td>Procedimiento para Escanear en Red</td>
		  	               <td class="grey-text">Procedimientos</td>
		  	               <td class="text-center">
		  					<a class="a-post a-amber" href="#!" data-toggle="modal" data-target="#modal-editar-cat"data-whatever="@uno">
		  	               		<i class="material-icons">mode_edit</i>	
		  					</a>
		  				</td>
		  	               <td class="text-center">
		  	               	<a class="a-post a-red" href="#!">
		  	               		<i class="material-icons">delete</i>	
		  					</a>
		  				</td>
		  	             </tr>
		  	             <tr>
		  	               <td>Default</td>
		  	               <td>Servicios</td>
		  	               <td class="text-center">
		  					<a class="a-post a-amber" href="#!" data-toggle="modal" data-target="#modal-editar-cat"data-whatever="@dos">
		  	               		<i class="material-icons">mode_edit</i>	
		  					</a>
		  				</td>
		  	               <td class="text-center">
		  	               	<a class="a-post a-red" href="#!">
		  	               		<i class="material-icons">delete</i>	
		  					</a>
		  				</td>
		  	             </tr>
		  	             <tr>
		  	               <td>Default</td>
		  	               <td>Servicios</td>
		  	               <td class="text-center">
		  					<a class="a-post a-amber" href="#!" data-toggle="modal" data-target="#modal-editar-cat"data-whatever="@tres">
		  	               		<i class="material-icons">mode_edit</i>	
		  					</a>
		  				</td>
		  	               <td class="text-center">
		  	               	<a class="a-post a-red" href="#!">
		  	               		<i class="material-icons">delete</i>	
		  					</a>
		  				</td>
		  	             </tr>
		  	             <tr>
		  	               <td>Problemas Comunes </td>
		  	               <td>Procedimientos</td>
		  	               <td class="text-center">
		  					<a class="a-post a-amber" href="#!" data-toggle="modal" data-target="#modal-editar-cat"data-whatever="@cuatro">
		  	               		<i class="material-icons">mode_edit</i>	
		  					</a>
		  				</td>
		  	               <td class="text-center">
		  	               	<a class="a-post a-red" href="#!">
		  	               		<i class="material-icons">delete</i>	
		  					</a>
		  				</td>
		  	             </tr>
		  	           </tbody>
		  	         </table>
		  	        </div>
				  </div>
				</div>
			</div>
		</div>


		
		<div class="modal fade" id="modal-subcategories" role="dialog" aria-labelledby="gridSystemModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
			{!! Form::open() !!}
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title cyan-text" id="gridSystemModalLabel">Nueva Subategoría</h4>
		      </div>
		      <div class="modal-body">
				<div class="row">
					<div class="col-xs-12 col-sm-6 ">
						<div class="form-group">
							{!! Form::label('yourname', 'Nombre de la Subategoría', ['class'=>'condensada-bolt']) !!}
							{!! Form::text('yourname', null,['class'=>'form-control', 'placeholder'=>'Subcategoría', 'required' => 'required']) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="form-group">
						   	{!! Form::label('cat', 'Categoría', ['class'=>'']) !!}
							{!! Form::select('cat',array('1'=>'Procedimientos','2'=>'Servicios',),null,['placeholder' => 'Selecciona Una','required' => 'required', 'class'=>'form-control']) !!}
						</div>
					</div>
				</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn cyan-text" data-dismiss="modal"><i class="material-icons right">close</i>Close</button>
		        <button type="supmit" class="btn btn-default"><i class="material-icons right">save</i> Guardar</button>
		      </div>
			{!! Form::close() !!}
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<div class="modal fade" id="modal-editar-cat" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
			{!! Form::open() !!}
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title cyan-text" id="gridSystemModalLabel">Editar Subcategoría</h4>
		      </div>
		      <div class="modal-body">
				<div class="row">
					<div class="col-xs-12 col-sm-6 ">
						<div class="form-group">
							{!! Form::label('yourname', 'Nombre de la Subategoría', ['class'=>'condensada-bolt']) !!}
							{!! Form::text('yourname', null,['class'=>'form-control', 'placeholder'=>'Subcategoría', 'required' => 'required']) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="form-group">
						   	{!! Form::label('cat', 'Categoría', ['class'=>'condensada-bolt']) !!}
							{!! Form::select('cat',array('1'=>'Procedimientos','2'=>'Servicios',),null,['placeholder' => 'Selecciona Una','required' => 'required', 'class'=>'form-control']) !!}
						</div>
					</div>
				</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn cyan-text" data-dismiss="modal"><i class="material-icons right">close</i>Close</button>
		        <button type="button" class="btn btn-default"><i class="material-icons right">mode_edit</i> Editar</button>
		      </div>
			{!! Form::close() !!}
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

@stop 

@section('script')
	
@stop 