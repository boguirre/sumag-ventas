@section('title', 'Reporte De Ventas')
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
  {{-- <div class="col-md-6 col-lg-5">
    <div class="card" data-aos="fade-up" data-aos-delay="800">
       <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
          <div class="header-title ">
             <p class="mb-0 text-center" > <b >TOP 5 DE PRODUCTOS VENDIDOS</b></p>          
          </div>
          
          
       </div>
       <div class="card-body ">
     </div>
    </div>
 </div> --}}
 <div class="col-md-6 col-lg-7">
            <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
               <div class="flex-wrap card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="mb-2 card-title">Total Ventas Agrupadas Por Tiendas</h4>
                     <p class="mb-0">
                        <svg class ="me-2 text-primary" width="24" height="24" viewBox="0 0 24 24">
                           <path fill="currentColor" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                        </svg>
                        Del Mes Actual {{$getyearmonth}}
                     </p>            
                  </div>
                  
               </div>
               <div class="p-0 card-body">
                  <div class="mt-4 table-responsive">
                     <table id="basic-table" class="table mb-0 table-striped" role="grid">
                        <thead>
                           <tr>
                              <th>TIENDA</th>
                              <th>TOTAL DE VENTAS</th>
                           </tr>
                        </thead>
                        <tbody>
                          @foreach ($ventasportiendas as $ventasportienda)

                           <tr>
                              <td>
                                 <div class="d-flex align-items-center">
                                    <h6>{{$ventasportienda->nombre}}</h6>
                                 </div>
                              </td>
                             
                              <td>S/.{{$ventasportienda->total}}</td>
                              
                           </tr>
                          @endforeach

                           
                           
                          
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
<div class="col-md-12 col-lg-12">
    <div class="card" data-aos="fade-up" data-aos-delay="800">
       <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
          <div class="header-title ">
             {{-- <h4 class="card-title text-center">$855.8K</h4> --}}
             <p class="mb-0 text-center" > <b >VENTAS POR MESES DEL PRESENTE AÑO</b></p>          
          </div>
          
          
       </div>
       <div class="card-body">
        <div id="chartventaxmes" ></div>
     </div>
    </div>
 </div>
 {{-- <div class="col-md-12 col-lg-12">
  <div class="card" data-aos="fade-up" data-aos-delay="800">
     <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
        <div class="header-title ">
           <p class="mb-0 text-center" > <b >VENTAS POR DÍAS DEL MES</b></p>          
        </div>
        
        
     </div>
     <div class="card-body">
      <div id="chartventaxdia" ></div>
   </div>
  </div>
</div> --}}

<div class="col-md-12 col-lg-12">
  <div class="card" data-aos="fade-up" data-aos-delay="800">
     <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
        <div class="header-title ">
           {{-- <h4 class="card-title text-center">$855.8K</h4> --}}
           <p class="mb-0 text-center" > <b >VENTAS POR DÍAS DEL MES</b></p>          
        </div>
        
        
     </div>
     <div class="card-body">
      <div id="chartventasxdiasdelmes" ></div>
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
          title:{
            text: ' Meses Del Año'
          },
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
  labels: cData.label,
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
  
  <script>



$(document).ready(function(){
  const cData = JSON.parse(`<?php echo $repordias; ?>`)
  console.log(cData);
         var options = {
          series: [
            {
              name: 'Ventas',
              data: cData.repordias

            }
          ],
          chart: {
          height: 350,
          type: 'line',
          id: 'areachart-2'
        },
        
        dataLabels: {
          enabled: true
        },
        stroke: {
          curve: 'straight'
        },
        grid: {
          padding: {
            right: 30,
            left: 20
          }
        },
        title: {
          text: 'Ventas Por Dias Del Mes',
          align: 'left'
        },
        labels: cData.label,
        xaxis: {
          type: 'date',
          title: {
            text: 'Días del Mes'
          }
        },
        yaxis: {
          title: {
            text: 'S/. (Soles)'
          }
        },

        };

        var chart = new ApexCharts(document.querySelector("#chartventasxdiasdelmes"), options);
        chart.render();
      
})
  </script>

@endsection