@extends('adminlte::page')

@section('title', 'Editar usuario')

@section('content_header')
    <h1>Editar usuario</h1>
@stop

@section('content')
<form action="{{ url('/usuarios/'.$usuario->id.'/editarUsuario')}}" method="post">
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