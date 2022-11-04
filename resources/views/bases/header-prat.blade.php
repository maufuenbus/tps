<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
<!-- CSS -->


<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="prat">
                    <img src="img/tps_web2021.png" height="50" alt="tps Logo" loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="prat">Gestion Estacionamiento</a>
                    </li>
                    @if(Auth::check() && Auth::user()->role == "admin")
                    <li class="nav-item">
                        <a class="nav-link" href="ges-usuarios">Gestion Usuarios</a>
                    </li>
                    @endcan
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index">Volver</a>
                    </li>
                </ul>
            </div>

            <div class="dropdown">
                <div class="">
                    <li class="" style="list-style-type: none;">
                        <a class="" href="#">Cerrar Sesion</a>
                    </li>

                </div>
            </div>
        </div>
    </nav> 
</header>
<!-- NOMBRE USUARIO CONECTADO -->
<div class="bg-white text-center">
    <p class="text-xl ml-15px-fr">Bienvenido: <b> {{auth()->user()->name.' '.auth()->user()->apellidop}}</b></p>
</div>


