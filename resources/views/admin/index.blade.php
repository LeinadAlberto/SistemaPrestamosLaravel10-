@extends('adminlte::page')

@section('content_header')
    <h1><b>Bienvenido</b></h1>
    <hr>
@stop

@section('content')
    <div class="row">

        <!-- Card Configuraciones -->
        <div class="col-md-3 col-sm-6 col-12">
            <a href="{{ url('/admin/configuraciones') }}">
                <div class="info-box zoomP">
                    <span class="info-box-icon bg-info">
                        <img src="{{ url("/images/ajustes.gif") }}" width="100%" alt="imagen">
                    </span>
                    
                    <div class="info-box-content">
                        <span class="info-box-text text-info" style="font-weight: bold">Configuraciones</span>
                        <span class="info-box-number text-dark">
                            {{  $total_configuraciones }} 
                            @if($total_configuraciones == 1)
                                Configuración
                            @else
                                Configuraciones
                            @endif
                        </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </a>
        </div><!-- /.col-md-3 -->

        <!-- Card Roles -->
        <div class="col-md-3 col-sm-6 col-12">
            <a href="{{ url('/admin/roles') }}">
                <div class="info-box zoomP">
                    <span class="info-box-icon bg-info">
                        <img src="{{ url("/images/roles.gif") }}" width="100%" alt="imagen">
                    </span>
                    
                    <div class="info-box-content">
                        <span class="info-box-text text-info" style="font-weight: bold">Roles</span>
                        <span class="info-box-number text-dark">
                            {{  $total_roles }} 
                            @if($total_roles == 1)
                                Rol
                            @else
                                Roles
                            @endif
                        </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </a>
        </div><!-- /.col-md-3 -->

        <!-- Card Usuarios -->
        <div class="col-md-3 col-sm-6 col-12">
            <a href="{{ url('/admin/usuarios') }}">
                <div class="info-box zoomP">
                    <span class="info-box-icon bg-info">
                        <img src="{{ url("/images/usuario.gif") }}" width="100%" alt="imagen">
                    </span>
                    
                    <div class="info-box-content">
                        <span class="info-box-text text-info" style="font-weight: bold">Usuarios</span>
                        <span class="info-box-number text-dark">
                            {{  $total_usuarios }} 
                            @if($total_usuarios == 1)
                                Usuario
                            @else
                                Usuarios
                            @endif
                        </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </a>
        </div><!-- /.col-md-3 -->

        <!-- Card Clientes -->
        <div class="col-md-3 col-sm-6 col-12">
            <a href="{{ url('/admin/clientes') }}">
                <div class="info-box zoomP">
                    <span class="info-box-icon bg-info">
                        <img src="{{ url("/images/cliente.gif") }}" width="100%" alt="imagen">
                    </span>
                    
                    <div class="info-box-content">
                        <span class="info-box-text text-info" style="font-weight: bold">Clientes</span>
                        <span class="info-box-number text-dark">
                            {{  $total_clientes }} 
                            @if($total_clientes == 1)
                                Cliente
                            @else
                                Clientes
                            @endif
                        </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </a>
        </div><!-- /.col-md-3 -->
    
    </div>
@stop

@push('css')
    
@endpush

@push('js')
 
@endpush