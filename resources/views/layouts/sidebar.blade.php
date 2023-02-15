<div class="sidebar-header d-flex align-items-center justify-content-start">
    <a href="{{route('admin.index')}}" class="navbar-brand">
        <!--Logo start-->
        <svg width="30" class="" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)"
                fill="currentColor" />
            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)"
                fill="currentColor" />
            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)"
                fill="currentColor" />
            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)"
                fill="currentColor" />
        </svg>
        <!--logo End-->
        <h4 class="logo-title">SUMAG</h4>
    </a>
    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
        <i class="icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </i>
    </div>
</div>
<div class="sidebar-body pt-0 data-scrollbar">
    <div class="sidebar-list">
        <!-- Sidebar Menu Start -->
        <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
            {{-- <li class="nav-item static-item">
                <a class="nav-link static-item disabled" href="#" tabindex="-1">
                    <span class="default-icon">General</span>
                    <span class="mini-icon">-</span>
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ (Request::is('admin') ? 'active' : '') }}" aria-current="page"
                    href="{{route('admin.index')}}">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.33049 2.00049H16.6695C20.0705 2.00049 21.9905 3.92949 22.0005 7.33049V16.6705C22.0005 20.0705 20.0705 22.0005 16.6695 22.0005H7.33049C3.92949 22.0005 2.00049 20.0705 2.00049 16.6705V7.33049C2.00049 3.92949 3.92949 2.00049 7.33049 2.00049ZM12.0495 17.8605C12.4805 17.8605 12.8395 17.5405 12.8795 17.1105V6.92049C12.9195 6.61049 12.7705 6.29949 12.5005 6.13049C12.2195 5.96049 11.8795 5.96049 11.6105 6.13049C11.3395 6.29949 11.1905 6.61049 11.2195 6.92049V17.1105C11.2705 17.5405 11.6295 17.8605 12.0495 17.8605ZM16.6505 17.8605C17.0705 17.8605 17.4295 17.5405 17.4805 17.1105V13.8305C17.5095 13.5095 17.3605 13.2105 17.0895 13.0405C16.8205 12.8705 16.4805 12.8705 16.2005 13.0405C15.9295 13.2105 15.7805 13.5095 15.8205 13.8305V17.1105C15.8605 17.5405 16.2195 17.8605 16.6505 17.8605ZM8.21949 17.1105C8.17949 17.5405 7.82049 17.8605 7.38949 17.8605C6.95949 17.8605 6.59949 17.5405 6.56049 17.1105V10.2005C6.53049 9.88949 6.67949 9.58049 6.95049 9.41049C7.21949 9.24049 7.56049 9.24049 7.83049 9.41049C8.09949 9.58049 8.25049 9.88949 8.21949 10.2005V17.1105Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Dashboard</span>
                </a>
            </li>
            @can('Modulo Usuarios')
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#horizontal-menu" role="button"
                    aria-expanded="false" aria-controls="horizontal-menu">
                    <i class="icon">

                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.2124 7.76241C14.2124 10.4062 12.0489 12.5248 9.34933 12.5248C6.6507 12.5248 4.48631 10.4062 4.48631 7.76241C4.48631 5.11865 6.6507 3 9.34933 3C12.0489 3 14.2124 5.11865 14.2124 7.76241ZM2 17.9174C2 15.47 5.38553 14.8577 9.34933 14.8577C13.3347 14.8577 16.6987 15.4911 16.6987 17.9404C16.6987 20.3877 13.3131 21 9.34933 21C5.364 21 2 20.3666 2 17.9174ZM16.1734 7.84875C16.1734 9.19506 15.7605 10.4513 15.0364 11.4948C14.9611 11.6021 15.0276 11.7468 15.1587 11.7698C15.3407 11.7995 15.5276 11.8177 15.7184 11.8216C17.6167 11.8704 19.3202 10.6736 19.7908 8.87118C20.4885 6.19676 18.4415 3.79543 15.8339 3.79543C15.5511 3.79543 15.2801 3.82418 15.0159 3.87688C14.9797 3.88454 14.9405 3.90179 14.921 3.93246C14.8955 3.97174 14.9141 4.02253 14.9396 4.05607C15.7233 5.13216 16.1734 6.44206 16.1734 7.84875ZM19.3173 13.7023C20.5932 13.9466 21.4317 14.444 21.7791 15.1694C22.0736 15.7635 22.0736 16.4534 21.7791 17.0475C21.2478 18.1705 19.5335 18.5318 18.8672 18.6247C18.7292 18.6439 18.6186 18.5289 18.6333 18.3928C18.9738 15.2805 16.2664 13.8048 15.5658 13.4656C15.5364 13.4493 15.5296 13.4263 15.5325 13.411C15.5345 13.4014 15.5472 13.3861 15.5697 13.3832C17.0854 13.3545 18.7155 13.5586 19.3173 13.7023Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Gestión De Usuarios</span>
                    <i class="right-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </i>
                </a>
                <ul class="sub-nav collapse" id="horizontal-menu" data-bs-parent="#sidebar-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ (Request::is('usuario')| Request::is('usuario/*') ? 'active' : '') }}"
                            href="{{route('usuario.index')}}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> U </i>
                            <span class="item-name"> Usuarios </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (Request::is('usuario')| Request::is('usuario/*') ? 'active' : '') }}"
                            href="{{route('usuario.index')}}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> R </i>
                            <span class="item-name">Roles</span>
                        </a>
                    </li>


                </ul>
            </li>
            @endcan

            <li>
                <hr class="hr-horizontal">
            </li>

            @can('Modulo Ingresos')
            <li class="nav-item static-item">
                <a class="nav-link static-item disabled" href="#" tabindex="-1">
                    <span class="default-icon">Entradas De Productos</span>
                    <span class="mini-icon">-</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (Request::is('ingreso')| Request::is('ingreso/*') ? 'active' : '') }}"
                    href="{{route('ingreso.index')}}">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16.9303 7C16.9621 6.92913 16.977 6.85189 16.9739 6.77432H17C16.8882 4.10591 14.6849 2 12.0049 2C9.325 2 7.12172 4.10591 7.00989 6.77432C6.9967 6.84898 6.9967 6.92535 7.00989 7H6.93171C5.65022 7 4.28034 7.84597 3.88264 10.1201L3.1049 16.3147C2.46858 20.8629 4.81062 22 7.86853 22H16.1585C19.2075 22 21.4789 20.3535 20.9133 16.3147L20.1444 10.1201C19.676 7.90964 18.3503 7 17.0865 7H16.9303ZM15.4932 7C15.4654 6.92794 15.4506 6.85153 15.4497 6.77432C15.4497 4.85682 13.8899 3.30238 11.9657 3.30238C10.0416 3.30238 8.48184 4.85682 8.48184 6.77432C8.49502 6.84898 8.49502 6.92535 8.48184 7H15.4932ZM9.097 12.1486C8.60889 12.1486 8.21321 11.7413 8.21321 11.2389C8.21321 10.7366 8.60889 10.3293 9.097 10.3293C9.5851 10.3293 9.98079 10.7366 9.98079 11.2389C9.98079 11.7413 9.5851 12.1486 9.097 12.1486ZM14.002 11.2389C14.002 11.7413 14.3977 12.1486 14.8858 12.1486C15.3739 12.1486 15.7696 11.7413 15.7696 11.2389C15.7696 10.7366 15.3739 10.3293 14.8858 10.3293C14.3977 10.3293 14.002 10.7366 14.002 11.2389Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Ingresos</span>
                </a>
            </li>
            @endcan

            @can('Modulo Articulos')


            <li class="nav-item static-item">
                <a class="nav-link static-item disabled" href="#" tabindex="-1">

                    <span class="default-icon">Productos</span>
                    <span class="mini-icon">-</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (Request::is('categoria')|Request::is('medida') ? 'active' : '') }}"
                    data-bs-toggle="collapse" href="#sidebar-special" role="button" aria-expanded="false"
                    aria-controls="sidebar-special">
                    <i class="icon">
                        <svg fill="currentColor" height="20" width="20" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 295.721 295.721" xml:space="preserve">
                            <g>
                                <path d="M295.353,67.922c-0.608-1.707-1.874-3.11-3.522-3.876L235.45,38.019c-8.146-2.76-16.398-5.116-24.718-7.085
		c-0.337,1.497-0.868,2.972-1.608,4.391l-20.089,38.551c-5.213,10.002-18.206,12.684-26.959,5.745l-6.714-5.324v57.876
		c0,4.143-3.357,7.5-7.5,7.5c-4.143,0-7.5-3.357-7.5-7.5V74.298l-6.715,5.325c-8.764,6.948-21.752,4.243-26.958-5.747l-20.089-38.55
		c-0.74-1.419-1.271-2.895-1.608-4.391c-8.322,1.969-16.579,4.325-24.738,7.085L3.891,64.045c-1.658,0.766-2.934,2.169-3.513,3.876
		c-0.599,1.727-0.49,3.593,0.354,5.222l24.475,48.303c1.443,2.885,4.759,4.318,7.861,3.386l27.185-8.057v162.076
		c0,3.68,3.003,6.683,6.693,6.683h161.831c3.681,0,6.674-3.003,6.674-6.683V116.776l27.204,8.057c3.101,0.933,6.4-0.501,7.862-3.386
		L295,73.143C295.825,71.514,295.942,69.649,295.353,67.922z" />
                                <path d="M119.99,66.944c0.397,0.761,1.112,1.305,1.951,1.484c0.199,0.042,0.4,0.063,0.599,0.063c0.643,0,1.274-0.216,1.787-0.623
		l23.534-18.662l23.534,18.662c0.513,0.407,1.144,0.623,1.787,0.623c0.2,0,0.401-0.021,0.6-0.063
		c0.839-0.179,1.555-0.723,1.951-1.484l20.089-38.55c0.62-1.19,0.335-2.65-0.687-3.52l-16.456-14.001
		c-0.522-0.444-1.183-0.686-1.863-0.686c-0.077,0-0.154,0.003-0.232,0.009c-0.76,0.061-1.465,0.422-1.96,1.003l-26.763,31.462
		L121.098,11.2c-0.494-0.581-1.199-0.942-1.959-1.003c-0.077-0.006-0.155-0.009-0.232-0.009c-0.68,0-1.341,0.241-1.863,0.686
		l-16.456,14.001c-1.022,0.869-1.307,2.33-0.687,3.52L119.99,66.944z" />
                            </g>
                    </i>
                    <span class="item-name">Productos</span>
                    <i class="right-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </i>
                </a>
                <ul class="sub-nav collapse" id="sidebar-special" data-bs-parent="#sidebar-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ (Request::is('categoria')| Request::is('categoria/*') ? 'active' : '') }} "
                            href="{{route('categoria.index')}}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon" title="Categorias"> C </i>
                            <span class="item-name" title="Categorias">Categorias</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ (Request::is('medida')| Request::is('medida/*') ? 'active' : '') }}"
                            href="{{route('medida.index')}}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon" title="Medidas"> M </i>
                            <span class="item-name" title="Medidas">Unidad De Medidas</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (Request::is('articulo') | Request::is('articulo/*')? 'active' : '') }}"
                            href="{{route('articulo.index')}}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon" title="Articulos"> AR </i>
                            <span class="item-name" title="Articulos">Articulos</span>
                        </a>
                    </li>

                </ul>
            </li>

            @endcan

            <li class="nav-item static-item">
                <a class="nav-link static-item disabled" href="#" tabindex="-1">
                    <span class="default-icon">Salidas</span>
                    <span class="mini-icon">-</span>
                </a>
            </li>
            @can('Modulo Tiendas')


            <li class="nav-item">
                <a class="nav-link {{ (Request::is('sucursal')| Request::is('sucursal/*') ? 'active' : '') }}"
                    href="{{route('sucursal.index')}}">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.13478 20.7733V17.7156C9.13478 16.9351 9.77217 16.3023 10.5584 16.3023H13.4326C13.8102 16.3023 14.1723 16.4512 14.4393 16.7163C14.7063 16.9813 14.8563 17.3408 14.8563 17.7156V20.7733C14.8539 21.0978 14.9821 21.4099 15.2124 21.6402C15.4427 21.8705 15.7561 22 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0008C21.1356 20.3588 21.5 19.487 21.5 18.5778V9.86686C21.5 9.13246 21.1721 8.43584 20.6046 7.96467L13.934 2.67587C12.7737 1.74856 11.1111 1.7785 9.98539 2.74698L3.46701 7.96467C2.87274 8.42195 2.51755 9.12064 2.5 9.86686V18.5689C2.5 20.4639 4.04738 22 5.95617 22H7.87229C8.55123 22 9.103 21.4562 9.10792 20.7822L9.13478 20.7733Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Tiendas</span>
                </a>
            </li>

            @endcan

            <li class="nav-item">
                <a class="nav-link {{ (Request::is('venta')|Request::is('venta/reporte')| Request::is('venta/*') ? 'active' : '') }}"
                    data-bs-toggle="collapse" href="#sidebar-venta" role="button" aria-expanded="false"
                    aria-controls="sidebar-venta">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Ventas</span>
                    <i class="right-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </i>
                </a>
                <ul class="sub-nav collapse" id="sidebar-venta" data-bs-parent="#sidebar-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ (Request::is('venta')| Request::is('venta/create')| Request::is('venta/*') ? 'active' : '') }} "
                            href="{{route('venta.index')}}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon" title="Prestamos"> P </i>
                            <span class="item-name" title="Prestamos">General</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ (Request::is('ventas/reporte') ? 'active' : '') }}"
                            href="{{route('venta.reporte')}}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon" title="Prestamos Ventas"> R </i>
                            <span class="item-name" title="Prestamos Ventas">Reporte</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ (Request::is('ventas/reporte/fechas') ? 'active' : '') }}"
                            href="{{route('venta.reportefechas')}}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon" title="Prestamos Ventas"> R </i>
                            <span class="item-name" title="Prestamos Ventas">Reporte Por Fechas</span>
                        </a>
                    </li>

                </ul>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ (Request::is('prestamo')| Request::is('prestamo/*') ? 'active' : '') }}"
                    href="{{route('prestamo.index')}}">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.7688 8.71387H16.2312C18.5886 8.71387 20.5 10.5831 20.5 12.8885V17.8254C20.5 20.1308 18.5886 22 16.2312 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8254V12.8885C3.5 10.5831 5.41136 8.71387 7.7688 8.71387ZM11.9949 17.3295C12.4928 17.3295 12.8891 16.9419 12.8891 16.455V14.2489C12.8891 13.772 12.4928 13.3844 11.9949 13.3844C11.5072 13.3844 11.1109 13.772 11.1109 14.2489V16.455C11.1109 16.9419 11.5072 17.3295 11.9949 17.3295Z"
                                fill="currentColor"></path>
                            <path opacity="0.4"
                                d="M17.523 7.39595V8.86667C17.1673 8.7673 16.7913 8.71761 16.4052 8.71761H15.7447V7.39595C15.7447 5.37868 14.0681 3.73903 12.0053 3.73903C9.94257 3.73903 8.26594 5.36874 8.25578 7.37608V8.71761H7.60545C7.20916 8.71761 6.83319 8.7673 6.47754 8.87661V7.39595C6.4877 4.41476 8.95692 2 11.985 2C15.0537 2 17.523 4.41476 17.523 7.39595Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Prestamos</span>
                </a>
            </li> --}}

            @can('Modulo Prestamos')


            <li class="nav-item static-item">
                <a class="nav-link static-item disabled" href="#" tabindex="-1">
                    <span class="default-icon">Gestión de Prestamos</span>
                    <span class="mini-icon">-</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (Request::is('empresa')| Request::is('empresa/*') ? 'active' : '') }}"
                    href="{{route('empresa.index')}}">
                    <i class="icon">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 1280.000000 1280.000000" preserveAspectRatio="xMidYMid meet">
                        <metadata>
                            Created by potrace 1.15, written by Peter Selinger 2001-2017
                        </metadata>
                        <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" fill="currentColor"
                            stroke="none">
                            <path d="M4930 11102 c-696 -433 -1958 -1218 -2805 -1744 -847 -526 -1549
                   -964 -1560 -972 -18 -14 49 -15 653 -16 l672 0 0 -2665 0 -2665 -396 0 c-253
                   0 -402 -4 -415 -10 -17 -10 -19 -23 -19 -153 0 -98 4 -147 12 -155 17 -17
                   2989 -17 3006 0 8 8 12 57 12 155 0 130 -2 143 -19 153 -13 6 -162 10 -415 10
                   l-396 0 0 2659 0 2659 1213 -5 c666 -2 1218 -6 1225 -8 10 -4 12 -539 10
                   -2652 l-3 -2648 -399 -3 c-354 -2 -402 -4 -418 -19 -16 -14 -18 -33 -18 -149
                   0 -107 3 -136 16 -148 14 -14 164 -16 1503 -16 1429 0 1489 1 1504 18 24 26
                   25 257 1 290 l-15 22 -405 0 -404 0 0 2649 0 2648 1108 -4 c609 -3 1113 -6
                   1120 -8 10 -4 12 -537 10 -2642 l-3 -2638 -399 -3 c-354 -2 -402 -4 -418 -19
                   -16 -14 -18 -33 -18 -149 0 -107 3 -136 16 -148 14 -14 164 -16 1503 -16 1429
                   0 1489 1 1504 18 24 26 25 257 1 290 l-15 22 -405 0 -404 0 0 2640 0 2640 793
                   -6 c539 -5 789 -3 782 4 -5 5 -752 448 -1660 984 -907 536 -2261 1336 -3007
                   1777 -746 440 -1363 803 -1370 806 -7 2 -582 -350 -1278 -783z" />
                            <path d="M1017 2432 c-15 -16 -17 -50 -17 -274 0 -234 1 -256 18 -271 17 -16
                   399 -17 5295 -17 l5276 0 15 22 c24 33 24 503 0 536 l-15 22 -5278 0 c-5100 0
                   -5278 -1 -5294 -18z" />
                            <path d="M1022 1724 c-22 -15 -22 -16 -22 -343 0 -267 3 -331 14 -347 14 -19
                   79 -19 5296 -19 5217 0 5282 0 5296 19 11 16 14 80 14 347 0 327 0 328 -22
                   343 -20 14 -538 16 -5288 16 -4750 0 -5268 -2 -5288 -16z" />
                        </g>
                    </svg>
                    </i>
                    <span class="item-name">Empresas</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ (Request::is('prestamo')|Request::is('prestamo/reporte') ? 'active' : '') }}"
                    data-bs-toggle="collapse" href="#sidebar-prestamo" role="button" aria-expanded="false"
                    aria-controls="sidebar-prestamo">
                    <i class="icon">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="20" height="20" viewBox="0 0 676.000000 1280.000000"
                        preserveAspectRatio="xMidYMid meet">
                       <metadata>
                       Created by potrace 1.15, written by Peter Selinger 2001-2017
                       </metadata>
                       <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
                       fill="currentcolor" stroke="none">
                       <path d="M2890 11981 l0 -820 -42 -5 c-24 -3 -88 -11 -143 -17 -236 -25 -537
                       -87 -773 -158 -869 -262 -1477 -771 -1751 -1464 -125 -316 -179 -650 -168
                       -1046 8 -299 46 -502 137 -735 248 -634 824 -1123 1658 -1410 267 -91 459
                       -135 642 -146 85 -5 219 -15 298 -21 l142 -12 0 -1507 0 -1507 -27 4 c-16 1
                       -86 9 -158 18 -71 8 -208 20 -304 25 -616 37 -1191 200 -1736 493 -200 108
                       -441 265 -526 344 -26 24 -28 24 -58 9 -76 -40 -85 -122 -76 -754 l7 -492 86
                       -65 c367 -275 1068 -489 2032 -619 182 -25 501 -58 672 -71 l88 -7 2 -986 3
                       -987 335 -22 c184 -12 359 -22 387 -22 l53 -1 2 1012 3 1013 40 3 c22 1 123
                       14 225 28 533 73 998 212 1415 423 311 158 520 305 736 521 210 208 320 361
                       440 605 156 321 224 628 223 1020 0 274 -22 440 -89 672 -219 759 -900 1368
                       -1935 1731 -279 98 -631 193 -912 248 l-148 28 0 1403 0 1403 24 0 c119 0 535
                       -58 753 -105 527 -114 1147 -354 1591 -616 l52 -31 0 69 c0 38 7 272 15 519 8
                       247 16 537 18 644 l2 195 -180 51 c-595 171 -1360 298 -1975 329 -63 3 -157 8
                       -207 11 l-93 6 0 809 0 809 -390 0 -390 0 0 -819z m-3 -4547 c-7 -8 -290 69
                       -415 112 -722 247 -1102 662 -1102 1204 0 622 525 1112 1381 1289 l134 27 3
                       -1314 c1 -724 1 -1317 -1 -1318z m1033 -1481 c575 -164 1002 -416 1213 -714
                       62 -88 132 -236 159 -340 33 -122 32 -396 -1 -549 -64 -302 -179 -526 -367
                       -720 -52 -54 -134 -126 -182 -160 -106 -75 -310 -176 -452 -223 -171 -57 -471
                       -117 -582 -117 l-43 0 3 1444 2 1444 63 -14 c34 -8 118 -31 187 -51z"/>
                       </g>
                       </svg>
                    </i>
                    <span class="item-name">Prestamos</span>
                    <i class="right-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </i>
                </a>
                <ul class="sub-nav collapse" id="sidebar-prestamo" data-bs-parent="#sidebar-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ (Request::is('prestamo')| Request::is('prestamos/*') ? 'active' : '') }} "
                            href="{{route('prestamo.index')}}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon" title="Prestamos"> P </i>
                            <span class="item-name" title="Prestamos">General</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ (Request::is('prestamo/reporte') ? 'active' : '') }}"
                            href="{{route('prestamos.reporte')}}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon" title="Prestamos Reporte"> R </i>
                            <span class="item-name" title="Prestamos Reporte">Reporte</span>
                        </a>
                    </li>


                </ul>
            </li>

            @endcan

            @can('Modulo Proveedores')

            <li class="nav-item static-item">
                <a class="nav-link static-item disabled" href="#" tabindex="-1">
                    <span class="default-icon">Gestión de Proveedores</span>
                    <span class="mini-icon">-</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ (Request::is('proveedor')| Request::is('proveedor/*') ? 'active' : '') }}"
                    href="{{route('proveedor.index')}}">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.5 12.5537C12.2546 12.5537 14.4626 10.3171 14.4626 7.52684C14.4626 4.73663 12.2546 2.5 9.5 2.5C6.74543 2.5 4.53737 4.73663 4.53737 7.52684C4.53737 10.3171 6.74543 12.5537 9.5 12.5537ZM9.5 15.0152C5.45422 15.0152 2 15.6621 2 18.2464C2 20.8298 5.4332 21.5 9.5 21.5C13.5448 21.5 17 20.8531 17 18.2687C17 15.6844 13.5668 15.0152 9.5 15.0152ZM19.8979 9.58786H21.101C21.5962 9.58786 22 9.99731 22 10.4995C22 11.0016 21.5962 11.4111 21.101 11.4111H19.8979V12.5884C19.8979 13.0906 19.4952 13.5 18.999 13.5C18.5038 13.5 18.1 13.0906 18.1 12.5884V11.4111H16.899C16.4027 11.4111 16 11.0016 16 10.4995C16 9.99731 16.4027 9.58786 16.899 9.58786H18.1V8.41162C18.1 7.90945 18.5038 7.5 18.999 7.5C19.4952 7.5 19.8979 7.90945 19.8979 8.41162V9.58786Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Proveedores</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (Request::is('pago-proveedor')| Request::is('pago-proveedor/*') ? 'active' : '') }}"
                    href="{{route('pago-proveedor.index')}}">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.7689 8.3818H22C22 4.98459 19.9644 3 16.5156 3H7.48444C4.03556 3 2 4.98459 2 8.33847V15.6615C2 19.0154 4.03556 21 7.48444 21H16.5156C19.9644 21 22 19.0154 22 15.6615V15.3495H17.7689C15.8052 15.3495 14.2133 13.7975 14.2133 11.883C14.2133 9.96849 15.8052 8.41647 17.7689 8.41647V8.3818ZM17.7689 9.87241H21.2533C21.6657 9.87241 22 10.1983 22 10.6004V13.131C21.9952 13.5311 21.6637 13.8543 21.2533 13.8589H17.8489C16.8548 13.872 15.9855 13.2084 15.76 12.2643C15.6471 11.6783 15.8056 11.0736 16.1931 10.6122C16.5805 10.1509 17.1573 9.88007 17.7689 9.87241ZM17.92 12.533H18.2489C18.6711 12.533 19.0133 12.1993 19.0133 11.7877C19.0133 11.3761 18.6711 11.0424 18.2489 11.0424H17.92C17.7181 11.0401 17.5236 11.1166 17.38 11.255C17.2364 11.3934 17.1555 11.5821 17.1556 11.779C17.1555 12.1921 17.4964 12.5282 17.92 12.533ZM6.73778 8.3818H12.3822C12.8044 8.3818 13.1467 8.04812 13.1467 7.63649C13.1467 7.22487 12.8044 6.89119 12.3822 6.89119H6.73778C6.31903 6.89116 5.9782 7.2196 5.97333 7.62783C5.97331 8.04087 6.31415 8.37705 6.73778 8.3818Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Pago Proveedores</span>
                </a>
            </li>

            @endcan


            @can('Modulo DUAS')


            <li>
                <hr class="hr-horizontal">
            </li>
            <li class="nav-item static-item">
                <a class="nav-link static-item disabled" href="#" tabindex="-1">
                    <span class="default-icon"> Gestion de DUAS</span>
                    <span class="mini-icon">-</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-widget" role="button" aria-expanded="false"
                    aria-controls="sidebar-widget">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.7688 8.71387H16.2312C18.5886 8.71387 20.5 10.5831 20.5 12.8885V17.8254C20.5 20.1308 18.5886 22 16.2312 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8254V12.8885C3.5 10.5831 5.41136 8.71387 7.7688 8.71387ZM11.9949 17.3295C12.4928 17.3295 12.8891 16.9419 12.8891 16.455V14.2489C12.8891 13.772 12.4928 13.3844 11.9949 13.3844C11.5072 13.3844 11.1109 13.772 11.1109 14.2489V16.455C11.1109 16.9419 11.5072 17.3295 11.9949 17.3295Z"
                                fill="currentColor"></path>
                            <path opacity="0.4"
                                d="M17.523 7.39595V8.86667C17.1673 8.7673 16.7913 8.71761 16.4052 8.71761H15.7447V7.39595C15.7447 5.37868 14.0681 3.73903 12.0053 3.73903C9.94257 3.73903 8.26594 5.36874 8.25578 7.37608V8.71761H7.60545C7.20916 8.71761 6.83319 8.7673 6.47754 8.87661V7.39595C6.4877 4.41476 8.95692 2 11.985 2C15.0537 2 17.523 4.41476 17.523 7.39595Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">DUAS</span>
                    <i class="right-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </i>
                </a>
                <ul class="sub-nav collapse" id="sidebar-widget" data-bs-parent="#sidebar-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ (Request::is('dua')| Request::is('dua/*') ? 'active' : '') }}"
                            href="{{route('dua.index')}}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> W </i>
                            <span class="item-name">General</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (Request::is('dua/reporte') ? 'active' : '') }}"
                            href="{{route('dua.reporte')}}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon" title="Reporte de Duas"> R </i>
                            <span class="item-name" title="Reporte de Duas">Reporte</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link " href="../dashboard/widget/widgetcard.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> W </i>
                            <span class="item-name">Widget Card</span>
                        </a>
                    </li> --}}
                </ul>
            </li>

            @endcan

            <li>
                <hr class="hr-horizontal">
            </li>

            @can('Modulo Comprobantes')


            <li class="nav-item static-item">
                <a class="nav-link static-item disabled" href="#" tabindex="-1">
                    <span class="default-icon"> Gestion de Boletas/Facturas</span>
                    <span class="mini-icon">-</span>
                </a>
            </li>

            <li class="nav-item mb-5">
                <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-comprobante" role="button"
                    aria-expanded="false" aria-controls="sidebar-comprobante">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.92574 16.39H14.3119C14.7178 16.39 15.0545 16.05 15.0545 15.64C15.0545 15.23 14.7178 14.9 14.3119 14.9H8.92574C8.5198 14.9 8.18317 15.23 8.18317 15.64C8.18317 16.05 8.5198 16.39 8.92574 16.39ZM12.2723 9.9H8.92574C8.5198 9.9 8.18317 10.24 8.18317 10.65C8.18317 11.06 8.5198 11.39 8.92574 11.39H12.2723C12.6782 11.39 13.0149 11.06 13.0149 10.65C13.0149 10.24 12.6782 9.9 12.2723 9.9ZM19.3381 9.02561C19.5708 9.02292 19.8242 9.02 20.0545 9.02C20.302 9.02 20.5 9.22 20.5 9.47V17.51C20.5 19.99 18.5099 22 16.0545 22H8.17327C5.59901 22 3.5 19.89 3.5 17.29V6.51C3.5 4.03 5.5 2 7.96535 2H13.2525C13.5099 2 13.7079 2.21 13.7079 2.46V5.68C13.7079 7.51 15.203 9.01 17.0149 9.02C17.4381 9.02 17.8112 9.02316 18.1377 9.02593C18.3917 9.02809 18.6175 9.03 18.8168 9.03C18.9578 9.03 19.1405 9.02789 19.3381 9.02561ZM19.6111 7.566C18.7972 7.569 17.8378 7.566 17.1477 7.559C16.0527 7.559 15.1507 6.648 15.1507 5.542V2.906C15.1507 2.475 15.6685 2.261 15.9646 2.572C16.5004 3.13476 17.2368 3.90834 17.9699 4.67837C18.7009 5.44632 19.4286 6.21074 19.9507 6.759C20.2398 7.062 20.0279 7.565 19.6111 7.566Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Comprobantes</span>
                    <i class="right-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </i>
                </a>
                <ul class="sub-nav collapse" id="sidebar-comprobante" data-bs-parent="#sidebar-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ (Request::is('comprobante')| Request::is('comprobante/*') ? 'active' : '') }}"
                            href="{{route('comprobante.index')}}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> W </i>
                            <span class="item-name">General</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (Request::is('comprobantes/reporte') ? 'active' : '') }}"
                            href="{{route('comprobante.reporte')}}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon" title="Reporte de Comprobante"> R </i>
                            <span class="item-name" title="Reporte de Comprobante">Reporte</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link " href="../dashboard/widget/widgetcard.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> W </i>
                            <span class="item-name">Widget Card</span>
                        </a>
                    </li> --}}
                </ul>
            </li>

            @endcan
            {{-- <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-maps" role="button" aria-expanded="false"
                    aria-controls="sidebar-maps">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.53162 2.93677C10.7165 1.66727 13.402 1.68946 15.5664 2.99489C17.7095 4.32691 19.012 6.70418 18.9998 9.26144C18.95 11.8019 17.5533 14.19 15.8075 16.0361C14.7998 17.1064 13.6726 18.0528 12.4488 18.856C12.3228 18.9289 12.1848 18.9777 12.0415 19C11.9036 18.9941 11.7693 18.9534 11.6508 18.8814C9.78243 17.6746 8.14334 16.134 6.81233 14.334C5.69859 12.8314 5.06584 11.016 5 9.13442C4.99856 6.57225 6.34677 4.20627 8.53162 2.93677ZM9.79416 10.1948C10.1617 11.1008 11.0292 11.6918 11.9916 11.6918C12.6221 11.6964 13.2282 11.4438 13.6748 10.9905C14.1214 10.5371 14.3715 9.92064 14.3692 9.27838C14.3726 8.29804 13.7955 7.41231 12.9073 7.03477C12.0191 6.65723 10.995 6.86235 10.3133 7.55435C9.63159 8.24635 9.42664 9.28872 9.79416 10.1948Z"
                                fill="currentColor"></path>
                            <ellipse opacity="0.4" cx="12" cy="21" rx="5" ry="1" fill="currentColor"></ellipse>
                        </svg>
                    </i>
                    <span class="item-name">Maps</span>
                    <i class="right-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </i>
                </a>
                <ul class="sub-nav collapse" id="sidebar-maps" data-bs-parent="#sidebar-menu">
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/maps/google.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> G </i>
                            <span class="item-name">Google</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/maps/vector.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> V </i>
                            <span class="item-name">Vector</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-form" role="button" aria-expanded="false"
                    aria-controls="sidebar-form">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4"
                                d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z"
                                fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Form</span>
                    <i class="right-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </i>
                </a>
                <ul class="sub-nav collapse" id="sidebar-form" data-bs-parent="#sidebar-menu">
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/form/form-element.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> E </i>
                            <span class="item-name">Elements</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/form/form-wizard.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> W </i>
                            <span class="item-name">Wizard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/form/form-validation.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> V </i>
                            <span class="item-name">Validation</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-table" role="button" aria-expanded="false"
                    aria-controls="sidebar-table">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M2 5C2 4.44772 2.44772 4 3 4H8.66667H21C21.5523 4 22 4.44772 22 5V8H15.3333H8.66667H2V5Z"
                                fill="currentColor" stroke="currentColor" />
                            <path
                                d="M6 8H2V11M6 8V20M6 8H14M6 20H3C2.44772 20 2 19.5523 2 19V11M6 20H14M14 8H22V11M14 8V20M14 20H21C21.5523 20 22 19.5523 22 19V11M2 11H22M2 14H22M2 17H22M10 8V20M18 8V20"
                                stroke="currentColor" />
                        </svg>
                    </i>
                    <span class="item-name">Table</span>
                    <i class="right-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </i>
                </a>
                <ul class="sub-nav collapse" id="sidebar-table" data-bs-parent="#sidebar-menu">
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/table/bootstrap-table.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> B </i>
                            <span class="item-name">Bootstrap Table</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/table/table-data.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> D </i>
                            <span class="item-name">Datatable</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item mb-5">
                <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-icons" role="button" aria-expanded="false"
                    aria-controls="sidebar-icons">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M8 10.5378C8 9.43327 8.89543 8.53784 10 8.53784H11.3333C12.4379 8.53784 13.3333 9.43327 13.3333 10.5378V19.8285C13.3333 20.9331 14.2288 21.8285 15.3333 21.8285H16C16 21.8285 12.7624 23.323 10.6667 22.9361C10.1372 22.8384 9.52234 22.5913 9.01654 22.3553C8.37357 22.0553 8 21.3927 8 20.6832V10.5378Z"
                                fill="currentColor" />
                            <rect opacity="0.4" x="8" y="1" width="5" height="5" rx="2.5" fill="currentColor" />
                        </svg>
                    </i>
                    <span class="item-name">Icons</span>
                    <i class="right-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </i>
                </a>
                <ul class="sub-nav collapse" id="sidebar-icons" data-bs-parent="#sidebar-menu">
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/icons/solid.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> S </i>
                            <span class="item-name">Solid</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/icons/outline.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> O </i>
                            <span class="item-name">Outlined</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/icons/dual-tone.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> D </i>
                            <span class="item-name">Dual Tone</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
        </ul>
        <!-- Sidebar Menu End -->
    </div>
</div>
<div class="sidebar-footer"></div>