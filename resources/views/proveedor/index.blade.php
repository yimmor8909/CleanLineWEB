@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1>PROVEEDORES</h1>

  

@stop

@section('content')

<div class="btns">
    <a href="{{ url('/proveedores/crear')}}"class="btn btn-primary">
        <i class="fas fa-plus"></i> Crear proveedor</a>
</div>  
    

    <table class="table" id="tblproveedores">
        <thead>
            <tr>
                <td>ID</td>
                <td>Código</td>
                <td>Nombre</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
              <tr>
                  <td>{{$proveedor->id}}</td>
                  <td>{{$proveedor->codigo}}</td>
                  <td>{{$proveedor->nombre}}</td>
                  <td>
                    <a class="opts" href="{{ url('/proveedores/'.$proveedor->id.'/show')}}" data-toggle="tooltip" 
                        data-bs-placement="top" title="Mostrar proveedor">
                    <i class="fas fa-eye"></i></a>

                    <a class="opts" href="{{ url('/proveedores/'.$proveedor->id.'/editar')}}" data-toggle="tooltip" 
                        data-bs-placement="top" title="Editar proveedor">
                    <i class="fas fa-edit"></i></a>

                    <a class="opts" href="{{ url('/proveedores/'.$proveedor->id.'/eliminar')}}" data-toggle="tooltip" 
                        data-bs-placement="top" title="Eliminar proveedor">
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
          $('#tblproveedores').DataTable();
       });
    </script>
@stop