@extends('adminlte::page')

@section('title', 'Detalle del cliente')

@section('content_header')
    <h1>Detalle del cliente</h1>
@stop

@section('content')
    <label>ID del usuario: </label> {{$usuario->id}} <br>
    <label>Nombre del usuario: </label> {{$usuario->name}} <br>
    <label>Email del usuario: </label> {{$usuario->email}} <br>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop