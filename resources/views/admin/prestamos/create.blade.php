@extends('adminlte::page')

@section('content_header')
    <h1>Préstamos / Registro de un Nuevo Préstamo</h1>
    <hr>
@stop

@section('content')

    <!-- Card con información del Cliente -->
    <div class="row"> 
        
        <div class="col-md-12">

            <div class="card card-info">

                <div class="card-header">

                    <h3 class="card-title">Datos del Cliente</h3>
                    
                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
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
                    </div><!-- /.row -->

                    <hr>

                    <div id="contenido_cliente" style="display: none">

                        <!-- Documento, Nombre(s), Apellido(s), Fecha de Nacimiento -->
                        <div class="row">
                            <!-- Nro. de Documento -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nro_documento">Documento</label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-id-card text-info"></i></span>
                                        </div>
                                        <input name="nro_documento" id="nro_documento" type="text" class="form-control" readonly>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->
    
                            <!-- Nombres -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nombres">Nombre(s) del Cliente</label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user text-info"></i></span>
                                        </div>
                                        <input name="nombres" id="nombres" type="text" class="form-control" readonly>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->
    
                            <!-- Apellidos -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="apellidos">Apellido(s) del Cliente</label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user text-info"></i></span>
                                        </div>
                                        <input name="apellidos" id="apellidos" type="text" class="form-control" readonly>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->
    
                            <!-- Fecha de Nacimiento -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar text-info"></i></span>
                                        </div>
                                        <input name="fecha_nacimiento" id="fecha_nacimiento" type="date" class="form-control" readonly>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->
                        </div><!-- /.row -->
    
                        <!-- Género, Correo Electrónico, Celular -->
                        <div class="row">
                            <!-- Género -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="genero">Género</label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-check text-info"></i></span>
                                        </div>
                                        <input name="genero" id="genero" type="text" class="form-control" readonly>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->
    
                            <!-- Correo Electrónico -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">Correo Electrónico</label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope text-info"></i></span>
                                        </div>
                                        <input name="email" id="email" type="email" class="form-control" readonly>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->
    
                            <!-- Celular -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="celular">Celular</label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone text-info"></i></span>
                                        </div>
                                        <input name="celular" id="celular" type="number" class="form-control" readonly>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->
    
                            <!-- Número de Referencia -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="ref_celular">Número de Referencia</label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone text-info"></i></span>
                                        </div>
                                        <input name="ref_celular" id="ref_celular" type="number" class="form-control" readonly>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->
                        </div><!-- /.row -->
                        
                    </div><!-- #contenido_cliente -->


                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-4 --> 

    </div><!-- /.row --> 

    <div class="row"> 
        
        <div class="col-md-12">

            <div class="card card-warning">

                <div class="card-header">

                    <h3 class="card-title">Datos del Préstamo</h3>
                    
                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <div class="row">
                        <!-- Monto del préstamo -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Monto del préstamo</label>
                                <input id="monto_prestado" type="text" class="form-control">
                            </div>
                        </div>

                        <!-- Tasa de interés -->
                        <div class="col-md-2">
                            <label for="">Tasa de interés</label>
                            <div class="input-group mb-3">
                                <input id="tasa_interes" type="text" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>

                        <!-- Modalidad -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Modalidad</label>
                                <select name="" id="modalidad" class="form-control">
                                    <option value="Diario">Diario</option>
                                    <option value="Semanal">Semanal</option>
                                    <option value="Mensual" selected>Mensual</option>
                                    <option value="Quincenal">Quincenal</option>
                                    <option value="Anual">Anual</option>
                                </select>
                            </div>
                        </div>

                        <!-- Número de cuotas -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Número de cuotas</label>
                                <input id="nro_cuotas" type="number" class="form-control">
                            </div>
                        </div>

                        <!-- Fecha de préstamo -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Fecha de préstamo</label>
                                <input id="fecha_inicio" type="date" class="form-control" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                            </div>
                        </div>

                        <!-- Boton, Calcular préstamo -->
                        <div class="col-md-2 d-flex justify-content-center align-items-center mt-2">
                            <button class="btn btn-success" onclick="calcularPrestamo()">
                                <i class="fas fa-calculator mr-2"></i>
                                Calcular préstamo
                            </button>
                        </div>
                    </div><!-- /.row -->

                    <hr>

                    <div class="row">

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
            var id = $(this).val(); // Obtiene el id de la opción seleccionada en el select
            /* alert(id); */
            if (id) {
                $.ajax({
                    url: '{{ url("/admin/prestamos/cliente")}}' + '/' + id,
                    type: 'GET',
                    success: function(cliente) {
                        console.log(cliente)
                        $('#contenido_cliente').css('display', 'block'); 
                        $('#nro_documento').val(cliente.nro_documento);
                        $('#nombres').val(cliente.nombres);
                        $('#apellidos').val(cliente.apellidos);
                        $('#fecha_nacimiento').val(cliente.fecha_nacimiento);
                        $('#genero').val(cliente.genero);
                        $('#email').val(cliente.email);
                        $('#celular').val(cliente.celular);
                        $('#ref_celular').val(cliente.ref_celular); 
                    }, 
                    error: function() {
                        alert('No se pudo obtener la información del Cliente');
                    }
                });
            }
        })

        function calcularPrestamo() {
            const montoPrestado = parseFloat(document.getElementById('monto_prestado').value);
            const tasaInteres = parseFloat(document.getElementById('tasa_interes').value) / 100;
            const modalidad = document.getElementById('modalidad').value;
            const nroCuotas = parseInt(document.getElementById('nro_cuotas').value);

            if (isNaN(montoPrestado) || isNaN(tasaInteres) || isNaN(nroCuotas) || montoPrestado <= 0 || tasaInteres < 0 || nroCuotas <= 0) {
                alert('Por favor ingrese valores validos.');
                return;
            }

            // Ajustar la tasa de interes segun la modalidad
            let tasaInteresAjustada = 0;

            switch (modalidad) {
                case "Diario":
                    tasaInteresAjustada = tasaInteres / 30; // Suponiendo 30 dias en un mes
                    break;
                case "Semanal":
                    tasaInteresAjustada = tasaInteres / 4; // Suponiendo semanas en un mes
                    break;
                case "Quincenal":
                    tasaInteresAjustada = tasaInteres / 2; // Suponiendo 2 quincenas en un mes
                    break;
                case "Mensual":
                    tasaInteresAjustada = tasaInteres; // Tasa mensual directa
                    break;
                case "Anual":
                    tasaInteresAjustada = tasaInteres * 12; // Multiplicar por 12 para convertira mensual
                    break;
                default:
                    alert("Modalidad no válida");
                    break;
            }

            // Calculo del interes total
            const interesTotal  = montoPrestado * tasaInteres * nroCuotas;

            // Calculo de total a pagar
            const totalCancelar = montoPrestado + interesTotal;

            // Calculo de la cuota fija
            const cuota = totalCancelar / nroCuotas;

            // Mostrar los resultados en el HTML
            alert(`Resultado del prestamo: 
                    Monto Prestado: $${montoPrestado}
                    Tasa de Interés Ajustada: ${(tasaInteresAjustada * 100).toFixed(2)}%
                    Modalidad: ${modalidad}
                    Número de Cuotas: ${nroCuotas}
                    Interés Total: $${interesTotal.toFixed(2)}
                    Cuota por Pagar: $${cuota.toFixed(2)}
                    Total a Cancelar: $${totalCancelar.toFixed(2)}
                `);
        }
    </script>
@stop