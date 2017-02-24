@extends('app')
    
@section('content')
<div class="container">
    <ol class="breadcrumb" style="font-size: 12px;">
        <span><b>Est&aacute;s en:</b></span>
        <li><a href="{{ route('/') }}"><b>Inicio</b></a></li>
        <li class="active">Servicios</li>        
    </ol>
    <form id="registro" role="form">
        <div class="jumbotron myBox"> 
            <div class="container">
                <div class="col-lg-4 callout centered">
                    <span class="fa fa-html5 fa-5x"></span>
                    <h2>Desarrollo Web</h2>
                    <hr>
                </div><!-- col-lg-4 -->
                    
                <div class="col-lg-4 callout centered">
                    <span class="fa fa-mobile fa-5x"></span>
                    <h2>Diseño responsivo</h2>
                    <hr>
                </div><!-- col-lg-4 -->	
                    
                <div class="col-lg-4 callout centered">
                    <span class="fa fa-lightbulb-o fa-5x"></span>
                    <h2>Trabajo creativo</h2>
                    <hr>
                </div><!-- col-lg-4 -->	
            </div><!-- row -->
        </div>
    </form>
</div>
@endsection