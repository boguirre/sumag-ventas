<table>
    <thead>
    <tr>
        <th>N° DE DUA</th>
        <th>FECHA DE NUMERACIÓN</th>
        <th>MES DE LLEGADA</th>
        <th>SUCURSAL</th>
        <th>MONTO DE PERSEPCIÓN</th>
        <th>MES DE COBRO</th>
        <th>ESTADO</th>


    </tr>
    </thead>
    <tbody>
        @foreach ($duas as $dua)
        <tr>
            <td>{{$dua->numero_dua}}</td>
            <td>{{\Carbon\Carbon::parse($dua->fecha_numeracion)->format('Y-m-d')}}</td>
            <td>{{\Carbon\Carbon::parse($dua->mes_llegada)->format('Y-m-d')}}</td>
            <td>{{$dua->sucursal->nombre}}</td>
            <td>{{$dua->monto_percepcion}}</td>
            <td>{{\Carbon\Carbon::parse($dua->mes_cobro)->format('Y-m-d')}}</td>
            @if ($dua->estado == 1)
            <td style="color: red">Pendiente</td>
        @else
            <td style="color:green">Entregado</td>
        @endif           
    </tr>
    @endforeach
    </tbody>
</table>