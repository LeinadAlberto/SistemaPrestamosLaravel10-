@extends('adminlte::page')

@section('content_header')
    <h1>Clientes / Datos registrados</h1>
    <hr>
@stop

@section('content')

    <div class="row"> 
        
        <div class="col-md-12">

            <div class="card card-outline card-info">

                <div class="card-header">

                    <h3 class="card-title">Datos del Cliente</h3>
                    
                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <!-- Documento, Nombre(s), Apellido(s), Fecha de Nacimiento -->
                    <div class="row">
                        <!-- Nro. de Documento -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Documento</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card text-info"></i></span>
                                    </div>
                                    <input value="{{ $cliente->nro_documento }}" class="form-control" readonly>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-3 -->

                        <!-- Nombres -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombre(s) del Cliente</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user text-info"></i></span>
                                    </div>
                                    <input value="{{ $cliente->nombres }}" class="form-control" readonly>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-3 -->

                        <!-- Apellidos -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Apellido(s) del Cliente</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user text-info"></i></span>
                                    </div>
                                    <input value="{{ $cliente->apellidos }}" class="form-control" readonly>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-3 -->

                        <!-- Fecha de Nacimiento -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Fecha de Nacimiento</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar text-info"></i></span>
                                    </div>
                                    <input value="{{ $cliente->fecha_nacimiento }}" class="form-control" readonly>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->

                    <!-- Género, Correo Electrónico, Celular -->
                    <div class="row">
                        <!-- Género -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Género</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-check text-info"></i></span>
                                    </div>
                                    <input value="{{ $cliente->genero }}" class="form-control" readonly>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-3 -->

                        <!-- Correo Electrónico -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Correo Electrónico</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope text-info"></i></span>
                                    </div>
                                    <input value="{{ $cliente->email }}" class="form-control" readonly>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-3 -->

                        <!-- Celular -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Celular</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone text-info"></i></span>
                                    </div>
                                    <input value="{{ $cliente->celular }}" class="form-control" readonly>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-3 -->

                        <!-- Número de Referencia -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Número de Referencia</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone text-info"></i></span>
                                    </div>
                                    <input value="{{ $cliente->ref_celular }}" class="form-control" readonly>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->

                    <hr>

                    <!-- Boton de Volver -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('/admin/clientes') }}" class="btn btn-secondary">Volver</a>
                            </div>
                        </div><!-- col-md-12 -->
                    </div><!-- /.row -->
                   
                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-4 --> 

    </div><!-- /.row --> 

@stop

@section('css')  
@stop


@section('js')   
@stop