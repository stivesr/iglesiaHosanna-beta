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
                    <div class="card-header">Registro</div>
                    <div class="card-body">
                        <form action="/register" method="POST">
                            @csrf

                            <!-- NOMBRE -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <!-- USUARIO -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>

                            <!-- CORREO ELECTRONICO -->
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <!-- CONTRASEÑA -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    required>
                            </div>

                            <!-- CONFIRMAR CONTRASEÑA -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-primary">Registrarse</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>