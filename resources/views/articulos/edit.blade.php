@section('title', 'Editar Articulo')
@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Editar Articulo</h1>
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
                {{-- <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Basic Form</h4>
                </div>
            </div> --}}
                <div class="card-body">
                    {!! Form::model($articulo, [
                        'route' => ['articulo.update', $articulo],
                        'method' => 'put',
                        'files' => true,
                        'class' => 'formulario',
                    ]) !!}

                    <div class="form-group">
                        <label class="form-label" for="pwd">Codigo:</label>
                        <input type="text" class="form-control" id="codigo" name="codigo"
                            placeholder="Ingrese El codigo" value="{{ $articulo->codigo }}">
                        @error('codigo')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="Ingrese El Nombre" value="{{ $articulo->nombre }}">
                        @error('nombre')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Slug :</label>
                        <input type="text" class="form-control" id="slug" name="slug"
                            placeholder="Ingrese El Slug" readonly value="{{ $articulo->slug }}">
                        @error('slug')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Seleccione una Categoria:</label>
                        {!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control']) !!}

                        @error('categoria_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Seleccione una Unidad de Medida:</label>
                        {!! Form::select('medida_id', $medidas, null, ['class' => 'form-control']) !!}

                        @error('medida_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Estado de Publicacion :</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="publicacion" id="publicacion"
                                value="{{ old('publicacion', 0) }}" {{ $articulo->publicacion == '0' ? 'checked' : '' }}>
                            <label for="radio1" class="form-check-label pl-2">No publicar en la web</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="publicacion" id="pubicacion"
                                value="{{ old('publicacion', 1) }}" {{ $articulo->publicacion == '1' ? 'checked' : '' }}>
                            <label for="radio2" class="form-check-label pl-2">Publicar en la web</label>
                        </div>
                        @error('publicacion')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Descripcion:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="5">{{ $articulo->descripcion }}</textarea>
                        @error('descripcion')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Stock Minimo:</label>
                        <input type="number" class="form-control" id="stock_minimo" name="stock_minimo"
                            placeholder="Ingrese El stock minimo" value="{{ $articulo->stock_minimo }}">
                        @error('stock_minimo')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Precio Compra:</label>
                        <input type="number" class="form-control" id="precio_unitario" name="precio_unitario"
                            placeholder="Ingrese El precio compra" value="{{ $articulo->precio_unitario }}">
                        @error('precio_unitario')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Precio Venta:</label>
                        <input type="number" class="form-control" id="precio_venta" name="precio_venta"
                            placeholder="Ingrese El precio venta" value="{{ $articulo->precio_venta }}">
                        @error('precio_venta')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Seleccione una imagen:</label>
                        <input type="file" class="form-control" id="file" name="file" accept="image/*">
                        @error('file')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <figure>
                            @isset($articulo->images)
                                <img id="picture" class="form-group" style="width: 250px; height: 250px; "
                                    src="{{ Storage::url($articulo->images->url) }}" alt="">
                            @else
                                <img id="picture" class="w-full h-64 object-cover object-center"
                                    style="width: 250px; height: 250px; " alt=""
                                    src="https://images.pexels.com/photos/365067/pexels-photo-365067.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                            @endisset
                        </figure>
                        <div>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <a href="{{ route('articulo.index') }}" class="btn btn-danger">
                                Cancelar
                            </a>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            @endsection

            @section('scripts')
                <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
                <script src="prototype.js"></script>
                <script src="jquery.js"></script>
                <script>
                    jQuery.noConflict();

                    (function($) {
                        $(document).ready(function() {
                            $('#nombre').stringToSlug({
                                setEvents: 'keyup keydown blur',
                                getPut: '#slug',
                                space: '-'
                            });
                        });
                    })(jQuery);
                </script>

                <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#descripcion'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>

                <script>
                    $('.formulario').submit(function(e) {
                        e.preventDefault()

                        Swal.fire({
                            title: 'Estas seguro de actualizar?',
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
                        });

                    });
                </script>
            @endsection
