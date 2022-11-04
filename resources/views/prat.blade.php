@include('bases/cabecera')
@include('bases/header-prat')


<div class="justify-content-center">
    <div class="d-flex">
        @include('modal-ges-vehiculo/modif')
    </div>
    <div>
        @include('modal-ges-vehiculo/reg-salida')
    </div>
</div>


@include('bases/footer')