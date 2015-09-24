<!DOCTYPE html>
 <html lang="es">
 <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Comatible" content="IE=edge,chrome=1"/>

  <title>@yield('title') </title>

  <link rel="shortcut icon" href="{!! asset('aptoner.ico') !!}" type="image/x-icon" />
  <link rel="shortcut icon" href="{!! asset('img/aptoner.png') !!}" type="image/png" />

  {!!Html::style('css/bootstrap.min.css')!!}
  {!!Html::style('css/dashboard.css')!!}
  {!!Html::style('https://fonts.googleapis.com/icon?family=Material+Icons')!!}
  {!!Html::style('https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700')!!}
  {!!Html::style('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700')!!}
  {!!Html::style('https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,700,900,500italic,300,300italic,700italic,900italic')!!}
  {!!Html::style('css/style.css')!!}

 </head>
 <body>
    
    @include('backend.nav')

    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-3 col-md-2 sidebar cyan">
          @include('backend.menu-izq')
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          @yield('content')
        </div>
      </div>
    </div>

    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/funciones.js')!!}

    @section('script')
    @show
   
   <script>
      $( document ).ready(function() {
         $(function () {
           $('[data-toggle="tooltip"]').tooltip()
         });
      });
   </script>

</body>
</html> 