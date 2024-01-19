<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/1cf153e67c.js" crossorigin="anonymous"></script>

    <!-- Centrar contenido -->
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
    </style>

</head>

<body>

    <!-- FORMULARIO DE INICIO DE SESIÓN -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center text-bg-primary">Inicio de Sesión</div>
                    <div class="card-body">
                        <form action="/login" method="POST" id="formIniciarSesion">
                            @csrf

                            <!-- USUARIO O CORREO ELECTRONICO -->
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fas fa-user-circle"></i>
                                    </span>
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="usuario o email" required>
                                </div>
                            </div>

                            <!-- CONTRASEÑA -->
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2">
                                        <i class="fas fa-key"></i>
                                    </span>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="contraseña" required>
                                </div>
                            </div>

                            <div class="row justify-content-center mx-3 p-3">
                                <button type="submit" class="btn btn-primary btn-lg" id="btnIniciarSesion">Iniciar
                                    Sesión</button>
                            </div>

                            <!--
                            <div class="ms-auto text-center">
                                No tienes una cuenta?
                                <a href="/register" class="btn btn-warning text-white">Registrate</a>
                            </div>
                             -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
