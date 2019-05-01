@extends('layout')

@section('contenido')
<main class="contenedor-pequeño seccion contenido-centrado">

    <h1 class="fw-300 centrar-texto no-margin">Iniciar Sesión</h1> 

    <form method="POST" action="{{ route('login')}}" class="form-pequeño">
        {{ csrf_field() }}
        <fieldset>
                        
            <label for="email">E-mail: {!!$errors->first('email','<span class=error>:message</span>')!!}
            <input type="email" name="email" placeholder="Tu Correo Electrónico" required value="{{old('email')}}">
            </label>

            <label for="password">Contraseña {!!$errors->first('password','<span class=error>:message</span>')!!}
            <input type="password" name="password" placeholder="Tu Contraseña">
            </label>
            
            <div class="inicio-registro">
                <a href={{ route('register')}}>Registrarse</a>
                <a href={{route('password.forgot')}}>¿Has olvidado tu contraseña?</a>
            </div>
            
        </fieldset>
        
        <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
    </form>

</main>
@endsection