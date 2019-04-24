@extends('layout')
@section('contenido')



<main class="contenedor seccion contenido-centrado">
    <h1 class="fw-300 centrar-texto no-margin">Contacto</h1>
    <h2 class="fw-300 centrar-texto no-margin">Llena el formulario de contacto</h2>
    
    

    <form method="POST" action="{{ route('messages.store')}}">
        {{ csrf_field() }}
        <fieldset>
            <legend>Formulario de Contacto</legend>

            <label for="nombre">Nombre: {!!$errors->first('nombre','<span class=error>:message</span>')!!}
            <input type="text"  name=nombre placeholder="Tu Nombre" required value="{{old('nombre')}}">
            
            </label>
            <label for="email">E-mail: {!!$errors->first('email','<span class=error>:message</span>')!!}
            <input type="text" name="email" placeholder="Tu Correo Electrónico" required value="{{old('email')}}">
            
            </label>

            <label for="mensaje">Mensaje: {!!$errors->first('mensaje','<span class=error>:message</span>')!!}
            <textarea name="mensaje" class="mensajes" placeholder="Tu opinion o sugerencia" required>{{old('mensaje')}}</textarea>
            
            </label>
            <input type="submit" value="Enviar" class="boton boton-verde d-block">
        </fieldset>

    </form>
</main>
    
@endsection