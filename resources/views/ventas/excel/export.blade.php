<table>
    <thead>
    <tr>
        <th>Tienda</th>
        <th>Cliente</th>
        <th>RUC / DNI</th>
        <th>Fecha De Venta</th>
        <th>Cantidad</th>
        <th>Total</th>
        

    </tr>
    </thead>
    <tbody>
        @foreach ($ventas as $ventum)
        <tr>
            <td>{{$ventum->sucursales->nombre}}</td>
            <td>{{$ventum->nombre}}</td>
            <td>{{$ventum->documento}}</td>
            <td>{{\Carbon\Carbon::parse($ventum->venta_fecha)->format('Y-m-d')}}</td>
            <td>{{$ventum->ventaDetalles->sum('cantidad')}}</td>
            <td>{{$ventum->total}}</td>
        </tr>
    @endforeach
    </tbody>
</table>