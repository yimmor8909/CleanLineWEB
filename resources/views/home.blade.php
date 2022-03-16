@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Sección Admin</h1>
@stop

@section('content')
    <p>Aqui el contenido de toda la pagina</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop