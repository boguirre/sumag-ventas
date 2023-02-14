@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Detalle de Prestamo</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @if (session('info'))
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7.67 1.99927H16.34C19.73 1.99927 22 4.37927 22 7.91927V16.0903C22 19.6203 19.73 21.9993 16.34 21.9993H7.67C4.28 21.9993 2 19.6203 2 16.0903V7.91927C2 4.37927 4.28 1.99927 7.67 1.99927ZM11.99 9.06027C11.52 9.06027 11.13 8.66927 11.13 8.19027C11.13 7.70027 11.52 7.31027 12.01 7.31027C12.49 7.31027 12.88 7.70027 12.88 8.19027C12.88 8.66927 12.49 9.06027 11.99 9.06027ZM12.87 15.7803C12.87 16.2603 12.48 16.6503 11.99 16.6503C11.51 16.6503 11.12 16.2603 11.12 15.7803V11.3603C11.12 10.8793 11.51 10.4803 11.99 10.4803C12.48 10.4803 12.87 10.8793 12.87 11.3603V15.7803Z"
                    fill="currentColor"></path>
            </svg>
            <div>
                {{ session('info') }}
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open([
                        'route' => ['prestamo.addpago', $prestamo],
                        'autocomplete' => 'off',
                        'files' => true,
                        'class' => 'formulario',
                    ]) !!}
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">N° de Credito</label>
                            <input type="text" name="" id="codigo" value="{{ $prestamo->numerocredito }}"
                                class="form-control" disabled>
                        </div>
                        <div class="col-md-3">
                            <label for="">Fecha de Vencimiento</label>
                            <input type="text" name="" id="stock" value="{{ $prestamo->fecha_vencimiento }}"
                                class="form-control" disabled>
                        </div>

                        <div class="col-md-3">
                            <label for="">Empresa</label>
                            <input type="text" name="" id="stock" value="{{ $prestamo->empresa->nombre }}"
                                class="form-control" disabled>
                        </div>

                        <div class="col-md-3">
                            <label for="">Tienda</label>
                            <input type="text" name="" id="stock" value="{{ $prestamo->sucursal->nombre }}"
                                class="form-control" disabled>
                        </div>

                        <div class="col-md-3">
                            <label for="">Monto del Prestamo</label>
                            <input type="text" name="" id="uni_medida" value="{{ $prestamo->monto_prestamo }}"
                                class="form-control" disabled>
                        </div>

                        <div class="col-md-3">
                            <label for="">Monto Faltante a Pagar</label>
                            <input type="text" name="" id="uni_medida" value="{{ $prestamo->monto_deuda }}"
                                class="form-control" disabled>
                        </div>

                        <div class="col-md-3">
                            <label for="quantity">Estado</label>
                            @if ($prestamo->estado == 1)
                                <a class="form-control btn btn-warning">En Deuda</a>
                            @else
                                <a class="form-control btn btn-success">Cancelado</a>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        @if ($prestamo->monto_deuda > 0)
                            <div class="col-md-3" style="margin-top: 15px">
                                <label for="">Monto a Pagar</label>
                                <input type="number" name="monto" id="uni_medida" value="" class="form-control"
                                    style="border-color: blue">

                                @error('monto')
                                    <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                                @enderror
                            </div>

                            <div class="col-md-3" style="margin-top: 15px">
                                <label for="">Fecha del Pago</label>
                                <input type="date" name="fecha_pago" id="fecha_pago" value="" class="form-control"
                                    style="border-color: blue">

                                @error('fecha_pago')
                                    <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                                @enderror
                            </div>
                        @else
                        @endif
                    </div>






                    <br>

                    <div class="form-group" style="margin-bottom: 15px">
                        @if ($prestamo->monto_deuda > 0)
                            <button type="submit" id="agregar" class="btn btn-primary rounded-pill" style="float:right">
                                <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z"
                                        fill="currentColor"></path>
                                </svg> Agregar Monto de Pago</button>
                        @else
                        @endif
                        {!! Form::close() !!}
                    </div>

                    <div class="form-group">
                        <h4 class="card-title">Lista de Pagos</h4>
                        <div class="table-responsive col-md-12">
                            <table id="detalles" class="table">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Monto</th>
                                        <th>Fecha</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($prestamo->prestamo_detalles as $prestamoDetalle)
                                        <tr>
                                            <td><a class="btn btn-primary">{{ $prestamoDetalle->id }}</a></td>
                                            <td>{{ $prestamoDetalle->monto }}</td>
                                            <td>{{ $prestamoDetalle->fecha_pago }}</td>
                                            <td>
                                                {!! Form::model($prestamoDetalle, ['route' => ['prestamo-detalle.update', $prestamoDetalle], 'method' => 'put', 'class' => 'formulario2']) !!}
                                                @switch($prestamoDetalle->estado)
                                                    @case(1)
                                                    <button type="submit" class="btn btn-primary">Confirmar Pago</button>
                                                        @break
                                                    @case(2)
                                                    <button type="button" class="btn btn-success">Pago Confirmado</button>
                                                        @break

                                                    @case(3)
                                                    <button type="button" class="btn btn-success">Pago Confirmado</button>
                                                    <a style="color: red; margin-left: 10px"> | Fuera de la Fecha de Pago</a>
                                                        @break
                                                    @default
                                                        
                                                @endswitch
                                                
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
                                    @foreach ($prestamo->resources as $resource)
                                        <tr>
                                            <td><a class="btn btn-primary">{{ $resource->id }}</a></td>
                                            <td>{{ $resource->url }}</td>
                                            <td>
                                                {!! Form::open(['route' => 'prestamo.download', 'autocomplete' => 'off', 'files' => true]) !!}
                                                <input type="hidden" name="url" value="\{{ $resource->url }}">
                                                <button type="submit" class="btn btn-warning">Descargar</button>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer text-muted">
                        <a href="{{ route('prestamo.index') }}" class="btn btn-light">
                            Regresar
                        </a>
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

            $('.formulario2').submit(function(e) {
                e.preventDefault()

                Swal.fire({
                    title: 'Estas seguro de Confirmar el pago?',
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
