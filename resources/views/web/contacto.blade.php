<x-app-layout>
    <div class="container">
        <div class="page-header breadcrumb-wrap">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fas fa-home mr-10"></i>SUMAG</a>
                <span></span> Contacto
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">

            <!-- formulario de enviar mensaje -->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">

                    <!-- cuadros de enviar mensaje -->
                    {{-- <div class="contact-from-area padding-20-row-col">
                        <h4 class="mb-10">Formulario de Contacto</h4>
                        <p class="text-muted mb-30 font-sm">Su dirección de correo electrónico no será publicada. Los campos obligatorios están marcados con *</p>
                        <form class="contact-form" id="contact-form" action="#" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="name" placeholder="Nombre Completo" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input name="email" placeholder="Su correo electronico" type="email" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input name="telephone" placeholder="Su numero de celular" type="tel" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input name="subject" placeholder="Asusnto" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Mensaje"></textarea>
                                    </div>
                                    <div class="form-group mb-0 float-end">
                                        <button class="submit submit-auto-width" type="submit">Enviar Mensaje</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> --}}

                </div>
            </div>

            <!-- Informacion de contacto empresa -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="contact-card w-100">
                        <div class="contact-body">
                            <div class="contact-icon">
                                <p><i class="feather-mail"></i></p>
                            </div>
                            <div class="contact-details">
                                <h4>Email</h4>
                                <p class="text-muted">SUMAGe@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="contact-card w-100">
                        <div class="contact-body">
                            <div class="contact-icon" >
                                <p><i class="feather-phone-call"></i></p>
                            </div>
                            <div class="contact-details">
                                <h4>Numero de Celular</h4>
                                <p class="text-muted">+5196262665</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="contact-card w-100">
                        <div class="contact-body">
                            <div class="contact-icon">
                                <p><i class="feather-map-pin"></i></p>
                            </div>
                            <div class="contact-details">
                                <h4>Direccion</h4>
                                <p class="text-muted">Av. Abancay 1113, Lima 15001</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Google Map -->
    <div class="map-grid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.7895534741565!2d-77.0298344!3d-12.057995799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8bed1b314ad%3A0x5d84c81fc44645e3!2sSumac%20Fashion!5e0!3m2!1ses-419!2spe!4v1675573996139!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen="" aria-hidden="false" tabindex="0" class="contact-map"></iframe>
    </div>
    <!-- Google Map --> 
 </x-app-layout>