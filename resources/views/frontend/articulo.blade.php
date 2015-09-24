@extends('layout.lay-arti')
@section('title')Articulo @stop

@section('title-blog')Articulo Ejemplo   @stop
@section('paragraph')En este articulo veremos como se veran las imágenes y vídeos. @stop


@section('content')
         <div class="blog-post">
         	<h2 class="blog-post-title">Tutorial para conectar tu impresora a una red y olvidarte de ella</h2>
	         <p class="blog-post-meta"><i class="material-icons left">today</i>Septiembre 18, 2015</p>
				
				<h2>Ejemplo de Video</h2>
				<br>
				<div class="row">
					<div class="col-xs-12 text-center">
						<iframe width="500" height="350" src="https://www.youtube.com/embed/wNBghMbDq48" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<br>
           <p>Una de la principales ventajas que nos ofrece tener una red en casa o en una empresa, ya sea cableada o por wifi, es la capacidad de <strong>centralización de nuestros dispositivos</strong>. Hace tiempo que no se necesita un periférico por ordenador ya que estos se pueden compartir fácilmente. </p>

           <p>Es el caso de las impresoras, el periférico que más se agradece compartir. Apple, como casi siempre, ha pensado en este tema y la tecnología bonjour está pensada, entre otras cosas, <strong>para compartir impresoras de forma cómoda mediante entornos Mac o incluso bajo Windows</strong>. </p>

           <p>Por eso en aquí te mostramos las formas que tienes de conectar una impresora a la red de tu casa y <em>compartir la misma entre todos los ordenadores</em>. Básicamente las opciones se reducen a dos: <strong>tener un ordenador que controla la impresora o un dispositivo tipo NAT, como un Airport Extreme</strong>, para compartir el dispositivo mediante la red. </p>

           <h3>Desde un Mac</h3>
           	
           <div class="row">
           	<div class="col-xs-12 text-center">
           		<img src="{!! asset('img/img_arti/desdemac.png')!!}" alt="Desde Mac" class="">
           	</div>
           </div>
				
           <p>Es una opción muy sencilla si tenemos más de un ordenador por casa y si encima disponemos de uno de ellos con la impresora conectada directamente. Los pasos son los siguientes:</p>
           <ol>
             <li>
    					Lo primero que hay que hacer es configurar nuestra impresora en el ordenador que hará las veces de “servidor de impresión” improvisado. <strong>En Mac básicamente se reduce a detectar la impresora y añadirla a la lista de impresoras</strong>.
				</li>
             <li>
             	Una vez añadida debemos de acceder al panel “Compartir” para activar la opción “Compartir impresora”.
					<br>
            		<div class="row">
			           	<div class="col-xs-12 text-center">
			           		<img src="{!! asset('img/img_arti/desdemac2.png')!!}" alt="Desde Mac" class="">
			           	</div>
			          </div>
			          <br>
            	</li>
            	<li>
            		Una vez nos encontremos en el ordenador cliente tendremos que añadir la nueva impresora desde el panel “Impresión y Fax”.
            	</li>
            	<li>
            		En la opción “Por omisión” dentro de las opciones “Añadir impresora” <strong>debería de aparecer la impresora y su nombre</strong>, si no es el caso añade manualmente la IP del ordenador al que esta conectada la misma. 
            	</li>
           </ol>
           
           <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
           <ol>
             <li>Vestibulum id ligula porta felis euismod semper.</li>
             <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
             <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
           </ol>
           <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
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
