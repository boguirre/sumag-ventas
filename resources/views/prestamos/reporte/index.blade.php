@extends('layouts.panel')
@section('header')
<div class="container-fluid iq-container">

  <div class="row">
      <div class="col-md-12">
          <div class="flex-wrap d-flex justify-content-center align-items-center" style="color: black">
              <div>
                  <h1 class="text-center">REPORTE DE PRESTAMOS!</h1>
                  <p class="text-center">Podras interactuar con las diferentes graficos
                  </p>
              </div>
              
         </div>
  </div>
</div>
</div>

@endsection

@section('content')
<div class="col-md-9 col-lg-8">
    <div class="card" data-aos="fade-up" data-aos-delay="800">
       <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
          <div class="header-title ">
             {{-- <h4 class="card-title text-center">$855.8K</h4> --}}
             <p class="mb-0 text-center" > <b >PRESTAMOS POR EMPRESA</b></p>          
          </div>
          
          
       </div>
       <div class="card-body">
        <div id="chartprestamo" ></div>
     </div>
    </div>
 </div>

 
@endsection

@section('scripts')
    <script>
    $(document).ready(function(){
        const cData = JSON.parse(`<?php echo $data; ?>`)
        console.log(cData);

          
        var options = {
          series: [{
            name: 'Prestamo',
          data: cData.data
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: true
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: cData.label,
        },
        yaxis: {
          title: {
            text: 'S/. (Soles)'
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "S/. " + val + " Soles"
            }
          }
        }
        };
        var chart = new ApexCharts(document.querySelector("#chartprestamo"), options);
        chart.render();
    })
    </script>
@endsection