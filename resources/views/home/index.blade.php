<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iglesia Hosanna - Centro Familiar Cristiano</title>

    <link rel="stylesheet" href="{{ asset('css/index_style.css') }}">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

    <div class="banner">

        <div class="navbar">

            <a href="/"><img src="{{ asset('/images/png/Hosanna_H.png') }}" class="hosanna" alt="Hosanna"></a>

            <ul class="links">
                <li><a href="/">Inicio</a></li>
                <li><a href="#">Actividades</a></li>
                <li><a href="#">Soy Nuevo</a></li>
            </ul>

            <a href="/login" class="action-btn">DASHBOARD</a>

            <div class="toggle-btn">
                <i class="fa-solid fa-bars"></i>
            </div>

        </div>

        <div class="dropdown-menu">

            <ul>
                <li class="option"><a href="/">Inicio</a></li>
                <li class="option"><a href="#">Actividades</a></li>
                <li class="option"><a href="#">Soy Nuevo</a></li>
                <li><a href="/login" class="action-btn">DASHBOARD</a></li>
            </ul>

        </div>

        <div class="content">

            <div>

                <p>Bienvenido a Hosanna</p>

                <h1>¡Nada hay imposible para Dios!</h1>

            </div>

            <div>
                <a href="#" class="modal-btn" data-modal="horarios">HORARIOS</a>
                <a href="#" class="modal-btn" data-modal="oracion">ORACIÓN</a>
            </div>

        </div>

    </div>

    <div class="map-section">

        <div class="text-section">
            <div class="text">

                <h2>¿Dónde nos encontramos?</h2>

                <p class="location"><i class="fa-solid fa-location-dot"></i> Liberia, Guanacaste, Costa Rica</p>

                <p class="address">100 metros Norte de la entrada principal<br>del Estadio Edgardo Baltodano Briceño</p>

            </div>
        </div>


        <div class="map">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3921.2727931164586!2d-85.43386422451478!3d10.63590298950443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f75632940fbe3ef%3A0x66e47794326d4d40!2sIglesia%20Hosanna!5e0!3m2!1ses-419!2scr!4v1706204170392!5m2!1ses-419!2scr"
                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

    </div>

    <div class="social-section">

        <h2>Puedes seguirnos en</h2>

        <div class="social-icons">
            <a href="https://www.facebook.com/hosanna.igle" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/hosannaigle" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        </div>

    </div>

    <footer>
        © Iglesia Hosanna - Todos los Derechos Reservados
    </footer>

    <script src="{{ asset('js/index_.js') }}"></script>

</body>

</html>
