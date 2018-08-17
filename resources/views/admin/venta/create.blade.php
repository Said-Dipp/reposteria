@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Añadir Nueva Venta</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/venta') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                        <form method="POST" action="{{ url('/admin/venta') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="producto" class="col-md-4 control-label">Producto:</label>
                                <div class="col-md-6">
                                    <select  class="form-control" id="producto">
                                        @foreach($productos as $key => $value)
                                            <option value="{{ $value->id }}" data-price="{{ $value->costo }}">{{ $value->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="producto" class="col-md-4 control-label">Nombre Cliente:</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="cliente_name" type="text" id="" value="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="producto" class="col-md-4 control-label">CI Cliente:</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="cliente_ci" type="text" id="" value="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-4">
                                    <button type="button" class="btn btn-success" onclick="agregar();">Agregar en Lista</button>
                                </div>
                            </div>
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unitario</th>
                                        <th>Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody id="lista_pedido">

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="3"></th>
                                        <th>Total</th>
                                        <th><input type="text" name="total" id="total" style="width:120px;" value="0.00" class="form-control" readonly></th>
                                    </tr>
                                    <tr>
                                        <th colspan="3"></th>
                                        <th>Descuento</th>
                                        <th><input type="number" name="descuento" id="descuento" style="width:120px;" value="0.00" class="form-control" onchange="calcular_total_importe();" min="0"></th>
                                    </tr>
                                    <tr>
                                        <th colspan="3"></th>
                                        <th>Total Importe</th>
                                        <th><input type="text" name="total_importe" id="total_importe" style="width:120px;" value="0.00" class="form-control" min="0" readonly></th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-4">
                                    <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script type="text/javascript">
    function agregar(){
        var producto_id = $('#producto').val();
        var producto = $("#producto option:selected").text()
        var costo = $("#producto option:selected").data("price");
        var id = "item"+producto_id;
        $('#lista_pedido').append("\
            <tr id='"+id+"'>\
                <td>X</td>\
                <td>"+producto+"</td>\
                <td><input type='number' class='form-control' name='cantidad["+producto_id+"]' style='width:100px;' min='0' value='1' onchange='calcular_subtotal("+id+");'></td>\
                <td>"+costo+"</td>\
                <td><input type='text' class='form-control' name='subtotal["+producto_id+"]' style='width:120px;' readonly></td>\
            </tr>\
            ");
        calcular_total();
    }
    function calcular_subtotal(item){
        var cantidad = $($($(item).find("td"))[2]).find("input").val();
        var pu = $(item).find("td").eq(3).html();
        var subtotal = cantidad * pu;
        $($($(item)[0])[0].cells[4].childNodes[0]).val(subtotal.toFixed(2));
        calcular_total();


    }
    function calcular_total(){
         // obtenemos todas las filas del tbody
        var filas=document.querySelectorAll("#lista_pedido tr");
     
        var total=0;
     
        // recorremos cada una de las filas
        filas.forEach(function(e) {
     
            // obtenemos las columnas de cada fila
            var columnas=e.querySelectorAll("td");
            
            // obtenemos los valores de la cantidad y importe
            var st=parseFloat($(columnas[4].childNodes[0]).val());
     
            total+=st;
        });
        $("#total").val(total.toFixed(2));
        calcular_total_importe();
    }

    function calcular_total_importe(){
        var total_ = $("#total").val();
        var descuento_ = $("#descuento").val();
        var total_importe_ = parseFloat(total_) - parseFloat(descuento_);
        $("#total_importe").val(total_importe_.toFixed(2));
    }
</script>
