@extends('app')
    
@section('content')
<div class="container">
    <ol class="breadcrumb" style="font-size: 12px;">
        <span><b>Est&aacute;s en:</b></span>
        <li><a href="{{ route('/') }}"><b>Inicio</b></a></li>
        <li><a><b>Empresas</b></a></li>
        <li class="active">Listado de empresas</li>        
    </ol>
        
    <!--Incluir mensaje de éxito-->
    @include('partials.messages')
    <span class="left-to-right"></span> 
    <div class="jumbotron myBox">        
        <div class="row"> 
            <table id="empresas" class="table table-bordered centered">
                <thead class="table-header">
                    <tr>
                        <th class="centered">Nombre</th>
                        <th class="centered">Tipo</th>
                        <th class="centered">Pais</th>  
                        <th class="centered">Estado</th> 
                        <th class="centered">Ciudad</th> 
                        <th class="centered">Email</th>
                        <th class="centered">Descripci&oacute;n</th>
                        <th class="centered">Editar</th>
                        <th class="centered">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empresas as $empresa)
                    <tr>
                        <td>{{ $empresa->nombre }}</td>
                        <td>{{ $empresa->nombreTipo() }}</td>
                        <td>{{ $empresa->nombrePais() }}</td>
                        <td>{{ $empresa->estado }}</td>
                        <td>{{ $empresa->ciudad }}</td>
                        <td>{{ $empresa->email }}</td>
                        <td>{{ $empresa->descripcion }}</td>
                        <td><a href="update/{{$empresa->id}}"  class="btn btn-primary" title="Editar"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                        <td><a href="{{ route('destroy', $empresa) }}" onclick="return confirm('El registro será eliminado ¿Está seguro?')" title="Eliminar" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>                
        </div>
        <br>
        <div class="row centered">
            <a href="{{ route('empresa/create') }}" class="btn btn-default sharp">Volver</a>
        </div>
    </div>
</div>
@endsection