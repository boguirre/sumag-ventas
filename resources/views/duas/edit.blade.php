@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Actualizar DUA</h1>
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
                    {!! Form::model($dua, [
                        'route' => ['dua.update', $dua],
                        'method' => 'put',
                        'files' => true,
                        'class' => 'formulario',
                    ]) !!}
                    <div class="form-group">
                        <label class="form-label" for="pwd">N° de DUA:</label>
                        <input type="text" class="form-control" id="numero_dua" name="numero_dua"
                            placeholder="Ingrese el numero de dua" value="{{ $dua->numero_dua }}">
                        @error('numero_dua')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <label class="form-label" for="pwd">Empresa:</label>
                        
                        {!! Form::select('empresa_id', $empresas, null, ['class' => 'form-control']) !!}

                        @error('empresa_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div> --}}

                    <div class="form-group">
                        <label class="form-label" for="pwd">Empresas:</label>

                        {!! Form::select('sucursal_id', $sucursals, null, ['class' => 'form-control']) !!}

                        @error('sucursal_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Fecha de Numeracion:</label>
                        {!! Form::datetimelocal('fecha_numeracion', null, ['class' => 'form-control']) !!}
                        @error('fecha_numeracion')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Monto Persepcion:</label>
                        <input type="number" class="form-control" id="monto_percepcion" name="monto_percepcion"
                            placeholder="Ingrese el monto" value="{{ $dua->monto_percepcion }}">
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

                    <div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
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
                title: 'Estas seguro de actualizar?',
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
