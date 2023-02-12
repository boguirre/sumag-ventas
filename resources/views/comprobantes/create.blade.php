@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Registrar Comprobante</h1>
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
                    {!! Form::open(['route' => 'comprobante.store', 'autocomplete' => 'off', 'files' => true, 'class' => 'formulario']) !!}
                    <div class="form-group">
                        <label class="form-label" for="pwd">N° de Comprobante:</label>
                        <input type="text" class="form-control" id="numero_comprobante" name="numero_comprobante"
                            placeholder="Ingrese el numero del comprobante" value="{{ old('numero_comprobante') }}">
                        @error('numero_comprobante')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="pwd">Empresa:</label>
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
                        <label class="form-label" for="pwd">Tipo Comprobante:</label>
                        <select name="tipo_comprobante_id" class="form-control">
                            <option value="" selected disabled>Seleccione un Tipo de comprobante</option>
                            @foreach ($tipo_comprobantes as $tipos)
                                <option value="{{ $tipos->id }}">{{ $tipos->nombre }}</option>
                            @endforeach
                        </select>

                        @error('tipo_comprobante_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Tipo de Importe:</label>
                        <select name="tipo_importe" class="form-control">
                            <option value="" selected disabled>Seleccione una tienda</option>
                            
                                <option value="BANCARIA">TRANSF. BANCARIA</option>
                                <option value="CREDITOS">CREDITOS</option>
                            
                        </select>

                        @error('tipo_importe')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Importe:</label>
                        <input type="number" class="form-control" id="importe" name="importe"
                            placeholder="Ingrese el monto" value="{{ old('importe') }}">
                        @error('importe')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <label class="form-label" for="pwd">Fecha de Emision:</label>
                        {!! Form::date('fecha_prestamo', null, ['class' => 'form-control']) !!}
                        @error('fecha_prestamo')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div> --}}

                    <div class="form-group">
                        <label class="form-label" for="pwd">Fecha de Pago:</label>
                        {!! Form::date('fecha_pago', null, ['class' => 'form-control']) !!}
                        @error('fecha_pago')
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
