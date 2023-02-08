<!-- Footer --> 
<footer class="footer">

    <!-- primera seccion del footer -->
    <section class="footer-top">
        <div class="container">
            <div class="row">
                <!-- Logo y descripcion de la empresa -->
                <div class="col">
                    <div class="footer-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                        <div class="logo mb-30">
                            <a href="/" class="mb-15"><img src="{{asset('assets/img/SUMAG1.png')}}" alt="logo" /></a>
                            {{-- {{route('web.index')}} --}}
                            <p>Integer posuere orci sit amet feugiat pellent que. Suspendisse vel tempor justo, sit amet posuere orci dapibus auctor.Integer posuere orci sit amet.</p>
                            <!-- <a href="index.html"><img src="assets/img/payment.png" alt="logo" /></a> -->
                        </div>
                    </div>
                </div>

                <!-- Informacion de contacto -->
                <div class="footer-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <h4 class="footer-title">Informacion de Contacto</h4>
                    <ul class="contact-info">
                        <li><p><i class="fas fa-phone-alt"></i>+51 95989658425</p></li>
                        <li><p><i class="fas fa-envelope"></i> sumag@gmail.com</p></li>
                        <li><p><i class="fas fa-map-marker-alt"></i>Perú</p></li>
                    </ul>
                    <ul class="footer-social-icon">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>

                <!-- Enlaces utiles -->
                <div class="footer-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <h4 class="footer-title">Categorias</h4>
                    <ul class="footer-list mb-sm-5 mb-md-0">
                        @foreach ($categorias as $categoria)
                        <li>
                            <a href="{{route('web.escoger_producto',$categoria)}}">{{Str::Upper($categoria->nombre)}}</a>
                            {{-- {{route('web.escoger_producto')}}     --}}
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- enlaces rapidos -->
                <div class="footer-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <h4 class="footer-title">Informacion</h4>
                    <ul class="footer-list mb-sm-5 mb-md-0">
                        <li><a href="{{route('web.escoger_producto2')}}">Productos</a></li>
                        <li><a href="{{route('web.sobre_nosotros')}}">Sobre nosotros</a></li>
                        <!-- <li><a href="cart.html">My Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li> -->
                        <li><a href="{{route('web.contacto')}}">Contactenos</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Lista de categorias -->
    <!-- <div class="footer-middle">
        <div class="container wow animate__animated animate__fadeInUp" data-wow-delay="0">
            <div class="row">
                <div class="col-12 mb-30">
                    <h4 class="footer-title">Categories</h4>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <ul class="footer-list">
                        <li><a href="product-category-list.html">Cable & Accessories</a></li>
                        <li><a href="product-category-list.html">Industrial Controls</a></li>
                        <li><a href="product-category-list.html">Wiring Accessories</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                     <ul class="footer-list">
                        <li><a href="product-category-list.html">Cable Management</a></li>
                        <li><a href="product-category-list.html">Lamps & Tubes</a></li>
                        <li><a href="product-category-list.html">Workwear, PPE & Safety</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                     <ul class="footer-list">
                        <li><a href="product-category-list.html">CCTV, Fire & Security</a></li>
                        <li><a href="product-category-list.html">Lighting Luminaires</a></li>
                        <li><a href="product-category-list.html">CCTV, Fire & Security</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                     <ul class="footer-list">
                        <li><a href="product-category-list.html">Data & Networking</a></li>
                        <li><a href="product-category-list.html">Switchgear & Distribution</a></li>
                        <li><a href="product-category-list.html">Data & Networking</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                     <ul class="footer-list">
                        <li><a href="product-category-list.html">Domestic & Smart Home</a></li>
                        <li><a href="product-category-list.html">Test Equipment</a></li>
                        <li><a href="product-category-list.html">Domestic & Smart Home</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <ul class="footer-list">
                        <li><a href="product-category-list.html">Heating & Ventilation</a></li>
                        <li><a href="product-category-list.html">Tools & Fixings</a></li>
                        <li><a href="product-category-list.html">Heating & Ventilation</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    
    <div class="footer-bottom wow animate__animated animate__fadeInUp" data-wow-delay="0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5">
                    <p class="font-sm mb-0">Copyright © 2022 SUMAG Todos los derechos reservados.</p>
                </div>
                <div class="col-lg-6 col-md-7">
                    <!-- <ul class="footer-list mb-sm-5 mb-md-0">
                        <li><a href="#">My Orders</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Site Map</a></li>
                        <li><a href="about-us.html">About</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer --> 

<!-- Preloader -->
<div id="loader-wrapper">
   <div class="preloader d-flex align-items-center justify-content-center">
        <div class="loaderPill">
            <div class="loaderPill-anim">
                <div class="loaderPill-anim-bounce">
                    <div class="loaderPill-anim-flop">
                        <div class="loaderPill-pill"></div>
                    </div>
                </div>
            </div>
            <div class="loaderPill-floor">
                <div class="loaderPill-floor-shadow"></div>
            </div>
        </div>
    </div>
