@extends('app')
    
@section('content')
<div class="container-fluid">
    <div class="container">
        <ol class="breadcrumb" style="font-size: 12px;">
            <span><b>Est&aacute;s en:</b></span>
            <li><a href="{{ route('/') }}"><b>Inicio</b></a></li>
            <li><a><b>Empresas</b></a></li>
            <li class="active">Actualizar empresa</li>        
        </ol>
            
        <!--Incluir mensaje de error-->
        @if (count($errors) > 0)
        @include('partials.errors')
        @endif
            
        <!--Incluir mensaje de éxito-->
        @include('partials.messages')
            
        {!! Form::model($empresa,['route' => ['update', $empresa], 'method' => 'PUT']) !!}
        <div class="jumbotron myBox"> 
            <!--Campos del formulario-->
            @include('partials.fields');
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection