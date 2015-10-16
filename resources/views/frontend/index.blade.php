@extends('layout.principal')

@section('title')Autoservicios @stop

@section('content')
<!-- Carousel	
		      ================================================== -->
		      <div id="myCarousel" class="carousel slide" data-ride="carousel">
		        <!-- Indicators -->
		        <ol class="carousel-indicators">
		          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		          <li data-target="#myCarousel" data-slide-to="1"></li>
		          <li data-target="#myCarousel" data-slide-to="2"></li>
		          
		        </ol>
		        <div class="carousel-inner" role="listbox">
		          <div class="item active">
		            <img class="first-slide" src="{!!asset('img/slide4.jpg')!!}" alt="First slide">
		            <div class="container">
		              <div class="carousel-caption">
		                <h3 ><img src="{!!asset('img/logo.png')!!}" alt=""></h3>
		                <p class="lead cyan-light-text">Este portal es una herramienta de ayuda, donde se muestra paso a paso y con ayuda de imágenes y/o video los procedimientos  que el usuario debe seguir para resolver algún problema relacionado con los servicios de Impresoras.</p>
		              </div>
		            </div>
		          </div>
		          <div class="item">
		            <img class="second-slide" src="{!!asset('img/slide1.jpg')!!}" alt="Second slide">
		            <div class="container">
		              <div class="carousel-caption">
		                <h3>Another example headline.</h3>
		                <p class="lead white-text">AP TONER, es una empresa mexicana que brinda servicios y consumibles para el área de impresión.</p>
		              </div>
		            </div>
		          </div>
		          <div class="item">
		            <img class="third-slide" src="{!!asset('img/slide2.jpg')!!}" alt="Third slide">
		            <div class="container">
		              <div class="carousel-caption">
		                <h3>One more for good measure.</h3>
		                <p class="lead white-text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		              </div>
		            </div>
		          </div>		       
		        </div>
		        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		          <span class="sr-only">Previous</span>
		        </a>
		        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		          <span class="sr-only">Next</span>
		        </a>
		      </div><!-- /.carousel -->

	<section class="container">
		 
		  
		      <!-- Marketing messaging and featurettes
		      ================================================== -->
		      <!-- Wrap the rest of the page in another container to center all the content. -->
		     <br><br>
		      <div class="container marketing">
		  
		        
		            <div class="row text-center ">
		              <div class="col-xs-12 col-sm-6 col-md-4">
		                <i class="material-icons large brown-text ">autorenew</i>
		                <h2>Procesos</h2>
		                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus soluta laudantium labore culpa explicabo. Consequuntur sapiente id, necessitatibus ipsa. Excepturi.</p>
		                <p><a class="btn btn-default" href="{{ route('procedures.index') }}" role="button">Ir a Precesos &raquo;</a></p>
		              </div>
		              <div class="col-xs-12 col-sm-6 col-md-4">
		                <i class="material-icons large brown-text ">print</i>
		                <h2>Servicios de Papelería</h2>
		                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus soluta laudantium labore culpa explicabo. Consequuntur sapiente id, necessitatibus ipsa. Excepturi.</p>
		                <p><a class="btn btn-default" href="{{ route('services.index') }}" role="button">Ir a Servicios &raquo;</a></p>
		              </div>
		              <div class="col-xs-12 col-sm-6 col-md-4">
		                <i class="material-icons large brown-text ">cloud_download</i>
		                <h2>Drivers</h2>
		                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus soluta laudantium labore culpa explicabo. Consequuntur sapiente id, necessitatibus ipsa. Excepturi.</p>
		                <p><a class="btn btn-default" href="{{ route('technical.index') }}" role="button">Contactanos &raquo;</a></p>
		              </div>
		            </div>
		  
		  
		            <!--
		  
		            <hr class="featurette-divider">
                  <br>
		            <div class="row featurette">
		              <div class="col-md-7">
		                <h2 class="featurette-heading">
		                  <small class="rojo" ><span class="glyphicon glyphicon-star" aria-hidden="true"></span></small>
		                  Impresora Láser Monocromo OKI B410. 
		                </h2>
		                <p class="lead text-left verde"><small class="rojo">¡¡PRECIO INCREIBLE!!</small></p>
		                <p class="lead text-justify">Velocidad de impresión en mono color A4: 28 ppm monocromo, Conexiones: USB 2.0, paralelo, Resolución: Tecnología ProQ2400 Multilevel 2400 x 600dpi, Impresión de código de barras, Duplex integado (impresión a doble cara), Memoria (estandar): 32MB, Emulaciones: PCL5e, PCL6, Ciclo de vida (max.páginas/mes): 50,000, Entrada estandar de papel: Bandeja multiusos: 250 hojas de 80gsm, Peso / Gramaje de papel: Bandeja estandar: Bandeja 1/2 - 60 a 120grs Duplex - 60 a 105grs Bandeja multiusos - 60 a 163grs, Salida de papel: Impresora: 150 hojas cara abajo.</p>
		              </div>
		              <div class="col-md-5">
		                <img class="featurette-image img-responsive center-block" src="{!!asset('img/okib410.png')!!}" alt="OkiB410">
		              </div>
		            </div>
		  
		            <hr class="featurette-divider">
		  
		            <div class="row featurette">
		              <div class="col-md-7 col-md-push-5">
		                <h2 class="featurette-heading verde">
		                  <small class="rojo" ><span class="glyphicon glyphicon-star" aria-hidden="true"></span></small>
		                  Cartucho de tóner negro LaserJet.
		                </h2>
		                <p class="lead text-left verde"><small class="rojo">¡¡LA MEJOR CALIDAD!!</small></p>
		                <p class="lead text-justify">Produzca texto claro y definido, e imágenes nítidas en blanco y negro. Use las impresoras con cartuchos de tóner AP TONER para obtener resultados homogéneos y profesionales.Simplifique su experiencia de impresión con una impresión y un manejo de consumibles confiables y sencillos, además de un reciclado práctico y sin cargo.</p>
		              </div>
		              <div class="col-md-5 col-md-pull-7">
		                <img class="featurette-image img-responsive center-block" src="{!!asset('img/img_toner.png')!!}" alt="Toner">
		              </div>
		            </div>
		            /END THE FEATURETTES -->
		            <br><br>
		          </div>
		        </div>
		  </section>
	</section>
	
@stop 


@section('script')

@stop  