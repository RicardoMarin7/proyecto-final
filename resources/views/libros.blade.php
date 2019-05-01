@extends('layout')

@section('contenido')

    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Libros</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <img src="img/portada1.jpg" alt="Portada del libro 1">
                
                <div class="contenido-anuncio">
                    <h3>Libro 1</h3>
                    <p>Descripción libro 1</p>
                    <p class="precio">$500</p>
                    <a href="#" class="boton boton-verde d-block">Comprar Libro</a>
                </div>

            </div>

            <div class="anuncio">
                <img src="img/portada2.jpg" alt="Portada del libro 2">

                <div class="contenido-anuncio">
                    <h3>Libro 2</h3>
                    <p>Descripción libro 2</p>
                    <p class="precio">$500</p>
                    <a href="#" class="boton boton-verde d-block">Comprar Libro</a>
                </div>

            </div>

            <div class="anuncio">
                <img src="img/portada3.jpg" alt="Portada del libro 3">

                <div class="contenido-anuncio">
                    <h3>Libro 3</h3>
                    <p>Descripción libro 3</p>
                    <p class="precio">$500</p>
                    <a href="#" class="boton boton-verde d-block">Comprar Libro</a>
                </div><!-- Contenido Anuncio-->
            </div><!-- Anuncio-->
        </div> <!-- contenedor anuncios-->
    </main>
    
@endsection