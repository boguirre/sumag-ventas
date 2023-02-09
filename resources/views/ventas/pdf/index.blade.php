<?php
    use Illuminate\Support\Facades\Storage;

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Reporte de venta</title>
	
</head>
<style>
    body {
        /*position: relative;*/
        /*width: 16cm;  */
        /*height: 29.7cm; */
        /*margin: 0 auto; */
        /*color: #555555;*/
        /*background: #FFFFFF; */
        font-family: "Poppins", sans-serif;
        font-size: 14px;
        /*font-family: SourceSansPro;*/
        
    }

    #imgmarca{
        background-image: url(http://sumag-ventas.test{{$image}});
        background-repeat: no-repeat;
        background-blend-mode: overlay;
        height: 100%;
    width: 100%;
  position: absolute;
  background-position: center center;
  opacity: 0.1;
  background-size: cover;

     }
    #datos {
        float: left;
        margin-top: 0%;
        margin-left: 2%;
        margin-right: 2%;
        /*text-align: justify;*/
    }

    #encabezado {
        text-align: center;
        margin-left: 35%;
        margin-right: 35%;
        font-size: 15px;
    }

    #fact {
        /*position: relative;*/
        float: right;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        font-size: 20px;
        background: #3a57e8;
		color: white;
		border-radius: 1rem;
		font-weight:bold;
    }

    section {
        clear: left;
    }

    #cliente {
        text-align: left;
    }

    #facliente {
        width: 40%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #fac,
    #fv,
    #fa {
        color: #FFFFFF;
        font-size: 15px;
    }

    #facliente thead {
        padding: 20px;
        background: #3a57e8;
        text-align: left;
        border-bottom: 1px solid #FFFFFF;
    }

    #facvendedor {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #facvendedor thead {
        padding: 20px;
        background: #3a57e8;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
		align-items: center;
		justify-content: center;
    }

    #facproducto {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #facproducto thead {
        padding: 20px;
        background: #3a57e8;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }
	.centrar-th{
		text-align: center;
	}
	#logo{
	align-items: center;
	}
	.img-centrar{
		display: flex;
		align-items: center;
		justify-content: center;

	}
	#card-cabe{
		background: #3a57e8;
		color: white;
		border-radius: 3em 1em;
		font-weight:bold;
        margin-left: 10%;
        margin-right: 10%;
		box-shadow: 0 1.25em 1.8em rgba(8, 21, 65, 0.25);

	}

</style>

<body>
    <div id="imgmarca"></div>      

    <header>

              <center><img id="picture" class=""
                src="http://sumag-ventas.test{{$image}}" alt="" style="border-width: 5px;border-radius: 3em 1em;
                border-style: solid;
                border-color: #3a57e8;" width="20%" height="15%" ></center>
            
        <div  class="img-centrar" id="card-cabe">
				<h1 class="centrar-th" >MI GUIA DE PEDIDO </h1>
			<h2 class="centrar-th">" {{$ventum->sucursales->nombre}} "</h2>
            
            <br>
			</div>
            <br>
        <div>
            <div style="text-align: center">

                <b>Cliente:</b> {{$ventum->nombre}} <b> <b></b>     RUC/DNI:</b> {{$ventum->documento}} <b></b> <b> Fecha de Compra:</b> {{\Carbon\Carbon::parse($ventum->venta_fecha)->format('d-m-Y')}}
            <p>-------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            
            </div>

            <br>
			
            <table id="datos">
                <thead>
					
                    <tr>
                        <th id="">DATOS DEL VENDEDOR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                            <p id="proveedor">
                                Nombre: {{$ventum->users->name}}<br>
                                
                                Email: {{$ventum->users->email}}
                            </p>
                        </th>
                        
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="fact">
            {{--  <p>
                {{$sale->user->types_identification}}-VENTA
                <br>
                {{$sale->user->id}}
            </p>  --}}
            <p class="centrar-th">
                NÚMERO DEL PEDIDO
                <br>
                N° {{$ventum->id}}
            </p>
        </div>
    </header>
    <br>
    <br>
    <br>
    <section>
        <br>
        <div>
            <table id="facproducto">
                <thead>
                    <tr id="fa">
                        <th>CANTIDAD</th>
						<th>CODIGO</th>
                        <th>UND.MEDIDA</th>

                        <th>PRODUCTO</th>
                        <th>PRECIO VENTA(PEN)</th>
                        <th>SUBTOTAL(PEN)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ventaDetalles as $ventaDetalle)
                    <tr>
                        <td class="centrar-th" >{{$ventaDetalle->cantidad}}</td>
                        <td class="centrar-th">{{$ventaDetalle->articulo->codigo}}</td>
                        <td class="centrar-th">{{$ventaDetalle->articulo->medida->nombre}}</td>

						<td class="centrar-th">{{$ventaDetalle->articulo->nombre}}</td>

                        <td class="centrar-th">s/ {{$ventaDetalle->precio}}</td>
                        <td class="centrar-th">s/ {{number_format($ventaDetalle->cantidad*$ventaDetalle->precio - $ventaDetalle->cantidad*$ventaDetalle->precio*$ventaDetalle->descuento/100,2)}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    
                    <tr>
                        <th colspan="5">
                            <p align="right">SUBTOTAL:</p>
                        </th>
                        <td>
                            <p align="right">s/ {{number_format($subtotal,2)}}</p>
                        </td>
                    </tr>
                   
                    <tr>
                        <th colspan="5">
                            <p align="right">TOTAL IMPUESTO ({{$ventum->impuesto}}%):</p>
                        </th>
                        <td>
                            <p align="right">s/ {{number_format($subtotal*$ventum->impuesto/100,2)}}</p>
                        </td>
                    </tr>

                    <tr>
                        <th colspan="5">
                            <p align="right">TOTAL PAGAR:</p>
                        </th>
                        <td>
                            <p align="right">s/ {{number_format($ventum->total,2)}}</p>
                        </td>
                    </tr>

                  
                </tfoot>
            </table>
        </div>
    </section>
    <br>
    <br>

    <footer>
        <!--puedes poner un mensaje aqui-->
        <div style="text-align: center">
            <p >
                <b>{{$ventum->sucursales->nombre}} TU MEJOR OPCIÓN!!</b><br>UNA DE LAS MEJORES EMPRESAS DONDE VENDE PRODUCTOS DE CALIDAD
                <br> <b>Ventas Por Mayor Y Menor </b><br>
                <b>Atendemos Pedidos A Provincia </b> <br> <b> Dirección: </b> Av. Abancay 1119 - 1129 Tda:07(2do. Piso) <br>
                <b>Celular:</b> 972117469 / 960516029 / 4284670<br>
                <b>Gracias!! Por Su Preferencia.</b>
            </p>
        </div>
    </footer>
</body>

</html>