</div>
<!-- /Preloader -->

<!-- Quick view -->
<div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn-close quick-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="feather-x-circle"></i>
            </button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                        <div class="detail-gallery">
                            <!-- MAIN SLIDES -->
                            <div class="position-relative">
                            <div class="product-image-slider">
                                <figure class="border-radius-10">
                                    <img src="{{asset('assets/img/shop/product-big-1.jpg')}}" alt="product image">
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{asset('assets/img/shop/product-big-2.jpg')}}" alt="product image">
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{asset('assets/img/shop/product-big-1.jpg')}}" alt="product image">
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{asset('assets/img/shop/product-big-2.jpg')}}" alt="product image">
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{asset('assets/img/shop/product-big-1.jpg')}}" alt="product image">
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{asset('assets/img/shop/product-big-2.jpg')}}" alt="product image">
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{asset('assets/img/shop/product-big-1.jpg')}}" alt="product image">
                                </figure>
                            </div>
                                <span class="zoom-icon"><i class="feather-maximize-2"></i></span>
                            </div>
                            <!-- THUMBNAILS -->
                            <div class="slider-nav-thumbnails">
                                <div><img src="{{asset('assets/img/shop/product-big-1.jpg')}}" alt="product image"></div>
                                <div><img src="{{asset('assets/img/shop/product-big-2.jpg')}}" alt="product image"></div>
                                <div><img src="{{asset('assets/img/shop/product-big-1.jpg')}}" alt="product image"></div>
                                <div><img src="{{asset('assets/img/shop/product-big-2.jpg')}}" alt="product image"></div>
                                <div><img src="{{asset('assets/img/shop/product-big-1.jpg')}}" alt="product image"></div>
                                <div><img src="{{asset('assets/img/shop/product-big-2.jpg')}}" alt="product image"></div>
                                <div><img src="{{asset('assets/img/shop/product-big-1.jpg')}}" alt="product image"></div>
                            </div>
                        </div>
                        <!-- End Gallery -->
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="detail-info">
                            <h5 class="title-detail">EYEBOGLER Regular Fit Men's Cotton Shirt</h5>
                            <div class="clearfix product-price-cover">
                                <div class="product-price primary-color float-left">
                                    <span class="current-price">$ 350.00</span>
                                    <span class="old-price">$ 450.00</span>
                                    <span class="save-price">-72%</span>
                                </div>
                            </div>
                            <ul class="pro-code">
                                <li>Product Code : <span class="text-black">T285HS</span></li>
                                <li>Categories : <span class="text-black">Shirt</span></li>
                            </ul>
                            <div class="rating d-inline-block mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span class="ml-5"> (3.5)</span>
                            </div>
                            <p class="in-stock text-brand">39 in Stock</p>
                            <div class="detail-extralink">
                                <div class="detail-qty border radius">
                                    <a href="#" class="qty-down"><i class="fi-rs-minus-small"></i></a>
                                    <span class="qty-val">1</span>
                                    <a href="#" class="qty-up"><i class="fi-rs-plus-small"></i></a>
                                </div>
                            </div>                                      
                                <div class="product-extra-link2">
                                    <button type="submit" class="button button-add-to-cart me-3"><i class="fi-rs-shopping-cart"></i> ADD TO CART</button>
                                    <a aria-label="Add To Wishlist" class="button btn-wishlist" href="wishlist.html"><i class="fi-rs-heart me-1 ms-1"></i></a>
                                </div>
                                <div class="pro-share">
                                    <ul>
                                        <li class="me-2"><span>Share :</span></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Detail Info -->

                            <div class="product-info p-0 border-0">
                                <div class="tab-style3">
                                    <ul class="nav nav-tabs text-uppercase modal-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Specification">Specification</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content shop_info_tab entry-main-content">
                                        <div class="tab-pane fade show active" id="Description">
                                            <div class="">
                                                <ul class="pro-desc">
                                                    <li>Product Dimensions : 65 x 46 x 1 cm; 240 Grams
                                                    <li>Date First Available : 31 October 2020</li>
                                                    <li>Manufacturer : Seven Rocks International</li>
                                                    <li>ASIN : B08MCZMNDW</li>
                                                    <li>Item model number : T285HS</li>
                                                </ul> 
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Specification">
                                            <ul class="pro-desc">
                                                <li>Item model number : T285HS</li>
                                                <li>Department : Men</li>
                                                <li>Packer : Seven Rocks International</li>
                                                <li>Importer : Seven Rocks International</li>
                                                <li>Item Weight : 240 g</li>
                                            </ul> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Quick view -->





