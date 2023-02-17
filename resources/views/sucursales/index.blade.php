@section('title', 'Módulo De Tiendas')
@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Tiendas</h1>
                    </div>
                    <div>
                        
                        <a href="{{ route('sucursal.create') }}" class="btn btn-primary" style="color: white; border-radius: 12px">
                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z" fill="currentColor"></path>                            </svg>   
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
                        <h4 class="card-title"> Lista De Tiendas </h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Estado</th>
                                    <th class="text-center">Acciones</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sucursals as $sucursal)
                                    <tr>

                                        <td>
                                            <div class="d-flex px-2 py-1">
                                              <div>
                                                @isset($sucursal->images)
                                                <img id="picture" class="p-1 avatar-70 rounded-pill bg-soft-primary "
                                                    src="{{ Storage::url($sucursal->images->url) }}" alt="">
                                            @else
                                                <img id="picture" class="p-1 avatar-70 rounded-pill bg-soft-primary"
                                                     alt="" src="https://images.pexels.com/photos/365067/pexels-photo-365067.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                                            @endisset                                              </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$sucursal->id}}</h6>
                                              </div>
                                            </div>
                                            
                                          </td>
                                        <td>{{ $sucursal->nombre }}</td>
                                        @if ($sucursal->estado == '1')
                                            <td style="color: green">Activado</td>
                                        @else
                                            <td style="color: red">Desactivado</td>
                                        @endif
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <form action="{{ route('sucursal.destroy', $sucursal) }}" method="POST"
                                                    class="casino formulario">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('sucursal.edit', $sucursal) }}"
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

                                                    <button type="submit"
                                                        class="btn btn-danger {{ $sucursal->estado == '0' ? 'disabled' : '' }}"
                                                        style="">Desactivar</button>

                                                </form>


                                            </ul>
                                        </td>

                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <form action="{{ route('sucursal.activar', $sucursal) }}" method="POST"
                                                    class="casino formulario2">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit"
                                                        class="btn btn-success {{ $sucursal->estado == '1' ? 'disabled' : '' }}"
                                                        style="">activar</button>
                                                </form>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
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
                    title: 'Estas seguro de Desactivar esta Sucursal?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si!',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
                    if (result.value) {


                        this.submit()

                    }
                })

            })
        </script>

        <script>
            $('.formulario2').submit(function(e) {
                e.preventDefault()

                Swal.fire({
                    title: 'Estas seguro de Activar esta Sucursal?',
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si!',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
                    if (result.value) {


                        this.submit()

                    }
                })

            })
        </script>
    @endsection
