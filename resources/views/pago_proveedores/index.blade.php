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

                        <a href="" class="btn btn-success" style="color: white; border-radius: 12px">
                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0545 15.26C14.3416 14.97 14.3416 14.5 14.0545 14.21L12.8465 12.99L14.0545 11.77C14.3416 11.48 14.3416 11.01 14.0545 10.72C13.7673 10.42 13.2921 10.42 13.005 10.72L11.797 11.94L10.5891 10.72C10.302 10.42 9.83663 10.42 9.5495 10.72C9.26238 11.01 9.26238 11.48 9.5495 11.77L10.7574 12.99L9.5495 14.21C9.26238 14.5 9.26238 14.97 9.5495 15.26C9.68812 15.41 9.87624 15.48 10.0644 15.48C10.2525 15.48 10.4505 15.41 10.5891 15.26L11.797 14.04L13.005 15.26C13.1535 15.41 13.3416 15.48 13.5297 15.48C13.7178 15.48 13.9059 15.41 14.0545 15.26ZM19.3354 9.02557C19.5686 9.02289 19.8209 9.02 20.0446 9.02C20.302 9.02 20.5 9.22 20.5 9.47V17.51C20.5 19.99 18.5099 22 16.0446 22H8.17327C5.58911 22 3.5 19.89 3.5 17.29V6.51C3.5 4.03 5.5 2 7.96535 2H13.2525C13.5 2 13.7079 2.21 13.7079 2.46V5.68C13.7079 7.51 15.203 9.01 17.0149 9.02C17.4333 9.02 17.8077 9.02318 18.1346 9.02595C18.3878 9.02809 18.6125 9.03 18.8069 9.03C18.9488 9.03 19.135 9.02786 19.3354 9.02557ZM19.6056 7.5662C18.7918 7.5692 17.8334 7.5662 17.1433 7.5592C16.0482 7.5592 15.1462 6.6482 15.1462 5.5422V2.9062C15.1462 2.4752 15.6641 2.2612 15.9591 2.5722C16.7215 3.37207 17.8885 4.59784 18.8749 5.63398C19.2746 6.05384 19.6447 6.44257 19.9462 6.7592C20.2344 7.0622 20.0235 7.5652 19.6056 7.5662Z" fill="currentColor"></path>                            </svg>                        
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
