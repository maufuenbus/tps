<!-- CABECERA -->

@include("bases/cabecera")
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- CUERPO DE PAGINA -->
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/tps_web2021.png" height="50" alt="tps Logo" loading="lazy" />

            </a>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                <form action="" method="POST">
                @csrf

                    <div class="form-group text-center pt-3">
                        <h1 class="text-light">Bienvenido</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" name="username" class="form-control" placeholder="Ingrese su Usuario">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="password" name="password" class="form-control" placeholder="Ingrese su Contraseña">
                    </div>
                    @error('message')
                    <div class="form-group mx-sm-4 pb-2">
                        <p class="text-warning ">{{$message}}</p>
                    </div>
                    @enderror
                    <div class="form-group mx-sm-4 pb-2">
                        <input type="submit" class="btn btn-block ingresar" value="INGRESAR">
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- FOOTER -->
@include("bases/footer")    

</body>


</html>