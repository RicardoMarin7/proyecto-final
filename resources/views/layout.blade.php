<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>La Verdad de México</title>
</head>
<body>
    <header class="site-header {{request()->is('/') ? 'inicio':''}}">
            <div class="contenedor">
                <div class="barra">
                    <a href="/">
                        <h1 class="no-margin">LaVerdad<span>DeMéxico</span></h1>
                    </a>
    
                    <nav class="navegacion">
                        <a href="#">Nosotros</a>
                        <a href="#">Donaciones</a>
                        <a href={{ route('contacto') }}>Contacto</a>
                    </nav>
                </div><!--Barra-->
                
                {!!request()->is('/') ? '<div class="texto-header">
                                            <h2 class="no-margin">Una mirada veraz a la situación de nuestro pais</h2>
                                            <p>Cambiando el rumbo de México</p>
                                           </div>' : ''!!}
            </div><!--Contenedor-->
    </header>

@yield('contenido')


<footer class="site-footer">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <nav class="navegacion">
                    <a href="#">Nosotros</a>
                    <a href="#">Donaciones</a>
                    <a href={{ route('contacto') }}>Contacto</a>
                </nav>
            </nav>
            <p class="copyright">Todos Los Derechos Reservados &copy;</p>
        </div>
    </footer>

</body>
</html>