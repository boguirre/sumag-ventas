@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Registrar una DUA</h1>
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
                    {!! Form::open(['route' => 'dua.store', 'autocomplete' => 'off', 'files' => true, 'class' => 'formulario']) !!}
                    <div class="form-group">
                        <label class="form-label" for="pwd">N° de DUA:</label>
                        <input type="text" class="form-control" id="numero_dua" name="numero_dua"
                            placeholder="Ingrese el numero de dua" value="{{ old('numero_dua') }}">
                        @error('numero_dua')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
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
                    </div> --}}

                    <div class="form-group">
                      <label class="form-label" for="pwd">Fecha de Numeracion:</label>
                      {!! Form::datetimelocal('fecha_numeracion', null, ['class' => 'form-control']) !!}
                      @error('fecha_numeracion')
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
                        <label class="form-label" for="pwd">Monto Persepcion:</label>
                        <input type="number" class="form-control" id="monto_percepcion" name="monto_percepcion"
                            placeholder="Ingrese el monto" value="{{ old('monto_percepcion') }}">
                        @error('monto_percepcion')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Fecha de Llegada:</label>
                        {!! Form::date('mes_llegada', null, ['class' => 'form-control']) !!}
                        @error('mes_llegada')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Seleccione un archivo:</label>
                        <input type="file" class="form-control" id="file" name="file">
                        @error('file')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <label class="form-label" for="pwd">Fecha de Vencimiento:</label>
                        {!! Form::date('fecha_vencimiento', null, ['class' => 'form-control']) !!}
                        @error('fecha_vencimiento')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div> --}}

                    {{-- <div class="form-group">
                        <label class="form-label" for="pwd">Descripcion:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="5"></textarea>
                        @error('descripcion')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div> --}}

                    <div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <a href="{{ route('dua.index') }}" class="btn btn-danger">Cancelar</a>
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
