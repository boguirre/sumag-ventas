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
            <div class="col-md-12 col-lg-10">
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

                                    <div class="alert alert-warning  mt-3" role="alert">

                                        <svg width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.94118 10.7474V20.7444C5.94118 21.0758 5.81103 21.3936 5.57937 21.628C5.3477 21.8623 5.0335 21.994 4.70588 21.994H2.23529C1.90767 21.994 1.59347 21.8623 1.36181 21.628C1.13015 21.3936 1 21.0758 1 20.7444V11.997C1 11.6656 1.13015 11.3477 1.36181 11.1134C1.59347 10.879 1.90767 10.7474 2.23529 10.7474H5.94118ZM5.94118 10.7474C7.25166 10.7474 8.50847 10.2207 9.43512 9.28334C10.3618 8.34594 10.8824 7.07456 10.8824 5.74887V4.49925C10.8824 3.83641 11.1426 3.20071 11.606 2.73201C12.0693 2.26331 12.6977 2 13.3529 2C14.0082 2 14.6366 2.26331 15.0999 2.73201C15.5632 3.20071 15.8235 3.83641 15.8235 4.49925V10.7474H19.5294C20.1847 10.7474 20.8131 11.0107 21.2764 11.4794C21.7397 11.9481 22 12.5838 22 13.2466L20.7647 19.4947C20.5871 20.2613 20.25 20.9196 19.8045 21.3704C19.3589 21.8211 18.8288 22.04 18.2941 21.994H9.64706C8.6642 21.994 7.72159 21.599 7.0266 20.896C6.33162 20.1929 5.94118 19.2394 5.94118 18.2451"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <strong>{{ $alertadua->mes_cobro }}</strong>
                                        <a href="{{ route('dua.show', $alertadua->id) }}"> <svg width="32"
                                            viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12ZM17.7366 6.04606C19.4439 7.36485 20.8976 9.29455 21.9415 11.7091C22.0195 11.8933 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8933 2.05854 11.7091C4.14634 6.88 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM12.0012 14.4124C13.3378 14.4124 14.4304 13.3264 14.4304 11.9979C14.4304 10.6597 13.3378 9.57362 12.0012 9.57362C11.8841 9.57362 11.767 9.58332 11.6597 9.60272C11.6207 10.6694 10.7426 11.5227 9.65971 11.5227H9.61093C9.58166 11.6779 9.56215 11.833 9.56215 11.9979C9.56215 13.3264 10.6548 14.4124 12.0012 14.4124Z"
                                                fill="currentColor"></path>
                                        </svg> Ver Dua</a>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" data-aos="fade-up" data-aos-delay="800">
                            <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
                                <div class="header-title">
                                    <p class="mb-0 text-black text-center"><b>Alertas de Duas</b></p>
                                </div>

                            </div>

                            <div class="card-body">
                                @foreach ($alertaduas as $alertadua)

                                    <div class="alert alert-warning  mt-3" role="alert">

                                        <svg width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.94118 10.7474V20.7444C5.94118 21.0758 5.81103 21.3936 5.57937 21.628C5.3477 21.8623 5.0335 21.994 4.70588 21.994H2.23529C1.90767 21.994 1.59347 21.8623 1.36181 21.628C1.13015 21.3936 1 21.0758 1 20.7444V11.997C1 11.6656 1.13015 11.3477 1.36181 11.1134C1.59347 10.879 1.90767 10.7474 2.23529 10.7474H5.94118ZM5.94118 10.7474C7.25166 10.7474 8.50847 10.2207 9.43512 9.28334C10.3618 8.34594 10.8824 7.07456 10.8824 5.74887V4.49925C10.8824 3.83641 11.1426 3.20071 11.606 2.73201C12.0693 2.26331 12.6977 2 13.3529 2C14.0082 2 14.6366 2.26331 15.0999 2.73201C15.5632 3.20071 15.8235 3.83641 15.8235 4.49925V10.7474H19.5294C20.1847 10.7474 20.8131 11.0107 21.2764 11.4794C21.7397 11.9481 22 12.5838 22 13.2466L20.7647 19.4947C20.5871 20.2613 20.25 20.9196 19.8045 21.3704C19.3589 21.8211 18.8288 22.04 18.2941 21.994H9.64706C8.6642 21.994 7.72159 21.599 7.0266 20.896C6.33162 20.1929 5.94118 19.2394 5.94118 18.2451"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <strong>{{ $alertadua->mes_cobro }}</strong>
                                        <a href="{{ route('dua.show', $alertadua->id) }}"> <svg width="32"
                                            viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12ZM17.7366 6.04606C19.4439 7.36485 20.8976 9.29455 21.9415 11.7091C22.0195 11.8933 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8933 2.05854 11.7091C4.14634 6.88 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM12.0012 14.4124C13.3378 14.4124 14.4304 13.3264 14.4304 11.9979C14.4304 10.6597 13.3378 9.57362 12.0012 9.57362C11.8841 9.57362 11.767 9.58332 11.6597 9.60272C11.6207 10.6694 10.7426 11.5227 9.65971 11.5227H9.61093C9.58166 11.6779 9.56215 11.833 9.56215 11.9979C9.56215 13.3264 10.6548 14.4124 12.0012 14.4124Z"
                                                fill="currentColor"></path>
                                        </svg> Ver Dua</a>
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
                                        \Carbon\Carbon::now('America/Lima')->format('Y-m-d') ==
                                            \Carbon\Carbon::parse($prestamo->fecha_vencimiento)->subDay(3)->format('Y-m-d'))
                                        <div class="alert alert-warning  mt-3" role="alert">
                                            <svg width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.94118 10.7474V20.7444C5.94118 21.0758 5.81103 21.3936 5.57937 21.628C5.3477 21.8623 5.0335 21.994 4.70588 21.994H2.23529C1.90767 21.994 1.59347 21.8623 1.36181 21.628C1.13015 21.3936 1 21.0758 1 20.7444V11.997C1 11.6656 1.13015 11.3477 1.36181 11.1134C1.59347 10.879 1.90767 10.7474 2.23529 10.7474H5.94118ZM5.94118 10.7474C7.25166 10.7474 8.50847 10.2207 9.43512 9.28334C10.3618 8.34594 10.8824 7.07456 10.8824 5.74887V4.49925C10.8824 3.83641 11.1426 3.20071 11.606 2.73201C12.0693 2.26331 12.6977 2 13.3529 2C14.0082 2 14.6366 2.26331 15.0999 2.73201C15.5632 3.20071 15.8235 3.83641 15.8235 4.49925V10.7474H19.5294C20.1847 10.7474 20.8131 11.0107 21.2764 11.4794C21.7397 11.9481 22 12.5838 22 13.2466L20.7647 19.4947C20.5871 20.2613 20.25 20.9196 19.8045 21.3704C19.3589 21.8211 18.8288 22.04 18.2941 21.994H9.64706C8.6642 21.994 7.72159 21.599 7.0266 20.896C6.33162 20.1929 5.94118 19.2394 5.94118 18.2451"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <strong>Solo faltan 3 Dias!</strong>
                                            Para que culmine su prestamo... co numero de credito {{$prestamo->numerocredito}} <strong><a href="{{route('prestamo.show', $prestamo)}}">Click para ver el detalle</a></strong>
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
    {{-- @section('content')
    <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="row row-cols-1">
                        <div class="overflow-hidden d-slider1 ">
                            <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                                    <div class="card-body">
                                        <div class="progress-widget">
                                            <div id="circle-progress-01"
                                                class="text-center circle-progress-01 circle-progress circle-progress-primary"
                                                data-min-value="0" data-max-value="100" data-value="90"
                                                data-type="percent">
                                                <svg class="card-slie-arrow " width="24" height="24px"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                                </svg>
                                            </div>
                                            <div class="progress-detail">
                                                <p class="mb-2">Total Sales</p>
                                                <h4 class="counter">$560K</h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                                    <div class="card-body">
                                        <div class="progress-widget">
                                            <div id="circle-progress-02"
                                                class="text-center circle-progress-01 circle-progress circle-progress-info"
                                                data-min-value="0" data-max-value="100" data-value="80"
                                                data-type="percent">
                                                <svg class="card-slie-arrow " width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                                </svg>
                                            </div>
                                            <div class="progress-detail">
                                                <p class="mb-2">Total Profit</p>
                                                <h4 class="counter">$185K</h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                                    <div class="card-body">
                                        <div class="progress-widget">
                                            <div id="circle-progress-03"
                                                class="text-center circle-progress-01 circle-progress circle-progress-primary"
                                                data-min-value="0" data-max-value="100" data-value="70"
                                                data-type="percent">
                                                <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                                </svg>
                                            </div>
                                            <div class="progress-detail">
                                                <p class="mb-2">Total Cost</p>
                                                <h4 class="counter">$375K</h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                                    <div class="card-body">
                                        <div class="progress-widget">
                                            <div id="circle-progress-04"
                                                class="text-center circle-progress-01 circle-progress circle-progress-info"
                                                data-min-value="0" data-max-value="100" data-value="60"
                                                data-type="percent">
                                                <svg class="card-slie-arrow " width="24px" height="24px"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                                </svg>
                                            </div>
                                            <div class="progress-detail">
                                                <p class="mb-2">Revenue</p>
                                                <h4 class="counter">$742K</h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1100">
                                    <div class="card-body">
                                        <div class="progress-widget">
                                            <div id="circle-progress-05"
                                                class="text-center circle-progress-01 circle-progress circle-progress-primary"
                                                data-min-value="0" data-max-value="100" data-value="50"
                                                data-type="percent">
                                                <svg class="card-slie-arrow " width="24px" height="24px"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                                </svg>
                                            </div>
                                            <div class="progress-detail">
                                                <p class="mb-2">Net Income</p>
                                                <h4 class="counter">$150K</h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1200">
                                    <div class="card-body">
                                        <div class="progress-widget">
                                            <div id="circle-progress-06"
                                                class="text-center circle-progress-01 circle-progress circle-progress-info"
                                                data-min-value="0" data-max-value="100" data-value="40"
                                                data-type="percent">
                                                <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                                </svg>
                                            </div>
                                            <div class="progress-detail">
                                                <p class="mb-2">Today</p>
                                                <h4 class="counter">$4600</h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1300">
                                    <div class="card-body">
                                        <div class="progress-widget">
                                            <div id="circle-progress-07"
                                                class="text-center circle-progress-01 circle-progress circle-progress-primary"
                                                data-min-value="0" data-max-value="100" data-value="30"
                                                data-type="percent">
                                                <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                                </svg>
                                            </div>
                                            <div class="progress-detail">
                                                <p class="mb-2">Members</p>
                                                <h4 class="counter">11.2M</h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="swiper-button swiper-button-next"></div>
                            <div class="swiper-button swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" data-aos="fade-up" data-aos-delay="800">
                                <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                                    <div class="header-title">
                                        <h4 class="card-title">$855.8K</h4>
                                        <p class="mb-0">Gross Sales</p>
                                    </div>
                                    <div class="d-flex align-items-center align-self-center">
                                        <div class="d-flex align-items-center text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8"
                                                        fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                            <div class="ms-2">
                                                <span class="text-secondary">Sales</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center ms-3 text-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8"
                                                        fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                            <div class="ms-2">
                                                <span class="text-secondary">Cost</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-secondary dropdown-toggle"
                                            id="dropdownMenuButton22" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            This Week
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton22">
                                            <li><a class="dropdown-item" href="#">This Week</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="d-main" class="d-main"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-6">
                            <div class="card" data-aos="fade-up" data-aos-delay="900">
                                <div class="flex-wrap card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Earnings</h4>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-secondary dropdown-toggle"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            This Week
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">This Week</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flex-wrap d-flex align-items-center justify-content-between">
                                        <div id="myChart" class="col-md-8 col-lg-8 myChart"></div>
                                        <div class="d-grid gap col-md-4 col-lg-4">
                                            <div class="d-flex align-items-start">
                                                <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14"
                                                    viewBox="0 0 24 24" fill="#3a57e8">
                                                    <g>
                                                        <circle cx="12" cy="12" r="8"
                                                            fill="#3a57e8"></circle>
                                                    </g>
                                                </svg>
                                                <div class="ms-3">
                                                    <span class="text-secondary">Fashion</span>
                                                    <h6>251K</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start">
                                                <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14"
                                                    viewBox="0 0 24 24" fill="#4bc7d2">
                                                    <g>
                                                        <circle cx="12" cy="12" r="8"
                                                            fill="#4bc7d2"></circle>
                                                    </g>
                                                </svg>
                                                <div class="ms-3">
                                                    <span class="text-secondary">Accessories</span>
                                                    <h6>176K</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-6">
                            <div class="card" data-aos="fade-up" data-aos-delay="1000">
                                <div class="flex-wrap card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Conversions</h4>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-secondary dropdown-toggle"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            This Week
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton3">
                                            <li><a class="dropdown-item" href="#">This Week</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="d-activity" class="d-activity"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
                                <div class="flex-wrap card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="mb-2 card-title">Enterprise Clients</h4>
                                        <p class="mb-0">
                                            <svg class="me-2 text-primary" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                                            </svg>
                                            15 new acquired this month
                                        </p>
                                    </div>
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton7"
                                            data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton7">
                                            <a class="dropdown-item " href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item " href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item " href="javascript:void(0);">Something else
                                                here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-0 card-body">
                                    <div class="mt-4 table-responsive">
                                        <table id="basic-table" class="table mb-0 table-striped" role="grid">
                                            <thead>
                                                <tr>
                                                    <th>COMPANIES</th>
                                                    <th>CONTACTS</th>
                                                    <th>ORDER</th>
                                                    <th>COMPLETION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                                src="../assets/images/shapes/01.png" alt="profile">
                                                            <h6>Addidis Sportwear</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="iq-media-group iq-media-group-1">
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                            </a>
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                            </a>
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>$14,000</td>
                                                    <td>
                                                        <div class="mb-2 d-flex align-items-center">
                                                            <h6>60%</h6>
                                                        </div>
                                                        <div class="shadow-none progress bg-soft-primary w-100"
                                                            style="height: 4px">
                                                            <div class="progress-bar bg-primary"
                                                                data-toggle="progress-bar" role="progressbar"
                                                                aria-valuenow="60" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                                src="../assets/images/shapes/05.png" alt="profile">
                                                            <h6>Netflixer Platforms</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="iq-media-group iq-media-group-1">
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                            </a>
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>$30,000</td>
                                                    <td>
                                                        <div class="mb-2 d-flex align-items-center">
                                                            <h6>25%</h6>
                                                        </div>
                                                        <div class="shadow-none progress bg-soft-primary w-100"
                                                            style="height: 4px">
                                                            <div class="progress-bar bg-primary"
                                                                data-toggle="progress-bar" role="progressbar"
                                                                aria-valuenow="25" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                                src="../assets/images/shapes/02.png" alt="profile">
                                                            <h6>Shopifi Stores</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="iq-media-group iq-media-group-1">
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                            </a>
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>$8,500</td>
                                                    <td>
                                                        <div class="mb-2 d-flex align-items-center">
                                                            <h6>100%</h6>
                                                        </div>
                                                        <div class="shadow-none progress bg-soft-success w-100"
                                                            style="height: 4px">
                                                            <div class="progress-bar bg-success"
                                                                data-toggle="progress-bar" role="progressbar"
                                                                aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                                src="../assets/images/shapes/03.png" alt="profile">
                                                            <h6>Bootstrap Technologies</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="iq-media-group iq-media-group-1">
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                            </a>
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                            </a>
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                            </a>
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>$20,500</td>
                                                    <td>
                                                        <div class="mb-2 d-flex align-items-center">
                                                            <h6>100%</h6>
                                                        </div>
                                                        <div class="shadow-none progress bg-soft-success w-100"
                                                            style="height: 4px">
                                                            <div class="progress-bar bg-success"
                                                                data-toggle="progress-bar" role="progressbar"
                                                                aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                                src="../assets/images/shapes/04.png" alt="profile">
                                                            <h6>Community First</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="iq-media-group iq-media-group-1">
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>$9,800</td>
                                                    <td>
                                                        <div class="mb-2 d-flex align-items-center">
                                                            <h6>75%</h6>
                                                        </div>
                                                        <div class="shadow-none progress bg-soft-primary w-100"
                                                            style="height: 4px">
                                                            <div class="progress-bar bg-primary"
                                                                data-toggle="progress-bar" role="progressbar"
                                                                aria-valuenow="75" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card credit-card-widget" data-aos="fade-up" data-aos-delay="900">
                                <div class="pb-4 border-0 card-header">
                                    <div class="p-4 border border-white rounded primary-gradient-card">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h5 class="font-weight-bold">VISA </h5>
                                                <P class="mb-0">PREMIUM ACCOUNT</P>
                                            </div>
                                            <div class="master-card-content">
                                                <svg class="master-card-1" width="60" height="60"
                                                    viewBox="0 0 24 24">
                                                    <path fill="#ffffff"
                                                        d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                </svg>
                                                <svg class="master-card-2" width="60" height="60"
                                                    viewBox="0 0 24 24">
                                                    <path fill="#ffffff"
                                                        d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="my-4">
                                            <div class="card-number">
                                                <span class="fs-5 me-2">5789</span>
                                                <span class="fs-5 me-2">****</span>
                                                <span class="fs-5 me-2">****</span>
                                                <span class="fs-5">2847</span>
                                            </div>
                                        </div>
                                        <div class="mb-2 d-flex align-items-center justify-content-between">
                                            <p class="mb-0">Card holder</p>
                                            <p class="mb-0">Expire Date</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>Mike Smith</h6>
                                            <h6 class="ms-5">06/11</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flex-wrap mb-4 d-flex align-itmes-center justify-content-between">
                                        <div class="d-flex align-itmes-center me-0 me-md-4">
                                            <div>
                                                <div class="p-3 mb-2 rounded bg-soft-primary">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.9303 7C16.9621 6.92913 16.977 6.85189 16.9739 6.77432H17C16.8882 4.10591 14.6849 2 12.0049 2C9.325 2 7.12172 4.10591 7.00989 6.77432C6.9967 6.84898 6.9967 6.92535 7.00989 7H6.93171C5.65022 7 4.28034 7.84597 3.88264 10.1201L3.1049 16.3147C2.46858 20.8629 4.81062 22 7.86853 22H16.1585C19.2075 22 21.4789 20.3535 20.9133 16.3147L20.1444 10.1201C19.676 7.90964 18.3503 7 17.0865 7H16.9303ZM15.4932 7C15.4654 6.92794 15.4506 6.85153 15.4497 6.77432C15.4497 4.85682 13.8899 3.30238 11.9657 3.30238C10.0416 3.30238 8.48184 4.85682 8.48184 6.77432C8.49502 6.84898 8.49502 6.92535 8.48184 7H15.4932ZM9.097 12.1486C8.60889 12.1486 8.21321 11.7413 8.21321 11.2389C8.21321 10.7366 8.60889 10.3293 9.097 10.3293C9.5851 10.3293 9.98079 10.7366 9.98079 11.2389C9.98079 11.7413 9.5851 12.1486 9.097 12.1486ZM14.002 11.2389C14.002 11.7413 14.3977 12.1486 14.8858 12.1486C15.3739 12.1486 15.7696 11.7413 15.7696 11.2389C15.7696 10.7366 15.3739 10.3293 14.8858 10.3293C14.3977 10.3293 14.002 10.7366 14.002 11.2389Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <h5>1153</h5>
                                                <small class="mb-0">Products</small>
                                            </div>
                                        </div>
                                        <div class="d-flex align-itmes-center">
                                            <div>
                                                <div class="p-3 mb-2 rounded bg-soft-info">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <h5>81K</h5>
                                                <small class="mb-0">Order Served</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="flex-wrap d-flex justify-content-between">
                                            <h2 class="mb-2">$405,012,300</h2>
                                            <div>
                                                <span class="badge bg-success rounded-pill">YoY 24%</span>
                                            </div>
                                        </div>
                                        <p class="text-info">Life time sales</p>
                                    </div>
                                    <div class="grid-cols-2 d-grid gap-card">
                                        <button class="p-2 btn btn-primary text-uppercase">SUMMARY</button>
                                        <button class="p-2 btn btn-info text-uppercase">ANALYTICS</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="500">
                                <div class="text-center card-body d-flex justify-content-around">
                                    <div>
                                        <h2 class="mb-2">750<small>K</small></h2>
                                        <p class="mb-0 text-secondary">Website Visitors</p>
                                    </div>
                                    <hr class="hr-vertial">
                                    <div>
                                        <h2 class="mb-2">7,500</h2>
                                        <p class="mb-0 text-secondary">New Customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="card" data-aos="fade-up" data-aos-delay="600">
                                <div class="flex-wrap card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="mb-2 card-title">Activity overview</h4>
                                        <p class="mb-0">
                                            <svg class="me-2" width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="#17904b"
                                                    d="M13,20H11V8L5.5,13.5L4.08,12.08L12,4.16L19.92,12.08L18.5,13.5L13,8V20Z" />
                                            </svg>
                                            16% this month
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-2  d-flex profile-media align-items-top">
                                        <div class="mt-1 profile-dots-pills border-primary"></div>
                                        <div class="ms-4">
                                            <h6 class="mb-1 ">$2400, Purchase</h6>
                                            <span class="mb-0">11 JUL 8:10 PM</span>
                                        </div>
                                    </div>
                                    <div class="mb-2  d-flex profile-media align-items-top">
                                        <div class="mt-1 profile-dots-pills border-primary"></div>
                                        <div class="ms-4">
                                            <h6 class="mb-1 ">New order #8744152</h6>
                                            <span class="mb-0">11 JUL 11 PM</span>
                                        </div>
                                    </div>
                                    <div class="mb-2  d-flex profile-media align-items-top">
                                        <div class="mt-1 profile-dots-pills border-primary"></div>
                                        <div class="ms-4">
                                            <h6 class="mb-1 ">Affiliate Payout</h6>
                                            <span class="mb-0">11 JUL 7:64 PM</span>
                                        </div>
                                    </div>
                                    <div class="mb-2  d-flex profile-media align-items-top">
                                        <div class="mt-1 profile-dots-pills border-primary"></div>
                                        <div class="ms-4">
                                            <h6 class="mb-1 ">New user added</h6>
                                            <span class="mb-0">11 JUL 1:21 AM</span>
                                        </div>
                                    </div>
                                    <div class="mb-1  d-flex profile-media align-items-top">
                                        <div class="mt-1 profile-dots-pills border-primary"></div>
                                        <div class="ms-4">
                                            <h6 class="mb-1 ">Product added</h6>
                                            <span class="mb-0">11 JUL 4:50 AM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection --}}
