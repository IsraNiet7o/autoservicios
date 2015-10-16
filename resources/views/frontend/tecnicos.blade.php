@extends('layout.principal')

@section('title')Personal Técnico @stop

@section('content')
	<div class="container-fluid fondo-proce">
		<div class="container">
			<div class="blog-header">
		        <h1 class="blog-title cyan-text ">Personal Técnico</h1>
		        <p class="lead blog-description cyan-light-text">Conoce nuestro equipo de Trabajo.</p>
		    </div>
		</div>
	</div>
	<div class="container">
   <div class="row">
     <div class="col-sm-8 blog-main">
     <br>
     <div class="row">
      <div class="col-xs-12 text-center">
      <br>
        <img src="{!! asset('img/logo.png') !!}" alt="Ap Toner">
      </div>
     </div>
     <hr>
		<div class="row">
        <div class="col-lg-6 text-center blog-main">
          <img class="img-circle" src="{!! asset('img/tecnicos/tecnico1.jpg') !!}" alt="Generic placeholder image" width="140" height="140">
          <h2>Roberto Urquidi</h2>
          <h3>Horario: <small>8:00 am - 18:00 pm </small> </h3>
          <h4 class="cyan-text">langaro@hotmail.com</h4>
          <h4>Tel: <small>434-01-00 Ext.7461 </small> </h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-6 text-center">
          <img class="img-circle" src="{!! asset('img/tecnicos/tecnico2.jpg') !!}" alt="Generic placeholder image" width="140" height="140">
          <h2>Roberto Urquidi</h2>
          <h3>Horario: <small>8:00 am - 18:00 pm </small> </h3>
          <h4 class="cyan-text">langaro@hotmail.com</h4>
          <h4>Tel: <small>434-01-00 Ext.7461 </small> </h4>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <hr>
      <p>Selecciona un Técnico y envía tú mensaje.</p>

      <h3>Envía Mensaje</h3>
		{!! Form::open() !!}
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="form-group">
						{!! Form::label('yourname', 'Tu Nombre', ['class'=>'']) !!}
						{!! Form::text('yourname', null,['class'=>'form-control', 'placeholder'=>'Tu Nombre', 'required' => 'required']) !!}
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="form-group">
					    {!! Form::label('tecnico', 'Técnico', ['class'=>'']) !!}
						  {!! Form::select('tecnico',array('1'=>'Roberto Urquidi','2'=>'Pepe de Urquidi',),null,['placeholder' => 'Selecciona Uno','required' => 'required', 'class'=>'form-control']) !!}
					</div>
				</div>
			</div>
			<div class="form-group">
			   {!! Form::label('mensaje', 'Mensaje', ['class'=>'']) !!}
			   <textarea class="form-control" rows="3" name="mensaje" id="mensaje" placeholder="Mensaje" required></textarea>
			</div>
			  <button type="submit" class="btn btn-default"><i class="material-icons right">send</i>Enviar</button>
		{!! Form::close() !!}

		</div>

     <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
       <div class="sidebar-module sidebar-module-inset col-xs-6 col-sm-12">
         <h4>Contacto</h4>
         <p>Para nosotros <em>es un placer atenderte</em>. Tratamos de facilitar la manera en la que te comunicas  con nosotros.</p>
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
     </div><!-- /.blog-sidebar -->

   </div><!-- /.row -->

 </div><!-- /.container -->
@stop 

@section('script')

@stop  