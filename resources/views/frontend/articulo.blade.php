@extends('layout.lay-arti')
@section('title')Articulo @stop

@section('title-blog'){{ $arti->subcategory->title }}  @stop
@section('paragraph'){{ $arti->subcategory->descrip_ini }}@stop


@section('content')
         <div class="blog-post">
         	<h2 class="blog-post-title">{{ $arti->title }}</h2>
	         <p class="blog-post-meta"><i class="material-icons left">today</i>Septiembre 18, 2015</p>
				
				@if($arti->getvideoExist())
					<h2>Tutorial de Video</h2>
					<br>
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<video controls preload>
							  <source src="{!! asset('media/video/'.$arti->video) !!}" type="video/mp4"/>
							  <h4>Tu navegador no soporta los formatos de video. Actuliza tu navegador!!</h4>
							</video>
						</div>
						<br>
					</div>
				@endif
				<br>
              {!! $arti->developing !!}
  
         </div><!-- /.blog-post -->

        
         <nav>
	         <ul class="pager">
	           <li><a href="#" class="a-post"><i class="material-icons left">keyboard_arrow_left</i>Anterior</a></li>
	           <li><a href="#" class="a-post"><i class="material-icons right">keyboard_arrow_right</i>Siguiente</a></li>
	         </ul>
	      </nav>
@stop 

@section('wings')
	@include('layout.wings.services-winger')
@stop 
