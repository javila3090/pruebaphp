<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Empresas</title>
        
        {!! Html::style('assets/css/main.css') !!}
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/css/Datatable.Boostrap.min.css') !!}
        {!! Html::style('assets/css/font-awesome.min.css') !!}
            
        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
            
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('/') }}">INICIO <span class="sr-only">(current)</span></a></li>                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EMPRESAS <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('empresa/create') }}">Registro</a></li>
                                    <li><a href="{{ route('lista') }}">Consulta</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('servicios') ? 'active' : '' }}"><a href="{{ route('servicios') }}">SERVICIOS</a></li>
                            <li><a href="#">VALORAR UN SERVICIO</a></li>
                            <li class="{{ Request::is('contacto') ? 'active' : '' }}"><a href="{{ route('contacto') }}">CONTACTO</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="greenBox"><a href="{{ route('registro') }}">Registro</a></li>
                            <li class="greenBox" ><a href="{{ route('login') }}">Iniciar sesi&oacute;n</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <!--contenido-->
        @yield('content')
        
        <!--Footer-->
        <div class="container">@include('partials.footer');</div>
        
        <!-- Scripts -->
        {!! Html::script('assets/js/jquery.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}        
        {!! Html::script('assets/js/Datatable.min.js') !!}
        {!! Html::script('assets/js/Datatable.Bootstrap.min.js') !!}
        {!! Html::script('assets/js/custom-functions.js') !!}
                
    </body>
</html>