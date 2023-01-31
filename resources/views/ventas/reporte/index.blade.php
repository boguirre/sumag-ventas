@extends('layouts.panel')
@section('header')
<div class="container-fluid iq-container">

  <div class="row">
      <div class="col-md-12">
          <div class="flex-wrap d-flex justify-content-center align-items-center" style="color: black">
              <div>
                  <h1 class="text-center">REPORTE DE VENTAS!</h1>
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
             <p class="mb-0 text-center" > <b >TOP 5 DE PRODUCTOS VENDIDOS</b></p>          
          </div>
          
          
       </div>
       <div class="card-body ">
        <div class="pt-4 pb-2 " id="chartfiltro" ></div>
     </div>
    </div>
 </div>
<div class="col-md-12 col-lg-12">
    <div class="card" data-aos="fade-up" data-aos-delay="800">
       <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
          <div class="header-title ">
             {{-- <h4 class="card-title text-center">$855.8K</h4> --}}
             <p class="mb-0 text-center" > <b >VENTAS POR MESE DEL PRESENTE AÑO</b></p>          
          </div>
          
          
       </div>
       <div class="card-body">
        <div id="chartventaxmes" ></div>
     </div>
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
            name: 'Ventas',
          data: cData.data
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '70%',
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
          categories: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
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
        var chart = new ApexCharts(document.querySelector("#chartventaxmes"), options);
        chart.render();
    })
    </script>
    <script>
      $(document).ready(function(){

          const cData = JSON.parse(`<?php echo $report; ?>`)
  console.log(cData);
          var options = {
    series: cData.report,
    chart: {
      height: 500,
    type: 'donut'

  },
  labels: [cData.label[0],cData.label[1],cData.label[2],cData.label[3],cData.label[4]]
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

  


  var charts = new ApexCharts(document.querySelector("#chartfiltro"), options);
  charts.render();
})
</script>
@endsection