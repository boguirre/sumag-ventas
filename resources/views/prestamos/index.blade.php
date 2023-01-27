@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Prestamos</h1>
                    </div>
                    <div>
                        <a href="{{ route('prestamo.create') }}" class="btn btn-link  btn-soft-primary">
                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.5 12.5537C12.2546 12.5537 14.4626 10.3171 14.4626 7.52684C14.4626 4.73663 12.2546 2.5 9.5 2.5C6.74543 2.5 4.53737 4.73663 4.53737 7.52684C4.53737 10.3171 6.74543 12.5537 9.5 12.5537ZM9.5 15.0152C5.45422 15.0152 2 15.6621 2 18.2464C2 20.8298 5.4332 21.5 9.5 21.5C13.5448 21.5 17 20.8531 17 18.2687C17 15.6844 13.5668 15.0152 9.5 15.0152ZM19.8979 9.58786H21.101C21.5962 9.58786 22 9.99731 22 10.4995C22 11.0016 21.5962 11.4111 21.101 11.4111H19.8979V12.5884C19.8979 13.0906 19.4952 13.5 18.999 13.5C18.5038 13.5 18.1 13.0906 18.1 12.5884V11.4111H16.899C16.4027 11.4111 16 11.0016 16 10.4995C16 9.99731 16.4027 9.58786 16.899 9.58786H18.1V8.41162C18.1 7.90945 18.5038 7.5 18.999 7.5C19.4952 7.5 19.8979 7.90945 19.8979 8.41162V9.58786Z"
                                    fill="currentColor"></path>
                            </svg>
                            Registrar
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
                        <h4 class="card-title"> Lista De Prestamos </h4>
                    </div>
                    <div style="float: right;  margin-top: 2%;
                        margin-left: 2%;
                        margin-right: 2%; color: black">Monto Total Faltante a Pagar: <strong style="color: green">S/.{{$prestamos->where('estado', 1)->sum('monto_deuda')}}</strong></div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th>N° Credito</th>
                                    <th>Monto</th>
                                    <th>Fecha Prestamo</th>
                                    <th>Fecha Vencimiento</th>
                                    <th>Empresa</th>
                                    <th>Estado</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prestamos as $prestamo)
                                    <tr>
                                        <td>{{$prestamo->id}} <a href="{{route('prestamo.show', $prestamo)}}">
                                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5495 13.73H14.2624C14.6683 13.73 15.005 13.4 15.005 12.99C15.005 12.57 14.6683 12.24 14.2624 12.24H12.5495V10.51C12.5495 10.1 12.2228 9.77 11.8168 9.77C11.4109 9.77 11.0743 10.1 11.0743 10.51V12.24H9.37129C8.96535 12.24 8.62871 12.57 8.62871 12.99C8.62871 13.4 8.96535 13.73 9.37129 13.73H11.0743V15.46C11.0743 15.87 11.4109 16.2 11.8168 16.2C12.2228 16.2 12.5495 15.87 12.5495 15.46V13.73ZM19.3381 9.02561C19.5708 9.02292 19.8242 9.02 20.0545 9.02C20.302 9.02 20.5 9.22 20.5 9.47V17.51C20.5 19.99 18.5099 22 16.0446 22H8.17327C5.59901 22 3.5 19.89 3.5 17.29V6.51C3.5 4.03 5.5 2 7.96535 2H13.2525C13.5099 2 13.7079 2.21 13.7079 2.46V5.68C13.7079 7.51 15.203 9.01 17.0149 9.02C17.4381 9.02 17.8112 9.02316 18.1377 9.02593C18.3917 9.02809 18.6175 9.03 18.8168 9.03C18.9578 9.03 19.1405 9.02789 19.3381 9.02561ZM19.61 7.5662C18.7961 7.5692 17.8367 7.5662 17.1466 7.5592C16.0516 7.5592 15.1496 6.6482 15.1496 5.5422V2.9062C15.1496 2.4752 15.6674 2.2612 15.9635 2.5722C16.4995 3.1351 17.2361 3.90891 17.9693 4.67913C18.7002 5.44689 19.4277 6.21108 19.9496 6.7592C20.2387 7.0622 20.0268 7.5652 19.61 7.5662Z" fill="currentColor"></path>                            </svg>                        </a></td>
                                        <td>{{ $prestamo->numerocredito }}</td>                                        
                                        <td>{{$prestamo->monto_prestamo}}</td>
                                        <td>{{$prestamo->fecha_prestamo}}</td>
                                        <td>{{$prestamo->fecha_vencimiento}}</td>
                                        <td>{{$prestamo->empresa->nombre}}</td>
                                        @if ($prestamo->estado == 1)
                                            <td><a class="btn btn-warning">En deuda</a></td>
                                        @else
                                            <td><a class="btn btn-success">Cancelada</a></td>
                                        @endif
                                        @if ($prestamo->prestamo_detalles->count())
                                            <td>No se puede editar</td>
                                        @else
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <form action="{{ route('prestamo.destroy', $prestamo) }}" method="POST"
                                                    class="casino formulario">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('prestamo.edit', $prestamo) }}"
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
