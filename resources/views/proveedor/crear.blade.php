@extends('adminlte::page')

@section('title', 'Crear proveedores')

@section('content_header')
    <h1>Crear proveedores</h1>
@stop

@section('content')

<div class="row">
  <div class="col-md-6">
      <label for="tipos_personas" class="mtop16" >Tipo de persona:</label>
      <div class="input-group">
          <div class="input-group-text">
              <i class="far fa-id-card"></i>
          </div>
          <select name="tipos_personas" class="form-select" required>
              <option value=''>Seleccione</option>
              @foreach($tipos_personas as $tipopersona)
              <option value="{{$tipopersona->id_opcion}}">{{$tipopersona->nombre}}</option>
              @endforeach
          </select>
      </div>
  </div>  
</div>    


<div class="row">
  <div class="col-md-6">
      <label for="nombres">Nombres:</label>
      <div class="input-group">
          <div class="input-group-text">
              <!--Hacer uso del fontawesome-->
              <i class="fas fa-user"></i>
          </div>

          <!--El segundo parámetro se manda en null porque no lleva ningun
          valor por defecto-->
          {!!  Form::text('nombres', null, ['class' => 'form-control', 'required']) !!}
      </div>
  </div>

  <div class="col-md-6">
      <label for="apellidos" class="mtop16">Apellidos:</label>
      <div class="input-group">
          <div class="input-group-text">
              <i class="fas fa-user"></i>
          </div>
          {!!  Form::text('apellidos', null, ['class' => 'form-control', 'required']) !!}
      </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
      <label for="tipo_documento" class="mtop16" >Tipo de documento:</label>
      <div class="input-group">
          <div class="input-group-text">
              <i class="far fa-id-card"></i>
          </div>
          <select name="tipo_documento" class="form-select" required>
              <option value=''>Seleccione</option>
              @foreach($tipos_documentos as $tipodocumento)
              <option value="{{$tipodocumento->id_opcion}}">{{$tipodocumento->nombre}}</option>
              @endforeach
          </select>
      </div>
  </div>  


  <div class="col-md-6">
      <label for="numero_documento" class="mtop16">Número de documento:</label>
      <div class="input-group">
          <div class="input-group-text">
              <i class="far fa-id-card"></i>
          </div>
          {!!  Form::text('numero_documento', null, ['class' => 'form-control', 'required']) !!}
      </div>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop