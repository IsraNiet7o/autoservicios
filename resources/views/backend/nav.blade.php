<nav class="navbar navbar-inverse navbar-fixed-top cyan">
   <div class="container-fluid">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="{{  route('admin.index') }}">Autoservicios</a>
     </div>
     <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav visible-xs-inline">
           <li class="title-lista">Articulos <span class="sr-only">(current)</span></li>
           <li><a href="{{  route('articles.create') }}">Crear Articulos <i class="material-icons right">add</i></a></li>
           <li><a href="{{  route('articles.index') }}">Administrar <i class="material-icons right">trending_flat</i> </a></li>
             <li><hr></li>
            <li><a href="{{  route('categorias.index') }}">Categorías<i class="material-icons right">storage</i></a></li>
            <li><a href="{{  route('subcategorias.index') }}">Supcategorías<i class="material-icons right">format_list_numbered</i> </a></li>
         </ul>
         <ul class="nav navbar-nav visible-xs-inline">
           <li class="title-lista">Equipos de Impresión</li>
           <li><a href="{{  route('equipment.index') }}">Lista de Equipos<i class="material-icons right">list</i></a></li>
           <li><a href="{!! route('equipment.create') }}">Nuevo Equipo <i class="material-icons right">add</i></a></li>
           <li><a href="{{  route('equipment.admin') }}">Administrar Equipos <i class="material-icons right">trending_flat</i> </a></li>
         </ul>
         <ul class="nav navbar-nav visible-xs-inline">
           <li class="title-lista">Comentarios</li>
           <li><a href="#">Ver </a></li>
           <li><a href="#">Encuesta <i class="material-icons right">trending_up</i> </a></li>
         </ul>

         <!-- ******* -->

         <ul class="nav navbar-nav navbar-right">
           <li><a href="{{  route('technical.admin') }}">Técnicos <i class="material-icons right">assignment_ind</i></a></li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="material-icons">settings_applications</i><span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="#!"><i class="material-icons right">account_box</i>Admin </a></li>
               <li><a href="#!"><i class="material-icons right ">exit_to_app</i>Exit </a></li>
             </ul>
           </li>
         </ul>
     </div>
   </div>
 </nav>