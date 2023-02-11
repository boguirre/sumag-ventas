<table>
  <thead>
  <tr>
      <th>N° DE CREDITO</th>
      <th>FECHA DE PRESTAMO</th>
      <th>FECHA DE VENCIMIENTO</th>
      <th>TIENDA</th>
      <th>MONTO</th>
      <th>EMPRESA</th>
      <th>ESTADO</th>


  </tr>
  </thead>
  <tbody>
      @foreach ($prestamos as $prestamo)
      <tr>
          <td>{{$prestamo->numerocredito}}</td>
          <td>{{\Carbon\Carbon::parse($prestamo->fecha_prestamo)->format('Y-m-d')}}}</td>
          <td>{{\Carbon\Carbon::parse($prestamo->fecha_vencimiento)->format('Y-m-d')}}</td>
          <td>{{$prestamo->sucursal->nombre}}</td>
          <td>{{$prestamo->monto_prestamo}}</td>
          <td>{{$prestamo->empresa->nombre}}</td>
          @if ($prestamo->estado == 1)
          <td style="color: red">En Deuda</td>
      @else
          <td style="color:green">Cancelado</td>
      @endif           
  </tr>
  @endforeach
  </tbody>
</table>