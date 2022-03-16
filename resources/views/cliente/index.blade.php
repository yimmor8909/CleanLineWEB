@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>CLIENTES</h1>
@stop

@section('content')

<div class="btns">
    <a href="{{ url('/cliente/crear')}}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Crear cliente</a>
</div>  

    <table class="table" id="tblusuarios">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Email</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
              <tr>
                  <td>{{$usuario->id}}</td>
                  <td>{{$usuario->name}}</td>
                  <td>{{$usuario->email}}</td>
                  <td>
                    <a class="opts" href="{{ url('/cliente/'.$usuario->id.'/show')}}" data-toggle="tooltip" 
                        data-bs-placement="top" title="Mostrar usuario">
                    <i class="fas fa-eye"></i></a>

                    <a class="opts" href="{{ url('/cliente/'.$usuario->id.'/editar')}}" data-toggle="tooltip" 
                        data-bs-placement="top" title="Editar usuario">
                    <i class="fas fa-edit"></i></a>

                    <a class="opts" href="{{ url('/cliente/'.$usuario->id.'/eliminar')}}" data-toggle="tooltip" 
                        data-bs-placement="top" title="Eliminar usuario">
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
       $('#tblusuarios').DataTable();
    });
 </script>
@stop