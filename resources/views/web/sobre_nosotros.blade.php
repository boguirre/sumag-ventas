<x-app-layout>
    <!-- Links -->
    <div class="container">
        <div class="page-header breadcrumb-wrap">
            <div class="breadcrumb">
                <a href="/" rel="nofollow"><i class="fas fa-home mr-10"></i>SUMAG | DAMA NELSIN</a>
                <span></span> Sobre Nosotros
            </div>
        </div>
    </div>
     <!-- contenido  -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <!-- Sobre nostros -->
                <div class="col-md-12">
                    <h4 class="sub-title">Sobre Nosotros</h4>
                </div>
                <!-- Descripcion -->
                <div class="col-lg-6 col-md-6">
                    <div class="about-contact">
                        <h3>300+ Clientes en el distrito de Lima</h3>
                        <p>SUMAG Empresa dedica al rubro de la textileria, lleva 10 años de experiencia en el rubro, centrado en la calidad de productos para todo tipo de cliente; ofreciendo productos al mayoreo.</p>
                    </div>
                    <div>
                        
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <img src="{{asset('assets/img/ropa-sumag.png')}}" alt=""> <br><br><br>
                </div>

            
                <!-- Mision y Vision -->
                {{-- <div class="col-lg-6 col-md-6">
                    <div class="accordion" id="accordionExample">
                        <!-- Mision -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Nuestra Mision
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Llevar nuestros modelos de trabajo al máximo de lugares posibles, para que todo el mundo pueda disfrutar de la moda y el mejor diseño. Velar por la calidad de nuestras prendas y el servicio que ofrecemos a nuestros clientes.
                                </div>
                            </div>
                        </div>

                        <!-- Vision -->
                        <div class="accordion-item mb-0">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Nuestra Vision
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Ser una empresa líder y reconocida en la venta de ropa, lograr también extendernos y crear nuestras cadenas de almacenes, proporcionando cada día más un servicio de excelencia a nuestros clientes y que al mismo tiempo nos permitan competir en el mercado nacional con los mejores precios del mercado.
                                </div>
                            </div>
                        </div>

                    </div>
                </div> --}}

                
            </div>

            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <div class="product-card" style="border-radius: 20px; border:#ffffff;">
                    <div class="card-header" style="background:#ffffff">
                        <h3 class="footer footer-title  text-center" style="color: #ad7dc1">Nuestra Misión</h3>
                    </div>
                    <div class="card-body">
                      <p class="card-text text-center">"Llevar nuestros modelos de trabajo al máximo de lugares posibles, para que todos los clientes puedan disfrutar de la moda y el mejor diseño. Velar por la calidad de nuestras prendas y el servicio que ofrecemos a nuestros clientes."</p><br><br>
                     {{-- <center><img src="{{asset('assets/img/mision-sumag2.png')}}" alt=""></center> --}}
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                  <div class="product-card" style="border-radius: 20px; border:#ffffff;">
                    <div class="card-header" style="background:#ffffff">
                        <h3 class="footer footer-title text-center" style="color:  #ad7dc1">Nuestra Visión</h3>
                    </div>
                    <div class="card-body">
                      <p class="card-text text-center"> "Ser una empresa líder y reconocida en la venta de ropa, lograr también extendernos y crear nuestras cadenas de almacenes, proporcionando cada día más un servicio de excelencia a nuestros clientes y que al mismo tiempo nos permitan competir en el mercado nacional con los mejores precios del mercado."</p><br>
                      {{-- <center><img  src="{{asset('assets/img/vision-sumag1.png')}}" alt=""></center> --}}
                    </div>
                  </div>
                </div>

            </div>


        </div>
    </div>
 </x-app-layout>