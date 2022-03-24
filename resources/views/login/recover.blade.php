<!--Utilizar la plantilla maestra en el login-->
@extends('login.plantilla')

<!--Reemplazar el titulo-->
@section('title', 'recuperar contraseña')

<!--Mostrar sección de contenido exclusivo de esta plantilla, se debe iniciar y finalizar-->
@section('content')
<div class="box box_login shadow">
    <div class="inside">

        <div class="header">
           <h1>Ingrese su correo electronico</h1>
          <!-- <img class="logo" src="{{url('/static/images/logo.jpg')}}" alt="">-->
        </div>
        {!! Form::open(['url' => '/recover']) !!}

<label for="email">Correo electrónico:</label>
<div class="input-group">
    <div class="input-group-text">
        <!--Hacer uso del fontawesome-->
        <i class="far fa-envelope-open"></i>
    </div>
    {!!  Form::email('email', null, ['class' => 'form-control', 'required']) !!}