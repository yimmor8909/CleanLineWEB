@extends('adminlte::page')

@section('title', 'Crear productos')

@section('content_header')
    <h1>Crear productos</h1>
@stop

@section('content')
<form action="{{ url('/productos/guardar')}}" method="post">
  @csrf

    <div class="mb-3">
      <label class="form-label">Código producto: </label>
      <input type="text" class="form-control" name="codigoproducto" >
    </div>

    <div class="mb-3">
      <label class="form-label">Nombre producto</label>
      <input type="text" class="form-control" name="nombreproducto">
    </div>

    <div class="mb-3">
      <label class="form-label">Precio producto</label>
      <input type="number" class="form-control" name="precioproducto">
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