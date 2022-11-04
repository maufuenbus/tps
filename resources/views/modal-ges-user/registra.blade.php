<div class="btn-reg-ges">
    <button type="button" class="btn btn-primary " data-mdb-toggle="modal" data-mdb-target="#exampleModal-reg">Registrar Usuario</button>
</div>

<!-- Modal Registra-->
<div class="modal fade" 
id="exampleModal-reg" tabindex="-1" 
aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar Usuario</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <!-- CONTENIDO MODAL -->
                <form method="POST">
                @csrf
                    <!-- Nombre input -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="name" name="name" id="form3Example1" class="form-control" required/>
                                <label  class="form-label" for="form3Example1" >Nombre</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="apellidop" name="apellidop" id="form3Example2" class="form-control" required/>
                                <label class="form-label" for="form3Example2">Apellido</label>
                            </div>
                        </div>
                    </div>                 
                    <!-- User input -->
                    <div class="form-outline mb-4">
                        <input type="username" name="username" id="form3Example3" class="form-control" required/>
                        <label class="form-label" for="form3Example3">Usuario</label>
                    </div>
                    <!-- Rut input -->
                    <div class="form-outline mb-4">
                        <input type="rut" name="rut" id="form3Example4" class="form-control" required/>
                        <label class="form-label" for="form3Example4">Rut</label>
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password" id="form3Example6" class="form-control" required/>
                        <label class="form-label" for="form3Example4">Password</label>
                    </div>
                    <!-- Rol input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example6">Rol</label>
                        <select class="form-label" name="role" id='form3Example6' onchange="combo(this,'role')">
                            <option value="0">----------</option>
                            <option value="operador">Operador</option>
                            <option value="Administrador">Administrador</option>
                        </select>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Registrar</button>
                    @error('message')
                        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
                    @enderror
                </form>
            </div>
        </div>
    </div>
</div>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>