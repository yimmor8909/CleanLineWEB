@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <h1>CATEGORÍAS</h1>
@stop

@section('content')
    <p>Sección de categorías</p>
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Código</td>
                <td>Nombre</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
              <tr>
                  <td>{{$categoria->id}}</td>
                  <td>{{$categoria->codigo}}</td>
                  <td>{{$categoria->nombre}}</td>
                  
              </tr>  
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop