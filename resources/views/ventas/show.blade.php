@section('title', 'Ver Ventas')
@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Detalles de venta
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="#">Ventas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detalles de venta</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            {{-- <div class="col-md-4 text-center">
                                <label class="form-control-label"><strong>Cliente</strong></label>
                                <p><a href="{{route('clients.show', $sale->client)}}">{{$sale->client->name}}</a></p>
                            </div> --}}
                            <div class="col-md-3 text-center">
                                <label class="form-control-label"><strong>Tienda</strong></label>
                                <p>{{$ventum->sucursales->nombre}}</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <label class="form-control-label"><strong>Vendedor</strong></label>
                                <p>{{$ventum->users->name}}</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <label class="form-control-label"><strong>Cliente</strong></label>
                                <p>{{$ventum->nombre}}</p>
                                <p><b>RUC/DNI:</b> {{$ventum->documento}}</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <label class="form-control-label"><strong>Número Guia de Pedido</strong></label>
                                <p># {{$ventum->id}}</p>
                                
                            </div>
                        </div>
                        <br /><br />
                        <div class="form-group">
                            <h4 class="card-title">Detalles de venta</h4>
                            <div class="table-responsive col-md-12">
                                <table id="saleDetails" class="table">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Unidad de Medida</th>
                                            <th>Precio Venta (PEN)</th>
                                            <th>Descuento(PEN)</th>
                                            <th>Cantidad</th>
                                            <th>SubTotal(PEN)</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
    
                                        <tr>
                                            <th colspan="5">
                                                <p align="right">SUBTOTAL:</p>
                                            </th>
                                            <th>
                                                <p align="right">s/{{number_format($subtotal,2)}}</p>
                                            </th>
                                        </tr>
    
                                        <tr>
                                            <th colspan="5">
                                                <p align="right">TOTAL IMPUESTO ({{$ventum->impuesto}}%):</p>
                                            </th>
                                            <th>
                                                <p align="right">s/{{number_format($subtotal*$ventum->impuesto/100,2)}}</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="5">
                                                <p align="right">TOTAL:</p>
                                            </th>
                                            <th>
                                                <p align="right">s/{{number_format($ventum->total,2)}}</p>
                                            </th>
                                        </tr>
    
                                    </tfoot>
                                    <tbody>
                                        @foreach($ventaDetalles as $ventaDetalle)
                                        <tr>
                                            <td>{{$ventaDetalle->articulo->nombre}}</td>
                                            <td>{{$ventaDetalle->articulo->medida->nombre}}</td>

                                            <td>s/ {{$ventaDetalle->precio}}</td>
                                            <td>{{$ventaDetalle->descuento}} %</td>
                                            <td>{{$ventaDetalle->cantidad}}</td>
                                            <td>s/{{number_format($ventaDetalle->cantidad*$ventaDetalle->precio - $ventaDetalle->cantidad*$ventaDetalle->precio*$ventaDetalle->descuento/100,2)}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="{{route('venta.index')}}" class="btn btn-primary float-right">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection