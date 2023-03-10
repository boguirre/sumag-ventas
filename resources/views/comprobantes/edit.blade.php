@section('title', 'Editar Comprobantes')
@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Actualizar Comprobante</h1>
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
                  {!! Form::model($comprobante, [
                    'route' => ['comprobante.update', $comprobante],
                    'method' => 'put',
                    'files' => true,
                    'class' => 'formulario',
                ]) !!}
                    <div class="form-group">
                        <label class="form-label" for="pwd">N° de Comprobante:</label>
                        <input type="text" class="form-control" id="numero_comprobante" name="numero_comprobante"
                            placeholder="Ingrese el numero del comprobante" value="{{ $comprobante->numero_comprobante }}">
                        @error('numero_comprobante')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="pwd">Empresas:</label>

                        {!! Form::select('sucursal_id', $sucursals, null, ['class' => 'form-control']) !!}

                        @error('sucursal_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="pwd">Tipo Comprobante:</label>
                        {!! Form::select('tipo_comprobante_id', $tipo_comprobantes, null, ['class' => 'form-control']) !!}

                        @error('tipo_comprobante_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Tipo de Importe:</label>
                        {!! Form::select('tipo_importe_id', $tipo_importes, null, ['class' => 'form-control']) !!}

                        @error('tipo_importe')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Importe:</label>
                        <input type="number" class="form-control" id="importe" name="importe"
                            placeholder="Ingrese el monto" value="{{ $comprobante->importe }}">
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
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="5">{{$comprobante->descripcion}}</textarea>
                        @error('descripcion')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Subida de Archivos:</label>
                        <input type="file" name="files[]" multiple>
                    </div>

                    <div>
                      <button type="submit" class="btn btn-primary">Editar</button>
                      <a  href="{{route('comprobante.index')}}" class="btn btn-danger">Cancelar</a>
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