@extends('layout')

@section('contenido')
<main class="contenedor seccion contenido-centrado">

    <h1 class="fw-300 centrar-texto no-margin">Registrarse</h1> 

    <form method="POST" action="{{ route('register')}}" class="form-pequeño">
        {{ csrf_field() }}
        <fieldset>
            <legend>Formulario de Registro</legend>

            <label for="name">Nombre {!!$errors->first('name','<span class=error>:message</span>')!!}
            <input type="text" name="name" placeholder="Tu Nombre" required value="{{old('name')}}">
            </label>
        
            <label for="email">E-mail: {!!$errors->first('email','<span class=error>:message</span>')!!}
            <input type="email" name="email" placeholder="Tu Correo Electrónico" required value="{{old('email')}}">
            </label>

            <label for="password">Contraseña: {!!$errors->first('password','<span class=error>:message</span>')!!}
            <input type="password" name="password" placeholder="Tu Contraseña">
            </label>

            <label for="password_confirmation">Confirme su contraseña: {!!$errors->first('password','<span class=error>:message</span>')!!}
            <input type="password_confirmation" name="password_confirmation" placeholder="Introduzca de nuevo su contraseña">
            </label>
            
            <div class="inicio-registro">
                <a href={{ route('register')}}>Ya estoy registrado</a>
            </div>
            
        </fieldset>
        
        <input type="submit" value="Registrarse" class="boton boton-verde">
    </form>

</main>
@endsection