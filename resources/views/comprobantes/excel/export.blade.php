<table>
    <thead>
    <tr>
        <th>N° DE COMPROBANTE</th>
        <th>FECHA DE EMISIÓN</th>
        <th>SUCURSAL</th>
        <th>TIPO COMPROBANTE</th>
        <th>TIPO IMPORTE</th>
        <th>MONTO DE IMPORTE</th>

        <th>FECHA DE PAGO</th>
        <th>DESCRIPCIÓN</th>
        <th>ESTADO</th>


    </tr>
    </thead>
    <tbody>
        @foreach ($comprobantes as $comprobante)
        <tr>
            <td>{{$comprobante->numero_comprobante}}</td>
            <td>{{\Carbon\Carbon::parse($comprobante->fecha_emision)->format('Y-m-d')}}</td>
            <td>{{$comprobante->sucursal->nombre}}</td>
            <td>{{ $comprobante->tipo_comprobante->nombre}}</td>
            <td>{{ $comprobante->tipo_importe->nombre}}</td>

            <td>{{$comprobante->importe}}</td>

            <td>{{\Carbon\Carbon::parse($comprobante->fecha_pago)->format('Y-m-d')}}</td>
            <td>{{$comprobante->descripcion}}</td>

            @if ($comprobante->estado == 1)
            <td style="color: red">Pendiente</td>
        @else
            <td style="color:green">Entregado</td>
        @endif           
    </tr>
    @endforeach
    </tbody>
</table>