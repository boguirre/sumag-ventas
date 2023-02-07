@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Pagos a Proveedores</h1>
                    </div>
                    <div>
                        <a href="{{ route('pago-proveedor.create') }}" class="btn btn-primary" style="color: white; border-radius: 12px">
                          <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z" fill="currentColor"></path>                            </svg>   
                            Registrar
                        </a>

                        <a href="{{route('pago-proveedor.reporte')}}" class="btn btn-warning" style="color: white; border-radius: 12px">
                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33049 2.00049H16.6695C20.0705 2.00049 21.9905 3.92949 22.0005 7.33049V16.6705C22.0005 20.0705 20.0705 22.0005 16.6695 22.0005H7.33049C3.92949 22.0005 2.00049 20.0705 2.00049 16.6705V7.33049C2.00049 3.92949 3.92949 2.00049 7.33049 2.00049ZM12.0495 17.8605C12.4805 17.8605 12.8395 17.5405 12.8795 17.1105V6.92049C12.9195 6.61049 12.7705 6.29949 12.5005 6.13049C12.2195 5.96049 11.8795 5.96049 11.6105 6.13049C11.3395 6.29949 11.1905 6.61049 11.2195 6.92049V17.1105C11.2705 17.5405 11.6295 17.8605 12.0495 17.8605ZM16.6505 17.8605C17.0705 17.8605 17.4295 17.5405 17.4805 17.1105V13.8305C17.5095 13.5095 17.3605 13.2105 17.0895 13.0405C16.8205 12.8705 16.4805 12.8705 16.2005 13.0405C15.9295 13.2105 15.7805 13.5095 15.8205 13.8305V17.1105C15.8605 17.5405 16.2195 17.8605 16.6505 17.8605ZM8.21949 17.1105C8.17949 17.5405 7.82049 17.8605 7.38949 17.8605C6.95949 17.8605 6.59949 17.5405 6.56049 17.1105V10.2005C6.53049 9.88949 6.67949 9.58049 6.95049 9.41049C7.21949 9.24049 7.56049 9.24049 7.83049 9.41049C8.09949 9.58049 8.25049 9.88949 8.21949 10.2005V17.1105Z" fill="currentColor"></path>                            </svg>                                               
                              Reportes
                          </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title"> Lista De Pagos </h4>
                    </div>
                    <div style="float: right;  margin-top: 2%;
                        margin-left: 2%;
                        margin-right: 2%; color: black">Monto Total Faltante a Pagar: <strong style="color: green">S/.{{$pagoProveedores->where('estado', 1)->sum('monto_pago')}}</strong> de <strong style="color: green">S/.{{$pagoProveedores->sum('monto_deposito')}}</strong></div>
                </div>
                <div class="card-body">
                    <fieldset style="display: block;">
                        {!! Form::open([
                            'route' => 'pago-proveedor.exportfechas',
                            'autocomplete' => 'off',
                            'files' => true,
                            'class' => 'formulario',
                        ]) !!}

                        <div class="col-sm-12">
                            <div class="row">


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Fecha
                                            Inicial:</label>
                                        {!! Form::date('fechainicial', null, [
                                            'class' => 'form-control  block w-full mt-1' . ($errors->has('fechaNacimiento') ? ' border-red-600' : ''),
                                        ]) !!}

                                        @error('fechaterminal')
                                            <small class="text-danger">
                                                <b>{{ $message }}</b>
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Fecha
                                            Salida:</label>
                                        {!! Form::date('fechaterminal', null, [
                                            'class' => 'form-control  block w-full mt-1' . ($errors->has('fechaNacimiento') ? ' border-red-600' : ''),
                                        ]) !!}

                                        @error('fechaterminal')
                                            <small class="text-danger">
                                                <b>{{ $message }}</b>
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Tienda</label>
                                    {{--  <select class="form-control selectpicker" data-live-search="true" name="product_id" id="product_id">  --}}
                                    <select class="form-control" name="sucursal_id" id="sucursal_id">
                                        <option value="" disabled selected>Selecccione una Tienda</option>
                                        @foreach ($sucursals as $sucursal)
                                            <option value="{{ $sucursal->id }}">{{ $sucursal->nombre }}</option>
                                        @endforeach
                                    </select>

                                    @error('sucursal_id')
                                            <small class="text-danger">
                                                <b>{{ $message }}</b>
                                            </small>
                                    @enderror

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <br>
                                        <button type="submit"
                                            class="btn btn-success rounded-pill btn-sm ms-auto mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                                width="35px" height="35px">
                                                <path fill="#4CAF50"
                                                    d="M41,10H25v28h16c0.553,0,1-0.447,1-1V11C42,10.447,41.553,10,41,10z" />
                                                <path fill="#FFF"
                                                    d="M32 15H39V18H32zM32 25H39V28H32zM32 30H39V33H32zM32 20H39V23H32zM25 15H30V18H25zM25 25H30V28H25zM25 30H30V33H25zM25 20H30V23H25z" />
                                                <path fill="#2E7D32" d="M27 42L6 38 6 10 27 6z" />
                                                <path fill="#FFF"
                                                    d="M19.129,31l-2.411-4.561c-0.092-0.171-0.186-0.483-0.284-0.938h-0.037c-0.046,0.215-0.154,0.541-0.324,0.979L13.652,31H9.895l4.462-7.001L10.274,17h3.837l2.001,4.196c0.156,0.331,0.296,0.725,0.42,1.179h0.04c0.078-0.271,0.224-0.68,0.439-1.22L19.237,17h3.515l-4.199,6.939l4.316,7.059h-3.74V31z" />
                                            </svg>
                                            Exportar Información
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {!! Form::close() !!}
                    </fieldset>
                    <fieldset style="display: block;">
                        {!! Form::open([
                            'route' => 'pago-proveedor.filtro',
                            'autocomplete' => 'off',
                            'files' => true,
                            'class' => 'formulario',
                        ]) !!}

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Tienda</label>
                                    {{--  <select class="form-control selectpicker" data-live-search="true" name="product_id" id="product_id">  --}}
                                    <select class="form-control" name="sucursal_id" id="sucursal_id">
                                        <option value="" disabled selected>Selecccione una Tienda</option>
                                        @foreach ($sucursals as $sucursal)
                                            <option value="{{ $sucursal->id }}">{{ $sucursal->nombre }}</option>
                                        @endforeach
                                    </select>

                                    @error('sucursal_id')
                                            <small class="text-danger">
                                                <b>{{ $message }}</b>
                                            </small>
                                    @enderror

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <br>
                                        <button type="submit"
                                            class="btn btn-primary rounded-pill btn-sm ms-auto mt-1">
                                            Filtrar Información
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {!! Form::close() !!}
                    </fieldset>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th>N° Factura</th>
                                    <th>Monto Deposito</th>
                                    <th>Fecha Deposito</th>
                                    <th>Tienda</th>
                                    <th>Proveedor</th>
                                    <th>Estado</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pagoProveedores as $pagoProveedor)
                                    <tr>
                                        <td>{{$pagoProveedor->id}} <a href="{{route('pago-proveedor.show', $pagoProveedor)}}">
                                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5495 13.73H14.2624C14.6683 13.73 15.005 13.4 15.005 12.99C15.005 12.57 14.6683 12.24 14.2624 12.24H12.5495V10.51C12.5495 10.1 12.2228 9.77 11.8168 9.77C11.4109 9.77 11.0743 10.1 11.0743 10.51V12.24H9.37129C8.96535 12.24 8.62871 12.57 8.62871 12.99C8.62871 13.4 8.96535 13.73 9.37129 13.73H11.0743V15.46C11.0743 15.87 11.4109 16.2 11.8168 16.2C12.2228 16.2 12.5495 15.87 12.5495 15.46V13.73ZM19.3381 9.02561C19.5708 9.02292 19.8242 9.02 20.0545 9.02C20.302 9.02 20.5 9.22 20.5 9.47V17.51C20.5 19.99 18.5099 22 16.0446 22H8.17327C5.59901 22 3.5 19.89 3.5 17.29V6.51C3.5 4.03 5.5 2 7.96535 2H13.2525C13.5099 2 13.7079 2.21 13.7079 2.46V5.68C13.7079 7.51 15.203 9.01 17.0149 9.02C17.4381 9.02 17.8112 9.02316 18.1377 9.02593C18.3917 9.02809 18.6175 9.03 18.8168 9.03C18.9578 9.03 19.1405 9.02789 19.3381 9.02561ZM19.61 7.5662C18.7961 7.5692 17.8367 7.5662 17.1466 7.5592C16.0516 7.5592 15.1496 6.6482 15.1496 5.5422V2.9062C15.1496 2.4752 15.6674 2.2612 15.9635 2.5722C16.4995 3.1351 17.2361 3.90891 17.9693 4.67913C18.7002 5.44689 19.4277 6.21108 19.9496 6.7592C20.2387 7.0622 20.0268 7.5652 19.61 7.5662Z" fill="currentColor"></path>                            </svg>                        </a></td>
                                        <td>{{$pagoProveedor->numero_factura }}</td>                                        
                                        <td>{{$pagoProveedor->monto_deposito}}</td>
                                        <td>{{$pagoProveedor->fecha_deposito}}</td>
                                        <td>{{$pagoProveedor->sucursal->nombre}}</td>
                                        <td>{{$pagoProveedor->proveedor->razon_social}}</td>
                                        @if ($pagoProveedor->estado == 1)
                                            <td><a class="btn btn-warning">En deuda</a></td>
                                        @else                       
                                            <td>
                                                <a href="{{ route('pago-proveedor.exportpdf', $pagoProveedor) }}" style="color: red">
                                                    <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.92574 16.39H14.3119C14.7178 16.39 15.0545 16.05 15.0545 15.64C15.0545 15.23 14.7178 14.9 14.3119 14.9H8.92574C8.5198 14.9 8.18317 15.23 8.18317 15.64C8.18317 16.05 8.5198 16.39 8.92574 16.39ZM12.2723 9.9H8.92574C8.5198 9.9 8.18317 10.24 8.18317 10.65C8.18317 11.06 8.5198 11.39 8.92574 11.39H12.2723C12.6782 11.39 13.0149 11.06 13.0149 10.65C13.0149 10.24 12.6782 9.9 12.2723 9.9ZM19.3381 9.02561C19.5708 9.02292 19.8242 9.02 20.0545 9.02C20.302 9.02 20.5 9.22 20.5 9.47V17.51C20.5 19.99 18.5099 22 16.0545 22H8.17327C5.59901 22 3.5 19.89 3.5 17.29V6.51C3.5 4.03 5.5 2 7.96535 2H13.2525C13.5099 2 13.7079 2.21 13.7079 2.46V5.68C13.7079 7.51 15.203 9.01 17.0149 9.02C17.4381 9.02 17.8112 9.02316 18.1377 9.02593C18.3917 9.02809 18.6175 9.03 18.8168 9.03C18.9578 9.03 19.1405 9.02789 19.3381 9.02561ZM19.6111 7.566C18.7972 7.569 17.8378 7.566 17.1477 7.559C16.0527 7.559 15.1507 6.648 15.1507 5.542V2.906C15.1507 2.475 15.6685 2.261 15.9646 2.572C16.5004 3.13476 17.2368 3.90834 17.9699 4.67837C18.7009 5.44632 19.4286 6.21074 19.9507 6.759C20.2398 7.062 20.0279 7.565 19.6111 7.566Z" fill="currentColor"></path>                            </svg> 
                                                </a>
                                                <a class="btn btn-success">Cancelada</a>
                                            </td>
                                        @endif
                                        @if ($pagoProveedor->pago_proveedor_detalles->count())
                                            <td>No se puede editar</td>
                                        @else
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <form action="{{ route('pago-proveedor.destroy', $pagoProveedor) }}" method="POST"
                                                    class="casino formulario">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('pago-proveedor.edit', $pagoProveedor) }}"
                                                        class="bs-tooltip btn btn-primary"
                                                        style="margin-right: 10px; margin-left: 10px"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"
                                                        data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-edit-2 p-1 br-8 mb-1">
                                                            <path
                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg>Editar</a>
                                                </form>
                                                
                                            </ul>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
@endsection
