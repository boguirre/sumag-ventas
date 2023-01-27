{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}



<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SUMAG | Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="/css/core/libs.min.css" />


    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="/css/hope-ui.min.css?v=1.2.0" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="/css/custom.min.css?v=1.2.0" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="/css/dark.min.css" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="/css/customizer.min.css" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="/css/rtl.min.css" />

</head>

<body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <div class="row m-0 align-items-center bg-white vh-100">
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                                <div class="card-body">
                                    <a href="/"
                                        class="navbar-brand d-flex align-items-center mb-3">
                                        <!--Logo start-->
                                        <svg width="30" class="" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="-0.757324" y="19.2427" width="28" height="4"
                                                rx="2" transform="rotate(-45 -0.757324 19.2427)"
                                                fill="currentColor" />
                                            <rect x="7.72803" y="27.728" width="28" height="4"
                                                rx="2" transform="rotate(-45 7.72803 27.728)"
                                                fill="currentColor" />
                                            <rect x="10.5366" y="16.3945" width="16" height="4"
                                                rx="2" transform="rotate(45 10.5366 16.3945)"
                                                fill="currentColor" />
                                            <rect x="10.5562" y="-0.556152" width="28" height="4"
                                                rx="2" transform="rotate(45 10.5562 -0.556152)"
                                                fill="currentColor" />
                                        </svg>
                                        <!--logo End-->
                                        <h4 class="logo-title ms-3">SUMAG</h4>
                                    </a>
                                    <h2 class="mb-2 text-center">Iniciar Sesion</h2>
                                    <p class="text-center">Para ingresar al Sistema</p>
                                    <x-jet-validation-errors class="mb-4" style="color:red" />

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" style="border-color: blue" id="email"
                                                        name="email" aria-describedby="email" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="password" class="form-label">Contraseña</label>
                                                    <input type="password" class="form-control" style="border-color: blue" id="password"
                                                        aria-describedby="password" placeholder=" " name="password">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 d-flex justify-content-between">
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1">Recordarme
                                                        </label>
                                                </div>
                                                {{-- <a href="recoverpw.html">¿Te olvidaste tu contraseña?</a> --}}
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary">Ingresar</button>
                                        </div>
                                        {{-- <p class="mt-3 text-center">
                                            ¿No tienes una cuenta? <a href="{{ route('register') }}" class="text-underline">Click
                                                Aqui para registrarse</a>
                                        </p> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sign-bg">
                        <svg width="280" height="230" viewBox="0 0 431 398" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.05">
                                <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857"
                                    transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF" />
                                <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857"
                                    transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF" />
                                <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857"
                                    transform="rotate(45 61.9355 138.545)" fill="#3B8AFF" />
                                <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857"
                                    transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
                    <img src="/images/auth/01.png" class="img-fluid gradient-main animated-scaleX" alt="images">
                </div>
            </div>
        </section>
    </div>

    <!-- Library Bundle Script -->
    <script src="/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="/js/charts/vectore-chart.js"></script>
    <script src="/js/charts/dashboard.js"></script>

    <!-- fslightbox Script -->
    <script src="/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->

    <!-- App Script -->
    <script src="/js/hope-ui.js" defer></script>
</body>

</html>
