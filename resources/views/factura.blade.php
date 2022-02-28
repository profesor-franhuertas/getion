@extends('layouts.app')
@section('title','Facturar')
    

@section('content')

<form action="" method="post">
    Número:<input type="number" name='numero' value="{{$factura->numero}}"/>
    Fecha:<input type="date" name='fecha' value={{$factura->fecha}}/>
    Nombre:<input type="text" name='nombre' value={{$factura->nombre}}/>
    Dirección:<input type="text" name='direccion' value={{$factura->direccion}}/>
    Población:<input type="text" name='poblacion' value={{$factura->poblacion}}/>
    Provincia:<input type="text" name='provincia' value={{$factura->provincia}}/>
    C. Postal:<input type="text" name='cpostal' value={{$factura->cpostal}}/>
    Teléfono:<input type='text' name='telefono' value={{$factura->telefono}}/>
    <input type='submit' name="Actualizar"/>
</form>
<form action="{{route('lineas.store')}}" method="post">
    <input type="hidden" name='factura' value={{$factura->numero}}/>
    Producto:<input type="text" name='producto'/>
    Cantidad:<input type="text" name='cantidad' />
    Precio:<input type="text" name='precio' />
</form>

@endsection