@extends('adminlte::page')

@section('title', 'Crear orden de compra')

@section('content_header')
    <div class="row">
        <h1>Crear orden de compra a proveedor</h1>
        <button type="button" class="btn btn-primary btn-sm ml-auto">Guardar orden de compra</button>
    </div>  
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <label for="proveedores" class="mtop16" >Proveedor:</label>
        <div class="input-group">
            <div class="input-group-text">
                <i class="far fa-id-card"></i>
            </div>
            <select name="proveedores" class="form-select" required>
                <option value=''>Seleccione</option>
                @foreach($proveedores as $proveedor)
                <option value="{{$proveedor->id_proveedor}}">{{$proveedor->proveedor}}</option>
                @endforeach
            </select>
        </div>
    </div>  

    <div class="col-md-6">
        <label for="fecha_orden" class="mtop16">Fecha de la orden: </label>
        <div class="input-group">
            <div class="input-group-text">
                <i class="fas fa-calendar"></i>
            </div>
            {!!  Form::date('fecha_orden', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
</div> 

<button type="button" class="btn btn-primary mtop16">Agregar</button>

<table class="table" id="table_articulos" >
    <thead>
      <tr>
        <th scope="col">Producto</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td>Jabon fab</td>
            <td>50</td>
            <td>
                <a class="opts" href="#" data-toggle="tooltip" 
                    data-bs-placement="top" title="Editar item">
                <i class="fas fa-edit"></i></a>

                <a class="opts" href="" data-toggle="tooltip" 
                    data-bs-placement="top" title="Eliminar item">
                <i class="fas fa-trash"></i></a>

            </td>
            
          </tr>

          <tr>
            <td>Jabon protex</td>
            <td>100</td>
            <td>
                 <a class="opts" href="#" data-toggle="tooltip" 
                    data-bs-placement="top" title="Editar item">
                <i class="fas fa-edit"></i></a>

                <a class="opts" href="" data-toggle="tooltip" 
                    data-bs-placement="top" title="Eliminar item">
                <i class="fas fa-trash"></i></a>
            </td>
            
          </tr>

          <tr>
            <td>Jabon palmolive</td>
            <td>100</td>
            <td>
                <a class="opts" href="#" data-toggle="tooltip" 
                data-bs-placement="top" title="Editar item">
                <i class="fas fa-edit"></i></a>

                <a class="opts" href="" data-toggle="tooltip" 
                    data-bs-placement="top" title="Eliminar item">
                <i class="fas fa-trash"></i></a>
            </td>
            
          </tr>
    </tbody>
  </table>

  @stop

@section('footer')
<div class="row">
    <div class="col-md-4">
        <label for="subtotal">Subtotal:</label>
        <div class="input-group">
            <div class="input-group-text">
                <!--Hacer uso del fontawesome-->
                <i class="fas fa-dollar-sign"></i>
            </div>

            <!--El segundo parámetro se manda en null porque no lleva ningun
            valor por defecto-->
            {!!  Form::text('subtotal', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>

    <div class="col-md-4">
        <label for="valor_iva">Valor IVA:</label>
        <div class="input-group">
            <div class="input-group-text">
                <!--Hacer uso del fontawesome-->
                <i class="fas fa-dollar-sign"></i>
            </div>

            <!--El segundo parámetro se manda en null porque no lleva ningun
            valor por defecto-->
            {!!  Form::text('valor_iva', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>    

    <div class="col-md-4">
        <label for="total">Total:</label>
        <div class="input-group">
            <div class="input-group-text">
                <!--Hacer uso del fontawesome-->
                <i class="fas fa-dollar-sign"></i>
            </div>

            <!--El segundo parámetro se manda en null porque no lleva ningun
            valor por defecto-->
            {!!  Form::text('total', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>

    
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{url('/static/css/style.css')}}">

    <style>

        .mtop16{
            margin-top: 16px;
        }

        #btnguardar{
            float: right;
        }

    </style>

@stop

@section('js')
    <script>  </script>
@stop