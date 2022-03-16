@extends('adminlte::page')

@section('title', 'Editar cliente')

@section('content_header')
    <h1>Editar cliente</h1>
@stop

@section('content')
<form action="{{ url('/cliente/'.$usuario->id.'/editarCliente')}}" method="post">
  @csrf
    <div class="mb-3">
      <label class="form-label">Nombre usuario: </label>
      <input type="text" class="form-control" value="{{$usuario->name}}" name="name" >
    </div>
    <div class="mb-3">
      <label class="form-label">Nombre proveedor</label>
      <input type="text" class="form-control" value="{{$usuario->email}}"  name="email">
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