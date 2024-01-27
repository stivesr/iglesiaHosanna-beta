<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iglesia Hosanna - Login</title>

    <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">

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

        <div class="dropdown-menu">

            <ul>
                <li class="option"><a href="/">Inicio</a></li>
                <li class="option"><a href="#">Actividades</a></li>
                <li class="option"><a href="#">Soy Nuevo</a></li>
                <li><a href="/login" class="action-btn">DASHBOARD</a></li>
            </ul>

        </div>

        <div class="content">

            <form action="/login" method="POST" id="formIniciarSesion">

                @csrf

                <!-- User o Email -->
                <div>
                    <div>
                        <span>
                            <i class="fas fa-user-circle"></i>
                        </span>
                        <input type="text" id="username" name="username" placeholder="usuario o email" required>
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <div>
                        <span>
                            <i class="fas fa-key"></i>
                        </span>
                        <input type="password" id="password" name="password" placeholder="contraseña" required>
                    </div>
                </div>

                <div>
                    <button type="submit" id="btnIniciarSesion">Iniciar Sesión</button>
                </div>

            </form>

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

    <script src="{{ asset('js/login_.js') }}"></script>

</body>

</html>
