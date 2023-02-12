<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Comprobantes</title>
    <!-- Margenes de la hoja -->

    

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div class="wrapper">
        <div class="content-wrapper" class="d-flex flex-column">
            <div class="content">
                <div class="container-fluid">
         <div class="row">

            {{-- <img src="http://sumag-ventas.test{{$image}}" alt="" style="width: 100; height:100" class="float-left"> --}}
            <br>
        </div>
    </div>

</div>
          </div>
    </div>

    <div class="wrapper">
        <div class="content-wrapper" class="d-flex flex-column">
            <div class="content">
                <div class="container-fluid">

                    <!-- Encabezado tabla -->
                        <h1 class="h6 font-weight-lighter text" style="text-align:right"><b> <small>COMPROBANTES</small> </b></h1>
                        <h1 class="h6 font-weight-lighter text" style="text-align:right"><b><small>{{$sucursals[0]->nombre}}</small></b></h1>
                        <h1 class="h6 font-weight-lighter text" style="text-align:right"><b><small>REPORTES</small></b></h1>
                        <h1 class="h6 font-weight-lighter text" style="text-align:right"><b><small>FILTRADOS POR FECHAS</small></b></h1>
                        <h1 class="h6 font-weight-lighter text" style="text-align:right"><b><small>EMITIDO: {{\Carbon\Carbon::now('America/Lima')}}</small></b></h1>

                        <div class="card  mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-lighter text " style="text-align:center"><small><b>REPORTE DE COMPROBANTES DESDE {{$fechainicio}} HASTA {{$fechafinal}}</b></small></h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="text-align:center"> <small><b>N° DE COMPROBANTE</b> </small></th>
                                                <th scope="col" style="text-align:center"> <small><b>FECHA DE EMISIÓN</b> </small></th>
                                                <th scope="col" style="text-align:center"> <small><b>SUCURSAL</b> </small></th>
                                                <th scope="col" style="text-align:center"> <small><b>TIPO COMPROBANTE</b> </small></th>

                                                <th scope="col" style="text-align:center"> <small><b>TIPO IMPORTE</b> </small></th>
                                                <th scope="col" style="text-align:center"><small><b>IMPORTE</b></small>  </th>

                                                <th scope="col" style="text-align:center"><small><b>FECHA DE PAGO</b></small>  </th>
                                                <th scope="col" style="text-align:center"><small><b>DESCRIPCIÓN</b></small>  </th>
                                                <th scope="col" style="text-align:center"><small><b>ESTADO</b></small>  </th>

                                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($comprobantes as $comprobante)
                                            <tr>
                                                <td style="text-align:center"><small>{{$comprobante->numero_comprobante}}</small></td>
                                                <td style="text-align:center"><small> {{\Carbon\Carbon::parse($comprobante->fecha_emision)->format('Y-m-d')}}</small></td>
                                                <td style="text-align:center"><small>{{$comprobante->sucursal->nombre}}</small></td>
                                                <td style="text-align:center"><small>{{ $comprobante->tipo_comprobante->nombre}}</small></td>

                                                @if($comprobante->tipo_importe == 'BANCARIA')
                                                <td style="text-align:center"><small>TRANSF. BANCARIA</small></td>
                                                @else
                                                <td style="text-align:center"><small>CREDITO</small></td>
                                                @endif
                                                <td style="text-align:center"><small>{{$comprobante->importe}}</small></td>

                                                <td style="text-align:center"><small> {{\Carbon\Carbon::parse($comprobante->fecha_pago)->format('Y-m-d')}}</small></td>
                                                <td style="text-align:center"><small>{{$comprobante->descripcion}}</small></td>

                                                @if ($comprobante->estado == 1)
                                                <td><a class="btn btn-warning">PENDIENTE</a></td>
                                            @else
                                                <td><a class="btn btn-success">CANCELADO</a></td>
                                            @endif                                                
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>   
                                    </table>
                                </div>
            

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>
</body>
</html>