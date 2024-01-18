<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jóvenes</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/1cf153e67c.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Mensajes de éxito y error -->
    @if (session('success') || session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                @if (session('success'))
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "{{ session('success') }}",
                        showConfirmButton: false,
                        timer: 1500
                    });
                @endif

                @if (session('error'))
                    Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "{{ session('error') }}",
                        showConfirmButton: false,
                        timer: 1500
                    });
                @endif
            });
        </script>
    @endif

    <!-- Encabezado -->
    <div class="hstack gap-3 text-bg-primary pt-3 pb-3 px-5 mb-2">

        <div>
            <h1 class="text-center m-0">JOVENES</h1>
        </div>

        <div class="ms-auto">
            <a href="" class="btn btn-info text-white">{{ session('user_name') }}</a>
        </div>

        <div>
            <button id="btnCerrarSesion" class="btn btn-warning text-white">Cerrar Sesión</button>
            <script>
                // Función para mostrar el mensaje de "cerrando sesión" y redirigir después de 300 ms
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

    </div>

    <!-- CRUD -->
    <div class="ps-5 pe-5 table-responsive">

        <!-- Botón para registrar un joven -->
        <button class="btn btn-success p-2 mb-2" data-bs-toggle="modal" data-bs-target="#modalIngresar">Registrar
            Joven</button>

        <!-- Modal de Ingresar datos -->
        <div class="modal fade" id="modalIngresar" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresar Datos de un Joven</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <!-- Formulario -->
                        <form action="{{ route('jovenes.create') }}" method="POST">
                            @csrf

                            <!-- NOMBRE -->
                            <div class="mb-3">
                                <label for="inputNombre" class="form-label">Nombre del Joven</label>
                                <input type="text" class="form-control" id="inputNombre"
                                    aria-describedby="nombreHelp" name="txtnombre">
                            </div>

                            <!-- APELLIDOS -->
                            <div class="mb-3">
                                <label for="inputApellidos" class="form-label">Apellidos del Joven</label>
                                <input type="text" class="form-control" id="inputApellidos"
                                    aria-describedby="apellidosHelp" name="txtapellidos">
                            </div>

                            <!-- EDAD -->
                            <div class="mb-3">
                                <label for="inputEdad" class="form-label">Edad del Joven</label>
                                <input type="number" class="form-control" id="inputEdad" aria-describedby="edadHelp"
                                    name="txtedad">
                            </div>

                            <!-- TELEFONO -->
                            <div class="mb-3">
                                <label for="inputTelefono" class="form-label">Teléfono del Joven</label>
                                <input type="tel" class="form-control" id="inputTelefono"
                                    aria-describedby="telefonoHelp" name="txttelefono">
                            </div>

                            <!-- BARRIOS (LISTA DESPLEGABLE) -->
                            <div class="mb-3">
                                <label for="barrio" class="form-label">Barrio</label>
                                <select class="form-select" id="selectBarrio" name="txtbarrio">
                                    @foreach (['Alaska', 'Ángeles', 'Buenos Aires', 'Capulín', 'Cerros', 'Condega', 'Corazón de Jesús', 'Curime', 'Choricera', 'Chorotega', 'Gallera', 'Guaria', 'Jícaro', 'La Carreta', 'Llano La Cruz', 'Mocho (Santa Lucía)', 'La Arena', 'Moracia', 'Nazareth', 'Pueblo Nuevo', 'Sabanero', 'San Miguel', 'San Roque', 'Sitio', 'Veinticinco de Julio', 'Victoria', 'Villanueva', 'Caraña', 'Isleta (parte)', 'Juanilama', 'Montañita', 'Paso Tempisque (parte)', 'Pelón de la Bajura', 'Polvazales', 'Roble de Sabana', 'Rodeito', 'Salto (parte)', 'San Benito', 'San Hernán', 'San Lucas', 'Santa Ana', 'Terreros', 'Zanjita'] as $barrio)
                                        <option value="{{ $barrio }}">{{ $barrio }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- BOTONES -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="summit" class="btn btn-primary">Registrar</button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>

        <!-- TABLA -->
        <table class="table table-striped table-bordered table-hover">
            <!-- ENCABEZADO -->
            <thead class="bg-primary text-white align-middle">
                <tr>
                    <th scope="col" class="d-none">ID</th>
                    <th scope="col" class="col-2">Nombre</th>
                    <th scope="col" class="col-2">Apellidos</th>
                    <th scope="col" class="col-1">Edad</th>
                    <th scope="col" class="col-1">Teléfono</th>
                    <th scope="col" class="col-2">Barrio</th>
                    @if (Auth::check() && Auth::user()->isAdmin)
                        <th scope="col" class="col-2">Líder</th>
                    @endif
                    <th scope="col" class="col-1"></th>
                </tr>
            </thead>

            <!-- DATOS (FILAS) -->
            <tbody class="table-group-divider">
                @forelse ($datos as $joven)
                    <tr class="align-middle">
                        <th class="d-none">{{ $joven->id }}</th>
                        <td>{{ $joven->nombre }}</td>
                        <td>{{ $joven->apellidos }}</td>
                        <td>{{ $joven->edad }}</td>
                        <td>{{ $joven->telefono }}</td>
                        <td>{{ $joven->barrio }}</td>

                        @if (Auth::check() && Auth::user()->isAdmin)
                            <td>{{ $joven->user->name }}</td>
                        @endif

                        <!-- BOTONES DE EDITAR Y ELIMINAR -->
                        <td class="text-center">
                            <div class="d-block d-sm-none mb-2">
                                <!-- Se mostrará en dispositivos móviles -->
                                <a href="" data-bs-toggle="modal"
                                    data-bs-target="#modalEditar{{ $joven->id }}" class="btn btn-warning"><i
                                        class="fas fa-pen text-white"></i></a>
                                <a href="{{ route('jovenes.delete', $joven->id) }}" onclick="return res()"
                                    class="btn btn-danger mt-2"><i class="fas fa-trash"></i></a>
                            </div>
                            <div class="d-none d-sm-block">
                                <!-- Se mostrará en tamaños mayores a dispositivos móviles -->
                                <a href="" data-bs-toggle="modal"
                                    data-bs-target="#modalEditar{{ $joven->id }}" class="btn btn-warning me-2"><i
                                        class="fas fa-pen text-white"></i></a>
                                <a href="{{ route('jovenes.delete', $joven->id) }}"
                                    onclick="return confirmarEliminacion()" class="btn btn-danger ms-2">
                                    <i class="fas fa-trash"></i>
                                </a>

                                <script>
                                    function confirmarEliminacion() {
                                        Swal.fire({
                                            title: "¿Estás seguro de eliminar este registro?",
                                            text: "¡No podrás revertir esto!",
                                            icon: "warning",
                                            showCancelButton: true,
                                            confirmButtonColor: "#3085d6",
                                            cancelButtonColor: "#d33",
                                            confirmButtonText: "Sí, eliminarlo",
                                            cancelButtonText: "Cancelar"
                                        }).then((result) => {
                                            if (result.isConfirmed) {

                                                // Redireccionar a la ruta de eliminación
                                                window.location.href = "{{ route('jovenes.delete', $joven->id) }}";
                                            }
                                        });

                                        // Evitar que el enlace se siga ejecutando automáticamente
                                        return false;
                                    }
                                </script>
                            </div>
                        </td>


                        <!-- Modal de Modificar datos -->
                        <div class="modal fade" id="modalEditar{{ $joven->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Datos del Joven
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <!-- Formulario -->
                                        <form action="{{ route('jovenes.update') }}" method="POST">
                                            @csrf

                                            <!-- ID (ESTÁ OCULTO, SOLO PARA VALIDACIONES INTERNAS) -->
                                            <input type="hidden" name="txtid" value="{{ $joven->id }}">

                                            <!-- NOMBRE -->
                                            <div class="mb-3">
                                                <label for="inputNombre" class="form-label">Nombre del Joven</label>
                                                <input type="text" class="form-control" id="inputNombre"
                                                    aria-describedby="nombreHelp" name="txtnombre"
                                                    value="{{ $joven->nombre }}">
                                            </div>

                                            <!-- APELLIDOS -->
                                            <div class="mb-3">
                                                <label for="inputApellidos" class="form-label">Apellidos del
                                                    Joven</label>
                                                <input type="text" class="form-control" id="inputApellidos"
                                                    aria-describedby="apellidosHelp" name="txtapellidos"
                                                    value="{{ $joven->apellidos }}">
                                            </div>


                                            <!-- EDAD -->
                                            <div class="mb-3">
                                                <label for="inputEdad" class="form-label">Edad del Joven</label>
                                                <input type="number" class="form-control" id="inputEdad"
                                                    aria-describedby="edadHelp" name="txtedad"
                                                    value="{{ $joven->edad }}">
                                            </div>


                                            <!-- TELEFONO -->
                                            <div class="mb-3">
                                                <label for="inputTelefono" class="form-label">Teléfono del
                                                    Joven</label>
                                                <input type="text" class="form-control" id="inputTelefono"
                                                    aria-describedby="telefonoHelp" name="txttelefono"
                                                    value="{{ $joven->telefono }}">
                                            </div>


                                            <!-- BARRIOS (LISTA DESPLEGABLE) -->
                                            <div class="mb-3">
                                                <label for="barrio" class="form-label">Barrio</label>
                                                <select class="form-select" id="selectBarrio" name="txtbarrio">
                                                    @foreach (['Alaska', 'Ángeles', 'Buenos Aires', 'Capulín', 'Cerros', 'Condega', 'Corazón de Jesús', 'Curime', 'Choricera', 'Chorotega', 'Gallera', 'Guaria', 'Jícaro', 'La Carreta', 'Llano La Cruz', 'Mocho (Santa Lucía)', 'La Arena', 'Moracia', 'Nazareth', 'Pueblo Nuevo', 'Sabanero', 'San Miguel', 'San Roque', 'Sitio', 'Veinticinco de Julio', 'Victoria', 'Villanueva', 'Caraña', 'Isleta (parte)', 'Juanilama', 'Montañita', 'Paso Tempisque (parte)', 'Pelón de la Bajura', 'Polvazales', 'Roble de Sabana', 'Rodeito', 'Salto (parte)', 'San Benito', 'San Hernán', 'San Lucas', 'Santa Ana', 'Terreros', 'Zanjita'] as $barrio)
                                                        <option value="{{ $barrio }}"
                                                            {{ $joven->barrio == $barrio ? 'selected' : '' }}>
                                                            {{ $barrio }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- BOTONES -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                                <button type="summit" class="btn btn-primary">Modificar</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center ">
                            <h4 class="text-primary m-0 p-2">No hay datos</h4>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- SweetAlert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>

</html>
