@extends('adminlte::page')

@section('content_header')
    <h1>Configuraciones / Datos registrados</h1>
    <hr>
@stop

@section('content')

    <div class="row"> 
        
        <div class="col-md-12">

            <div class="card card-outline card-info">

                <div class="card-header">

                    <h3 class="card-title">Datos de la configuración</h3>
                    
                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <!-- Nombre de la Institución-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nombre de la Institución</label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-home text-info"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $configuracion->nombre }}" disabled>
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-6 -->

                                <!-- Descripción -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Descripción</label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-university text-info"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $configuracion->descripcion }}" disabled>
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->

                            <div class="row">
                                
                                <!-- Correo Electrónico -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Correo Electrónico</label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope text-info"></i></span>
                                            </div>
                                            <input type="email" class="form-control" value="{{ $configuracion->email }}" disabled>
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-6 -->

                                <!-- Dirección -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Dirección</label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marked text-info"></i></span>
                                            </div>
                                            <textarea rows="3" class="form-control" readonly style="resize: none;">{{ $configuracion->direccion }}</textarea>
                                            
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-6 -->

                            </div><!-- /.row -->

                            <div class="row">
                                <!-- Teléfono -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Teléfono</label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone text-info"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $configuracion->telefono }}" disabled>
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-4 -->

                                <!-- Página Web -->
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="">Página Web</label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pager text-info"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $configuracion->web }}" disabled>
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-4 -->

                                <!-- Moneda -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Moneda</label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-coins text-info"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $configuracion->moneda }}" disabled>
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                        </div><!-- /.col-md-9 -->

                        <!-- Logo de la Institución -->
                        <div class="col-md-3">
                            <label for="logo">Logo</label>
                            <div class="form-group text-center">
                                <img src="{{ asset('storage/' . $configuracion->logo) }}" alt="imagen" width="200px">
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('/admin/configuraciones') }}" class="btn btn-secondary">Volver</a>
                            </div>
                        </div><!-- col-md-12 -->
                    </div><!-- /.row -->
                    
                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-12 --> 

    </div><!-- /.row --> 

@stop

@section('css')  
@stop


@section('js')   
@stop