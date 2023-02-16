@extends('layouts.panel')

@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Bienvenido al Sistema!</h1>
                        <p>Podras interactuar con las diferentes funciones
                        </p>
                    </div>

                </div>
            </div>
        </div>
    @endsection
    @section('content')
        <br>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" data-aos="fade-up" data-aos-delay="800">
                            <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
                                <div class="header-title">
                                    <p class="mb-0 text-black text-center"><b>Alertas de Duas</b></p>
                                </div>

                            </div>

                            <div class="card-body">
                                @foreach ($alertaduas as $alertadua)

                                    
                                    <div id="alerts-disimissible-component" class="tab-pane tab-example-result fade active show" role="tabpanel" aria-labelledby="alerts-disimissible-component-tab">
                                        <div class="alert alert-success alert-dismissible fade show " role="alert">
                                          <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.94118 10.7474V20.7444C5.94118 21.0758 5.81103 21.3936 5.57937 21.628C5.3477 21.8623 5.0335 21.994 4.70588 21.994H2.23529C1.90767 21.994 1.59347 21.8623 1.36181 21.628C1.13015 21.3936 1 21.0758 1 20.7444V11.997C1 11.6656 1.13015 11.3477 1.36181 11.1134C1.59347 10.879 1.90767 10.7474 2.23529 10.7474H5.94118ZM5.94118 10.7474C7.25166 10.7474 8.50847 10.2207 9.43512 9.28334C10.3618 8.34594 10.8824 7.07456 10.8824 5.74887V4.49925C10.8824 3.83641 11.1426 3.20071 11.606 2.73201C12.0693 2.26331 12.6977 2 13.3529 2C14.0082 2 14.6366 2.26331 15.0999 2.73201C15.5632 3.20071 15.8235 3.83641 15.8235 4.49925V10.7474H19.5294C20.1847 10.7474 20.8131 11.0107 21.2764 11.4794C21.7397 11.9481 22 12.5838 22 13.2466L20.7647 19.4947C20.5871 20.2613 20.25 20.9196 19.8045 21.3704C19.3589 21.8211 18.8288 22.04 18.2941 21.994H9.64706C8.6642 21.994 7.72159 21.599 7.0266 20.896C6.33162 20.1929 5.94118 19.2394 5.94118 18.2451" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <strong>Atención!!!</strong> Su DUA esta por recoger en la fecha <b class="text-black">  {{ $alertadua->mes_cobro }}</b>
                                          De La Sucursal {{$alertadua->sucursal->nombre}}, el N° De la Dua <b class="text-black">#{{ $alertadua->numero_dua }}</b>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                                        <a href="{{ route('dua.show', $alertadua->id) }}"> <svg width="32"
                                            viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12ZM17.7366 6.04606C19.4439 7.36485 20.8976 9.29455 21.9415 11.7091C22.0195 11.8933 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8933 2.05854 11.7091C4.14634 6.88 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM12.0012 14.4124C13.3378 14.4124 14.4304 13.3264 14.4304 11.9979C14.4304 10.6597 13.3378 9.57362 12.0012 9.57362C11.8841 9.57362 11.767 9.58332 11.6597 9.60272C11.6207 10.6694 10.7426 11.5227 9.65971 11.5227H9.61093C9.58166 11.6779 9.56215 11.833 9.56215 11.9979C9.56215 13.3264 10.6548 14.4124 12.0012 14.4124Z"
                                                fill="currentColor"></path>
                                        </svg> Ver Dua</a>
                                        </div>
                                        </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" data-aos="fade-up" data-aos-delay="800">
                            <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
                                <div class="header-title">
                                    <p class="mb-0 text-black text-center"><b>Alertas de Comprobantes</b></p>
                                </div>

                            </div>

                            <div class="card-body">
                                @foreach ($comprobantes as $comprobante)
                                <div id="alerts-disimissible-component" class="tab-pane tab-example-result fade active show" role="tabpanel" aria-labelledby="alerts-disimissible-component-tab">
                                    <div class="alert alert-success alert-dismissible fade show " role="alert">
                                      <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.94118 10.7474V20.7444C5.94118 21.0758 5.81103 21.3936 5.57937 21.628C5.3477 21.8623 5.0335 21.994 4.70588 21.994H2.23529C1.90767 21.994 1.59347 21.8623 1.36181 21.628C1.13015 21.3936 1 21.0758 1 20.7444V11.997C1 11.6656 1.13015 11.3477 1.36181 11.1134C1.59347 10.879 1.90767 10.7474 2.23529 10.7474H5.94118ZM5.94118 10.7474C7.25166 10.7474 8.50847 10.2207 9.43512 9.28334C10.3618 8.34594 10.8824 7.07456 10.8824 5.74887V4.49925C10.8824 3.83641 11.1426 3.20071 11.606 2.73201C12.0693 2.26331 12.6977 2 13.3529 2C14.0082 2 14.6366 2.26331 15.0999 2.73201C15.5632 3.20071 15.8235 3.83641 15.8235 4.49925V10.7474H19.5294C20.1847 10.7474 20.8131 11.0107 21.2764 11.4794C21.7397 11.9481 22 12.5838 22 13.2466L20.7647 19.4947C20.5871 20.2613 20.25 20.9196 19.8045 21.3704C19.3589 21.8211 18.8288 22.04 18.2941 21.994H9.64706C8.6642 21.994 7.72159 21.599 7.0266 20.896C6.33162 20.1929 5.94118 19.2394 5.94118 18.2451" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                      <strong>Atención!!!</strong> El Comprobante esta por cobrar en la fecha <b class="text-black">  {{ $comprobante->fecha_pago }}</b>
                                      De La Sucursal {{$comprobante->sucursal->nombre}}, el N° Del Comprobante <b class="text-black">#{{ $comprobante->numero_comprobante }}</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                                    <a href="{{ route('comprobante.show', $comprobante->id) }}"> <svg width="32"
                                        viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12ZM17.7366 6.04606C19.4439 7.36485 20.8976 9.29455 21.9415 11.7091C22.0195 11.8933 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8933 2.05854 11.7091C4.14634 6.88 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM12.0012 14.4124C13.3378 14.4124 14.4304 13.3264 14.4304 11.9979C14.4304 10.6597 13.3378 9.57362 12.0012 9.57362C11.8841 9.57362 11.767 9.58332 11.6597 9.60272C11.6207 10.6694 10.7426 11.5227 9.65971 11.5227H9.61093C9.58166 11.6779 9.56215 11.833 9.56215 11.9979C9.56215 13.3264 10.6548 14.4124 12.0012 14.4124Z"
                                            fill="currentColor"></path>
                                    </svg> Ver Comprobante</a>
                                    </div>
                                    </div>
                                    
                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card" data-aos="fade-up" data-aos-delay="800">
                            <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
                                <div class="header-title">
                                    <p class="mb-0 text-black text-center"><b>Alertas de Prestamos</b></p>
                                </div>

                            </div>

                            <div class="card-body">
                                @foreach ($alertaprestamos as $prestamo)
                                    @if (
                                        \Carbon\Carbon::now('America/Lima')->format('Y-m-d') <=
                                            \Carbon\Carbon::parse($prestamo->fecha_pago)->subDay(3)->format('Y-m-d') || \Carbon\Carbon::now('America/Lima')->format('Y-m-d') <=
                                            \Carbon\Carbon::parse($prestamo->fecha_pago)->format('Y-m-d'))
                                        <div class="alert alert-warning  mt-3" role="alert">
                                            <svg width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.94118 10.7474V20.7444C5.94118 21.0758 5.81103 21.3936 5.57937 21.628C5.3477 21.8623 5.0335 21.994 4.70588 21.994H2.23529C1.90767 21.994 1.59347 21.8623 1.36181 21.628C1.13015 21.3936 1 21.0758 1 20.7444V11.997C1 11.6656 1.13015 11.3477 1.36181 11.1134C1.59347 10.879 1.90767 10.7474 2.23529 10.7474H5.94118ZM5.94118 10.7474C7.25166 10.7474 8.50847 10.2207 9.43512 9.28334C10.3618 8.34594 10.8824 7.07456 10.8824 5.74887V4.49925C10.8824 3.83641 11.1426 3.20071 11.606 2.73201C12.0693 2.26331 12.6977 2 13.3529 2C14.0082 2 14.6366 2.26331 15.0999 2.73201C15.5632 3.20071 15.8235 3.83641 15.8235 4.49925V10.7474H19.5294C20.1847 10.7474 20.8131 11.0107 21.2764 11.4794C21.7397 11.9481 22 12.5838 22 13.2466L20.7647 19.4947C20.5871 20.2613 20.25 20.9196 19.8045 21.3704C19.3589 21.8211 18.8288 22.04 18.2941 21.994H9.64706C8.6642 21.994 7.72159 21.599 7.0266 20.896C6.33162 20.1929 5.94118 19.2394 5.94118 18.2451"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <strong>Solo faltan Pocos Dias!</strong>
                                            Para que culmine el pago con la fecha programada para el {{$prestamo->fecha_pago}}... co numero de credito {{$prestamo->prestamo->numerocredito}} <strong><a href="{{route('prestamo.show', $prestamo->prestamo->id)}}">Click para ver el detalle</a></strong>
                                        </div>
                                    @endif
                                @endforeach

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
    
