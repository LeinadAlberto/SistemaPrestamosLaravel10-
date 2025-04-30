@extends('adminlte::page')

@section('content_header')
    <h1>Listado de Clientes</h1>
    <hr>
@stop

@section('content')

    <div class="row"> 
        
        <div class="col-md-12">

            <div class="card card-outline card-info">

                <div class="card-header">

                    <h3 class="card-title">Clientes registrados</h3>
                    
                    <div class="card-tools">
                        <a href="{{ url('/admin/clientes/create') }}" class="btn btn-info">Crear Nuevo</a>
                    </div>

                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr class="text-center text-white" style="background-color: #212529">
                                <th>Nro</th>
                                <th>Documento</th>
                                <th>Apellido(s) y Nombre(s)</th>
                                <th>Género</th>
                                <th>Correo Electrónico</th>
                                <th>Celular</th>
                                <th>Ref. Celular</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @php
                                $contador = 1;
                            @endphp
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td class="text-center align-middle">{{ $contador++ }}</td>
                                    <td class="text-center align-middle">{{ $cliente->nro_documento }}</td>
                                    <td class="align-middle">{{ $cliente->apellidos . " " . $cliente->nombres }}</td>
                                    <td class="text-center align-middle">{{ $cliente->genero }}</td>
                                    <td class="text-center align-middle">{{ $cliente->email }}</td>
                                    <td class="text-center align-middle">{{ $cliente->celular }}</td>
                                    <td class="text-center align-middle">{{ $cliente->ref_celular }}</td>
                            
                                    <!-- Botones Ver, Editar y Eliminar -->
                                    <td class="text-center align-middle">
                                        <div class="btn-group" role="group">
                                            <!-- Boton Ver -->
                                            <a href="{{ url('/admin/clientes/' . $cliente->id) }}" 
                                                class="btn btn-sm btn-info" 
                                                style="border-radius: 4px 0px 0px 4px">
                                                <i class="fas fa-eye" title="Ver"></i>
                                            </a>

                                            <!-- Boton Editar -->
                                            <a href="{{ url('/admin/clientes/' . $cliente->id . '/edit') }}" 
                                                class="btn btn-sm btn-success" 
                                                style="border-radius: 0px 0px 0px 0px">
                                                <i class="fas fa-pencil-alt" title="Editar"></i>
                                            </a>

                                            <!-- Boton Eliminar -->
                                            <form action="{{ url('/admin/clientes/' . $cliente->id) }}" method="post"
                                                onclick="preguntar{{$cliente->id}}(event)" id="miFormulario{{$cliente->id}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 0px 4px 4px 0px">
                                                    <i class="fas fa-trash" title="Eliminar"></i>
                                                </button>
                                            </form>
                                            <script>
                                                function preguntar{{$cliente->id}}(event) {
                                                    event.preventDefault();
                                                    Swal.fire({
                                                        title: '¿Desea eliminar este registro?',
                                                        text: '',
                                                        icon: 'question',
                                                        showDenyButton: true,
                                                        confirmButtonText: 'Eliminar', 
                                                        confirmButtonColor: '#A5161D', 
                                                        denyButtonColor: '#270A0A', 
                                                        denyButtonText: 'Cancelar', 
                                                    }).then( (result) => {
                                                        if (result.isConfirmed) {
                                                            var form = $('#miFormulario{{$cliente->id}}');
                                                            form.submit();
                                                        }
                                                    }); 
                                                }
                                            </script>
                                        </div><!-- /.btn-group -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-12 --> 

    </div><!-- /.row --> 

@stop

@section('css')
    <style>
        /* Fondo transparente y sin borde en el contenedor */
        #example1_wrapper .dt-buttons {
            background-color: transparent;
            box-shadow: none;
            border: none;
            display: flex;
            justify-content: center; /* Centrar los botones */
            gap: 10px; /* Espaciado entre botones */
            margin-bottom: 15px; /* Separar botones de la tabla */
        }

        /* Estilo personalizado para los botones */
        #example1_wrapper .btn {
            color: #FFF; 
            border-radius: 4px;
            padding: 5px 15px;
            font-size: 14px;
        }

        /* Colores por tipo de boton */
        .btn-danger { background-color: #DC3545; border: none; }
        .btn-success { background-color: #28A745; border: none; }
        .btn-info { background-color: #17A2B8; border: none; }
        .btn-warning { background-color: #FFC107; color: #212529; border: none; }
        .btn-default { background-color: #6E7176; color: #212529; border: none; }
    </style>
@stop


@section('js')
    <script>
        $(function() {
            $('#example1').DataTable({
                "pageLength": 5,
                "language": {
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Clientes",
                    "infoEmpty": "Mostrando 0 a 0 de 0 Clientes",
                    "infoFiltered": "(Filtrado de _MAX_ total Clientes)",
                    "lengthMenu": "Mostrar _MENU_ Clientes",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscador:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                buttons: [
                    { text: '<i class="fas fa-copy"></i> COPIAR', extend: 'copy', className: 'btn btn-default'},
                    { text: '<i class="fas fa-file-pdf"></i> PDF', extend: 'pdf', className: 'btn btn-danger' },
                    { text: '<i class="fas fa-file-csv"></i> CSV', extend: 'csv', className: 'btn btn-info' },
                    { text: '<i class="fas fa-file-excel"></i> EXCEL', extend: 'excel', className: 'btn btn-success' },
                    { text: '<i class="fas fa-print"></i> IMPRIMIR', extend: 'print', className: 'btn btn-warning' },
                ] 
            }).buttons().container().appendTo('#example1_wrapper .row:eq(0)');
        });
    </script>
@stop