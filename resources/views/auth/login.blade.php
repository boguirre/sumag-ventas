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
     <link rel="stylesheet" href="{{asset('/css/core/libs.min.css')}}" />

     <!-- Aos Animation Css -->
     <link rel="stylesheet" href="{{asset('/vendor/aos/dist/aos.css')}}" />
 
     <!-- Hope Ui Design System Css -->
     <link rel="stylesheet" href="{{asset('/css/hope-ui.min.css?v=1.2.0')}}" />
 
     <!-- Custom Css -->
     <link rel="stylesheet" href="{{asset('/css/custom.min.css?v=1.2.0')}}" />
 
     <!-- Dark Css -->
     <link rel="stylesheet" href="{{asset('/css/dark.min.css')}}" />
 
     <!-- Customizer Css -->
     <link rel="stylesheet" href="{{asset('/css/customizer.min.css')}}" />
 
     <!-- RTL Css -->
     <link rel="stylesheet" href="{{asset('/css/rtl.min.css')}}" />

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
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
        width="60" height="60" viewBox="0 0 464.000000 535.000000"
        preserveAspectRatio="xMidYMid meet" fill="none">
       <metadata>
       Created by potrace 1.16, written by Peter Selinger 2001-2019
       </metadata>
       <g transform="translate(0.000000,535.000000) scale(0.100000,-0.100000)"
       fill="currentColor" stroke="none">
       <path d="M1655 5240 c-40 -16 -68 -58 -73 -109 -4 -45 -1 -52 30 -86 27 -30
       43 -38 78 -41 54 -6 86 9 117 55 28 42 29 86 3 128 -32 53 -100 76 -155 53z"/>
       <path d="M584 4561 c-44 -27 -64 -59 -64 -104 0 -78 50 -127 131 -127 33 0 47
       6 74 33 43 43 52 79 34 130 -26 74 -113 108 -175 68z"/>
       <path d="M1503 4433 c-59 -11 -83 -104 -38 -148 47 -48 125 -27 149 39 12 35
       -13 87 -50 102 -18 8 -35 13 -36 13 -2 -1 -13 -4 -25 -6z"/>
       <path d="M2219 3965 c-94 -30 -158 -139 -142 -240 8 -52 61 -125 107 -148 208
       -107 409 132 269 321 -48 65 -149 94 -234 67z"/>
       <path d="M966 3851 c-39 -26 -55 -57 -56 -104 -1 -142 193 -174 239 -40 13 35
       13 46 0 79 -28 74 -120 107 -183 65z"/>
       <path d="M2877 3759 c-145 -22 -247 -140 -253 -292 -7 -153 -129 -258 -301
       -258 -102 0 -174 14 -189 38 -84 124 -180 185 -310 197 -239 20 -443 -184
       -420 -424 8 -94 61 -196 132 -257 65 -56 78 -93 72 -204 -4 -59 -11 -87 -31
       -121 -33 -57 -102 -120 -165 -152 -43 -22 -54 -24 -88 -14 -87 24 -215 -15
       -288 -88 -60 -61 -90 -134 -91 -224 0 -65 4 -84 33 -142 51 -105 142 -166 258
       -176 l63 -5 7 -46 c72 -530 355 -967 799 -1237 409 -248 947 -302 1405 -142
       481 170 871 566 1029 1048 64 196 75 272 75 520 0 197 -2 238 -22 330 -34 155
       -74 269 -147 415 -164 329 -426 591 -750 750 -106 52 -301 119 -397 136 -38 7
       -68 15 -69 18 0 3 -2 25 -4 48 -16 184 -170 308 -348 282z m1042 -866 c5 -21
       12 -114 16 -208 4 -93 9 -181 10 -195 2 -14 6 -92 10 -175 3 -82 8 -170 10
       -195 2 -25 7 -112 11 -195 3 -82 7 -162 9 -177 2 -14 7 -108 11 -207 l7 -180
       -24 -10 c-39 -14 -214 -14 -227 1 -14 18 -20 78 -27 278 -4 96 -8 198 -10 225
       -2 28 -6 122 -10 210 -3 88 -8 179 -12 202 -5 38 -7 41 -23 30 -9 -6 -122
       -124 -249 -262 -172 -186 -238 -250 -255 -250 -16 0 -128 102 -399 365 -207
       200 -385 380 -395 400 -16 28 -21 64 -27 193 -5 111 -3 157 4 157 12 0 20 -7
       478 -443 172 -163 319 -297 327 -297 7 0 139 134 293 298 355 377 446 472 455
       472 4 0 12 -17 17 -37z m-1675 -359 c13 -5 16 -25 16 -119 0 -124 0 -124 -66
       -143 -56 -16 -93 -47 -115 -96 -53 -117 10 -256 133 -290 29 -8 118 -20 198
       -26 234 -17 273 -21 315 -32 71 -18 154 -69 211 -130 91 -99 127 -189 126
       -318 -1 -233 -175 -441 -381 -458 -85 -7 -91 2 -91 123 0 108 10 127 79 150
       125 41 167 175 94 294 -49 78 -85 90 -344 112 -122 10 -248 26 -278 35 -138
       39 -246 129 -303 250 -25 54 -32 83 -36 158 -12 235 126 429 341 482 61 15 80
       16 101 8z"/>
       <path d="M165 3327 c-43 -20 -93 -80 -101 -122 -32 -173 154 -290 286 -179 90
       76 82 216 -16 283 -43 29 -125 38 -169 18z"/>
       <path d="M1015 3002 c-180 -86 -161 -342 30 -397 229 -67 373 242 177 379 -55
       39 -146 47 -207 18z"/>
       </g>
       </svg>
                                        <!--logo End-->
                                        <h4 class="logo-title ms-3">SUMAG</h4>
                                    </a>
                                    <h2 class="mb-2 text-center">Iniciar Sesión</h2>
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
                        {{-- <svg width="280" height="230" viewBox="0 0 431 398" fill="none"
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
                        </svg> --}}
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
        width="280" height="230" viewBox="0 0 464.000000 535.000000"
        preserveAspectRatio="xMidYMid meet" fill="none">
       <metadata>
       Created by potrace 1.16, written by Peter Selinger 2001-2019
       </metadata>
       <g transform="translate(0.000000,535.000000) scale(0.100000,-0.100000)"
       fill="currentColor" stroke="none" opacity="0.05">
       <path d="M1655 5240 c-40 -16 -68 -58 -73 -109 -4 -45 -1 -52 30 -86 27 -30
       43 -38 78 -41 54 -6 86 9 117 55 28 42 29 86 3 128 -32 53 -100 76 -155 53z"/>
       <path d="M584 4561 c-44 -27 -64 -59 -64 -104 0 -78 50 -127 131 -127 33 0 47
       6 74 33 43 43 52 79 34 130 -26 74 -113 108 -175 68z"/>
       <path d="M1503 4433 c-59 -11 -83 -104 -38 -148 47 -48 125 -27 149 39 12 35
       -13 87 -50 102 -18 8 -35 13 -36 13 -2 -1 -13 -4 -25 -6z"/>
       <path d="M2219 3965 c-94 -30 -158 -139 -142 -240 8 -52 61 -125 107 -148 208
       -107 409 132 269 321 -48 65 -149 94 -234 67z"/>
       <path d="M966 3851 c-39 -26 -55 -57 -56 -104 -1 -142 193 -174 239 -40 13 35
       13 46 0 79 -28 74 -120 107 -183 65z"/>
       <path d="M2877 3759 c-145 -22 -247 -140 -253 -292 -7 -153 -129 -258 -301
       -258 -102 0 -174 14 -189 38 -84 124 -180 185 -310 197 -239 20 -443 -184
       -420 -424 8 -94 61 -196 132 -257 65 -56 78 -93 72 -204 -4 -59 -11 -87 -31
       -121 -33 -57 -102 -120 -165 -152 -43 -22 -54 -24 -88 -14 -87 24 -215 -15
       -288 -88 -60 -61 -90 -134 -91 -224 0 -65 4 -84 33 -142 51 -105 142 -166 258
       -176 l63 -5 7 -46 c72 -530 355 -967 799 -1237 409 -248 947 -302 1405 -142
       481 170 871 566 1029 1048 64 196 75 272 75 520 0 197 -2 238 -22 330 -34 155
       -74 269 -147 415 -164 329 -426 591 -750 750 -106 52 -301 119 -397 136 -38 7
       -68 15 -69 18 0 3 -2 25 -4 48 -16 184 -170 308 -348 282z m1042 -866 c5 -21
       12 -114 16 -208 4 -93 9 -181 10 -195 2 -14 6 -92 10 -175 3 -82 8 -170 10
       -195 2 -25 7 -112 11 -195 3 -82 7 -162 9 -177 2 -14 7 -108 11 -207 l7 -180
       -24 -10 c-39 -14 -214 -14 -227 1 -14 18 -20 78 -27 278 -4 96 -8 198 -10 225
       -2 28 -6 122 -10 210 -3 88 -8 179 -12 202 -5 38 -7 41 -23 30 -9 -6 -122
       -124 -249 -262 -172 -186 -238 -250 -255 -250 -16 0 -128 102 -399 365 -207
       200 -385 380 -395 400 -16 28 -21 64 -27 193 -5 111 -3 157 4 157 12 0 20 -7
       478 -443 172 -163 319 -297 327 -297 7 0 139 134 293 298 355 377 446 472 455
       472 4 0 12 -17 17 -37z m-1675 -359 c13 -5 16 -25 16 -119 0 -124 0 -124 -66
       -143 -56 -16 -93 -47 -115 -96 -53 -117 10 -256 133 -290 29 -8 118 -20 198
       -26 234 -17 273 -21 315 -32 71 -18 154 -69 211 -130 91 -99 127 -189 126
       -318 -1 -233 -175 -441 -381 -458 -85 -7 -91 2 -91 123 0 108 10 127 79 150
       125 41 167 175 94 294 -49 78 -85 90 -344 112 -122 10 -248 26 -278 35 -138
       39 -246 129 -303 250 -25 54 -32 83 -36 158 -12 235 126 429 341 482 61 15 80
       16 101 8z"/>
       <path d="M165 3327 c-43 -20 -93 -80 -101 -122 -32 -173 154 -290 286 -179 90
       76 82 216 -16 283 -43 29 -125 38 -169 18z"/>
       <path d="M1015 3002 c-180 -86 -161 -342 30 -397 229 -67 373 242 177 379 -55
       39 -146 47 -207 18z"/>
       </g>
       </svg>
                    </div>
                </div>
                <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
                    <img src="/images/auth/sumaglogin.png" class="img-fluid gradient-main animated-scaleX" alt="images">
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
