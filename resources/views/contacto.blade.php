@extends('app')
    
@section('content')
<div class="container">
    <ol class="breadcrumb" style="font-size: 12px;">
        <span><b>Est&aacute;s en:</b></span>
        <li><a href="{{ route('/') }}"><b>Inicio</b></a></li>
        <li class="active">Contacto</li>        
    </ol>

    <!--Incluir mensaje de error-->
    @if (count($errors) > 0)
    @include('partials.errors')
    @endif
        
    <!--Incluir mensaje de éxito-->
    @include('partials.messages')
        
    <div class="jumbotron myBox"> 
        <div class="container">    
            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                <div class="panel panel-success" >
                    <div class="panel-heading">
                        <div class="panel-title">¡Contactanos!</div>                        
                    </div>     
                        
                    <div style="padding-top:30px" class="panel-body" >
                        
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        {!! Form::open(['route' => 'store', 'method' => 'post']) !!}
                            
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Nombre completo']) !!}
                        </div>
                            
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            {!! Form::email('email', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Email']) !!}
                        </div>
                            
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
                            {!! Form::textarea('descripcion',null,['class'=>'form-control', 'rows' => 5, 'required' => 'required', 'placeholder' => 'Mensaje']) !!}
                        </div>    
                            
                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->                                    
                            <div class="col-sm-12 controls centered"> 
                                <input type="submit" class="btn btn-default sharp" value="Enviar" />
                            </div>
                        </div>
                        {!! Form::close() !!}                                  
                    </div>                     
                </div>  
            </div>                
        </div>
    </div>        
</div>
@endsection