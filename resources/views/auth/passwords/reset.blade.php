@extends('layout')

@section('contenido')

<main class="contenedor seccion contenido-centrado">

        <h1 class="fw-300 centrar-texto no-margin">Reestablecer Contraseña</h1> 
    
    <form method="POST" action="{{route('password.request')}}" class="form-pequeño">
        <input type="hidden" name="token" value="{{$token}}">
            {{ csrf_field() }}
            <fieldset>

                <label for="email">E-mail: {!!$errors->first('email','<span class=error>:message</span>')!!}
                <input type="email" name="email" placeholder="Tu Correo Electrónico" value="{{ $email ?? old('email') }}" required autofocus>
                </label>
    
                <label for="password">Contraseña: {!!$errors->first('password','<span class=error>:message</span>')!!}
                <input type="password" name="password" placeholder="Tu Contraseña">
                </label>
    
                <label for="password_confirmation">Confirme su contraseña: {!!$errors->first('password','<span class=error>:message</span>')!!}
                <input type="password" name="password_confirmation" placeholder="Introduzca de nuevo su contraseña">
                </label>

                
            </fieldset>
            
            <input type="submit" value="Reestablecer Contraseña" class="boton boton-verde">
        </form>
    
    </main>
@endsection