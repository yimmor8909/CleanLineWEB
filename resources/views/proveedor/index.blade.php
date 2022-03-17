@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
<div class="row">
    <h1>Proveedores</h1>
    <a href="{{ url('/proveedores/crear')}}" class="btn btn-primary btn-sm ml-auto">
        <i class="fas fa-plus"></i> Crear proveedor</a>
</div>  

@stop

@section('content')

    <table class="table" id="tblproveedores">
        <thead>
            <tr>
                <td>ID</td>
                <td>Identificación</td>
                <td>Nombre</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
              <tr>
                  <td>{{$proveedor->id_proveedor}}</td>
                  <td>{{$proveedor->documento}}</td>
                  <td>{{$proveedor->nombre}}</td>
                  <td>
                    <a class="opts" href="{{ url('/proveedores/'.$proveedor->id_proveedor.'/editar')}}" data-toggle="tooltip" 
                        data-bs-placement="top" title="Editar proveedor">
                    <i class="fas fa-edit"></i></a>

                    <a class="opts" href="{{ url('/proveedores/'.$proveedor->id_proveedor.'/eliminar')}}" data-toggle="tooltip" 
                        data-bs-placement="top" title="Eliminar proveedor">
                    <i class="fas fa-trash"></i></a>

                   </td>
                  
              </tr>  
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
    $(document).ready(function(){
          $('#tblproveedores').DataTable({
            "language": idioma_espanol
          });
    });
       

    var idioma_espanol ={
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
       
    }
    </script>
@stop