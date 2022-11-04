<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<table class="table mx-sm-4 tabla-lis ">
    <thead>
        <tr>
            <th scope="col">Nombre   </th>
            <th scope="col">Apellido </th>
            <th scope="col">Usuario  </th>
            <th scope="col">Rut      </th>
            <th scope="col">Rol      </th>
            <th scope="col">Acción   </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name      }}</td>
            <td>{{ $user->apellidop }}</td>
            <td>{{ $user->username  }}</td>
            <td>{{ $user->rut       }}</td>
            <td>{{ $user->role      }}</td>
            <td>
                <a  href="{{ route('ges-usuarios-edit', ['id' => $user->id]) }}" 
                    data-toggle="modal"
                    data-target="#editarModal{{ $user->id }}" 
                    class="btn btn-warning">Edit
                </a>
<!-- MODIFICAR REGISTRO MODAL -->
@include('modal-ges-user/modificar')
                <button type="submit" class="btn btn-danger" 
                        data-mdb-toggle="modal" 
                        data-mdb-target="#exampleModal-elim"
                        data-id="{{ $user->id }}">Delete
                </button>
            </td> 
        </tr>
        @endforeach
    </tbody>
</table>



<!-- ELIMINAR REGISTRO MODAL -->
@include('modal-ges-user/elimina')


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
