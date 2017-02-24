@extends('app')
    
@section('content')
<div class="container">
    <ol class="breadcrumb" style="font-size: 12px;">
        <span><b>Est&aacute;s en:</b></span>
        <li><a href="{{ route('/') }}"><b>Inicio</b></a></li>
        <li><a><b>Empresas</b></a></li>
        <li class="active">Registro de empresas</li>        
    </ol>
        
    <!--Incluir mensaje de error-->
    @if (count($errors) > 0)
    @include('partials.errors')
    @endif
        
    <!--Incluir mensaje de éxito-->
    @include('partials.messages')
        
    {!! Form::open(['route' => 'store', 'method' => 'post']) !!}
    <div class="jumbotron myBox"> 
        <!--Campos del formulario-->
        @include('partials.fields');
    </div>
    {!! Form::close() !!}    
</div>
@endsection