@extends('layouts.panel')
@section('header')
<div class="container-fluid iq-container">

  <div class="row">
      <div class="col-md-12">
          <div class="flex-wrap d-flex justify-content-center align-items-center" style="color: black">
              <div>
                  <h1 class="text-center">REPORTE DE COMPROBANTES!</h1>
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
    <div class="col-md-12 col-lg-12">
        <div class="row row-cols-1">
           <div class="overflow-hidden d-slider1 ">
              <ul  class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                 <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                    <div class="card-body">
                       <div class="progress-widget">
                          <div id="circle-progress-01" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                             <svg class="card-slie-arrow " width="24" height="24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                             </svg>
                          </div>
                          <div class="progress-detail">
                             <p  class="mb-2">Total Comprobantes</p>
                             <h4 class="counter">N° {{$totalcomprobantes}}</h4>
                          </div>
                       </div>
                    </div>
                 </li>
                 <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                    <div class="card-body">
                       <div class="progress-widget">
                          <div id="circle-progress-02" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
                             <svg class="card-slie-arrow " width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                             </svg>
                          </div>
                          <div class="progress-detail">
                             <p  class="mb-2">Total Cancelados</p>
                             <h4 class="counter">N°{{$comprobantescancelados}}</h4>
                          </div>
                       </div>
                    </div>
                 </li>
                 <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                    <div class="card-body">
                       <div class="progress-widget">
                          <div id="circle-progress-03" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="70" data-type="percent">
                             <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                             </svg>
                          </div>
                          <div class="progress-detail">
                             <p  class="mb-2">Total Boletas</p>
                             <h4 class="counter"> N° {{$nboletas}}</h4>
                          </div>
                       </div>
                    </div>
                 </li>
                 <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                    <div class="card-body">
                       <div class="progress-widget">
                          <div id="circle-progress-04" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="60" data-type="percent">
                             <svg class="card-slie-arrow " width="24px" height="24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                             </svg>
                          </div>
                          <div class="progress-detail">
                             <p  class="mb-2">Total de Facturas</p>
                             <h4 class="counter">N° {{$nfacturas}}</h4>
                          </div>
                       </div>
                    </div>
                 </li>
                 
                 
                 
              </ul>
              <div class="swiper-button swiper-button-next"></div>
              <div class="swiper-button swiper-button-prev"></div>
           </div>
        </div>
     </div>
    <div class="col-md-6 col-lg-5">
        <div class="card" data-aos="fade-up" data-aos-delay="800">
           <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
              <div class="header-title ">
                <p class="mb-0 text-center"> <b>ESTADOS DE COMPROBANTES - {{$añomes}}</b></p>
                <p class="mb-0 text-center" > <b ></b></p>          
              </div>
              
              
           </div>
           <div class="card-body ">
            <div class="pt-4 pb-2 " id="chartdua" ></div>
         </div>
        </div>
     </div>
    <div class="col-md-6 col-lg-7">
        <div class="card" data-aos="fade-up" data-aos-delay="800">
           <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
              <div class="header-title ">
                <p class="mb-0 text-center"> <b>CANTIDAD DE COMPROBANTES EN DEUDA POR TIENDA</b></p>
              </div>
              
              
           </div>
           <div class="card-body ">
            <div class="pt-4 pb-2 " id="chartpersepcion" ></div>
         </div>
        </div>
     </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {

        const cData = JSON.parse(`<?php echo $data; ?>`)
        console.log(cData);
        var options = {
            series: cData.data,
            chart: {
                height: 500,
                type: 'donut'

            },
            labels: ['PENDIENTE', 'CANCELADO'],
            responsive: [{
                breakpoint: 350,
                options: {
                    chart: {
                        width: 380,
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };




        var charts = new ApexCharts(document.querySelector("#chartdua"), options);
        charts.render();
    })
</script>
<script>
    $(document).ready(function() {
        const cData = JSON.parse(`<?php echo $report; ?>`)
        console.log(cData);


        var options = {
            series: [{
                name: 'Cantidad De Documentos',
                data:  cData.report
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
                title: {
            text: 'Nombre de Tienda'
            },
                categories: cData.label,
            },
            yaxis: {
                title: {
                    text: 'N° Documentos'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "N° " + val + ""
                    }
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#chartpersepcion"), options);
        chart.render();
    })
</script>

@endsection
