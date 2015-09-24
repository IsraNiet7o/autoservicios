@extends('backend.principal')
@section('title')Administrador de Articulos @stop

@section('content')
	<h1 class="page-header shadow-title ">Administración de Articulos </h1>
	
		<div class="row">
			<a class="btn btn-default" href="{!! asset('/Articulos/create') !!}" role="button"><i class="material-icons right">add</i>Nuevo Articulo	
			</a>
		</div>

<div class="row">
	<div class="col-xs-12">
		<div class="table-responsive">
         <table class="table table-striped">
           <thead>
             <tr>
               <th>Articulo</th>
               <th>Categoría</th>
               <th>Subcategoría</th>
               <th>Descripción</th>
               <th></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>Procedimiento para Escanear en Red</td>
               <td class="grey-text">Procedimientos</td>
               <td class="grey-text">Escaneo</td>
               <td class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi animi labore laboriosam dolorum sint molestiae.</td>
               <td class="text-center">
				<a class="a-post a-amber" href="#!">
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
               <td>Solicitud de Encuadernado</td>
               <td>Servicios</td>
               <td>Default</td>
               <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi animi labore laboriosam dolorum sint molestiae.</td>
               <td class="text-center">
				<a class="a-post a-amber" href="#!">
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
               <td>Solicitud de Engargolado</td>
               <td>Servicios</td>
               <td>Default</td>
               <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi animi labore laboriosam dolorum sint molestiae.</td>
               <td class="text-center">
				<a class="a-post a-amber" href="#!">
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
               <td>Bandeja 1</td>
               <td>Procedimientos</td>
               <td>Problemas Comunes </td>
               <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi animi labore laboriosam dolorum sint molestiae.</td>
               <td class="text-center">
				<a class="a-post a-amber" href="#!">
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

	
@stop
