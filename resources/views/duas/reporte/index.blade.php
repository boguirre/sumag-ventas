@extends('layouts.panel')
@section('header')
<div class="container-fluid iq-container">

  <div class="row">
      <div class="col-md-12">
          <div class="flex-wrap d-flex justify-content-center align-items-center" style="color: black">
              <div>
                  <h1 class="text-center">REPORTE DE DUAS!</h1>
                  <p class="text-center">Podras interactuar con las diferentes graficos
                  </p>
              </div>
              
         </div>
  </div>
</div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-5">
        <div class="card" data-aos="fade-up" data-aos-delay="800">
           <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
              <div class="header-title ">
                 {{-- <h4 class="card-title text-center">$855.8K</h4> --}}
                 <p class="mb-0 text-center" > <b ></b></p>          
              </div>
              
              
           </div>
           <div class="card-body ">
            <div class="pt-4 pb-2 " id="chartfiltro" ></div>
         </div>
        </div>
     </div>
</div>
@endsection