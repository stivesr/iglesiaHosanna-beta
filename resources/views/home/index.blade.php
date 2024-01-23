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
            <div>
                <button type="button"><span></span>HORARIOS</button>
                <a href="https://www.facebook.com/hosanna.igle" target="_blank">
                    <button type="button"><span></span>FACEBOOK</button></a>
            </div>
        </div>
    </div>

    <script>
        const toggleBtn = document.querySelector('.toggle-btn')
        const toggleBtnIcon = document.querySelector('.toggle-btn i')
        const dropDownMenu = document.querySelector('.dropdown-menu')

        toggleBtn.onclick = function() {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen ?
                'fa-solid fa-xmark' :
                'fa-solid fa-bars'
        }
    </script>

</body>

</html>
