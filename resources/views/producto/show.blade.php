@extends('adminlte::page')

@section('title', 'Mostrar producto')

@section('content_header')
    <h1>DETALLE DEL PRODUCTO</h1>
@stop

@section('content')
    <label>ID del producto: </label> {{$producto->id}} <br>
    <label>Código del producto: </label>{{$producto->codigo}} <br>
    <label>Nombre del producto: </label>{{$producto->nombre}} <br>
    <label>Precio del producto: </label> {{$producto->precio}} 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop