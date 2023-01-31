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
		border-radius: 1rem;
		font-weight:bold;
		margin-top: 10%;
        margin-left: 10%;
        margin-right: 10%;
		box-shadow: 0 1.25em 1.8em rgba(8, 21, 65, 0.25);

	}

</style>

<body>
    <header>
		<div class="row">
           
            @isset($ventum->sucursales->images)
            <img id="picture" class=""
                src=" {{ Storage::url($ventum->sucursales->images->url) }}" alt="" style="float: right">
                <img src="codingboss.png" alt="" style="float: right">

                {{-- <img src="data:image/png;base64, {!! base64_encode(QrCode::size(200)->generate('http://codersfree.test/view-verfication/'.$course->slug.'?')) !!} "> --}}
                {{-- <img src="data:image/png;base64,{{!! base64_encode(file_get_contents(asset('/storage/'.str_replace('public/','',$ventum->sucursales->images->url)))) }}"> --}}
                @else
            {{-- <img id="picture" class="p-1 avatar-70 rounded-pill bg-soft-primary"
                 alt="" src="https://images.pexels.com/photos/365067/pexels-photo-365067.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"> --}}
                 <img src="codingboss.png" alt="" style="float: right">

                 @endisset     
		</div>
		


		<br>
        <div  class="img-centrar" id="card-cabe">
				<h1 class="centrar-th" >MI COMPROBANTE DE VENTA</h1>
			<h2 class="centrar-th">EMPRESA SUMAG</h2>
			
			</div>
        <div>
			
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
                NUMERO DE VENTA
                <br>
                {{$ventum->id}}
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
						<td class="centrar-th">{{$ventaDetalle->articulo->nombre}}</td>

                        <td class="centrar-th">s/ {{$ventaDetalle->precio}}</td>
                        <td class="centrar-th">s/ {{number_format($ventaDetalle->cantidad*$ventaDetalle->precio - $ventaDetalle->cantidad*$ventaDetalle->precio*$ventaDetalle->descuento/100,2)}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    
                    <tr>
                        <th colspan="4">
                            <p align="right">SUBTOTAL:</p>
                        </th>
                        <td>
                            <p align="right">s/ {{number_format($subtotal,2)}}</p>
                        </td>
                    </tr>
                   
                    <tr>
                        <th colspan="4">
                            <p align="right">TOTAL IMPUESTO ({{$ventum->impuesto}}%):</p>
                        </th>
                        <td>
                            <p align="right">s/ {{number_format($subtotal*$ventum->impuesto/100,2)}}</p>
                        </td>
                    </tr>

                    <tr>
                        <th colspan="4">
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
                <b>SUMAG IMPORTACIONES DE CALIDAD TU MEJOR OPCIÓN!!</b><br>UNA DE LAS MEJORES EMPRESAS DONDE VENDE PRODUCTOS DE CALIDAD<br> <b>Telefono:</b> 987654321<br> <b>Email:</b> sumag@gmail.com
            </p>
        </div>
    </footer>
</body>

</html>
