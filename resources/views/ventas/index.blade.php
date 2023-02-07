@extends('layouts.panel')
@section('header')
<div class="container-fluid iq-container">
    <div class="row">
        <div class="col-md-12">
            <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                <div>
                    <h1>Venta</h1>
                </div>
                <div>
                    <a href="{{ route('venta.create') }}" class="btn btn-link  btn-soft-primary">
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
        <div class="col-sm-12 col-lg-12">
            <div class="card">
               
                <div class="card-body">
                    <div id="form-wizard1" class="">
                        <ul id="top-tab-list" class="p-0 row list-inline" style="  display: flex;
                            align-items: center;
                            justify-content: center;
                            ">
                            <li class="mb-2 col-lg-3 col-md-6 text-start active" id="account"
                                style="display:inline-block;">
                                <a href="javascript:void();">
                                    <div class="iq-icon me-3">
                                        <?xml version="1.0" encoding="iso-8859-1"?>
                                        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                        <svg height="30px" width="30px" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 303.188 303.188"
                                            xml:space="preserve">
                                            <g>
                                                <polygon style="fill:#E8E8E8;"
                                                    points="219.821,0 32.842,0 32.842,303.188 270.346,303.188 270.346,50.525 	" />
                                                <path style="fill:#FB3449;"
                                                    d="M230.013,149.935c-3.643-6.493-16.231-8.533-22.006-9.451c-4.552-0.724-9.199-0.94-13.803-0.936
                                                c-3.615-0.024-7.177,0.154-10.693,0.354c-1.296,0.087-2.579,0.199-3.861,0.31c-1.314-1.36-2.584-2.765-3.813-4.202
                                                c-7.82-9.257-14.134-19.755-19.279-30.664c1.366-5.271,2.459-10.772,3.119-16.485c1.205-10.427,1.619-22.31-2.288-32.251
                                                c-1.349-3.431-4.946-7.608-9.096-5.528c-4.771,2.392-6.113,9.169-6.502,13.973c-0.313,3.883-0.094,7.776,0.558,11.594
                                                c0.664,3.844,1.733,7.494,2.897,11.139c1.086,3.342,2.283,6.658,3.588,9.943c-0.828,2.586-1.707,5.127-2.63,7.603
                                                c-2.152,5.643-4.479,11.004-6.717,16.161c-1.18,2.557-2.335,5.06-3.465,7.507c-3.576,7.855-7.458,15.566-11.815,23.02
                                                c-10.163,3.585-19.283,7.741-26.857,12.625c-4.063,2.625-7.652,5.476-10.641,8.603c-2.822,2.952-5.69,6.783-5.941,11.024
                                                c-0.141,2.394,0.807,4.717,2.768,6.137c2.697,2.015,6.271,1.881,9.4,1.225c10.25-2.15,18.121-10.961,24.824-18.387
                                                c4.617-5.115,9.872-11.61,15.369-19.465c0.012-0.018,0.024-0.036,0.037-0.054c9.428-2.923,19.689-5.391,30.579-7.205
                                                c4.975-0.825,10.082-1.5,15.291-1.974c3.663,3.431,7.621,6.555,11.939,9.164c3.363,2.069,6.94,3.816,10.684,5.119
                                                c3.786,1.237,7.595,2.247,11.528,2.886c1.986,0.284,4.017,0.413,6.092,0.335c4.631-0.175,11.278-1.951,11.714-7.57
                                                C231.127,152.765,230.756,151.257,230.013,149.935z M119.144,160.245c-2.169,3.36-4.261,6.382-6.232,9.041
                                                c-4.827,6.568-10.34,14.369-18.322,17.286c-1.516,0.554-3.512,1.126-5.616,1.002c-1.874-0.11-3.722-0.937-3.637-3.065
                                                c0.042-1.114,0.587-2.535,1.423-3.931c0.915-1.531,2.048-2.935,3.275-4.226c2.629-2.762,5.953-5.439,9.777-7.918
                                                c5.865-3.805,12.867-7.23,20.672-10.286C120.035,158.858,119.587,159.564,119.144,160.245z M146.366,75.985
                                                c-0.602-3.514-0.693-7.077-0.323-10.503c0.184-1.713,0.533-3.385,1.038-4.952c0.428-1.33,1.352-4.576,2.826-4.993
                                                c2.43-0.688,3.177,4.529,3.452,6.005c1.566,8.396,0.186,17.733-1.693,25.969c-0.299,1.31-0.632,2.599-0.973,3.883
                                                c-0.582-1.601-1.137-3.207-1.648-4.821C147.945,83.048,146.939,79.482,146.366,75.985z M163.049,142.265
                                                c-9.13,1.48-17.815,3.419-25.979,5.708c0.983-0.275,5.475-8.788,6.477-10.555c4.721-8.315,8.583-17.042,11.358-26.197
                                                c4.9,9.691,10.847,18.962,18.153,27.214c0.673,0.749,1.357,1.489,2.053,2.22C171.017,141.096,166.988,141.633,163.049,142.265z
                                                 M224.793,153.959c-0.334,1.805-4.189,2.837-5.988,3.121c-5.316,0.836-10.94,0.167-16.028-1.542
                                                c-3.491-1.172-6.858-2.768-10.057-4.688c-3.18-1.921-6.155-4.181-8.936-6.673c3.429-0.206,6.9-0.341,10.388-0.275
                                                c3.488,0.035,7.003,0.211,10.475,0.664c6.511,0.726,13.807,2.961,18.932,7.186C224.588,152.585,224.91,153.321,224.793,153.959z" />
                                                <polygon style="fill:#FB3449;"
                                                    points="227.64,25.263 32.842,25.263 32.842,0 219.821,0 	" />
                                                <g>
                                                    <path style="fill:#A4A9AD;" d="M126.841,241.152c0,5.361-1.58,9.501-4.742,12.421c-3.162,2.921-7.652,4.381-13.472,4.381h-3.643
                                                    v15.917H92.022v-47.979h16.606c6.06,0,10.611,1.324,13.652,3.971C125.321,232.51,126.841,236.273,126.841,241.152z
                                                     M104.985,247.387h2.363c1.947,0,3.495-0.546,4.644-1.641c1.149-1.094,1.723-2.604,1.723-4.529c0-3.238-1.794-4.857-5.382-4.857
                                                    h-3.348C104.985,236.36,104.985,247.387,104.985,247.387z" />
                                                    <path style="fill:#A4A9AD;" d="M175.215,248.864c0,8.007-2.205,14.177-6.613,18.509s-10.606,6.498-18.591,6.498h-15.523v-47.979
                                                    h16.606c7.701,0,13.646,1.969,17.836,5.907C173.119,235.737,175.215,241.426,175.215,248.864z M161.76,249.324
                                                    c0-4.398-0.87-7.657-2.609-9.78c-1.739-2.122-4.381-3.183-7.926-3.183h-3.773v26.877h2.888c3.939,0,6.826-1.143,8.664-3.43
                                                    C160.841,257.523,161.76,254.028,161.76,249.324z" />
                                                    <path style="fill:#A4A9AD;" d="M196.579,273.871h-12.766v-47.979h28.355v10.403h-15.589v9.156h14.374v10.403h-14.374
                                                    L196.579,273.871L196.579,273.871z" />
                                                </g>
                                                <polygon style="fill:#D1D3D3;"
                                                    points="219.821,50.525 270.346,50.525 219.821,0 	" />
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="dark-wizard">Exportar PDF</span>
                                </a>
                            </li>
                            <li id="personal" class="mb-2 col-lg-3 col-md-6 text-start" style="display:inline-block;">
                                <a href="javascript:void();">
                                    <div class="iq-icon me-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="35px"
                                            height="35px">
                                            <path fill="#4CAF50"
                                                d="M41,10H25v28h16c0.553,0,1-0.447,1-1V11C42,10.447,41.553,10,41,10z" />
                                            <path fill="#FFF"
                                                d="M32 15H39V18H32zM32 25H39V28H32zM32 30H39V33H32zM32 20H39V23H32zM25 15H30V18H25zM25 25H30V28H25zM25 30H30V33H25zM25 20H30V23H25z" />
                                            <path fill="#2E7D32" d="M27 42L6 38 6 10 27 6z" />
                                            <path fill="#FFF"
                                                d="M19.129,31l-2.411-4.561c-0.092-0.171-0.186-0.483-0.284-0.938h-0.037c-0.046,0.215-0.154,0.541-0.324,0.979L13.652,31H9.895l4.462-7.001L10.274,17h3.837l2.001,4.196c0.156,0.331,0.296,0.725,0.42,1.179h0.04c0.078-0.271,0.224-0.68,0.439-1.22L19.237,17h3.515l-4.199,6.939l4.316,7.059h-3.74V31z" />
                                        </svg>

                                    </div>
                                    <span class="dark-wizard">Exportar Excel</span>
                                </a>
                            </li>


                        </ul>
                        <!-- fieldsets -->
                        <fieldset style="display: block;">
                            {!! Form::open(['route' => 'venta.pdffechas', 'autocomplete' => 'off', 'files' => true,
                            'class'=>'formulario']) !!}
                            <div class="col-sm-12">
                                <div class="row">


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Fecha
                                                Inicial:</label>
                                            {!! Form::date('fechainicial', null, ['class' => 'form-control block w-full
                                            mt-1'. ($errors->has('fechaNacimiento') ? ' border-red-600' : '')]) !!}

                                            @error('fechaterminal')
                                            <small class="text-danger">
                                                <b>{{$message}}</b>
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Fecha
                                                Salida:</label>
                                            {!! Form::date('fechaterminal', null, ['class' => 'form-control block w-full
                                            mt-1'. ($errors->has('fechaNacimiento') ? ' border-red-600' : '')]) !!}

                                            @error('fechaterminal')
                                            <small class="text-danger">
                                                <b>{{$message}}</b>
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Tienda</label>
                                        {{-- <select class="form-control selectpicker" data-live-search="true"
                                            name="product_id" id="product_id"> --}}
                                            <select class="form-control" name="sucursal_id" id="sucursal_id">
                                                <option value="" disabled selected>Selecccione una Tienda</option>
                                                @foreach ($sucursals as $sucursal)
                                                <option value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>
                                                @endforeach
                                            </select>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <br>
                                            <button type="submit"
                                                class="btn btn-danger rounded-pill btn-sm ms-auto mt-1">
                                                <?xml version="1.0" encoding="iso-8859-1"?>
                                                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                <svg height="30px" width="30px" version="1.1" id="Layer_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    viewBox="0 0 303.188 303.188" xml:space="preserve">
                                                    <g>
                                                        <polygon style="fill:#E8E8E8;"
                                                            points="219.821,0 32.842,0 32.842,303.188 270.346,303.188 270.346,50.525 	" />
                                                        <path style="fill:#FB3449;"
                                                            d="M230.013,149.935c-3.643-6.493-16.231-8.533-22.006-9.451c-4.552-0.724-9.199-0.94-13.803-0.936
                                                c-3.615-0.024-7.177,0.154-10.693,0.354c-1.296,0.087-2.579,0.199-3.861,0.31c-1.314-1.36-2.584-2.765-3.813-4.202
                                                c-7.82-9.257-14.134-19.755-19.279-30.664c1.366-5.271,2.459-10.772,3.119-16.485c1.205-10.427,1.619-22.31-2.288-32.251
                                                c-1.349-3.431-4.946-7.608-9.096-5.528c-4.771,2.392-6.113,9.169-6.502,13.973c-0.313,3.883-0.094,7.776,0.558,11.594
                                                c0.664,3.844,1.733,7.494,2.897,11.139c1.086,3.342,2.283,6.658,3.588,9.943c-0.828,2.586-1.707,5.127-2.63,7.603
                                                c-2.152,5.643-4.479,11.004-6.717,16.161c-1.18,2.557-2.335,5.06-3.465,7.507c-3.576,7.855-7.458,15.566-11.815,23.02
                                                c-10.163,3.585-19.283,7.741-26.857,12.625c-4.063,2.625-7.652,5.476-10.641,8.603c-2.822,2.952-5.69,6.783-5.941,11.024
                                                c-0.141,2.394,0.807,4.717,2.768,6.137c2.697,2.015,6.271,1.881,9.4,1.225c10.25-2.15,18.121-10.961,24.824-18.387
                                                c4.617-5.115,9.872-11.61,15.369-19.465c0.012-0.018,0.024-0.036,0.037-0.054c9.428-2.923,19.689-5.391,30.579-7.205
                                                c4.975-0.825,10.082-1.5,15.291-1.974c3.663,3.431,7.621,6.555,11.939,9.164c3.363,2.069,6.94,3.816,10.684,5.119
                                                c3.786,1.237,7.595,2.247,11.528,2.886c1.986,0.284,4.017,0.413,6.092,0.335c4.631-0.175,11.278-1.951,11.714-7.57
                                                C231.127,152.765,230.756,151.257,230.013,149.935z M119.144,160.245c-2.169,3.36-4.261,6.382-6.232,9.041
                                                c-4.827,6.568-10.34,14.369-18.322,17.286c-1.516,0.554-3.512,1.126-5.616,1.002c-1.874-0.11-3.722-0.937-3.637-3.065
                                                c0.042-1.114,0.587-2.535,1.423-3.931c0.915-1.531,2.048-2.935,3.275-4.226c2.629-2.762,5.953-5.439,9.777-7.918
                                                c5.865-3.805,12.867-7.23,20.672-10.286C120.035,158.858,119.587,159.564,119.144,160.245z M146.366,75.985
                                                c-0.602-3.514-0.693-7.077-0.323-10.503c0.184-1.713,0.533-3.385,1.038-4.952c0.428-1.33,1.352-4.576,2.826-4.993
                                                c2.43-0.688,3.177,4.529,3.452,6.005c1.566,8.396,0.186,17.733-1.693,25.969c-0.299,1.31-0.632,2.599-0.973,3.883
                                                c-0.582-1.601-1.137-3.207-1.648-4.821C147.945,83.048,146.939,79.482,146.366,75.985z M163.049,142.265
                                                c-9.13,1.48-17.815,3.419-25.979,5.708c0.983-0.275,5.475-8.788,6.477-10.555c4.721-8.315,8.583-17.042,11.358-26.197
                                                c4.9,9.691,10.847,18.962,18.153,27.214c0.673,0.749,1.357,1.489,2.053,2.22C171.017,141.096,166.988,141.633,163.049,142.265z
                                                 M224.793,153.959c-0.334,1.805-4.189,2.837-5.988,3.121c-5.316,0.836-10.94,0.167-16.028-1.542
                                                c-3.491-1.172-6.858-2.768-10.057-4.688c-3.18-1.921-6.155-4.181-8.936-6.673c3.429-0.206,6.9-0.341,10.388-0.275
                                                c3.488,0.035,7.003,0.211,10.475,0.664c6.511,0.726,13.807,2.961,18.932,7.186C224.588,152.585,224.91,153.321,224.793,153.959z" />
                                                        <polygon style="fill:#FB3449;"
                                                            points="227.64,25.263 32.842,25.263 32.842,0 219.821,0 	" />
                                                        <g>
                                                            <path style="fill:#A4A9AD;" d="M126.841,241.152c0,5.361-1.58,9.501-4.742,12.421c-3.162,2.921-7.652,4.381-13.472,4.381h-3.643
                                                    v15.917H92.022v-47.979h16.606c6.06,0,10.611,1.324,13.652,3.971C125.321,232.51,126.841,236.273,126.841,241.152z
                                                     M104.985,247.387h2.363c1.947,0,3.495-0.546,4.644-1.641c1.149-1.094,1.723-2.604,1.723-4.529c0-3.238-1.794-4.857-5.382-4.857
                                                    h-3.348C104.985,236.36,104.985,247.387,104.985,247.387z" />
                                                            <path style="fill:#A4A9AD;" d="M175.215,248.864c0,8.007-2.205,14.177-6.613,18.509s-10.606,6.498-18.591,6.498h-15.523v-47.979
                                                    h16.606c7.701,0,13.646,1.969,17.836,5.907C173.119,235.737,175.215,241.426,175.215,248.864z M161.76,249.324
                                                    c0-4.398-0.87-7.657-2.609-9.78c-1.739-2.122-4.381-3.183-7.926-3.183h-3.773v26.877h2.888c3.939,0,6.826-1.143,8.664-3.43
                                                    C160.841,257.523,161.76,254.028,161.76,249.324z" />
                                                            <path style="fill:#A4A9AD;" d="M196.579,273.871h-12.766v-47.979h28.355v10.403h-15.589v9.156h14.374v10.403h-14.374
                                                    L196.579,273.871L196.579,273.871z" />
                                                        </g>
                                                        <polygon style="fill:#D1D3D3;"
                                                            points="219.821,50.525 270.346,50.525 219.821,0 	" />
                                                    </g>
                                                </svg> Exportar Información




                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}

                            <button type="button" name="next" class="btn btn-primary next action-button float-end"
                                value="Next">Siguiente</button>
                        </fieldset>
                        <fieldset style="display: none;">
                            {!! Form::open(['route' => 'venta.exportfechas', 'autocomplete' => 'off', 'files' => true,
                            'class'=>'formulario']) !!}

                            <div class="col-sm-12">
                                <div class="row">


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Fecha
                                                Inicial:</label>
                                            {!! Form::date('fechainicial', null, ['class' => 'form-control block w-full
                                            mt-1'. ($errors->has('fechaNacimiento') ? ' border-red-600' : '')]) !!}

                                            @error('fechaterminal')
                                            <small class="text-danger">
                                                <b>{{$message}}</b>
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Fecha
                                                Salida:</label>
                                            {!! Form::date('fechaterminal', null, ['class' => 'form-control block w-full
                                            mt-1'. ($errors->has('fechaNacimiento') ? ' border-red-600' : '')]) !!}

                                            @error('fechaterminal')
                                            <small class="text-danger">
                                                <b>{{$message}}</b>
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Tienda</label>
                                        {{-- <select class="form-control selectpicker" data-live-search="true"
                                            name="product_id" id="product_id"> --}}
                                            <select class="form-control" name="sucursal_id" id="sucursal_id">
                                                <option value="" disabled selected>Selecccione una Tienda</option>
                                                @foreach ($sucursals as $sucursal)
                                                <option value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>
                                                @endforeach
                                            </select>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <br>
                                            <button type="submit"
                                                class="btn btn-success rounded-pill btn-sm ms-auto mt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="35px"
                                                    height="35px">
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
                            <button type="button" name="previous"
                                class="btn btn-dark previous action-button-previous float-end me-1"
                                value="Previous">Anterior</button>
                        </fieldset>


                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title"> Lista De Ventas </h4>
                </div>

            </div>
            <div class="card">
                <div class="row">
                    <div class="card-body">
                        {!! Form::open(['route' => 'venta.indexventas', 'autocomplete' => 'off', 'files' => true,
                        'class'=>'formulario']) !!}
                        <div class="col-sm-12">
                            <div class="row">


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Fecha
                                            Inicial:</label>
                                        {!! Form::date('fechainicial', null, ['class' => 'form-control block w-full
                                        mt-1'. ($errors->has('fechaNacimiento') ? ' border-red-600' : '')]) !!}

                                        @error('fechaterminal')
                                        <small class="text-danger">
                                            <b>{{$message}}</b>
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Fecha Salida:</label>
                                        {!! Form::date('fechaterminal', null, ['class' => 'form-control block w-full
                                        mt-1'. ($errors->has('fechaNacimiento') ? ' border-red-600' : '')]) !!}

                                        @error('fechaterminal')
                                        <small class="text-danger">
                                            <b>{{$message}}</b>
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Tienda</label>
                                    {{-- <select class="form-control selectpicker" data-live-search="true"
                                        name="product_id" id="product_id"> --}}
                                        <select class="form-control" name="sucursal_id" id="sucursal_id">
                                            <option value="" disabled selected>Selecccione una Tienda</option>
                                            @foreach ($sucursals as $sucursal)
                                            <option value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>
                                            @endforeach
                                        </select>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <br>
                                        <button type="submit" class="btn btn-danger rounded-pill btn-sm ms-auto mt-1">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M2 10.6699C2 5.88166 5.84034 2 10.5776 2C12.8526 2 15.0343 2.91344 16.6429 4.53936C18.2516 6.16529 19.1553 8.37052 19.1553 10.6699C19.1553 15.4582 15.3149 19.3399 10.5776 19.3399C5.84034 19.3399 2 15.4582 2 10.6699ZM19.0134 17.6543L21.568 19.7164H21.6124C22.1292 20.2388 22.1292 21.0858 21.6124 21.6082C21.0955 22.1306 20.2576 22.1306 19.7407 21.6082L17.6207 19.1785C17.4203 18.9766 17.3076 18.7024 17.3076 18.4164C17.3076 18.1304 17.4203 17.8562 17.6207 17.6543C18.0072 17.2704 18.6268 17.2704 19.0134 17.6543Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            Buscar Información




                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped" data-toggle="data-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Fecha</th>
                                <th>Sucursal</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th style="width:50px;">Acciones</th>

                                {{-- <th class="text-center ">Acciones</th> --}}

                                {{-- <th>Estado</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ventas as $ventum)
                            <tr>
                                <td>{{ $ventum->id }}</td>
                                <td>{{ $ventum->venta_fecha }}</td>
                                <td>{{ $ventum->sucursales->nombre }}</td>

                                <td>{{ $ventum->total }}</td>

                                @if ($ventum->estado == 'VALIDO')
                                <td>
                                    <a class="jsgrid-button btn btn-success"
                                        href="{{route('cambio.estado.venta', $ventum)}}" title="Editar">
                                        Activo <i class="fas fa-check"></i>
                                    </a>
                                </td>
                                @else
                                <td>
                                    <a class="jsgrid-button btn btn-danger"
                                        href="{{route('cambio.estado.venta', $ventum)}}" title="Editar">
                                        Cancelado <i class="fas fa-times"></i>
                                    </a>
                                </td>
                                @endif
                                <td style="width: 50px;">

                                    <a href="{{route('venta.pdf',$ventum)}}" class="jsgrid-button jsgrid-edit-button">
                                        <svg style="color: red" width="32" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.92574 16.39H14.3119C14.7178 16.39 15.0545 16.05 15.0545 15.64C15.0545 15.23 14.7178 14.9 14.3119 14.9H8.92574C8.5198 14.9 8.18317 15.23 8.18317 15.64C8.18317 16.05 8.5198 16.39 8.92574 16.39ZM12.2723 9.9H8.92574C8.5198 9.9 8.18317 10.24 8.18317 10.65C8.18317 11.06 8.5198 11.39 8.92574 11.39H12.2723C12.6782 11.39 13.0149 11.06 13.0149 10.65C13.0149 10.24 12.6782 9.9 12.2723 9.9ZM19.3381 9.02561C19.5708 9.02292 19.8242 9.02 20.0545 9.02C20.302 9.02 20.5 9.22 20.5 9.47V17.51C20.5 19.99 18.5099 22 16.0545 22H8.17327C5.59901 22 3.5 19.89 3.5 17.29V6.51C3.5 4.03 5.5 2 7.96535 2H13.2525C13.5099 2 13.7079 2.21 13.7079 2.46V5.68C13.7079 7.51 15.203 9.01 17.0149 9.02C17.4381 9.02 17.8112 9.02316 18.1377 9.02593C18.3917 9.02809 18.6175 9.03 18.8168 9.03C18.9578 9.03 19.1405 9.02789 19.3381 9.02561ZM19.6111 7.566C18.7972 7.569 17.8378 7.566 17.1477 7.559C16.0527 7.559 15.1507 6.648 15.1507 5.542V2.906C15.1507 2.475 15.6685 2.261 15.9646 2.572C16.5004 3.13476 17.2368 3.90834 17.9699 4.67837C18.7009 5.44632 19.4286 6.21074 19.9507 6.759C20.2398 7.062 20.0279 7.565 19.6111 7.566Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>

                                    <a href="{{route('venta.show', $ventum)}}" class="jsgrid-button jsgrid-edit-button">
                                        <svg width="32" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12ZM17.7366 6.04606C19.4439 7.36485 20.8976 9.29455 21.9415 11.7091C22.0195 11.8933 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8933 2.05854 11.7091C4.14634 6.88 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM12.0012 14.4124C13.3378 14.4124 14.4304 13.3264 14.4304 11.9979C14.4304 10.6597 13.3378 9.57362 12.0012 9.57362C11.8841 9.57362 11.767 9.58332 11.6597 9.60272C11.6207 10.6694 10.7426 11.5227 9.65971 11.5227H9.61093C9.58166 11.6779 9.56215 11.833 9.56215 11.9979C9.56215 13.3264 10.6548 14.4124 12.0012 14.4124Z"
                                                fill="currentColor"></path>
                                        </svg> Ver
                                    </a>


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