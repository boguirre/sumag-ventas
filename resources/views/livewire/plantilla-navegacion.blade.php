 <!-- Header -->
 <header class="header">

    <div class="mobile-view">
        <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
    </div>

    <!-- Parte superior ploma  -->
    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-between align-items-center">

                <!-- Parte superior idioma y dinero -->
                <div class="col-xl-3 col-lg-4">
                    <div class="header-left">
                        <ul>
                            
                        </ul>
                    </div>
                </div>

               
                <!-- lo que mas gusta y la cuenta -->
                {{-- <div class="col-xl-3 col-lg-4">
                    <div class="header-details">
                        <div class="header-inner">
                            
                            @auth

                            <div class="header-inner-icon">
                                <a href="" class="d-flex align-items-center">
                                    <span><img src="{{asset('assets/img/icons/icon-profile.svg')}}" alt=""></span>
                                    <span class="lable mt-0">My Account</span>
                                </a>
                                
                                <div class="cart-dropdown-wrap account-dropdown">
                                    <ul>
                                        
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}" x-data>
                                                @csrf
                                                <a href="{{ route('logout') }}" @click.prevent="$root.submit();">Cerrar sesion</a>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>

                            @else
                            <div class="header-inner-icon">
                                <a href="#" class="d-flex align-items-center">
                                    <span><img src="{{asset('assets/img/icons/icon-profile.svg')}}" alt=""></span>
                                    <span class="lable mt-0">Mi Cuenta</span>
                                </a>
                                
                                <div class="cart-dropdown-wrap account-dropdown">
                                    <ul>
                                        <li>
                                            <a href="{{ route('login') }}">Ingresar</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('register') }}">Registrar</a>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                            @endauth
                            


                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>

    <!-- Parte superior de color blanco done encontramos el logo, buscador -->
    <div class="header-middle d-none d-lg-block">
        <div class="container">
            <div class="header-col">
                <!-- logo SUMAG -->
                <div class="logo header-logo">
                    <a href="/"><img src="{{asset('assets/img/logo-sumag-damanelsin6.png')}}" alt="logo"></a>
                    {{-- {{route('web.index')}} --}}
                </div>
                
                <div class="header-right">

                    <!-- cuadro de todo las tegorias listadas y buscar -->
                    <div class="header-search">
                    @livewire('search')
                    </div>

                    <!-- casilla donde se muestra los escogidos para comprarlo -->
                    <div class="header-details">
                        <div class="header-inner">
                            <div class="header-inner-icon">
                                <!-- <a href="cart.html" class="me-3">
                                    <span class="lable d-block mt-0">My Cart</span>
                                    <span class="cart-amout d-block text-end">$0.00</span>
                                </a>
                                <a class="small-cart-icon" href="cart.html">
                                    <img src="assets/img/icons/icon-cart.svg" alt="">
                                    <span class="pro-count blue">0</span>
                                </a> -->

                                <!-- <div class="cart-dropdown-wrap">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="view-product.html"><img src="assets/img/shop/thumbnail-1.jpg" alt=""></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="view-product.html">Daisy Casual Bag</a></h4>
                                                <h4><span>1 × </span>$800.00</h4>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="view-product.html"><img src="assets/img/shop/thumbnail-2.jpg" alt=""></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="view-product.html">Corduroy Shirts</a></h4>
                                                <h4><span>1 × </span>$3200.00</h4>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$4000.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            <a href="cart.html" class="outline">View cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- parte superior de color naranja donde encontramos las cateogrias -->
    <div class="header-bottom sticky-bar">
        <div class="container">
            <div class="header-col">

                <div class="logo header-logo d-block d-lg-none">
                    <a href="/"><img src="{{asset('assets/img/logo-sumag-damanelsin6.png')}}" alt="logo"></a>
                    
                    {{-- {{route('web.index')}} --}}
                </div>

                <div class="header-nav d-none d-lg-flex">

                    <!-- recuadro blanco donde seleccionamso las categorias -->
                    <div class="categories-col d-none d-lg-block">

                        <!-- listado de categorias -->
                        <a class="categories-btn" href="#">
                            <span class="fi-rs-menu-burger"></span> Categorias
                            <i class="fi-rs-angle-down"></i>
                        </a>

                        <!-- mostrar categorias accionando la parte superior  -->
                        <div class="categories-dropdown-col categories-dropdown-list">
                            <div class="d-flex categories-dropdown-inner">
                                <ul>
                                    @foreach ($categorias as $categoria )
                                    <li>
                                        <a href="{{route('web.escoger_producto', $categoria)}}"><img src="" alt="">{{Str::Upper($categoria->nombre)}}</a>
                                        {{-- {{route('web.escoger_producto')}} --}}
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                            
                        </div>

                    </div>

                    <!-- recuadro donde contrinen las categorias y sus subcategorias -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul>
                                
                                @foreach ($rangos as $rango)
                                <li>
                                    <a href="{{route('web.escoger_producto',$rango)}}">{{Str::Upper($rango->nombre)}}</a>
                                    {{-- {{route('web.escoger_producto')}}     --}}
                                </li>
                                @endforeach
                                <li>
                                    <a href="#">NOSOTROS<i class="fi-rs-angle-down"></i></a>
                                    <ul class="has-submenu">
                                        <li><a href="{{route('web.sobre_nosotros')}}">Sobre nosotros</a></li>
                                        {{-- {{route('web.sobre_nosotros')}} --}}
                                        <!-- <li><a href="account.html">My cuenta</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Registrar</a></li> -->
                                        <li><a href="{{route('web.contacto')}}">Contactenos</a></li>
                                        {{-- {{route('web.contacto')}} --}}
                                        {{-- <li><a href="privacy-policy.html">Politicas de privacidad</a></li>
                                        <li><a href="terms-conditions.html">Terminos de servicio</a></li> --}}
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>

                <!-- LLAMNOS AHORA -->
                <div class="contact-item d-none d-lg-flex">
                    <img src="{{asset('assets/img/icons/icon-headphone-white.svg')}}" alt="contact-number">
                    <p>CONTACTENOS<span><i class="fab fa-whatsapp"> 960516029</i></span><span><i class="fab fa-whatsapp"> 972117469</i></span></p>
                </div>
                
                <!-- Parte superior en modo movile -->
                <!-- Barra lateral para para movil -->
                <div class="header-inner-icon d-block d-lg-none">
                    <div class="bar-icon">
                        <span class="bar-icon-one"></span>
                        <span class="bar-icon-two"></span>
                        <span class="bar-icon-three"></span>
                    </div>
                </div>

                <!-- corazon y bolsa moviles -->
                <div class="header-details d-block d-lg-none">
                    <div class="header-inner">
                        <!-- icono de coraon para movile -->
                        <div class="header-inner-icon">
                            
                            <!-- <a href="wishlist.html">
                                <img src="assets/img/icons/icon-heart.svg" alt="">
                                <span class="pro-count white">4</span>
                            </a> -->
                        </div>

                        <!-- icono de la bolsa para moviles -->
                        <div class="header-inner-icon">
                            <!-- <a class="small-cart-icon" href="#">
                                <img src="assets/img/icons/icon-cart.svg" alt="">
                                <span class="pro-count white">2</span>
                            </a> 
                            <div class="cart-dropdown-wrap cart-dropdown-two">
                                <ul>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="#"><img src="assets/img/shop/thumbnail-3.jpg" alt=""></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">Plain Striola Shirts</a></h4>
                                            <h3><span>1 × </span>$800.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="#"><img src="assets/img/shop/thumbnail-4.jpg" alt=""></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">Macbook Pro 2022</a></h4>
                                            <h3><span>1 × </span>$3500.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$383.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-btn">
                                        <a href="cart.html">View cart</a>
                                        <a href="#">Checkout</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</header>

