@section('title', 'Registrar Pago De Proveedores')
@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Nuevo Registro</h1>
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
                    {!! Form::open(['route' => 'pago-proveedor.store', 'autocomplete' => 'off', 'files' => true, 'class' => 'formulario']) !!}
                    <div class="form-group">
                        <label class="form-label" for="pwd">N° de Factura:</label>
                        <input type="text" class="form-control" id="numero_factura" name="numero_factura"
                            placeholder="Ingrese el numero de codigo" value="{{ old('numero_factura') }}">
                        @error('numero_factura')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Proveedor:</label>
                        <select name="proveedor_id" class="form-control">
                            <option value="" selected disabled>Seleccione un Proveedor</option>
                            @foreach ($proveedores as $proveedor)
                                <option value="{{ $proveedor->id }}">{{ $proveedor->razon_social }}</option>
                            @endforeach
                        </select>

                        @error('proveedor_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Tienda:</label>
                        <select name="sucursal_id" class="form-control">
                            <option value="" selected disabled>Seleccione una tienda</option>
                            @foreach ($sucursales as $sucursal)
                                <option value="{{ $sucursal->id }}">{{ $sucursal->nombre }}</option>
                            @endforeach
                        </select>

                        @error('sucursal_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Monto:</label>
                        <input type="number" class="form-control" id="monto_deposito" name="monto_deposito"
                            placeholder="Ingrese el monto" value="{{ old('monto_deposito') }}">
                        @error('monto_deposito')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Fecha de Deposito:</label>
                        {!! Form::date('fecha_deposito', null, ['class' => 'form-control']) !!}
                        @error('fecha_deposito')
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

                    <div>
                      <button type="submit" class="btn btn-primary">Registrar</button>
                      <a  href="{{route('pago-proveedor.index')}}" class="btn btn-danger">Cancelar</a>
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
