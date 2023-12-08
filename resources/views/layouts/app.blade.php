<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Agrega Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        /* Estilo para el menú vertical */
        .vertical-menu {
            width: 200px; /* Ajusta el ancho según tus necesidades */
        }

        .vertical-menu a {
            padding: 10px;
            text-decoration: none;
            color: #000;
            display: block;
        }

        .vertical-menu a:hover {
            background-color: #ddd;
        }
        

        /* Estilo para la barra de navegación superior */
        .navbar-brand img {
            height: 50px;
        }

        .user-menu {
            display: flex;
            align-items: center;
        }
        .submenu {
    display: none;
    padding-left: 20px;
}

.vertical-menu a:hover + .submenu,
.submenu:hover {
    display: block;
}




        .user-menu button {
            margin-left: 10px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <!-- Logo y nombre -->
            <div class="navbar-brand">
                <img src="{{ asset('vendor/adminlte/dist/img/logo.png') }}"alt="Logo">
                <span class="ml-2">Medical+</span>
            </div>

            <!-- Menú de usuario -->
            <div class="user-menu">
                @auth
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="userDropdown">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Cerrar Sesión</button>
                            </form>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-3">
    <div class="row">
        <!-- Menú vertical a la izquierda -->
        <div class="col-md-2">
            <div class="vertical-menu">
                <!-- Menú Consultas -->
                <a href="{{ route('consultas.index') }}">
                    <i class="fas fa-notes-medical"></i> Cargar mis consultas
                </a>
                <!-- Submenú de Consultas -->
                <div class="submenu">
                    <a href="{{ route('consultas.create') }}">
                        <i class="fas fa-plus"></i> Crear Consulta
                    </a>
                    <!-- Otros submenús si es necesario -->
                </div>
            </div>
        </div>
    </div>
</div>


            <!-- Contenido principal -->
            <div class="col-md-10">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
