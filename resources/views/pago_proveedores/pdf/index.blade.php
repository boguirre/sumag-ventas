<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de {{$pagoProveedor->proveedor->razon_social}}</title>
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }

    .invoice_container {
        padding: 10px 10px;
    }

    .invoice_header {
        display: flex;
        justify-content: space-between;
        width: 100%;
        background: rgb(27, 107, 245);
    }

    .logo_container {
        margin-top: auto;
        margin-bottom: auto;
        margin-left: 10px;
    }

    .company_address {
        margin-right: 10px;
        margin-left: 10px;
    }

    .invoice_header h2 {
        margin-bottom: 0;
    }

    .invoice_header p {
        margin-top: 10px;
    }

    .logo_container img {
        height: 60px;
    }

    .customer_container {
        padding: 0 10px;
        display: flex;
        justify-content: space-between;
    }

    .customer_container h2 {
        margin-bottom: 10px;
    }

    .customer_container h4 {
        margin-bottom: 10px;
        margin-top: 0;
    }

    .customer_container p {
        margin: 0;
    }

    .in_details {
        margin-top: auto;
        margin-bottom: auto;
    }

    .product_container {
        padding: 0 10px;
        margin-top: 10px;
    }

    .item_table {
        width: 100%;
        text-align: left;
    }

    .item_table td,
    th {
        padding: 5px 10px;
    }

    .invoice_footer {
        padding: 0 10px;
        display: flex;
        justify-content: space-between;
    }

    .invoice_footer h2 {
        margin-bottom: 10px;
    }

    .note {
        width: 50%;
    }

    .invoice_footer_amount {
        margin: auto 0;
        background: rgb(13, 97, 241);
    }

    .amount_table td,
    th {
        padding: 5px 10px;
    }

    .in_head {
        margin: 0;
        text-align: center;
        background: rgb(13, 97, 241);
        padding: 5px;
    }
</style>

<body>
    <div class="invoice_container">
        <div class="invoice_header">
            <div class="logo_container">
                <img src="http://sumag-ventas.test{{$image}}">
            </div>
            <div class="company_address">
                <h2>Importaciones y Exportaciones SUMAG.</h2>
                <p>
                    ATTN: Dennis Menees, CEO <br>
                    Global Co. <br>
                    Av Abancay 1119 - 1129 <br>
                    Cel: 972 117 469 / 983 415 474
                </p>
            </div>
        </div>
        <div class="customer_container">
            <div>
                <h2>Reporte a</h2>
                <h4>Proveedor: {{$pagoProveedor->proveedor->razon_social}}</h4>
                <p>
                    RUC: {{$pagoProveedor->proveedor->ruc}} <br>
                    Telefono: {{$pagoProveedor->proveedor->numero_telefono}}
                </p>
            </div>
            <div class="in_details">
                <h1 class="in_head">DETALLE DEL PAGO</h1>
                <table>
                    <tr>
                        <td>N° Reporte</td>
                        <td>:</td>
                        <td><b>#{{$pagoProveedor->id}}</b></td>
                    </tr>
                    <tr>
                        <td>Fecha de Deposito</td>
                        <td>:</td>
                        <td><b>{{$pagoProveedor->fecha_deposito}}</b></td>
                    </tr>
                    <tr>
                        <td>Monto de Deposito</td>
                        <td>:</td>
                        <td><b>{{$pagoProveedor->monto_deposito}}</b></td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td>:</td>
                        <td>@switch($pagoProveedor->estado)
                            @case(1)
                            <b>En deuda</b>
                                @break
                            @case(2)
                            <b>Cancelado</b>
                                @break
                            @default
                                
                        @endswitch</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="product_container">
            <table class="item_table" border="1" cellspacing="0">
                <tr>
                    <th>Item</th>
                    <th colspan="4">Fecha</th>
                    <th>Monto</th>
                </tr>
                @foreach ($pagoProveedor->pago_proveedor_detalles as $detalle)
                <tr>
                    <td>{{ $detalle->id }}</td>
                    <td colspan="4">{{ $detalle->fecha_pago }}</td>
                    <td>{{ $detalle->monto }}</td>
                </tr>
                @endforeach
                <tr>
                    <th colspan="5">Total</th>
                    <th>{{$pagoProveedor->monto_deposito}}</th>
                </tr>
            </table>
        </div>
        <div class="invoice_footer">
            <div class="note">
                <h2>Terminos y Condiciones</h2>
                <p>
                    Texto Referemcial
                </p>
            </div>
        </div>
    </div>
</body>
</html>