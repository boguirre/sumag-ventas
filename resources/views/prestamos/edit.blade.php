@section('title', 'Editar  Prestamos')
@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Actualizar Prestamo</h1>
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
                  {!! Form::model($prestamo, [
                    'route' => ['prestamo.update', $prestamo],
                    'method' => 'put',
                    'files' => true,
                    'class' => '',
                ]) !!}
                    <div class="form-group">
                        <label class="form-label" for="pwd">N° de Credito:</label>
                        <input type="text" class="form-control" id="numerocredito" name="numerocredito"
                            placeholder="Ingrese el numero de codigo" value="{{ $prestamo->numerocredito }}">
                        @error('numerocredito')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Empresa:</label>
                        
                        {!! Form::select('empresa_id', $empresas, null, ['class' => 'form-control']) !!}

                        @error('empresa_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Tienda:</label>
                        
                        {!! Form::select('sucursal_id', $sucursals, null, ['class' => 'form-control']) !!}

                        @error('sucursal_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Monto:</label>
                        <input type="number" class="form-control" id="monto_prestamo" name="monto_prestamo"
                            placeholder="Ingrese el monto" value="{{ $prestamo->monto_prestamo }}">
                        @error('monto_prestamo')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Fecha de Prestamo:</label>
                        {!! Form::datetimelocal('fecha_prestamo', null, ['class' => 'form-control']) !!}
                        @error('fecha_prestamo')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Fecha de Vencimiento:</label>
                        {!! Form::datetimelocal('fecha_vencimiento', null, ['class' => 'form-control']) !!}
                        @error('fecha_vencimiento')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Descripcion:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="5">{{$prestamo->descripcion}}</textarea>
                        @error('descripcion')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Subida de Archivos:</label>
                        <input type="file" name="files[]" multiple>
                    </div>

                    <div>
                      <button type="submit" class="btn btn-primary">Actualizar</button>
                      <a  href="{{route('prestamo.index')}}" class="btn btn-danger">Cancelar</a>
                      {!! Form::close() !!}
                  </div>
                </div>
            </div>
        </div>
@endsection