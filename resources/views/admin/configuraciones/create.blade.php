@extends('adminlte::page')

@section('content_header')
    <h1>Configuraciones / Registro de una nueva configuración</h1>
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

                    <form action="{{ url('admin/configuraciones/create') }}" method="post" enctype="multipart/form-data">
                        
                        @csrf

                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <!-- Nombre de la Institución-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Nombre de la Institución <span class="text-danger">*</span></label>
                                            <div class="input-group mb-1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-home text-info"></i></span>
                                                </div>
                                                <input name="nombre" type="text" class="form-control" placeholder="Escriba aqui..." required>
                                            </div>
                                            @error('nombre')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->

                                    <!-- Descripción -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Descripción <span class="text-danger">*</span></label>
                                            <div class="input-group mb-1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-university text-info"></i></span>
                                                </div>
                                                <input name="descripcion" type="text" class="form-control" placeholder="Escriba aqui..." required>
                                            </div>
                                            @error('descripcion')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <!-- Dirección -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Dirección <span class="text-danger">*</span></label>
                                            <div class="input-group mb-1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-map-marked text-info"></i></span>
                                                </div>
                                                <input name="direccion" type="text" class="form-control" placeholder="Escriba aqui..." required>
                                            </div>
                                            @error('direccion')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->

                                    <!-- Correo Electrónico -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Correo Electrónico <span class="text-danger">*</span></label>
                                            <div class="input-group mb-1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-envelope text-info"></i></span>
                                                </div>
                                                <input name="email" type="email" class="form-control" placeholder="Escriba aqui..." required>
                                            </div>
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <!-- Teléfono -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Teléfono <span class="text-danger">*</span></label>
                                            <div class="input-group mb-1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone text-info"></i></span>
                                                </div>
                                                <input name="telefono" type="text" class="form-control" placeholder="Escriba aqui..." required>
                                            </div>
                                            @error('telefono')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
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
                                                <input name="web" type="text" class="form-control" placeholder="Escriba aqui...">
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
                                                <select name="moneda" id="moneda" class="form-control">
                                                    <option value="usd">Dólar Estadounidense (USD)</option>
                                                    <option value="eur">Euro (EUR)</option>
                                                    <option value="jpy">Yen Japonés (JPY)</option>
                                                    <option value="gbp">Libra Esterlina (GBP)</option>
                                                    <option value="btc">Bitcoin (BTC)</option>
                                                    <option value="inr">Rupia India (INR)</option>
                                                    <option value="mxn">Peso Mexicano (MXN)</option>
                                                    <option value="cad">Dólar Canadiense (CAD)</option>
                                                    <option value="chf">Franco Suizo (CHF)</option>
                                                    <option value="ars">Peso Argentino (ARS)</option>
                                                    <option value="clp">Peso Chileno (CLP)</option>
                                                    <option value="pen">Sol Peruano (PEN)</option>
                                                    <option value="brl">Real Brasileño (BRL)</option>
                                                    <option value="Bs" selected>Bolivianos (BOB)</option>
                                                    <option value="aud">Dólar Australiano (AUD)</option>
                                                    <option value="cny">Yuan Chino (CNY)</option>
                                                    <option value="sek">Corona Sueca (SEK)</option>
                                                    <option value="nok">Corona Noruega (NOK)</option>
                                                    <option value="rub">Rublo Ruso (RUB)</option>
                                                </select>
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->
                            </div><!-- /.col-md-9 -->

                            <!-- Logo de la Institución -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="logo">Logo <span class="text-danger">*</span></label>
                                    <input type="file" id="file" name="logo" accept=".jpg,.jpeg,.png" class="form-control" required>
                                    @error('logo')
                                    <small style="...">{{$message}}</small>
                                    @enderror
                                    <br>
                                    <center><output id="list"></output></center>

                                    <script>
                                        function archivo(evt) {
                                            var files = evt.target.files; //FileList object
                                            // Obtenemos la imagen del campo "file".
                                            for (var i = 0, f; f = files[i]; i++) {
                                                // Solo admitimos imágenes.
                                                if (!f.type.match('image.*')) {
                                                    continue;
                                                }
                                                var reader = new FileReader();
                                                reader.onload = (function (theFile) {
                                                    return function (e) {
                                                        // Insertamos la imagen
                                                        document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="70%" title="', escape(theFile.name), '"/>'].join('');
                                                    };
                                                }) (f);
                                                reader.readAsDataURL(f);
                                            }
                                        }
                                        document.getElementById('file').addEventListener('change', archivo, false);
                                    </script>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->
                        </div><!-- /.row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/configuraciones') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-info">Registrar</button>
                                </div>
                            </div><!-- col-md-12 -->
                        </div><!-- /.row -->
                    </form>
                    
                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-12 --> 

    </div><!-- /.row --> 

@stop

@section('css')  
@stop


@section('js')   
@stop