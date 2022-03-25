@extends('adminlte::page')

@section('title', 'Crear proveedores')

@section('content_header')
    <h1>Crear proveedores</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <label for="tipos_personas" class="mtop16">Tipo de persona:</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="far fa-id-card"></i>
                </div>
                <select name="tipos_personas" id="tipos_personas" class="form-select" required 
                    onChange="mostrar();">
                    <option value=''>Seleccione</option>
                    @foreach ($tipos_personas as $tipopersona)
                        <option value="{{ $tipopersona->id_opcion }}">{{ $tipopersona->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>

<div class="row">
  <div class="col-md-6">
      <label for="tipos_personas" class="mtop16" >Tipo de persona:</label>
      <div class="input-group">
          <div class="input-group-text">
              <i class="far fa-id-card"></i>
          </div>
          <select name="tipos_personas" class="form-select" required>
              <option value=''>Seleccione *</option>
              @foreach($tipos_personas as $tipopersona)
              <option value="{{$tipopersona->id_opcion}}">{{$tipopersona->nombre}}</option>
              @endforeach
          </select>
      </div>
  </div>  
</div>    
<br>

<div class="row">
    <h4>Datos de persona:</h4>
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
                {!! Form::text('nombres', null, ['class' => 'form-control', 'required', 'disabled']) !!}
            </div>
        </div>

        <div class="col-md-6">
            <label for="apellidos" class="mtop16">Apellidos:</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="fas fa-user"></i>
                </div>
                {!! Form::text('apellidos', null, ['class' => 'form-control', 'disabled']) !!}
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
              <option value=''>Seleccione *</option>
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


<div class="row">
    <div class="col-md-6">
        <label for="tipo_genero" class="mtop16" >Género:</label>
        <div class="input-group">
            <div class="input-group-text">
                <i class="fas fa-venus-mars"></i>
            </div>
            <select name="tipo_documento" class="form-select" required>
                <option value=''>Seleccione *</option>
                @foreach($generos as $genero)
                <option value="{{$genero->id_opcion}}">{{$genero->nombre}}</option>
                @endforeach
            </select>
        </div>
    </div> 



  <div class="col-md-6">
    <label for="date" class="mtop16">Date</label>
    <div class="">
        <div class="input-group date" id="datepicker">
            <input type="text" class="form-control">
            <span class="input-group-append">
                <span class="input-group-text">
                    <i class="fa fa-calendar"></i>
                </span>
            </span>
        </div>
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <!-- Para importar bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <!-- Estilos para el datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
@stop

@section('js')
<!-- Importaciones para datepicker -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<!-- Script para funcionamiento del datepicker -->
<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker();
    });
</script>


@stop