<!-- menu desplegable en movile  -->
<div class="main-menu-wrapper">
    <div class="mobile-header-inner">

        <!-- Logo y boton de cerrar menu desplegable -->
        <div class="mobile-header-top">
            <!-- Logo -->
            <div class="mobile-header-logo">
                <a href="/"><img src="{{asset('assets/img/logo-sumag-damanelsin6.png')}}" alt="logo" /></a>
                {{-- {{route('web.index')}} --}}
            </div>
            
            <!-- Icono de cerrar con X -->
            <div class="mobile-menu-close close-col menu-close-position">
                <button class="close-style">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>

        </div>


        <div class="mobile-header-content">
            <!-- buscar en el menu deplegable movil -->
            <div class="mobile-search mobile-search-three mobile-header-border mb-auto">
                @livewire('search')
            </div>

            <!-- Listado de categorias en el menu desplegable movil -->
            <div class="mobile-menu-col mobile-header-border">

                <!-- Mobile Menu -->
                <nav>
                    <ul class="main-nav">

                        <li class="mobile-menu-item">
                            <a href="/">SUMAG</a>
                            {{-- {{route('web.index')}} --}}
                        </li>

                        @foreach ($categorias as $categoria)
                        <li>
                            <a href="{{route('web.escoger_producto',$categoria)}}">{{Str::Upper($categoria->nombre)}}</a>
                                    {{-- {{route('web.escoger_producto')}}     --}}
                        </li>
                        @endforeach
                        {{-- <li class="mobile-menu-item">
                            <a href="#">Shop</a>
                            <ul class="dropdown">
                                <li><a href="cart.html">Shop - Cart</a></li>
                                <li><a href="address.html">Shop - Address</a></li>
                                <li><a href="delivery.html">Shop - Delivery</a></li>
                                <li><a href="checkout.html">Shop - Checkout</a></li>
                            </ul>
                        </li>
                        <li class="mobile-menu-item">
                            <a href="#">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li> --}}
                        <!-- <li class="mobile-menu-item">
                            <a href="#">Mega menu</a>
                            <ul class="dropdown">
                                <li class="mobile-menu-item">
                                    <a href="#">Women's Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href="product-category-list.html">Dresses</a></li>
                                        <li><a href="product-category-list.html">Blouses & Shirts</a></li>
                                        <li><a href="product-category-list.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="product-category-list.html">Women's Sets</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-menu-item">
                                    <a href="#">Men's Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href="product-category-list.html">Jackets</a></li>
                                        <li><a href="product-category-list.html">Casual Faux Leather</a></li>
                                        <li><a href="product-category-list.html">Genuine Leather</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-menu-item">
                                    <a href="#">Technology</a>
                                    <ul class="dropdown">
                                        <li><a href="product-category-list.html">Gaming Laptops</a></li>
                                        <li><a href="product-category-list.html">Ultraslim Laptops</a></li>
                                        <li><a href="product-category-list.html">Tablets</a></li>
                                        <li><a href="product-category-list.html">Laptop Accessories</a></li>
                                        <li><a href="product-category-list.html">Tablet Accessories</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                        <li class="mobile-menu-item">
                            <a href="#">NOSOTROS</a>
                            <ul class="dropdown">
                                <li><a href="{{route('web.sobre_nosotros')}}">Sobre nosotros</a></li>
                                {{-- {{route('web.sobre_nosotros')}} --}}
                                <!-- <li><a href="account.html">My cuenta</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Registrar</a></li> -->
                                <li><a href="{{route('web.contacto')}}">Contacto</a></li>
                                {{-- {{route('web.contacto')}} --}}
                                {{-- <li><a href="privacy-policy.html">Politicas de privacidad</a></li>
                                <li><a href="terms-conditions.html">Terminos de servicio</a></li> --}}
                            </ul>
                        </li>
                        <li class="mobile-menu-item">
                            <!-- <a href="#">Language</a>
                            <ul class="dropdown">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul> -->
                        </li>
                    </ul>
                </nav>
                <!-- /Mobile Menu -->

            </div>

        </div>
    </div>
</div>
<!-- /Header -->



