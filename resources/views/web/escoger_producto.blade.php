<x-app-layout>
    {{-- links --}}
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 m-auto">
                <div class="page-header breadcrumb-wrap">
                    <div class="breadcrumb">
                        <a href="/" rel="nofollow"><i class="fas fa-home mr-10"></i>SUMAG</a>
                        <span></span> Categoria <span></span> {{$categoria->nombre}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        {{-- descripcionde cateogira --}}
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="product-main-content">

                        <div class="product-text">
                            <h5><p>{{$categoria->nombre}}:  @if($categoria->articulos->count('id') < 2) {{$categoria->articulos->count('id')}} Articulo @else {{$categoria->articulos->count('id')}}  Articulos @endif</p>  </h5>  
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>

        {{-- contenido  --}}
        <div class="container mb-30">
            <div class="row flex-row-reverse">

                <div class="col-lg-4-5">
                    <div class="shop-product-fillter">

                        <div class="totall-product">
                            <div class="sort-by-product-area">
                                <div class="sort-by-cover mr-10">

                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span>Default sorting</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span><i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>

                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">50</a></li>
                                            <li><a href="#">100</a></li>
                                            <li><a href="#">150</a></li>
                                            <li><a href="#">200</a></li>
                                            <li><a href="#">All</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="totall-product">
                            <div class="sort-by-product-area">
                                <div class="sort-by-cover">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span>Mostrar:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> 8 <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">8</a></li>
                                            <li><a href="#">10</a></li>
                                            <li><a href="#">15</a></li>
                                            <li><a href="#">20</a></li>
                                            <li><a href="#">All</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sort-by-cover sort-link-right">
                                    <div class="sort-by-link">
                                        <div class="sort-link">
                                            <a href="product-category-list.html" class="m-0 active"><i class="fi-rs-apps"></i></a>
                                            {{-- <a href="product-category-grid.html" class="m-0 active"><i class="fi-rs-list"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row product-grid">
                        <!-- mostrar producto card -->
                        @foreach ($productos as $producto)
                        <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                        
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{route('web.ver_articulo', $producto)}}">
                                            <img class="img-fluid" src="@if($producto->images) {{Storage::url($producto->images->url)}}@else {{asset('assets/img/sin-imagen2.png')}} @endif" alt="" />
                                        </a>
                                    </div>
                                     
                                    <div class="product-badge">
                                        <span class="best">Venta</span>
                                    </div>
                                </div>
                        
                                <div class="product-content">
                                    <h2><a href="{{route('web.ver_articulo', $producto)}}">{{$producto->nombre}}</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>S/. {{$producto->precio_venta}} <p> soles </p> </span>
                                            <span> <p>Cantidad :  {{$producto->stock}} </p>  </span>
                                        </div>
                                    </div>
                                    <div class="product-rating-info product-card-bottom">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- /mostrar producto card -->
                    </div>

                    <!--product grid-->
                    <div class="pagination-area">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fi-rs-angle-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">10</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fi-rs-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <div class="pagination-show">
                            <p>Showing 1–8 of 62 results</p>
                        </div>
                    </div>
                    
                    <!--End Deals-->
                </div>

                <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
                    <!-- Fillter By Price -->
                    <div class="sidebar-widget price_range range mb-30">
                        <h5 class="section-title style-1 mb-20">Seleccionar:</h5>
                        <div class="list-group">

                            <div class="list-group-item mb-10">
                                <label class="list-group-text">CATEGORIAS</label>
                                <ul class="footer-list mb-sm-5 mb-md-0">
                                    @foreach ($filtrocategoria as $categoria)
                                    <li>
                                        <a href="{{route('web.escoger_producto',$categoria)}}"><i class="feather-shopping-cart"></i>  {{$categoria->nombre}}</a>
                                        {{-- {{route('web.escoger_producto')}}     --}}
                                    </li>
                                    @endforeach
                                </ul>

                            </div>

                    

                        </div>
                        <br>
                       
                        <a href="{{route('web.escoger_producto2')}}" class="btn fillter-btn">Mostrar todo</a>
                    </div>
                    <!-- Product sidebar Widget -->
                </div>

            </div>
        </div>


    </div>
 </x-app-layout>