@section('title', 'Ver Duas')
@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Informacion de la DUA</h1>
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
                    {{-- {!! Form::model($dua, [
                        'route' => ['dua.update', $dua],
                        'method' => 'put',
                        'files' => true,
                        'class' => '',
                    ]) !!} --}}
                    <div class="form-group">
                        <label class="form-label" for="pwd">N° de DUA:</label>
                        <input type="text" class="form-control" id="numero_dua" name="numero_dua"
                            placeholder="Ingrese el numero de dua" value="{{ $dua->numero_dua }}" disabled>
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

                        <input type="text" class="form-control" id="numero_dua" name="numero_dua"
                            placeholder="Ingrese el numero de dua" value="{{ $dua->sucursal->nombre }}" disabled>

                        @error('sucursal_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Fecha de Numeracion:</label>
                        <input type="text" class="form-control" id="numero_dua" name="numero_dua"
                            placeholder="Ingrese el numero de dua" value="{{ \Carbon\Carbon::parse($dua->fecha_numeracion)->format('d/m/Y') }}" disabled>
                        @error('fecha_numeracion')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Monto Persepcion:</label>
                        <input type="number" class="form-control" id="monto_percepcion" name="monto_percepcion"
                            placeholder="Ingrese el monto" value="{{ $dua->monto_percepcion }}" disabled>
                        @error('monto_percepcion')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Fecha de Llegada:</label>
                        <input type="text" class="form-control" id="numero_dua" name="numero_dua"
                            placeholder="Ingrese el numero de dua" value="{{ $dua->mes_llegada }}" disabled>
                        @error('mes_llegada')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label class="form-label" for="pwd">Fecha de Cobro:</label>
                      <input type="text" class="form-control" id="numero_dua" name="numero_dua"
                          placeholder="Ingrese el numero de dua" value="{{ $dua->mes_cobro }}" disabled>
                      @error('mes_llegada')
                          <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                      @enderror
                  </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Archivo Adjunto:</label>
                        {!! Form::open(['route' => 'dua.download', 'autocomplete' => 'off', 'files' => true]) !!}
                        <input type="hidden" name="url" value="{{$dua->resource->url}}">
                        <button type="submit" class="btn btn-warning" style="border-radius: 20px"> Descargar Archivos Adjunto
                          <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 16.08V7.91C2 4.38 4.271 2 7.66 2H16.33C19.72 2 22 4.38 22 7.91V16.08C22 19.62 19.72 22 16.33 22H7.66C4.271 22 2 19.62 2 16.08ZM12.75 14.27V7.92C12.75 7.5 12.41 7.17 12 7.17C11.58 7.17 11.25 7.5 11.25 7.92V14.27L8.78 11.79C8.64 11.65 8.44 11.57 8.25 11.57C8.061 11.57 7.87 11.65 7.72 11.79C7.43 12.08 7.43 12.56 7.72 12.85L11.47 16.62C11.75 16.9 12.25 16.9 12.53 16.62L16.28 12.85C16.57 12.56 16.57 12.08 16.28 11.79C15.98 11.5 15.51 11.5 15.21 11.79L12.75 14.27Z" fill="currentColor"></path>                            </svg>  
                          </button>                      
                          {!! Form::close() !!}
                    </div>

                    <div>
                        {{-- <button type="submit" class="btn btn-primary">Actualizar</button> --}}
                        <a href="{{ route('dua.index') }}" class="btn btn-danger">Regresar</a>
                        {{-- {!! Form::close() !!} --}}
                    </div>
                </div>
            </div>
        </div>
    @endsection
