<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/usercontrol_style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="menu-dashboard">

        <div class="top-menu">
            <div class="logo">
                <img src="{{ asset('/images/png/Hosanna_H.png') }}" alt="Hosanna">
                <span>Hosanna</span>
            </div>
            <div class="toggle">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="menu">
            <div class="enlace">
                <i class="fa-solid fa-folder"></i>
                <span>Información</span>
            </div>

            <div class="enlace">
                <i class="fa-solid fa-users"></i>
                <span>Personas</span>
            </div>

            <div class="enlace" id="logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Salir</span>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/usercontrol_.js') }}"></script>

</body>

</html>
