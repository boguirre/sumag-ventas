 {{-- contenido  --}}
 <div class="container mb-30">
    <div class="row flex-row-reverse">

        <div class="col-lg-4-5">
            <div class="shop-product-fillter">

                <div class="totall-product">
                    <div class="sort-by-product-area">
                        <div class="sort-by-cover">
                            <div class="sort-by-product-wrap">
                                <div class="sort-by">
                                    <span>Mostrar:</span>
                                </div>
                                <div class="sort-by-dropdown-wrap">
                                    <select wire:model="cant" class="form-select border-white">
                                        <option value="15"><span>15</span></option>
                                        <option value="25"><span>25</span></option>
                                        <option value="35"><span>35</span></option>
                                        <option value="45"><span>45</span></option>
                                        <option value="55"><span>55</span></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="totall-product col-lg-auto">
                    <div class="sort-by-product-area">
                        <div class="sort-by-cover">
                            <input class="border border-white" type="text" placeholder="Buscar..." wire:model="search">
                        </div>
                    </div>
                </div>

            </div>

            @if ($productosgeneral->count())
            <div class="row product-grid">
                <!-- mostrar productos general Card -->

                @foreach ($productosgeneral as $producto)
                
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
                            <h2><a href="{{route('web.ver_articulo', $producto)}}">{{Str::Upper($producto->nombre)}}</a></h2>
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
                <!-- /mostrar productos general Card -->
            </div>
            <!--product grid-->
            
            @if ($productosgeneral->hasPages())
            <div class="pagination-area">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        {{$productosgeneral->links()}}
                    </ul>
                </nav>
                <div class="pagination-show">
                    {{-- <p>Showing 1–8 of 62 results</p> --}}
                </div>
            </div>
            @else
            
            @endif
            
            <!--End Deals-->
            @else
                <div class="px-6 py-4">
                    <span> <p>  Próximamente nuevos artículos 😊</p></span>
                </div>
            @endif
        </div>

        <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
            <!-- Fillter By Price -->
            <div class="sidebar-widget price_range range mb-30">
                <h5 class="section-title style-1 mb-20">Seleccionar:</h5>
                <div class="list-group">

                    <div class="list-group-item mb-10">
                        <label class="list-group-text">CATEGORIAS</label>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            @foreach ($categoriageneral as $categoria)
                            <li>
                                <a href="{{route('web.escoger_producto',$categoria)}}"><i class="feather-shopping-cart"></i>  {{Str::Upper($categoria->nombre)}}</a>
                                {{-- {{route('web.escoger_producto')}}     --}}
                            </li>
                            @endforeach
                        </ul>

                    </div>

            

                </div>
                <br>
               
                {{-- <a href="{{route('web.escoger_producto2')}}" class="btn fillter-btn">Mostrar todo</a> --}}
            </div>
            <!-- Product sidebar Widget -->
        </div>

    </div>
</div>
