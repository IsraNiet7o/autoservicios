@extends('backend.principal')
@section('title')Administrador de Articulos @stop

@section('content')
	<h1 class="page-header shadow-title ">Administración de Articulos </h1>
	   @if(Session::get('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          {{ Session::get('message') }}
        </div>
     @endif
     <div class="alert alert-success alert-dismissible" id="msj-succes" role="alert" style="display:none">
       <button type="button" class="close" id="btn-close-asuccess">
        <span aria-hidden="true">&times;</span></button>
       <div id="ms-model"></div>
     </div>

		<div class="row">
			<a class="btn btn-default" href="{{ route('articles.create') }}" role="button"><i class="material-icons right">add</i>Nuevo Articulo	
			</a>
      <label>Existen {{ $artis->total() }} Articulos en {{ $artis->lastPage()}} Páginas. </label>
		</div>
    <div class="row text-center">
      {!! $artis->render() !!}
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
               <th>Video</th>
               <th></th>
               <th></th>
             </tr>
           </thead>
           <tbody id="tbody">
              @foreach($artis as $arti)
              <tr data-id="{{ $arti->id }}">
                <td>{{ $arti->id . ' ' . $arti->title }}</td>
                <td class="grey-text">{{ $arti->category->category }}</td>
                <td class="grey-text">{{ $arti->subcategory->title }}</td>
                <td class="grey-text">{{ substr($arti->developing,0, 100)  }}......</td>
                <td class="grey-text">{{ $arti->video }}</td>
                <td class="text-center">
				          <a class="a-post a-amber" href="{{ route('articles.edit',$arti->id ) }}">
               		  <i class="material-icons">mode_edit</i>	
				          </a>
			          </td>
                <td class="text-center">
               	  <a class="a-post a-red mred-text delete" href="#!" id="{{ $arti->id }}" data-toggle="modal" data-target="#modal-arti-delete">
               		  <i class="material-icons">delete</i>	
        				  </a>
        			  </td>
              </tr>
              @endforeach
           </tbody>
         </table>
      </div>
      <div class="row text-center">
        {!! $artis->render() !!}
      </div>
	</div>
</div>

<div class="modal fade" id="modal-arti-delete" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header mred">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title white-text" id="gridSystemModalLabel">Eliminar Articulo</h4>
      </div>
      <div class="modal-body alert-danger">
        {!! Form::open(['route'=>['articles.destroy', ':CAT_ID'],'method'=>'DELETE' ,'id'=>'form-arti-delete']) !!}
        <input type="hidden" id="inputid">
        {!! Form::close() !!}
      
        <h5 class="text-center">Esta seguro que quiere <strong>Eliminar</strong> el  Articulo: 
            <span id="id-arti-name"></span>
        </h5>

      </div>      
      <div class="modal-footer">
        <button type="reset" id="btn-reset-cat" class="btn " data-dismiss="modal"><i class="material-icons right">close</i>Cancelar</button>
        <a href="#!" id='btn-delete-art' class="btn btn-default btn-default-red"><i class="material-icons right">delete</i> Eliminar</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	
@stop

@section('script')
  {!! Html::script('js/querys/delete-articles.js') !!}
@stop 