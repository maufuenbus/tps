
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
<!-- CSS -->


<div class="modal fade" 
    id="editarModal{{ $user->id }}" tabindex="-1" 
    aria-labelledby="ModalLabel-mod" aria-hidden="true">
    
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel-mod">Editar Usuario</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body" >
                
                <!-- CONTENIDO MODAL MODIFICAR-->
                <form action={{ route('ges-usuarios-update', $user->id) }} method="POST">
                    @csrf @method('PATCH')
                    
                    <!-- Nombre y Apellido input -->
                    <div class="row mb-4">
                        <!-- Nombre input -->
                        <div class="col">
                            <div class="">
                                <input type="name" name="name" id="form3Example1" class="form-control" value="{{ $user->name }}" required/>
                                <label  class="form-label" for="form3Example1" >Nombre</label>
                            </div>
                        </div>
                        <!-- apellido input -->
                        <div class="col">
                            
                            <div class="">
                                <input type="apellidop" name="apellidop" id="form3Example2" class="form-control" value="{{ $user->apellidop }}" required/>
                                <label class="form-label" for="form3Example2">Apellido</label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- User input -->
                    <div class=" mb-4">
                        <input type="username" name="username" id="form3Example3" class="form-control" value="{{ $user->username }}" required/>
                        <label class="form-label" for="form3Example3">Usuario</label>
                    </div>

                    <!-- Rut input -->
                    <div class=" mb-4">
                        <input type="rut" name="rut" id="form3Example4" class="form-control" value="{{ $user->rut }}" required/>
                        <label class="form-label" for="form3Example4">Rut</label>
                    </div>

                    <!-- Password input -->
                    <div class=" mb-4">
                        <input type="password" name="password" id="form3Example5" class="form-control" required/>
                        <label class="form-label" for="form3Example5">Password</label>
                    </div>

                    <!-- Rol input -->
                    <div class="mb-4">
                        <label class="form-label" for="form3Example6">Rol</label>
                        <select class="form-label" name="role" id='form3Example6' value="{{ $user->role }}" onchange="combo(this,'role')">
                            <option value="0">----------</option>
                            <option value="operador">Operador</option>
                            <option value="Administrador">Administrador</option>
                        </select>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>

