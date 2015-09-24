@extends('backend.principal')
@section('title') Marcas de Equipos @stop


@section('content')
		<div class="row">
			<div class="col-xs-12 text-center">
				<br>
				<img src="{!! asset('img/logo.png') !!}" alt="Ap Toner">
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-3">
				<div class="my-panel">
				  <div class="panel-heading"><h4>Marcas<i class="material-icons left">storage</i></h4></div>
				  <div class="panel-body">
				  	<h4>
				  		<button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#modal-categories">
				  		  <i class="material-icons right">add</i>Agregar
				  		</button>
				  		Todas las Categorías 
				  	</h4>
				  	<hr>
				    <ul>
				    	<li>
				    		<div class="row">
				    			<div class="col-xs-8">
				    				<h5 class="grey-text">Procedimientos</h5>
				    			</div>
				    			<div class="col-xs-4 text-center">
				    				<a class="a-post a-amber" href="#!" data-toggle="modal" data-target="#modal-editar-cat"data-whatever="@tres">
					              	<i class="material-icons ico-align">mode_edit</i>	
									</a>
			               	<a class="a-post a-red" href="#!" data-toggle="modal" >
					               <i class="material-icons ico-align">delete</i>	
									</a>
				    			</div>
				    		</div>    	
				    	</li>
				    	<li class="divider" role=""></li>
				    	<li>
				    		<div class="row">
				    			<div class="col-xs-8">
				    				<h5 class="grey-text">Servicios </h5>
				    			</div>
				    			<div class="col-xs-4 text-center">
			               	<a class="a-post a-amber" href="#!" data-toggle="modal"  data-target="#modal-editar-cat" data-whatever="@dos">
					              	<i class="material-icons ico-align">mode_edit</i>	
									</a>
			               	<a class="a-post a-red" href="#!">
					               <i class="material-icons ico-align">delete</i>	
									</a>
				    			</div>
				    		</div> 
				    	</li>
				    </ul>
				  </div>
				</div>
			</div>
		</div>


		
		<div class="modal fade" id="modal-categories" role="dialog" aria-labelledby="gridSystemModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
			{!! Form::open() !!}
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title cyan-text" id="gridSystemModalLabel">Nueva Categoría</h4>
		      </div>
		      <div class="modal-body">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-xs-offset-3">
								<div class="form-group">
									{!! Form::label('yourname', 'Nombre de la Categoría', ['class'=>'condensada-bolt']) !!}
									{!! Form::text('yourname', null,['class'=>'form-control', 'placeholder'=>'Categoría', 'required' => 'required']) !!}
								</div>
							</div>
						</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn cyan-text" data-dismiss="modal"><i class="material-icons right">close</i>Close</button>
		        <button type="button" class="btn btn-default"><i class="material-icons right">save</i> Guardar</button>
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
		        <h4 class="modal-title cyan-text" id="gridSystemModalLabel">Editar Categoría</h4>
		      </div>
		      <div class="modal-body">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-xs-offset-3">
								<div class="form-group">
									{!! Form::label('yourname', 'Nombre de la Categoría', ['class'=>'condensada-bolt']) !!}
									{!! Form::text('yourname', null,['class'=>'form-control', 'placeholder'=>'Categoría', 'required' => 'required']) !!}
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