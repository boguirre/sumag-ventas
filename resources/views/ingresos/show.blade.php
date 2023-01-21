@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Detalle de Ingreso</h1>
                    </div>
                    {{-- <div>
                  <a href="{{route('categoria.create')}}" class="btn btn-link  btn-soft-primary">
                    <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 12.5537C12.2546 12.5537 14.4626 10.3171 14.4626 7.52684C14.4626 4.73663 12.2546 2.5 9.5 2.5C6.74543 2.5 4.53737 4.73663 4.53737 7.52684C4.53737 10.3171 6.74543 12.5537 9.5 12.5537ZM9.5 15.0152C5.45422 15.0152 2 15.6621 2 18.2464C2 20.8298 5.4332 21.5 9.5 21.5C13.5448 21.5 17 20.8531 17 18.2687C17 15.6844 13.5668 15.0152 9.5 15.0152ZM19.8979 9.58786H21.101C21.5962 9.58786 22 9.99731 22 10.4995C22 11.0016 21.5962 11.4111 21.101 11.4111H19.8979V12.5884C19.8979 13.0906 19.4952 13.5 18.999 13.5C18.5038 13.5 18.1 13.0906 18.1 12.5884V11.4111H16.899C16.4027 11.4111 16 11.0016 16 10.4995C16 9.99731 16.4027 9.58786 16.899 9.58786H18.1V8.41162C18.1 7.90945 18.5038 7.5 18.999 7.5C19.4952 7.5 19.8979 7.90945 19.8979 8.41162V9.58786Z" fill="currentColor"></path>                            </svg>                        
                      Registrar
                  </a>
              </div> --}}
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
                    {{-- {!! Form::open(['route' => 'ingreso.store', 'autocomplete' => 'off', 'files' => true, 'class' => '']) !!} --}}
                    <div class="row">
                        <div class="col-md-3">
                          <label for="">Usuario</label>
                          <input type="text" name="" id="codigo" value="{{$ingreso->user->name}}" class="form-control" disabled>
                        </div>
                        <div class="col-md-3">
                            <label for="">Fecha de Ingreso</label>
                            <input type="text" name="" id="stock" value="{{$ingreso->ingreso_fecha}}" class="form-control" disabled>
                    </div>
                    <div class="col-md-3">
                        <label for="">Total Entrante</label>
                        <input type="text" name="" id="uni_medida" value="{{$ingreso->total}}" class="form-control" disabled>
                      </div>

                    <div class="col-md-3">
                        <label for="quantity">Estado</label>
                        @if ($ingreso->estado == 'VALIDO')
                        <a class="form-control btn btn-success">{{$ingreso->estado}}</a>
                        @else
                        <a href="" class="form-control btn btn-danger">{{$ingreso->estado}}</a>
                        @endif
                    </div>
                    </div>
                    <br>

                    {{-- <div class="form-group">
                        <button type="button" id="agregar" class="btn btn-primary rounded-pill" style="float:right">                             <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z" fill="currentColor"></path>                            </svg>                        Agregar producto</button>
                    </div> --}}
                    
                    <div class="form-group">
                        <h4 class="card-title">Detalles de Ingreso</h4>
                        <div class="table-responsive col-md-12">
                            <table id="detalles" class="table">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Codigo</th>
                                        <th>Producto</th>
                                        <th>Medida</th>
                                        <th>Cantidad</th>
                                        <th>SubTotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($ingresoDetalles as $item)
                                      <tr>
                                        <td><a class="btn btn-primary">{{$item->id}}</a></td>
                                        <td>{{$item->articulo->codigo}}</td>
                                        <td>{{$item->articulo->nombre}}</td>
                                        <td>{{$item->articulo->medida->nombre}}</td>
                                        <td>{{$item->cantidad}}</td>
                                        <td>{{$item->cantidad}}</td>
                                      </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="card-footer text-muted">
                         <a href="{{route('ingreso.index')}}" class="btn btn-light">
                            Regresar
                         </a>
                    </div>
                    
                </div>



            </div>
            
        </div>
@endsection