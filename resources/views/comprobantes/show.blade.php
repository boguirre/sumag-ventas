@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Información del Comprobante</h1>
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
                    {{-- {!! Form::open(['route' => 'comprobante.store', 'autocomplete' => 'off', 'files' => true, 'class' => 'formulario']) !!} --}}
                    <div class="form-group">
                        <label class="form-label" for="pwd">N° de Comprobante:</label>
                        <input type="text" class="form-control" id="numero_comprobante" name="numero_comprobante"
                            placeholder="Ingrese el numero del comprobante" value="{{ $comprobante->numero_comprobante }}" disabled>
                        @error('numero_comprobante')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Tipo Comprobante:</label>
                        <input type="text" class="form-control" id="numero_comprobante" name="numero_comprobante"
                        placeholder="Ingrese el numero del comprobante" value="{{ $comprobante->tipo_comprobante->nombre }}" disabled>

                        @error('tipo_comprobante_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Tipo de Importe:</label>
                        <input type="text" class="form-control" id="numero_comprobante" name="numero_comprobante"
                        placeholder="Ingrese el numero del comprobante" value="{{ $comprobante->tipo_importe->nombre }}" disabled>

                        @error('tipo_importe')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Importe:</label>
                        <input type="number" class="form-control" id="importe" name="importe"
                            placeholder="Ingrese el monto" value="{{ $comprobante->importe }}" disabled>
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
                      <label class="form-label" for="pwd">Fecha de Emision:</label>
                      <input type="text" class="form-control" id="numero_comprobante" name="numero_comprobante"
                      placeholder="Ingrese el numero del comprobante" value="{{ $comprobante->fecha_emision }}" disabled>
                  </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Fecha de Pago:</label>
                        <input type="text" class="form-control" id="numero_comprobante" name="numero_comprobante"
                        placeholder="Ingrese el numero del comprobante" value="{{ $comprobante->fecha_pago }}" disabled>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Descripcion:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="5" disabled>{{$comprobante->descripcion}}</textarea>
                        @error('descripcion')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                      <h4 class="card-title">Lista de Recursos</h4>
                      <div class="table-responsive col-md-12">
                          <table id="detalles" class="table">
                              <thead>
                                  <tr>
                                      <th>Item</th>
                                      <th>Archivo</th>
                                      <th>Acciones</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach ($comprobante->resources as $resource)
                                      <tr>
                                          <td><a class="btn btn-primary">{{ $resource->id }}</a></td>
                                          <td>{{ $resource->url }}</td>
                                          <td>
                                              {!! Form::open(['route' => 'comprobante.download', 'autocomplete' => 'off', 'files' => true]) !!}
                                              <input type="hidden" name="url" value="\{{$resource->url}}">
                                              <button type="submit" class="btn btn-warning">Descargar</button>
                                              {!! Form::close() !!}
                                          </td>
                                      </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>

                    <div>
                      {{-- <button type="submit" class="btn btn-primary">Registrar</button> --}}
                      <a  href="{{route('comprobante.index')}}" class="btn btn-danger">Cancelar</a>
                      {{-- {!! Form::close() !!} --}}
                  </div>
                </div>
            </div>
        </div>
@endsection
