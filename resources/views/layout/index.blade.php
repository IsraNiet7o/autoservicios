<!DOCTYPE html>
 <html lang="es">
 <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Comatible" content="IE=edge,chrome=1"/>

  <title>@yield('title') </title>

  {!!Html::style('css/bootstrap.min.css')!!}
  {!!Html::style('css/cover.css')!!}
  {!!Html::style('https://fonts.googleapis.com/icon?family=Material+Icons')!!}
  {!!Html::style('https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700')!!}
  {!!Html::style('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700')!!}
  {!!Html::style('https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,700,900,500italic,300,300italic,700italic,900italic')!!}
  {!!Html::style('css/style.css')!!}


 </head>
  <body>
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <nav>
                <ul class="nav masthead-nav">
                  <li ><a href="{!! asset('/') !!}">Inicio <span class="sr-only">(current)</span></a></li>
                  <li><a href="{!! asset('/Procedimientos') !!}">Procedimientos</a></li>
                  <li><a href="{!! asset('/Servicios') !!}">Servicios</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración de Saldos<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#!">Saldo de Impresión</a></li>
                      <li><a href="#!">Portal de Impresión</a></li>
                    </ul>
                  </li>
                  <li><a href="#!">Soporte Técnico</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Autoservicios</h1>
            <p class="lead cyan-light-text">Este portal es una herramienta de ayuda, donde se muestra paso a paso y con ayuda de imágenes y/o video los procedimientos  que el usuario debe seguir para resolver algún problema relacionado con los servicios de Impresoras. </p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p class="white-text">© {!! date('Y')!!} Copyright Aptoner</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
  </body>
</html>
