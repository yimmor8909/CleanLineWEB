@extends('adminlte::page')

@section('title', 'Detalle del proveedor')

@section('content_header')
    <h1>Detalle del proveedor</h1>
@stop

@section('content')
    <label>ID del provedor: </label> {{$proveedor->id}} <br>
    <label>Código del provedor: </label> {{$proveedor->codigo}} <br>
    <label>Nombre del proveedor: </label> {{$proveedor->nombre}} <br>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop