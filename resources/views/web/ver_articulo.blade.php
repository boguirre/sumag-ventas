<x-app-layout>
    <div class="container">
        <div class="page-header breadcrumb-wrap">
            <div class="breadcrumb">
                <a href="/" rel="nofollow"><i class="fas fa-home mr-10"></i>SUMAG | DAMA NELSIN</a>
                
                <span></span>{{$articulo->categoria->nombre}}<a href="shop-grid-right.html"></a><span></span>{{$articulo->nombre}} 
                
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="product-detail accordion-detail">
                        <!-- links, fotos productos, precio links de whatsapp -->
                        <div class="row mb-50">

                            <div class="col-md-5 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                
                                <div class="detail-gallery">
                                    <!-- MAIN SLIDES -->
                                    <div class="position-relative">
                                        <div class="product-image-slider">
                                            <figure class="border-radius-7">
                                                <img src="@if($articulo->images){{Storage::url($articulo->images->url)}}@else {{asset('assets/img/sin-imagen2.png')}} @endif" alt="product image" />
                                                
                                            </figure>
                                            
                                        </div>
                                        <span class="zoom-icon"><i class="feather-maximize-2"></i></span>
                                    </div>
                                </div>
                                <!-- End Gallery -->

                            </div>

                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="detail-info pr-30 pl-30">

                                    <h4 class="title-detail">{{Str::Upper($articulo->nombre)}}</h4>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <span class="current-price">S/. {{$articulo->precio_venta}}</span>
                                        </div>
                                    </div>

                                    <ul class="pro-code">
                                        <li>Codigo del producto : <span class="text-black">{{$articulo->codigo}}</span></li>
                                        <li>Categor??a : <span class="text-black">{{$articulo->categoria->nombre}}</span></li>
                                    </ul>
                    
                                    <p class="in-stock text-brand">{{$articulo->stock}} en Stock</p>

                                    <div class="detail-extralink">
                                        
                                        <div class="size-select">
                                            
                                        </div>
                                    </div>	

                                        <div class="product-extra-link2">
                                            <p><span> Atencion mediante:</span></p> <br>
                                            <a type="submit" style="border-color:white" target="_blank" class="button button-add-to-cart me-3 bg-success" href="https://api.whatsapp.com/send?phone=960516029&text=Hola%20????,%20estoy%20interesado%20en%20el%20articulo%20{{Str::ucfirst($articulo->nombre)}}%20con%20codigo%20{{$articulo->codigo}}%20que%20se%20ha%20publicado%20en%20la%20pagina%20Sumag.com"><i class="fab fa-whatsapp"></i>Atencion SUMAG    </a></a>
                                            <a type="submit" style="border-color:white" target="_blank" class="button button-add-to-cart me-3 bg-success" href="https://api.whatsapp.com/send?phone=972117469&text=Hola%20????,%20estoy%20interesado%20en%20el%20articulo%20{{Str::ucfirst($articulo->nombre)}}%20con%20codigo%20{{$articulo->codigo}}%20que%20se%20ha%20publicado%20en%20la%20pagina%20Sumag.com"><i class="fab fa-whatsapp"></i>Atencion DAMANELSI</a></a>
                                            {{-- <a aria-label="Add To Wishlist" class="button btn-wishlist" href="wishlist.html"><i class="fi-rs-heart"></i>Add to wishlist</a> --}}
                                        </div>

                                        <div class="pro-share">
                                            <ul>
                                                <li class="me-2"><span>Compartir :</span></li>
                                                <li><a target="_blank" href="http://www.facebook.com/sharer.php?u={{request()->fullUrl()}}&text={{$articulo->nombre}}"><i class="fab fa-facebook"></i></a></li>
                                                {{-- <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li> --}}
                                            </ul>
                                        </div>
                                </div>
                                <!-- Detail Info -->
                            </div>

                        </div>

                        <!-- Descripcion y especificaciones -->
                        <div class="product-info">
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Descripcion</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                            <div class="pro-desc">
                                                <p>{!!$articulo->descripcion!!}</p>
                                            </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- Products -->
                        <section class="feature-products">
                            <div class="container">

                                <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                                    <h3>PRODUCTOS DESTACADOS</h3>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="feature-product-slider arrow-center position-relative">
                                            <div class="slider-arrow slider-arrow-two carousel-4-columns-arrow" id="carousel-4-columns-arrows"></div>
                                            <div class="carousel-4-columns carousel-arrow-center" id="carousel-4-columns">
                                                <!--incion del card-->
                                                @foreach ($destacados as $destacado)
                                                <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                    <div class="product-img-col">

                                                        <div class="product-img product-img-zoom">
                                                            <a href="{{route('web.ver_articulo', $destacado)}}">
                                                                <img class="default-img" src="@if($destacado->images){{Storage::url($destacado->images->url)}}@else {{asset('assets/img/sin-imagen2.png')}} @endif" alt="" />
                                                                <img class="hover-img" src=""  alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="product-badge">
                                                            <span class="best">Venta</span>
                                                        </div>
                                                    </div>

                                                    <div class="product-content">
                                                        <h2><a href="{{route('web.ver_articulo', $destacado)}}">{{Str::Upper($destacado->nombre)}}</a></h2>
                                                        <div class="product-card-bottom mt-0">
                                                            <div class="product-price">
                                                                <span>S/. {{$destacado->precio_venta}} <p> soles </p> </span>
                                                                <span> <p>Cantidad :  {{$destacado->stock}} </p>  </span>
                                                                {{-- <span class="old-price">$ {{$destacado->descuento}}</span>
                                                                <span class="discount-tag">-72%</span> --}}
                                                            </div>
                                                        </div>
                                                        <div class="product-card-bottom">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <!--End product Wrap-->
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                        <!-- /Products -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
 </x-app-layout>