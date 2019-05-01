@extends('layout')

@section('contenido')
        
<table class="table table-striped table-bordered table-responsive" id="tabla-mensajes">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Mensaje</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($messages as $message)      
                <tr>
                    <td scope="row">{{$message->id}}</td>
                    <td scope="row">{{$message->nombre}}</td>
                    <td scope="row">{{$message->email}}</td>
                    <td scope="row">{{$message->mensaje}}</td>
                </tr>
            @endforeach
        </tbody>
</table>
    
@endsection
