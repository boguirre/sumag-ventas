@section('title', 'Registrar Prestamos')
@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Registrar Prestamo</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'prestamo.store', 'autocomplete' => 'off', 'files' => true, 'class' => 'formulario']) !!}
                    <div class="form-group">
                        <label class="form-label" for="pwd">N° de Credito:</label>
                        <input type="text" class="form-control" id="numerocredito" name="numerocredito"
                            placeholder="Ingrese el numero de codigo" value="{{ old('numerocredito') }}">
                        @error('numerocredito')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Empresa:</label>
                        <select name="empresa_id" class="form-control">
                            <option value="" selected disabled>Seleccione una empresa</option>
                            @foreach ($empresas as $empresa)
                                <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                            @endforeach
                        </select>

                        @error('empresa_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Tienda:</label>
                        <select name="sucursal_id" class="form-control">
                            <option value="" selected disabled>Seleccione una tienda</option>
                            @foreach ($sucursals as $sucursal)
                                <option value="{{ $sucursal->id }}">{{ $sucursal->nombre }}</option>
                            @endforeach
                        </select>

                        @error('sucursal_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Monto:</label>
                        <input type="number" class="form-control" id="monto_prestamo" name="monto_prestamo"
                            placeholder="Ingrese el monto" value="{{ old('monto_prestamo') }}">
                        @error('monto_prestamo')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Fecha de Prestamo:</label>
                        {!! Form::date('fecha_prestamo', null, ['class' => 'form-control']) !!}
                        @error('fecha_prestamo')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Fecha de Vencimiento:</label>
                        {!! Form::date('fecha_vencimiento', null, ['class' => 'form-control']) !!}
                        @error('fecha_vencimiento')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Descripcion:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="5"></textarea>
                        @error('descripcion')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Subida de Archivos:</label>
                        <input type="file" name="files[]" multiple>
                    </div>

                    <div>
                      <button type="submit" class="btn btn-primary">Registrar</button>
                      <a  href="{{route('prestamo.index')}}" class="btn btn-danger">Cancelar</a>
                      {!! Form::close() !!}
                  </div>
                </div>
            </div>
        </div>
@endsection

@section('scripts')
                    <script>
                        $('.formulario').submit(function(e) {
                            e.preventDefault()

                            Swal.fire({
                                title: 'Estas seguro de guardar?',
                                text: "¡No podrás revertir esto!",
                                icon: 'info',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Si, Guardar!',
                                cancelButtonText: 'Cancelar',
                            }).then((result) => {
                                if (result.value) {


                                    this.submit()

                                }
                            })

                        })
                    </script>
@endsection
