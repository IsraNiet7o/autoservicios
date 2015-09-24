   <nav class="navbar navbar-default cyan navbar-fixed-top">
      <div class="container-fluid">
       <!-- Brand and toggle get grouped for better mobile display -->
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         
           <a class="navbar-brand " href="{!! asset('/') !!}"><img class="img-responsive img-logo" src="{!! asset('img/logo-small.png') !!}" alt="Aptoner"></a>

       </div>

       <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
           <li @if(Route::is('frontend.index')) class="active" @endif><a href="{!! route('frontend.index') !!}">Inicio <span class="sr-only">(current)</span></a></li>
           <li @if(Route::is('procedures.index')) class="active" @endif><a href="{!! route('procedures.index') !!}">Procedimientos</a></li>
           <li @if(Route::is('services.index')) class="active" @endif><a href="{!! route('services.index') !!}">Servicios</a></li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración de Saldos<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li ><a href="#!">Saldo de Impresión</a></li>
               <li><a href="#!">Portal de Impresión</a></li>
             </ul>
           </li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Soporte Técnico<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li @if(Route::is('technical.index')) class="active" @endif><a href="{!! route('technical.index') !!}">Técnicos</a></li>
               <li role="separator" class="divider"></li>
               <li><a href="#!">Help Desck</a></li>
             </ul>
           </li>
         </ul>
         <form class="navbar-form navbar-left hidden-sm hidden-xs" role="search">
           <div class="form-group">
             <input type="text" class="form-control" placeholder="Buscar">
           </div>
           <button type="submit" class="btn btn-darck">Buscar</button>
         </form>
       </div><!-- /.navbar-collapse -->
     </div><!-- /.container-fluid -->
   </nav>