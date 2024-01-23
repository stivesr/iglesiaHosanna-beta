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
                <li><a href="#">Contacto</a></li>
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
                <li class="option"><a href="#">Contacto</a></li>
                <li><a href="/login" class="action-btn">DASHBOARD</a></li>
            </ul>
        </div>

        <div class="content">
            <h1>HOSANNA</h1>
            <p>Centro Cristiano Familiar</p>
            <div class="buttons">
                <a href="#" class="modal-btn-horarios"><span></span>HORARIOS</a>
                <a href="#" class="modal-btn-peticiones"><span></span>PETICIONES</a>
            </div>
        </div>
    </div>

    <div class="social-section">
        <h3>Siguenos en</h3>
        <div class="social-icons">
            <a href="https://www.facebook.com/hosanna.igle" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/hosannaigle" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        </div>

    </div>
    <footer>
        © Iglesia Hosanna - Todos los Derechos Reservados
    </footer>

    <section class="modal">
        <div class="modal-container">
            <div class="modal-header">
                <h2>Nuestro Horario Semanal</h2>
                <a href="#" class="modal-close"><i class="fa-solid fa-x"></i></a>
            </div>
            <div class="modal-content">
                <h3>Servicios Generales</h3>
                <div class="schedule">
                    <div class="calendar">
                        <i class="far fa-calendar"></i>Domingos
                    </div>
                    <div class="clock">
                        <i class="far fa-clock"></i>8 am, 11 am y 6 pm
                    </div>
                </div>
                <div class="schedule">
                    <div class="calendar">
                        <i class="far fa-calendar"></i>Martes
                    </div>
                    <div>
                        <i class="far fa-clock"></i>7 pm
                    </div>


                </div>

                <h3>Servicio de Clamor e Intercesión</h3>
                <div class="schedule">
                    <div class="calendar">
                        <i class="far fa-calendar"></i>Sábados
                    </div>
                    <div class="clock">
                        <i class="far fa-clock"></i>8 am
                    </div>


                </div>

                <h3>Reunión de Jóvenes</h3>
                <div class="schedule">
                    <div class="calendar">
                        <i class="far fa-calendar"></i>Sábados
                    </div>
                    <div class="clock">
                        <i class="far fa-clock"></i>6 pm
                    </div>


                </div>
            </div>
        </div>
    </section>




    <script src="{{ asset('js/index_.js') }}"></script>
</body>

</html>
