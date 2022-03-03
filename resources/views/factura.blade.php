@extends('layouts.app')
@section('title','Facturar')
    

@section('content')

<form action="" method="post">
    @csrf
    Número: <input type="number" name='numero' size=6 value="{{$factura->numero}}" disabled/>
    Fecha: <input type="date" name='fecha' value="{{$factura->fecha}}"/><br>
    Nombre: <input type="text" name='nombre' size="50" value="{{$factura->nombre}}"/><br>
    Dirección: <input type="text" name='direccion' size="50" value="{{$factura->direccion}}"/><br>
    Población: <input type="text" name='poblacion' value="{{$factura->poblacion}}"/>
    Provincia: <input type="text" name='provincia' value="{{$factura->provincia}}"/>
    C. Postal: <input type="text" name='cpostal' size=5 value="{{$factura->cpostal}}"/><br>
    Teléfono: <input type='text' name='telefono' value="{{$factura->telefono}}"/>
    <input type='submit' name="Actualizar" value='Actualizar'/><br>
</form>
<br>
<br>
<form action="{{route('lineas.store')}}" method="post" id="form_linea">
    @csrf
    <input type="hidden" name='factura' size="50" value={{$factura->numero}}/>
    
    Producto: <select name='producto_id' id='producto_id' >
        <option value="0" selected>Elige un producto</option>
        @foreach ($productos as $producto)
            <option value="{{$producto->id}}">{{$producto->descripcion}}</option>
        @endforeach
        </select>
    Descripción: <input type="text" name='descripcion' id="descripcion"/>
    Cantidad: <input type="text" name='cantidad' id="cantidad" />
    Precio: <input type="text" name='precio' id="precio"/>
    <input type='submit' name="Añadir" value='Añadir'/><br>
</form>
<br><br>
<table border="1">
    <tr><td>Descripción</td><td>Cantidad</td><td>Precio</td><td>Importe</td></tr>
@foreach ($factura->lineas as $linea)
<tr><td>{{$linea->descripcion}}</td><td>{{$linea->cantidad}}</td><td>{{$linea->precio}}</td><td>{{$linea->cantidad*$linea->precio}}</td></tr>

@endforeach
</table>
@endsection
@section('scripts')
    <script>


    

$(document).ready(function(){
		
	$("#producto_id").change(function(){
 

        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
	
        var id=$("select[name=producto_id]").val();
        if (id!=0){
        $.ajax({
            url: '{{route('ajax.producto')}}',
            method:'post',
            data:{'id':id},
            success:function(data){
                alert(data);
            }
        });

        }else{
            alert("Producto no seleccionado");
        }
            
        });
    });
    </script>

@endsection