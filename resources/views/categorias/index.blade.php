@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Categorias</h1>
                    </div>
                    <div>
                        <a href="{{ route('categoria.create') }}" class="btn btn-link  btn-soft-primary">
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
                        <h4 class="card-title"> Lista De Categorias </h4>
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
                                @foreach ($categorias as $categorium)
                                    <tr>
                                        <td>{{ $categorium->id }}</td>
                                        <td>{{ $categorium->nombre }}</td>
                                        @if ($categorium->estado == '1')
                                            <td style="color: green">Activado</td>
                                        @else
                                            <td style="color: red">Desactivado</td>
                                        @endif
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <form action="{{ route('categoria.destroy', $categorium) }}" method="POST"
                                                    class="casino">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('categoria.edit', $categorium) }}"
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
                                                        class="btn btn-danger {{ $categorium->estado == '0' ? 'disabled' : '' }}"
                                                        style="">Desactivar</button>

                                                </form>


                                            </ul>
                                        </td>

                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <form action="{{ route('categoria.activar', $categorium) }}" method="POST"
                                                    class="casino">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit"
                                                        class="btn btn-success {{ $categorium->estado == '1' ? 'disabled' : '' }}"
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
