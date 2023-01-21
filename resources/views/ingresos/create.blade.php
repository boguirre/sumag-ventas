@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Registrar Ingreso</h1>
                    </div>
                    {{-- <div>
                  <a href="{{route('categoria.create')}}" class="btn btn-link  btn-soft-primary">
                    <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 12.5537C12.2546 12.5537 14.4626 10.3171 14.4626 7.52684C14.4626 4.73663 12.2546 2.5 9.5 2.5C6.74543 2.5 4.53737 4.73663 4.53737 7.52684C4.53737 10.3171 6.74543 12.5537 9.5 12.5537ZM9.5 15.0152C5.45422 15.0152 2 15.6621 2 18.2464C2 20.8298 5.4332 21.5 9.5 21.5C13.5448 21.5 17 20.8531 17 18.2687C17 15.6844 13.5668 15.0152 9.5 15.0152ZM19.8979 9.58786H21.101C21.5962 9.58786 22 9.99731 22 10.4995C22 11.0016 21.5962 11.4111 21.101 11.4111H19.8979V12.5884C19.8979 13.0906 19.4952 13.5 18.999 13.5C18.5038 13.5 18.1 13.0906 18.1 12.5884V11.4111H16.899C16.4027 11.4111 16 11.0016 16 10.4995C16 9.99731 16.4027 9.58786 16.899 9.58786H18.1V8.41162C18.1 7.90945 18.5038 7.5 18.999 7.5C19.4952 7.5 19.8979 7.90945 19.8979 8.41162V9.58786Z" fill="currentColor"></path>                            </svg>                        
                      Registrar
                  </a>
              </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                {{-- <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Basic Form</h4>
                </div>
            </div> --}}
                <div class="card-body">
                    {!! Form::open(['route' => 'ingreso.store', 'autocomplete' => 'off', 'files' => true, 'class' => '']) !!}
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label for="product_id">Producto</label>
                            {{--  <select class="form-control selectpicker" data-live-search="true" name="product_id" id="product_id">  --}}
                            <select class="form-control" name="articulo_id" id="articulo_id">
                                <option value="" disabled selected>Selecccione un producto</option>
                                @foreach ($articulos as $articulo)
                                <option value="{{$articulo->id}}_{{$articulo->stock}}_{{$articulo->medida->nombre}}_{{$articulo->codigo}}">{{$articulo->nombre}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-md-3">
                          <label for="">Codigo</label>
                          <input type="text" name="" id="codigo" value="" class="form-control" disabled>
                        </div>
                        <div class="col-md-3">
                            <label for="">Stock actual</label>
                            <input type="text" name="" id="stock" value="" class="form-control" disabled>
                    </div>
                    <div class="col-md-3">
                        <label for="">Medida</label>
                        <input type="text" name="" id="uni_medida" value="" class="form-control" disabled>
                      </div>

                    <div class="col-md-3">
                        <label for="quantity">Cantidad</label>
                        <input type="number" class="form-control" name="quantity" id="quantity" aria-describedby="helpId">
                    </div>
                    {{-- <div class="form-group col-md-3">
                        <label for="discount">Porcentaje de descuento</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2">%</span>
                            </div>
                            <input type="number" class="form-control" name="discount" id="discount" aria-describedby="basic-addon2" value="0">
                        </div>
                    </div> --}}
                    </div>
                    <br>

                    <div class="form-group">
                        <button type="button" id="agregar" class="btn btn-primary rounded-pill" style="float:right">                             <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z" fill="currentColor"></path>                            </svg>                        Agregar producto</button>
                    </div>
                    
                    <div class="form-group">
                        <h4 class="card-title">Detalles de Ingreso</h4>
                        <div class="table-responsive col-md-12">
                            <table id="detalles" class="table">
                                <thead>
                                    <tr>
                                        <th>Eliminar</th>
                                        <th>Codigo</th>
                                        <th>Producto</th>
                                        <th>Medida</th>
                                        <th>Cantidad</th>
                                        <th>SubTotal</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">
                                            <p align="right">ARTICULOS INGRESANTES:</p>
                                        </th>
                                        <th>
                                            <p align="right"><span align="right" id="total_pagar_html">PEN 0.00</span> <input type="hidden"
                                                    name="total" id="total_pagar"></p>
                                        </th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    
                    
                    {!! Form::close() !!}
                </div>



            </div>
            
        </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
    $("#agregar").click(function () {
        agregar();
    });
});
var cont = 0;
    total = 0;
    subtotal = [];
$("#articulo_id").change(mostrarValores);

function mostrarValores() {
    datosProducto = document.getElementById('articulo_id').value.split('_');
    $("#uni_medida").val(datosProducto[2]);
    $("#stock").val(datosProducto[1]);
    $("#codigo").val(datosProducto[3]);
};

function agregar() {
    datosProducto = document.getElementById('articulo_id').value.split('_');

    product_id = datosProducto[0];
    producto = $("#articulo_id option:selected").text();
    quantity = $("#quantity").val();
    medida = $("#uni_medida").val();
    codigo = $("#codigo").val();
    stock = $("#stock").val();
    if (product_id != "" && quantity != "" && quantity > 0) {
            subtotal[cont] = parseInt(quantity);
            total = total + subtotal[cont];
            var fila = '<tr class="selected" id="fila' + cont + '"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar(' + cont + ');">                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.2871 5.24297C20.6761 5.24297 21 5.56596 21 5.97696V6.35696C21 6.75795 20.6761 7.09095 20.2871 7.09095H3.71385C3.32386 7.09095 3 6.75795 3 6.35696V5.97696C3 5.56596 3.32386 5.24297 3.71385 5.24297H6.62957C7.22185 5.24297 7.7373 4.82197 7.87054 4.22798L8.02323 3.54598C8.26054 2.61699 9.0415 2 9.93527 2H14.0647C14.9488 2 15.7385 2.61699 15.967 3.49699L16.1304 4.22698C16.2627 4.82197 16.7781 5.24297 17.3714 5.24297H20.2871ZM18.8058 19.134C19.1102 16.2971 19.6432 9.55712 19.6432 9.48913C19.6626 9.28313 19.5955 9.08813 19.4623 8.93113C19.3193 8.78413 19.1384 8.69713 18.9391 8.69713H5.06852C4.86818 8.69713 4.67756 8.78413 4.54529 8.93113C4.41108 9.08813 4.34494 9.28313 4.35467 9.48913C4.35646 9.50162 4.37558 9.73903 4.40755 10.1359C4.54958 11.8992 4.94517 16.8102 5.20079 19.134C5.38168 20.846 6.50498 21.922 8.13206 21.961C9.38763 21.99 10.6811 22 12.0038 22C13.2496 22 14.5149 21.99 15.8094 21.961C17.4929 21.932 18.6152 20.875 18.8058 19.134Z" fill="currentColor"></path>                            </svg>                        </button></td> <td><input type="hidden" name="codigo[]" value="">' + codigo + '</td> <td><input type="hidden" name="product_id[]" value="' + product_id + '">' + producto + '</td> <td> <input type="hidden" name="medida[]" value=""> <input class="form-control" type="text" value="' + medida + '" disabled> </td><td> <input type="hidden" name="quantity[]" value="' + quantity + '"> <input type="number" value="' + quantity + '" class="form-control" disabled> </td> <td><input type="text" value="' + parseFloat(subtotal[cont]).toFixed(2) + '" disabled class="form-control"></td></tr>';
            cont++;
            limpiar();
            totales();
            evaluar();
            $('#detalles').append(fila);

    }
}

function limpiar() {
    $("#quantity").val("");
}

function totales() {
    $("#total").html("PEN " + total.toFixed(2));
    $("#total_pagar_html").html("" + total.toFixed(2));
    $("#total_pagar").val(total.toFixed(2));
}
    
    function evaluar() {
        if (total > 0) {
            $("#guardar").show();
        } else {
            $("#guardar").hide();
        }
    }
    function eliminar(index) {
        total = total - subtotal[index];
        $("#total").html("PEN" + total);
        $("#total_pagar_html").html("" + total);
        $("#total_pagar").val(total.toFixed(2));
        $("#fila" + index).remove();
        evaluar();
    }
</script>
@endsection
