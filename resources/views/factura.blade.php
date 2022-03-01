@extends('layouts.app')
@section('title','Facturar')
    

@section('content')

<form action="" method="post">
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
<form action="{{route('lineas.store')}}" method="post">
    <input type="hidden" name='factura' size="50" value={{$factura->numero}}/>
    Producto: <input type="text" name='producto'/>
    Cantidad: <input type="text" name='cantidad' />
    Precio: <input type="text" name='precio' />
    <input type='submit' name="Añadir" value='Añadir'/><br>
</form>
<br><br>
<table border="1">
    <tr><td>Producto</td><td>Cantidad</td><td>Precio</td><td>Importe</td></tr>
@foreach ($factura->lineas as $linea)
<tr><td>{{$linea->producto}}</td><td>{{$linea->cantidad}}</td><td>{{$linea->precio}}</td><td>{{$linea->cantidad*$linea->precio}}</td></tr>

@endforeach
</table>
@endsection