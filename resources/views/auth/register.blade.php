<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/1cf153e67c.js" crossorigin="anonymous"></script>

</head>

<body>
    
    <!-- Titulo -->
    <div class="hstack gap-2 text-bg-primary pt-3 pb-3 px-5 mb-2">
        <div>
            <h1 class="text-center m-0">HOSANNA</h1>
        </div>
        <div class="ms-auto">
            <a href="/login" class="btn btn-warning text-white">Iniciar Sesión</a>
        </div>
    </div>

    <!-- FORMULARIO DE REGISTRO -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center text-bg-primary">Registro</div>
                    <div class="card-body">
                        <form action="/register" method="POST" id="formRegistrarse">
                            @csrf

                            <!-- NOMBRE Y USUARIO EN LA MISMA FILA -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="nombre" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2">
                                            <i class="fas fa-at"></i>
                                        </span>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="usuario" required>
                                    </div>
                                </div>
                            </div>

                            <!-- CORREO ELECTRONICO -->
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">
                                    <i class="fas fa-inbox"></i>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                            </div>

                            <!-- CONTRASEÑA Y CONFIRMAR CONTRASEÑA EN LA MISMA FILA -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon4">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="contraseña" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon5">
                                            <i class="fas fa-user-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirmar contraseña" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center p-3">
                                <button type="submit" class="btn btn-primary btn-lg" id="btnRegistrarse">Registrarse</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Función para mostrar el mensaje de "Iniciando Sesión" y redirigir después de 700 ms
        function mostrarMensajeRegistrarse() {
            Swal.fire({
                title: "Registrando nuevo usuario",
                html: "Por favor, espera...",
                timer: 700,  // Tiempo en milisegundos
                showConfirmButton: false,  // No mostrar botón de confirmación
                allowOutsideClick: false,
                willOpen: () => {
                    Swal.showLoading();
                }
            }).then(() => {
                // Después de mostrar el mensaje, completa la acción del formulario
                document.getElementById('formRegistrarse').submit();
            });
        }

        // Asocia la función al botón de registrarse
        document.getElementById('btnRegistrarse').addEventListener('click', function (event) {
            event.preventDefault();
            mostrarMensajeRegistrarse();
        });
    </script>

    <!-- SweetAlert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>

</html>