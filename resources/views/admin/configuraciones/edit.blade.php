@extends('adminlte::page')

@section('content_header')
    <h1>Configuraciones / Modificación de la configuración</h1>
    <hr>
@stop

@section('content')

    <div class="row"> 
        
        <div class="col-md-12">

            <div class="card card-outline card-success">

                <div class="card-header">

                    <h3 class="card-title">LLene los datos del formulario</h3>
                    
                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <form action="{{ url('admin/configuraciones/' . $configuracion->id) }}" method="post" enctype="multipart/form-data">
                        
                        @csrf

                        @method('PUT')

                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <!-- Nombre de la Institución-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Nombre de la Institución <span class="text-danger">*</span></label>
                                            <div class="input-group mb-1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-home text-success"></i></span>
                                                </div>
                                                <input name="nombre" value="{{ $configuracion->nombre }}" type="text" class="form-control" placeholder="Escriba aqui..." required>
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
                                                    <span class="input-group-text"><i class="fas fa-university text-success"></i></span>
                                                </div>
                                                <input name="descripcion" value="{{ $configuracion->descripcion }}" type="text" class="form-control" placeholder="Escriba aqui..." required>
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
                                                    <span class="input-group-text"><i class="fas fa-map-marked text-success"></i></span>
                                                </div>
                                                <textarea name="direccion" class="form-control" rows="3" placeholder="Escriba aqui..." required style="resize: none;">{{ $configuracion->direccion }}</textarea>
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
                                                    <span class="input-group-text"><i class="fas fa-envelope text-success"></i></span>
                                                </div>
                                                <input name="email" value="{{ $configuracion->email }}" type="email" class="form-control" placeholder="Escriba aqui..." required>
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
                                                    <span class="input-group-text"><i class="fas fa-phone text-success"></i></span>
                                                </div>
                                                <input name="telefono" value="{{ $configuracion->telefono }}" type="text" class="form-control" placeholder="Escriba aqui..." required>
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
                                                    <span class="input-group-text"><i class="fas fa-pager text-success"></i></span>
                                                </div>
                                                <input name="web" value="{{ $configuracion->web }}" type="text" class="form-control" placeholder="Escriba aqui...">
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-4 -->

                                    <!-- Moneda -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Moneda</label>
                                            <div class="input-group mb-1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-coins text-success"></i></span>
                                                </div>
                                                <select name="moneda" id="moneda" class="form-control">
                                                    <option value="usd" {{ $configuracion->moneda == 'usd' ? 'selected' : '' }}>Dólar Estadounidense (USD)</option>
                                                    <option value="eur" {{ $configuracion->moneda == 'eur' ? 'selected' : '' }}>Euro (EUR)</option>
                                                    <option value="jpy" {{ $configuracion->moneda == 'jpy' ? 'selected' : '' }}>Yen Japonés (JPY)</option>
                                                    <option value="gbp" {{ $configuracion->moneda == 'gbp' ? 'selected' : '' }}>Libra Esterlina (GBP)</option>
                                                    <option value="btc" {{ $configuracion->moneda == 'btc' ? 'selected' : '' }}>Bitcoin (BTC)</option>
                                                    <option value="inr" {{ $configuracion->moneda == 'inr' ? 'selected' : '' }}>Rupia India (INR)</option>
                                                    <option value="mxn" {{ $configuracion->moneda == 'mxn' ? 'selected' : '' }}>Peso Mexicano (MXN)</option>
                                                    <option value="cad" {{ $configuracion->moneda == 'cad' ? 'selected' : '' }}>Dólar Canadiense (CAD)</option>
                                                    <option value="chf" {{ $configuracion->moneda == 'chf' ? 'selected' : '' }}>Franco Suizo (CHF)</option>
                                                    <option value="ars" {{ $configuracion->moneda == 'ars' ? 'selected' : '' }}>Peso Argentino (ARS)</option>
                                                    <option value="clp" {{ $configuracion->moneda == 'clp' ? 'selected' : '' }}>Peso Chileno (CLP)</option>
                                                    <option value="pen" {{ $configuracion->moneda == 'pen' ? 'selected' : '' }}>Sol Peruano (PEN)</option>
                                                    <option value="brl" {{ $configuracion->moneda == 'brl' ? 'selected' : '' }}>Real Brasileño (BRL)</option>
                                                    <option value="Bs" {{ $configuracion->moneda == 'Bs' ? 'selected' : '' }}>Bolivianos (BOB)</option>
                                                    <option value="aud" {{ $configuracion->moneda == 'aud' ? 'selected' : '' }}>Dólar Australiano (AUD)</option>
                                                    <option value="cny" {{ $configuracion->moneda == 'cny' ? 'selected' : '' }}>Yuan Chino (CNY)</option>
                                                    <option value="sek" {{ $configuracion->moneda == 'sek' ? 'selected' : '' }}>Corona Sueca (SEK)</option>
                                                    <option value="nok" {{ $configuracion->moneda == 'nok' ? 'selected' : '' }}>Corona Noruega (NOK)</option>
                                                    <option value="rub" {{ $configuracion->moneda == 'rub' ? 'selected' : '' }}>Rublo Ruso (RUB)</option>
                                                </select>
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->
                            </div><!-- /.col-md-9 -->

                            <!-- Logo de la Institución -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="file" id="file" name="logo" accept=".jpg,.jpeg,.png" class="form-control">
                                    @error('logo')
                                        <small style="...">{{$message}}</small>
                                    @enderror
                                    <br>
                                    <center>
                                        <output id="list">
                                            <img src="{{ asset('storage/' . $configuracion->logo) }}" alt="imagen" width="200px">
                                        </output>
                                    </center>

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
                                    <button type="submit" class="btn btn-success">Modificar</button>
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