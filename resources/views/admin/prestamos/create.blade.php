@extends('adminlte::page')

@section('content_header')
    <h1>Prestamos / Registro de un Nuevo Prestamo</h1>
    <hr>
@stop

@section('content')

    <div class="row"> 
        
        <div class="col-md-12">

            <div class="card card-info">

                <div class="card-header">

                    <h3 class="card-title">Datos del Cliente</h3>
                    
                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-5">
                            <label for="nro_documento">Busqueda del Cliente<span class="text-danger">*</span></label>
                            <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-id-card text-info"></i></span>
                                </div>
                                <select name="" id="" class="form-control select2">
                                    <option>Buscar cliente...</option>
                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente->id }}">{{ $cliente->nro_documento . " - " . $cliente->apellidos . " " . $cliente->nombres }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr>

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
                                    <input name="genero" id="genero" type="text" class="form-control" placeholder="Escriba aqui..." required>
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

                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-4 --> 

    </div><!-- /.row --> 

@stop

@section('css')  
    <style>
        .select2-container .select2-selection--single {
            height: 40px !important; /* Ajusta la altura total del select */
        }
    </style>
@stop


@section('js')  
    <script>
        $('.select2').select2({});

        $('.select2').on('change', function() {
            var id = $(this).val();
            /* alert(cliente_id); */
            if (id) {
                $.ajax({
                    url: '{{ url("/admin/prestamos/cliente")}}' + '/' + id,
                    type: 'GET',
                    success: function(cliente) {
                        $('#nro_documento').val(cliente.nro_documento);
                    }, 
                    error: function() {
                        alert('No se pudo obtener la información del Cliente');
                    }
                });
            }
        })
    </script>
@stop