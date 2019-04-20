@extends('layout')

@section('contenido')
<main class="contenedor">
        <h1 class="fw-300 centrar-texto">Donaciones</h1>

        <div class="contenido-donativo">
            <div class="imagen">
                <img src="../img/donativos.jpg" alt="Imagen Donativo">
            </div>
            <div class="texto-donativo centrar-texto">
                <blockquote>Éste proyecto no se hará realidad si no contamos con tu participación ¡Tu eres muy importante!
                    <p class="fw-300">
                            Nuestra meta es crear ciudades rurales autosustentables para reconstruir el tejido social y evitar actos delictivos de empresas, generar empleos, con la finalidad de transformar los escenarios de México, hoy devastados por la falta de ingresos en las familias.
                    </p>

                    <p class="fw-300">
                            Algunos fondos serán para formar fideicomisos para los huerfanos del crimen organizado. Otros serán para organizarnos, estructurarnos para la participación de las candidaturas independientes y la participación ciudadana en los legislativos.
                    </p>
                
                </blockquote>
            </div> <!-- Termina Texto Donativo-->

            
        </div>  <!-- Termina Contenido Donativo-->

        <div class="p-donativo">
           <h2 class="fw-300">Puedes realizar tu donativo en:</h2>
            <p>
                    Banco: ScotiaBank <br>
                    Número de cuenta: 28 98 86 277 <br>
                    Cuenta de Cheques: 013 008 079 74 <br>
                    Clabe Interbancaria: 044 528 013 080 797 46 <br>
                    Plaza 13 / Sucursal 01 <br>
                    Codigo Swif: MBCOMXMM <br>
                    Codigo ABBA: 21000021                    
            </p> 
        </div>
        
    </main>
@endsection