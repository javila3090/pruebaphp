<div class="row" style="margin-top: -40px; margin-bottom: -10px;">
    <div class="col-md-6">
        @if(!empty($empresa))
        <h3>ACTUALIZAR REGISTRO</h3>
        @else
        <h3>REGISTRO DE EMPRESAS</h3>
        @endif
    </div>
    <div class="col-md-6 text-right">
        <h3><input type="submit" class="btn btn-default sharp" value="Guardar cambios" /></h3>
    </div>
</div>
<hr>                 
<div class="row">                    
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <h4><small>INFORMACI&Oacute;N B&Aacute;SICA</small></h4>                                                             
                <div class="well">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('nombre', 'Nombre comercial empresa') !!}
                                {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('id_tipo', 'Tipolog&iacute;a de la empresa') !!}
                                {!! Form::select('id_tipo', ['1' => 'Sociedad Anónima (SA)', '2' => 'Compañía Anónima (CA)', '3' => 'Sociedad de Responsabilidad Limitada (SRL)'], null, ['class' => 'form-control', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_pais', 'Pais') !!}
                                <select class="form-control" name="id_pais">
                                    @foreach($paises as $pais)
                                    <option value="{{$pais->id}}" <?php if ($selectedCountry == $pais->id) {echo 'selected';}?> >{{$pais->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('estado', 'Estado') !!}
                                {!! Form::text('estado', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('ciudad', 'Ciudad') !!}
                                {!! Form::text('ciudad', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
                            </div>
                        </div>
                    </div>  
                </div>  
            </div>                        
        </div>
        <div class="row">                        
            <div class="col-md-12">
                <h4><small>INFORMACI&Oacute;N REGISTRO</small></h4>
                <div class="well">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('email', 'E-Mail') !!}
                                {!! Form::email('email', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('password', 'Password') !!}
                                @if(!empty($empresa))
                                    <input type="password" class="form-control" name="password" id="password">
                                @else
                                    <input type="password" class="form-control" name="password" id="password" required>
                                @endif                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('password2', 'Repetir password') !!}
                                @if(!empty($empresa))
                                    <input type="password" class="form-control" minlength='8' name="repetir_password" id="repetir_password">
                                @else
                                    <input type="password" class="form-control" name="repetir_password" id="repetir_password" required>
                                @endif 
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="well descripcion">
            <h6><b>Descripci&oacute;n de la empresa</b></h6>            
            {!! Form::textarea('descripcion',null,['class'=>'form-control', 'rows' => 15, 'required' => 'required']) !!}
        </div>
    </div>
</div>