@extends('adminlte::page')

@section('title', 'Crear proveedores')

@section('content_header')
    <h1>Crear proveedores</h1>
@stop

@section('content')
<form action="{{ url('/proveedores/guardar')}}" method="post">
  @csrf
    <div class="mb-3">
      <label class="form-label">Código proveedor: </label>
      <input type="text" class="form-control" name="codigoproveedor" >
    </div>
    <div class="mb-3">
      <label class="form-label">Nombre proveedor</label>
      <input type="text" class="form-control" name="nombreproveedor">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop