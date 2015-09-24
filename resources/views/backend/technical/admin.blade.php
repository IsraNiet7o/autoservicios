@extends('backend.principal')
@section('title')Técnicos  @stop

@section('content')
	<h1 class="page-header shadow-title ">Personal Técnico </h1>
	
		<div class="row">
			<a class="btn btn-default" href="{!!route('technical.create') !!}" role="button"><i class="material-icons right">add</i>Nuevo Técnico	
			</a>
		</div>

<div class="row">
	<div class="col-xs-8 col-xs-offset-2">
		<div class="table-responsive">
         <table class="table table-striped">
           <thead>
             <tr>
               <th>Fogrografía</th>
               <th>Técnico</th>
               <th>Horario</th>
               <th>Correo</th>
               <th>Telefono</th>
               <th></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td class="grey-text">
                 <div class="row text-center">
                   <div class="col-xs-8">
                     <img class="img-circle" src="{!! asset('img/tecnicos/tecnico1.jpg') !!}" alt="Generic placeholder image">
                   </div>
                 </div>
               </td>
               <td>Roberto Urquidi</td>
               <td class="grey-text">8:00 am - 18:00 pm</td>
               <td class="grey-text">langaro@hotmail.com</td>
               <td class="grey-text">434-01-00 Ext.7461</td>
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
               <td class="grey-text">
                 <div class="row text-center">
                   <div class="col-xs-8 ">
                     <img class="img-circle" src="{!! asset('img/tecnicos/tecnico2.jpg') !!}" alt="Generic placeholder image">
                   </div>
                 </div>
               </td>
               <td>Roberto Urquidi</td>
               <td class="grey-text">8:00 am - 18:00 pm</td>
               <td class="grey-text">langaro@hotmail.com</td>
               <td class="grey-text">434-01-00 Ext.7461</td>
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
