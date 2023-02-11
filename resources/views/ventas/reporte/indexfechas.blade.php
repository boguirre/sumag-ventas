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
  <div class="col-md-12">
    {!! Form::open(['route' => 'venta.reportefechas', 'autocomplete' => 'off', 'files' => true, 'class'=>'formulario']) !!}
    <div class="card">
        <div class="card-body">
        <div class="col-sm-12">
            <div class="row" >
                

        <div class="col-md-3">
          <div class="form-group">
              <label for="example-text-input" class="form-control-label">Fecha Inicial:</label>
              {!! Form::date('fechainicial', null, ['class' => 'form-control  block w-full mt-1'. ($errors->has('fechaNacimiento') ? ' border-red-600' : '')]) !!}

              @error('fechaterminal')        
              <small class="text-danger">
                <b>{{$message}}</b>
              </small>
              @enderror
            </div>
       </div>
      <div class="col-md-3">
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Fecha Salida:</label>
            {!! Form::date('fechaterminal', null, ['class' => 'form-control  block w-full mt-1'. ($errors->has('fechaNacimiento') ? ' border-red-600' : '')]) !!}

            @error('fechaterminal')        
            <small class="text-danger">
              <b>{{$message}}</b>
            </small>
            @enderror
          </div>
        </div>
    <div class="col-md-3">
        <label for="">Tienda</label>
        {{--  <select class="form-control selectpicker" data-live-search="true" name="product_id" id="product_id">  --}}
        <select class="form-control" name="sucursal_id" id="sucursal_id">
            <option value="" disabled selected>Selecccione una Tienda</option>
            @foreach ($sucursals as $sucursal)
            <option value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>
            @endforeach
        </select>

    </div>
    <div class="col-md-3">
      <div class="form-group">
          <br>
          <button type="submit" class="btn btn-success rounded-pill btn-sm ms-auto mt-1">   

            <svg width="32" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M2 10.6699C2 5.88166 5.84034 2 10.5776 2C12.8526 2 15.0343 2.91344 16.6429 4.53936C18.2516 6.16529 19.1553 8.37052 19.1553 10.6699C19.1553 15.4582 15.3149 19.3399 10.5776 19.3399C5.84034 19.3399 2 15.4582 2 10.6699ZM19.0134 17.6543L21.568 19.7164H21.6124C22.1292 20.2388 22.1292 21.0858 21.6124 21.6082C21.0955 22.1306 20.2576 22.1306 19.7407 21.6082L17.6207 19.1785C17.4203 18.9766 17.3076 18.7024 17.3076 18.4164C17.3076 18.1304 17.4203 17.8562 17.6207 17.6543C18.0072 17.2704 18.6268 17.2704 19.0134 17.6543Z"
                fill="currentColor"></path>
        </svg>
        Buscar Información
        
        
        
        
        </button>
      </div>
       </div>
    </div>
     </div>
   </div> 
 </div> 

{!! Form::close() !!}
  </div>


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