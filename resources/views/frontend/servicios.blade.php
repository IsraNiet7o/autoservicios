@extends('layout.principal')

@section('title')Servicios de Papelería @stop

@section('content')
	<div class="container-fluid fondo-proce">
		<div class="container">
			<div class="blog-header">
		        <h1 class="blog-title cyan-text ">{{ $servis->category }}</h1>
		        <p class="lead blog-description cyan-light-text">{{ $servis->header }}</p>
		    </div>
		</div>
	</div>
	<div class="container">
	      <div class="row">

	        <div class="col-sm-8 blog-main">
			@foreach($servis->subcategories as $sup)
	          <div class="blog-post">
	            <h2 class="blog-post-title">{{ $sup->title .' id : ' . $sup->id }}</h2>
	            <p class="blog-post-meta"><i class="material-icons left">today</i>{{ $sup->created_at->format('d/m/Y') }}</p>

	            <p>{{ $sup->descrip_ini }} </p>
	            <hr>
	            <h3>Articulos</h3>
	            	@foreach($sup->articles as $arti)
		            <blockquote>
		              	<p>
		              		<a href="{{ route('articles.show', $arti->slug ) }}" class="a-post">{{ $arti->title . ' id: ' . $arti->id }}
		              			@if($arti->getvideoExist())
                                	<i class="material-icons right ">video_library</i>
                              	@endif
		              			<i class="material-icons right">library_books</i>
		              		</a> 
		              	</p>
		            </blockquote>
		            @endforeach
	            <p>{{ $sup->descrip_foo }}</p>
	          </div><!-- /.blog-post -->
	          <br><br>
			@endforeach

	        </div><!-- /.blog-main -->

	        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
	          <div class="sidebar-module sidebar-module-inset col-xs-6 col-sm-12">
	            <h4>{{ $servis->category }}</h4>

	            <p>{{ $servis->descrip }}</p>
	          <hr>
	          </div>
	          <div class="sidebar-module ul-blog col-xs-6 col-sm-12">
	            <h4>Todos los Articulos</h4>
	            <ol class="list-unstyled">
	              @foreach($servis->articles()->orderBy('id' ,'asc')->get() as $artis)
	              <li><a href="{{ route('articles.show', $artis->id) }}">{{ $artis->title }} </a></li>
	              	@endforeach
	            </ol>
	          </div>
	          <hr>
	      		<br>
	          <div class="sidebar-module col-xs-6 col-sm-12">
	            <h4>ENTRADAS RECIENTES</h4>
	            <hr>
	            <ol class="list-unstyled ul-blog">
	              	<li><a href="#">Procedimiento para Escanear en Red</a>
							<h6><small>Procedimientos</small> 07/09/2015</h6>
	              	</li>
	              <li><a href="#">Bandeja 1</a>
	              		<h6><small>Procedimientos</small> 04/09/2015</h6>
	              	</li>
	              <li><a href="#">Procedimiento para la solicitud de cartuchos</a>
	              		<h6><small>Procedimientos</small> 02/09/2015</h6>
	              </li>
	              <li><a href="#">No imprime</a>
	              		<h6><small>Procedimientos</small> 01/09/2015</h6>
	              	</li>
	            </ol>
	          </div>
					<br>
	          	<div class="sidebar-module col-xs-6 col-sm-12">
		            <h4>COMENTARIOS RECIENTES</h4>
		            <hr>
		            <ol class="list-unstyled ul-blog">
		              	<li><a href="#">Procedimiento para Escanear en Red</a>
								<h6><small>Procedimientos</small> 07/09/2015</h6>
		              	</li>
		              <li><a href="#">Bandeja 1</a>
		              		<h6><small>Procedimientos</small> 04/09/2015</h6>
		              	</li>
		              <li><a href="#">Procedimiento para la solicitud de cartuchos</a>
		              		<h6><small>Procedimientos</small> 02/09/2015</h6>
		              </li>
		              <li><a href="#">No imprime</a>
		              		<h6><small>Procedimientos</small> 01/09/2015</h6>
		              	</li>
		            </ol>
		          </div>

	          <div class="sidebar-module hidden-xs">
	            <h4>Elsewhere</h4>
	            <ol class="list-unstyled ul-blog">
	              <li><a href="#">Contáctanos</a></li>
	              <li><a href="#">GitHub</a></li>
	              <li><a href="#">Facebook</a></li>
	            </ol>
	          </div>
	        </div><!-- /.blog-sidebar -->

	      </div><!-- /.row -->

	    </div><!-- /.container -->
@stop 

@section('script')

@stop  