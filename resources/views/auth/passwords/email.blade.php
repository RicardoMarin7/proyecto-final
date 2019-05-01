@extends('layout')

@section('contenido')

<main class="contenedor-pequeño seccion contenido-centrado">
        <form method="POST" action="{{route('password.email')}}" class="form-pequeño">
            @csrf

            <fieldset>
                <label for="email">E-mail: {!!$errors->first('email','<span class=error>:message</span>')!!}
                <input type="email" name="email" placeholder="Tu Correo Electrónico" required value="{{old('email')}}">
                </label>               
            </fieldset>
            
            <input type="submit" value="Recuperar Contraseña" class="boton boton-verde">
        </form>
    </main>   
    
@endsection