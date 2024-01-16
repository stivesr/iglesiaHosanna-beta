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

</head>

<body>
    
    <!-- Titulo -->
    <div class="hstack gap-2 text-bg-primary pt-3 pb-3 px-5 mb-2">
        <div>
            <h1 class="text-center m-0">HOSANNA</h1>
        </div>
        <div class="ms-auto">
            <a href="/register" class="btn btn-warning text-white">Registrarse</a>
        </div>
    </div>

    <!-- FORMULARIO DE INICIO DE SESIÓN -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Iniciar Sesión</div>
                    <div class="card-body">
                        <form action="/login" method="POST">
                            @csrf

                            <!-- USUARIO O CORREO ELECTRONICO -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Usuario o Correo Electrónico</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>

                            <!-- CONTRASEÑA -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>