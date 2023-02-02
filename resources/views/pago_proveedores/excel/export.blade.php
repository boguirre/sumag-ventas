<table>
  <thead>
  <tr>
      <th>Tienda</th>
      <th>Proveedor</th>
      <th>N° Factura</th>
      <th>Fecha de Deposito</th>
      <th>Monto</th>
      <th>Estado</th>
      

  </tr>
  </thead>
  <tbody>
      @foreach ($pagos as $pago)
      <tr>
          <td>{{$pago->sucursal->nombre}}</td>
          <td>{{$pago->proveedor->razon_social}}</td>
          <td>{{$pago->numero_factura}}</td>
          <td>{{\Carbon\Carbon::parse($pago->fecha_deposito)->format('Y-m-d')}}</td>
          <td>S/. {{$pago->monto_deposito}}</td>
          <td>
            @switch($pago->estado)
                @case(1)
                    EN DEUDA
                    @break
                @case(2)
                    CANCELADO
                    @break
                @default
                    
            @endswitch
          </td>
      </tr>
  @endforeach
  </tbody>
</table>