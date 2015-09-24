@extends('backend.principal')
@section('title')Técnicos  @stop

@section('content')
	<h1 class="page-header shadow-title ">Administración Equipo </h1>
	
		<div class="row">
			<a class="btn btn-default" href="{!!route('equipment.create') !!}" role="button"><i class="material-icons right">add</i>Nuevo Equipo	
			</a>

		</div>

<div class="row">
	<div class="col-xs-12">
		<div class="table-responsive">
         <table class="table table-striped">
           <thead>
             <tr>
               <th>img</th>
               <th>Marca</th>
               <th>Modelo</th>
               <th>Tipo</th>
               <th>Color/B&N</th>
               <th>32bit</th>
               <th>64bit</th>
               <th>Manual</th>
               <th></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td class="grey-text">
                 <div class="row text-center">
                   <div class="col-xs-4">
                     <img class="img-thumbnail" src="{!! asset('img/tecnicos/tecnico1.jpg') !!}" alt="Generic placeholder image">
                   </div>
                 </div>
               </td>
               <td>Hp</td>
               <td>LaserJet 3600</td>
               <td>Impresora</td>
               <td>B&N</td>
               <td><a class="a-post" href="">32bit</a> </td>
               <td><a class="a-post" href="">64bit</a></td>
               <td><a class="a-post" href=""> <i class="material-icons">picture_as_pdf</i></a></td>
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
                   <div class="col-xs-4">
                     <img class="img-thumbnail" src="{!! asset('img/tecnicos/tecnico1.jpg') !!}" alt="Generic placeholder image">
                   </div>
                 </div>
               </td>
               <td>Hp</td>
               <td>LaserJet 3600</td>
               <td>Impresora</td>
               <td>B&N</td>
               <td><a class="a-post" href="">32bit</a> </td>
               <td><a class="a-post" href="">64bit</a></td>
               <td><a class="a-post" href=""> <i class="material-icons">picture_as_pdf</i></a></td>
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
                   <div class="col-xs-4">
                     <img class="img-thumbnail" src="{!! asset('img/tecnicos/tecnico1.jpg') !!}" alt="Generic placeholder image">
                   </div>
                 </div>
               </td>
               <td>Hp</td>
               <td>LaserJet 3600</td>
               <td>Impresora</td>
               <td>B&N</td>
               <td><a class="a-post" href="">32bit</a> </td>
               <td><a class="a-post" href="">64bit</a></td>
               <td><a class="a-post" href=""> <i class="material-icons">picture_as_pdf</i></a></td>
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
