<div class="btn-reg-ges">
    <button type="button" class="btn btn-primary " data-mdb-toggle="modal" data-mdb-target="#ingreso-veh">Registrar Salida</button>
</div>

<!-- Modal Registra-->
<div class="modal fade" id="ingreso-veh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar Salida</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- CONTENIDO MODAL -->
                <!-- BOTON BUSCAR -->
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" name="patente-bus" id="form3Example1" class="form-control" required/>
                            <label  class="form-label" for="form3Example1" >Patente</label>
                        </div>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-primary">Buscar</button>
                    </div>
                </div>
            </div> 
            <!-- TABLA -->
                <form action="" method="get">
                    <table class="table sm-4 ">
                        <thead>
                            <tr><th scope="row">Nombre:       </th><td>Ricardo       </td></tr>
                            <tr><th scope="row">Apellido:     </th><td>Gonzales      </td></tr>
                            <tr><th scope="row">Rut:          </th><td>23.587.456-8  </td></tr>
                            <tr><th scope="row">Patente:      </th><td>CDSQ34        </td></tr>
                            <tr><th scope="row">N° est.:      </th><td>5             </td></tr>
                            <tr><th scope="row">Hora Salida:  </th><td>20:30         </td></tr>
                        </thead>

                    </table>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary  btn-block">Registrar Salida</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>