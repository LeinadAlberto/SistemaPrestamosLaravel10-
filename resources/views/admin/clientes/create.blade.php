@extends('adminlte::page')

@section('content_header')
    <h1>Clientes / Registro de un Nuevo Cliente</h1>
    <hr>
@stop

@section('content')

    <div class="row"> 
        
        <div class="col-md-12">

            <div class="card card-outline card-info">

                <div class="card-header">

                    <h3 class="card-title">LLene los datos del formulario</h3>
                    
                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <form action="{{ url('admin/clientes/create') }}" method="post">
                        
                        @csrf

                        <!-- Documento, Nombre(s), Apellido(s), Fecha de Nacimiento -->
                        <div class="row">
                            <!-- Nro. de Documento -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nro_documento">Documento <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-id-card text-info"></i></span>
                                        </div>
                                        <input name="nro_documento" id="nro_documento" type="text" class="form-control" placeholder="Escriba aqui..." required>
                                    </div>
                                    @error('nro_documento')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->

                            <!-- Nombres -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nombres">Nombre(s) del Cliente <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user text-info"></i></span>
                                        </div>
                                        <input name="nombres" id="nombres" type="text" class="form-control" placeholder="Escriba aqui..." required>
                                    </div>
                                    @error('nombres')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->

                            <!-- Apellidos -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="apellidos">Apellido(s) del Cliente <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user text-info"></i></span>
                                        </div>
                                        <input name="apellidos" id="apellidos" type="text" class="form-control" placeholder="Escriba aqui..." required>
                                    </div>
                                    @error('apellidos')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->

                            <!-- Fecha de Nacimiento -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="fecha_nacimiento">Fecha de Nacimiento <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar text-info"></i></span>
                                        </div>
                                        <input name="fecha_nacimiento" id="fecha_nacimiento" type="date" class="form-control" placeholder="Escriba aqui..." required>
                                    </div>
                                    @error('fecha_nacimiento')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->
                        </div><!-- /.row -->

                        <!-- Género, Correo Electrónico, Celular -->
                        <div class="row">
                            <!-- Género -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="genero">Género <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-check text-info"></i></span>
                                        </div>
                                        <select name="genero" id="genero" class="form-control" required>
                                            <option value="">Seleccionar...</option>
                                            <option value="MASCULINO">MASCULINO</option>
                                            <option value="FEMENINO">FEMENINO</option>
                                        </select>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->

                            <!-- Correo Electrónico -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">Correo Electrónico <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope text-info"></i></span>
                                        </div>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Escriba aqui..." required>
                                    </div>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->

                            <!-- Celular -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="celular">Celular <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone text-info"></i></span>
                                        </div>
                                        <input name="celular" id="celular" type="number" class="form-control" placeholder="Escriba aqui..." required>
                                    </div>
                                    @error('celular')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->

                            <!-- Número de Referencia -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="ref_celular">Número de Referencia <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone text-info"></i></span>
                                        </div>
                                        <input name="ref_celular" id="ref_celular" type="number" class="form-control" placeholder="Escriba aqui..." required>
                                    </div>
                                    @error('ref_celular')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->
                        </div><!-- /.row -->

                        <hr>

                        <!-- Botones de Cancelar y Registrar -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/clientes') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-info">Registrar</button>
                                </div>
                            </div><!-- col-md-12 -->
                        </div><!-- /.row -->
                        
                    </form>
                    
                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-4 --> 

    </div><!-- /.row --> 

@stop

@section('css')  
@stop


@section('js')   
@stop