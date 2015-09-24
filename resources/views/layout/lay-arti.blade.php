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
    @include('layout.menu')
        <div class="container-fluid fondo-proce">
          <div class="container">
            <div class="blog-header">
                  <h1 class="blog-title cyan-text ">@yield('title-blog')</h1>
                  <p class="lead blog-description cyan-light-text">@yield('paragraph')</p>
              </div>
          </div>
        </div>
  <section class="container">
    <div class="row">
      <div class="col-sm-8 blog-main">

        @yield('content')

      </div><!-- /.blog-main -->
      <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        @yield('wings')
      </div><!-- /.blog-sidebar -->
    </div><!-- /.row -->
  </section>

    @include('layout.footer')
    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/funciones.js')!!}

    @section('script')
    @show

</body>
</html> 