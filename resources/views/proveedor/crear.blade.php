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

        <div class="col-md-6">
            <a href="{{ url('')}}" class="btn btn-primary" style="float: right;">Guardar proveedor</a>
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
            <label for="genero" class="mtop16">Género:</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="fas fa-venus-mars"></i>
                </div>
                <select name="genero" class="form-select" disabled>
                    <option value=''>Seleccione</option>
                    @foreach ($generos as $genero)
                        <option value="{{ $genero->id_opcion }}">{{ $genero->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="col-md-6">
            <label for="fecha_nacimiento" class="mtop16">Fecha de nacimiento:</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="fas fa-calendar"></i>
                </div>
                {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control', 'disabled']) !!}
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <label for="tipo_documento" class="mtop16">Tipo de documento:</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="far fa-id-card"></i>
                </div>
                <select name="tipo_documento" class="form-select" required disabled>
                    <option value=''>Seleccione</option>
                    @foreach ($tipos_documentos as $tipodocumento)
                        <option value="{{ $tipodocumento->id_opcion }}">{{ $tipodocumento->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="col-md-6">
            <label for="numero_documento" class="mtop16">Número de documento / NIT:</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="far fa-id-card"></i>
                </div>
                {!! Form::text('numero_documento', null, ['id' => 'numero_documento', 'class' => 'form-control', 'required', 'disabled']) !!}
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="contacto" class="mtop16">Nombre de persona a contactar:</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="far fa-id-card"></i>
                </div>
                {!! Form::text('contacto', null, ['class' => 'form-control', 'disabled']) !!}
            </div>
        </div>

        <div class="col-md-6">
            <label for="correo_electronico" class="mtop16">Correo electrónico:</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="far fa-envelope-open"></i>
                </div>

                {!! Form::email('correo_electronico', null, ['class' => 'form-control', 'disabled']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="direccion" class="mtop16">Dirección:</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="far fa-id-card"></i>
                </div>
                {!! Form::text('direccion', null, ['class' => 'form-control', 'disabled']) !!}
            </div>

        </div>

        <div class="col-md-6">
            <label for="telefono_movil" class="mtop16">Telefóno móvil:</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="far fa-id-card"></i>
                </div>
                {!! Form::number('telefono_movil', null, ['class' => 'form-control', 'disabled']) !!}
            </div>

        </div>
    </div>

    <br>

    <div class="row">
       
    </div>

@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@stop

@section('js')
    <script>
        function mostrar() {
            var select = document.getElementById('tipos_personas');
            var text_item = select.options[select.selectedIndex].innerHTML;
            if (text_item != "Seleccione") {
                if (text_item == "Natural") {
                    $("#numero_documento").hide();
                } else if (text_item == "Jurídica") {
                    $("#numero_documento").show();
                }
            }

        }
    </script>
@stop
