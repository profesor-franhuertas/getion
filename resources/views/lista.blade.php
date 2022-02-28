@extends('layouts.app')

@section('title','Facturas')

@section('content')
    

<table>
    <tr><td>Número</td><td>Fecha</td><td>Cliente</td></tr>
@foreach ($facturas as $factura)
    <tr><td><a href="{{route('facturas.edit',$factura->numero)}}">{{$factura->numero}}</a></td><td>{{$factura->fecha}}</td><td>{{$factura->nombre}}</td></tr>
@endforeach
</table>
@endsection