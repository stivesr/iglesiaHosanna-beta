<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <!-- USUARIO LOGEADO -->
    @auth
        Hola usuario

        <!-- Botón para cerrar sesión -->
        <div>
            <button id="btnCerrarSesion" class="btn btn-warning text-white">Cerrar Sesión</button>
            <script>
                // Función para mostrar el mensaje de "Cerrando Sesión" y redirigir después
                function mostrarMensajeCerrarSesion() {
                    Swal.fire({
                        title: "Cerrando Sesión",
                        html: "Por favor, espera...",
                        timer: 700, // Tiempo en milisegundos
                        showConfirmButton: false, // No mostrar botón de confirmación
                        allowOutsideClick: false,
                        willOpen: () => {
                            Swal.showLoading();
                        }
                    }).then(() => {
                        // Redirige al usuario a la página de inicio de sesión
                        window.location.href = "/logout";
                    });
                }

                // Asocia la función al botón de cerrar sesión
                document.getElementById('btnCerrarSesion').addEventListener('click', function(event) {
                    event.preventDefault();
                    mostrarMensajeCerrarSesion();
                });
            </script>
        </div>

    @endauth

    <!-- USUARIO NO LOGEADO -->
    @guest
        <script>
            window.location.href = "/login";
        </script>
    @endguest

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>

</html>
