@extends('app')
    
@section('content')
<div class="container">
    <ol class="breadcrumb" style="font-size: 12px;">
        <span><b>Est&aacute;s en:</b></span>
        <li><a href="{{ route('/') }}"><b>Inicio</b></a></li>       
    </ol>
    <form id="registro" role="form">
        <div class="jumbotron myBox"> 
            <div class="container"> <img class="img-responsive" src="../assets/img/webDev.jpg"/></div>
        </div>
    </form>
</div>
@endsection