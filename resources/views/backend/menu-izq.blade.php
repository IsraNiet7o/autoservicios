<ul class="nav nav-sidebar nav-admin">
  <li class="title-lista">Articulos <span class="sr-only">(current)</span></li>
  <li><a href="{{ route('articles.create') }}">Crear Articulos <i class="material-icons right">add</i></a></li>
  <li><a href="{{ route('articles.index') }}">Administrar <i class="material-icons right">trending_flat</i> </a></li>
  <li><hr></li>
  <li><a href="{{ route('categorias.index') }}">Categorías<i class="material-icons right">storage</i></a></li>
  <li><a href="{{ route('subcategorias.index') }}">Supcategorías<i class="material-icons right">format_list_numbered</i> </a></li>
</ul>
<ul class="nav nav-sidebar nav-admin">
  <li class="title-lista">Equipos de Impresión</li>
  <li><a href="{{  route('equipment.index') }}">Lista de Equipos<i class="material-icons right">list</i></a></li>
  <li><a href="{{ route('equipment.create') }}">Nuevo Equipo <i class="material-icons right">add</i></a></li>
  <li><a href="{{ route('equipment.admin') }}">Administrar Equipos <i class="material-icons right">trending_flat</i> </a></li>
</ul>
<ul class="nav nav-sidebar nav-admin">
  <li class="title-lista">Comentarios</li>
  <li><a href="#">Ver </a></li>
  <li><a href="#">Encuesta <i class="material-icons right">trending_flat</i> </a></li>
</ul>