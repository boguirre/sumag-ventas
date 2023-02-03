<x-app-layout>

    <!-- anuncios movibles  -->
    <section class="banner-section position-relative">
        <div class="container">
            <div class="banner-slider">
                <div class="banner-slider-one pagination-square align-pagination-square">

                    <div class="banner-slider-single banner-animation-col">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-content">
                                    <h1 class="banner-title mb-40">
                                        Moda Sumag <span>Hombres</span>
                                    </h1>
                                    <p>Productos desarrolados con alta calidad.</p>
                                    <a href="{{route('web.escoger_producto2')}}" class="shop-now">Comprar ahora</a>
                                    <span class="border-line"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="single-banner-slider" style="background-image: url({{asset('assets/img/hombres.jpg')}})"></div>
                            </div>
                        </div>
                    </div>

                   <div class="banner-slider-single banner-animation-col">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-content">
                                    <h1 class="banner-title mb-40">
                                        Moda Sumag <span>Mujeres</span>
                                    </h1>
                                    <p>Productos desarrolados con alta calidad.</p>
                                    <a href="{{route('web.escoger_producto2')}}" class="shop-now">Comprar ahora</a>
                                    <span class="border-line"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="single-banner-slider" style="background-image: url({{asset('assets/img/Mujeres.jpg')}})"></div>
                            </div>
                        </div>
                    </div>

                    <div class="banner-slider-single banner-animation-col">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-content">
                                    <h1 class="banner-title mb-40">
                                        Moda Sumag <span>Niños</span>
                                    </h1>
                                    <p>Productos desarrolados con alta calidad.</p>
                                    <a href="{{route('web.escoger_producto2')}}" class="shop-now">Comprar ahora</a>
                                    <span class="border-line"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="single-banner-slider" style="background-image: url({{asset('assets/img/niños.jpg')}})"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End hero slider-->


    <!-- etiquetas de atencion alcliente , pago , envio gratis -->
    <!-- Etiquetas donde encontramos: atencion al cleinte , pago seguro, envio gratis -->
    <section class="featured section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 d-flex">
                    <div class="banner-box d-flex flex-fill align-items-center wow animate__animated animate__fadeInUp" data-wow-delay="0">
                        <div class="banner-icon">
                            <i class="feather-headphones"></i>
                        </div>
                        <div class="banner-text">
                            <h3>Atencion al cliente</h3>
                            <p>Obtener ayuda cuando lo necesite</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex">
                    <div class="banner-box d-flex align-items-center flex-fill wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <div class="banner-icon">
                            <i class="feather-shield"></i>
                        </div>
                        <div class="banner-text">
                            <h3>Pago Seguro</h3>
                            <p>Rapido y Seguro</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex">
                    <div class="banner-box d-flex align-items-center flex-fill wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <div class="banner-icon">
                            <i class="feather-truck"></i>
                        </div>
                        <div class="banner-text">
                            <h3>Envio gratis</h3>
                            <p>En todos los pedidos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- etiquetas de atencion alcliente , pago , envio gratis -->


    <!-- Productos destacados -->
    <section class="product-tab-section product-section">
        <div class="container">

            <!-- letra de productos destacados y ver mas -->
            <div class="section-title wow animate__animated animate__fadeIn">
                <h3>Productos destacados</h3>
            </div>

            <!-- Lista de categorias destacadas -->
            
            <div class="wow animate__animated animate__fadeIn mb-40">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-10 col-md-10">
                        
                    </div>
                    <div class="col-12 col-lg-2 col-md-2 text-end">
                        <a href="{{route('web.escoger_producto2')}}" class="view-more">Ver mas</a>
                        {{-- {{route('web.escoger_producto')}} --}}
                    </div>
                </div>
            </div>
            <!--End nav-tabs-->

            <!-- Muestra los producos con precio imagen estrellas de cada cateoriga detallada en productos destacados -->
            <div class="tab-content" id="product-tab-content">

                <!-- Productos de la categoria BEAUTY -->
                <div class="tab-pane fade show active" id="beauty" role="tabpanel">
                    
                    <div class="row product-grid">

                        <!-- Product box -->
                        @foreach ($articulos as $articulo)
                       
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                        
                                <!-- Parte del card donde se encuentra la imagen -->
                                <div class="product-img-col">
                        
                                    <!-- Imagen del producto -->
                                    <div class="product-img product-img-zoom">
                                        <a href="{{route('web.escoger_producto', $articulo)}}">
                                            
                                            
                                            <img src="@if($articulo->images){{Storage::url($articulo->images->url)}}@else https://cdn.pixabay.com/photo/2021/05/18/17/49/grass-6264039_960_720.jpg @endif" alt="">
                                        </a>
                                    </div>
                                    <!-- ertiqueta amarilla de venta -->
                                    <div class="product-badge">
                                        <span class="best">Venta</span>
                                    </div>
                        
                                </div>
                        
                                <!-- parte inferior del card donde se muesta el nombre del prodycto su precio y estrellas -->
                                <div class="product-content">
                        
                                    <h2><a href="{{route('web.escoger_producto', $articulo)}}">{{$articulo->nombre}}</a></h2>
                                    {{-- {{route('web.vista_producto')}} --}}
                        
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>S/. {{$articulo->precio_venta}} <p> soles </p> </span>
                                            
                                            {{-- <span class="old-price">S/. {{$producto->descuento}}</span>
                                            <span class="discount-tag">- {{round((($producto->descuento)/($producto->precio))*100,0)}}%</span> --}}
                                        </div>
                                    </div>
                                    
                        
                                </div>
                            </div>
                        </div>

                        @endforeach
                        <!-- /Product box -->


                    </div>
                </div>
                <!-- /Product Tab -->

                
                
            </div>
            <!-- /Product Tab -->

        </div>
    </section>
    <!-- /productos destacados -->

    
    <!-- categorias destacadas -->
    <section class="section-category">
        <div class="container">

            <!-- Letra de categoria destacadas -->
            <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                <h3 class="">CATEGORIAS DESTACADAS</h3>
            </div>
            
            <!-- categorias destacadas: mostrando su imagen nombre, descripcion, y link  -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="category-slider arrow-center position-relative">
                        <div class="slider-arrow slider-arrow-two carousel-category-arrow" id="carousel-category-arrows"></div>
                        <div class="carousel-category carousel-arrow-center" id="carousel-category">

                            <!-- Category Grid -->   
                            @foreach ($categorias as $categoria) 
                            <div class="category-grid wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                 
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="{{route('web.escoger_producto',$categoria)}}">
                                            <img class="default-img" src="https://img.freepik.com/foto-gratis/conjunto-jeans-sueter-ropa-mujer-moda-zapatos-accesorios-plano_169016-4116.jpg?w=996&t=st=1675465286~exp=1675465886~hmac=6f24934f876dfd768363670e7238b3fe64f1570ef1f0d1302c935fe06d9954f1" alt="">
                                            {{-- {{Storage::url($categoria->images->url)}} --}}
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="category-content">
                                    <h4><a href="{{route('web.escoger_producto',$categoria)}}">{{$categoria->nombre}}</a></h4>
                                    {{-- {{route('web.escoger_producto')}} --}}
                                    <p>Productos de alta calidad</p>
                                    <a href="{{route('web.escoger_producto',$categoria)}}" class="view-more">Ver mas</a>
                                </div>
                                
                            </div>
                            @endforeach
                            
                            <!-- /Category Grid -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /categorias destacadas -->

</x-app-layout>