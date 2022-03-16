@extends('adminlte::page')

@section('title', 'Editar productos')

@section('content_header')
    <h1>Editar productos</h1>
@stop

@section('content')
<form action="{{ url('/productos/'.$producto->id.'/editarProducto')}}" method="post">
  @csrf

    <div class="mb-3">
      <label class="form-label">Código producto: </label>
      <input type="text" class="form-control" value="{{$producto->codigo}}" name="codigoproducto" >
    </div>

    <div class="mb-3">
      <label class="form-label">Nombre producto</label>
      <input type="text" class="form-control" value="{{$producto->nombre}}"  name="nombreproducto">
    </div>

    <div class="mb-3">
      <label class="form-label">Precio producto</label>
      <input type="text" class="form-control" value="{{$producto->precio}}"  name="precioproducto">
    </div>

    <button type="submit" class="btn btn-primary">Editar</button>
  </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop