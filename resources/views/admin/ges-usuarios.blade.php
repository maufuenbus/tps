
@include("bases/cabecera")

<body>
@include("bases/header-admin")
<div class=" d-sm-flex d-sm-block mx-sm-4 justify-content-center">
    <!-- Modal Registra -->
    @include("modal-ges-user/registra")

</div>

<!-- GRILLA LISTADO USUARIOS -->
<div class="d-sm-flex d-sm-block justify-content-center table-responsive">
    @include("modal-ges-user/listar")
</div>



</body>
@include("bases/footer")
