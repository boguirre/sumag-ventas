@section('title', 'Módulo Articulo')
@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Articulos</h1>
                    </div>
                    <div>
                        
                        <a href="{{ route('articulo.create') }}" class="btn btn-primary" style="color: white; border-radius: 12px">
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
                        <h4 class="card-title"> Lista De Articulos </h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Medida</th>
                                    <th>Stock</th>
                                    <th>P. Venta</th>
                                    <th class="text-center ">Acciones</th>

                                    {{-- <th>Estado</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articulos as $articulo)
                                    <tr>
                                        <td>
                                                <div style="background: {{ $articulo->estado == 1 ? 'green' : 'red' }}; width: 25px; height: 25px; color: white" class="text-center">
                                                    {{ $articulo->id }}
                                                </div>
                                               
                                                    
                                        </td>

                                        <td>
                                            {{ $articulo->codigo }}</td>

                                        <td>{{ $articulo->nombre }}</td>

                                        <td>{{ $articulo->categoria->nombre }}</td>

                                        <td>{{ $articulo->medida->nombre }}</td>

                                        <td>
                                            @if($articulo->stock >= $articulo->stock_minimo)
                                            <p class="h2">
                                                <span class="badge rounded-pill bg-success" style="display: block">{{$articulo->stock}} </span>
    
                                            </p>            
                                            @else
                                            <p class="h2">
                                                <span class="badge rounded-pill  bg-danger" style="display: block">{{$articulo->stock }}</span>
                                
                                            </p>
            
                                            @endif
                                        </td>

                                        <td>{{ $articulo->precio_venta }}</td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                    @if ($articulo->estado == 1)
                                                    <form action="{{ route('articulo.destroy', $articulo) }}" method="POST"
                                                    class="casino formulario">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('articulo.edit', $articulo) }}" class="bs-tooltip"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"
                                                        data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-edit-2 p-1 br-8 mb-1">
                                                            <path
                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg></a>

                                                        <button type="submit" class="btn btn-danger" style="">Dar
                                                            baja</button>

                                                        
                                                        </form>
                                                    
                                                @else
                                                <form action="{{ route('articulo.destroy', $articulo) }}" method="POST"
                                                class="casino formulario2">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('articulo.edit', $articulo) }}" class="bs-tooltip"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"
                                                        data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-edit-2 p-1 br-8 mb-1">
                                                            <path
                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg></a>
                                                <button type="submit" class="btn btn-success"
                                                            style="">Activar</button>

                                                </form>
                                                @endif
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
    </div>
@endsection

@section('scripts')
                <script>
                    $('.formulario').submit(function(e) {
                        e.preventDefault()

                        Swal.fire({
                            title: 'Estas seguro de dar de baja?',
                            text: "¡No podrás revertir esto!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Dar Baja',
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
            title: 'Estas seguro de Activar este articulo?',
            text: "¡No podrás revertir esto!",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si Activar',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.value) {


                this.submit()

            }
        })

    })
</script>
@endsection
