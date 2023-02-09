<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Prestamos</title>
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
                        <h1 class="h6 font-weight-lighter text" style="text-align:right"><b> <small>PRESTAMOS</small> </b></h1>
                        <h1 class="h6 font-weight-lighter text" style="text-align:right"><b><small>{{$sucursals[0]->nombre}}</small></b></h1>
                        <h1 class="h6 font-weight-lighter text" style="text-align:right"><b><small>REPORTES</small></b></h1>
                        <h1 class="h6 font-weight-lighter text" style="text-align:right"><b><small>FILTRADOS POR FECHAS</small></b></h1>
                        <h1 class="h6 font-weight-lighter text" style="text-align:right"><b><small>EMITIDO: {{\Carbon\Carbon::now('America/Lima')}}</small></b></h1>

                        <div class="card  mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-lighter text " style="text-align:center"><small><b>REPORTE DE PRESTAMOS DESDE {{$fechainicio}} HASTA {{$fechafinal}}</b></small></h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="text-align:center"> <small><b>N° DE CREDITO</b> </small></th>
                                                <th scope="col" style="text-align:center"> <small><b>FECHA DE PRESTAMO</b> </small></th>
                                                <th scope="col" style="text-align:center"> <small><b>FECHA DE VENCIMIENTO</b> </small></th>
                                                
                                                <th scope="col" style="text-align:center"> <small><b>TIENDA</b> </small></th>
                                                <th scope="col" style="text-align:center"><small><b>MONTO</b></small>  </th>

                                                <th scope="col" style="text-align:center"><small><b>EMPRESA</b></small>  </th>
                                                <th scope="col" style="text-align:center"><small><b>ESTADO</b></small>  </th>

                                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($prestamos as $prestamo)
                                            <tr>
                                                <td style="text-align:center"><small>{{$prestamo->numerocredito}}</small></td>
                                                <td style="text-align:center"><small> {{\Carbon\Carbon::parse($prestamo->fecha_prestamo)->format('Y-m-d')}}</small></td>
                                                <td style="text-align:center"><small> {{\Carbon\Carbon::parse($prestamo->fecha_vencimiento)->format('Y-m-d')}}</small></td>
                                                <td style="text-align:center"><small>{{$prestamo->sucursal->nombre}}</small></td>
                                                <td style="text-align:center"><small>{{$prestamo->monto_prestamo}}</small></td>

                                                <td style="text-align:center"><small>{{$prestamo->empresa->nombre}}</small></td>
                                                @if ($prestamo->estado == 1)
                                                <td><a class="btn btn-warning">En Deuda</a></td>
                                            @else
                                                <td><a class="btn btn-success">Cancelado</a></td>
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