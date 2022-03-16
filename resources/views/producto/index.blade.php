@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>PRODUCTOS</h1>
@stop

@section('content')


<div class="btns">
    <a href="{{ url('/productos/crear')}}"class="btn btn-primary">
        <i class="fas fa-plus"></i> Crear producto</a>
</div>  

    <table class="table" id="tblproducto">
        <thead>
            <tr>
                <td>ID</td>
                <td>Código</td>
                <td>Nombre</td>
                <td>Precio</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
              <tr>
                  <td>{{$producto->id}}</td>
                  <td>{{$producto->codigo}}</td>
                  <td>{{$producto->nombre}}</td>
                  <td>{{$producto->precio}}</td>  
                  <td>
                    <a class="opts" href="{{ url('/productos/'.$producto->id.'/show')}}" data-toggle="tooltip" 
                        data-bs-placement="top" title="Mostrar proveedor">
                    <i class="fas fa-eye"></i></a>

                    <a class="opts" href="{{ url('/productos/'.$producto->id.'/editar')}}" data-toggle="tooltip" 
                        data-bs-placement="top" title="Editar producto">
                    <i class="fas fa-edit"></i></a>

                    <a class="opts" href="{{ url('/productos/'.$producto->id.'/eliminar')}}" data-toggle="tooltip" 
                        data-bs-placement="top" title="Eliminar producto">
                    <i class="fas fa-trash"></i></a>
                    
                   </td>                
              </tr>  
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <style>
        .btns{
            margin-bottom: 15px;
        }
    </style>

    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
        $(document).ready(function(){
        $('#tblproducto').DataTable();
        });
    </script>
@stop