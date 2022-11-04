<!-- REVISAR ESTO -->
{{ $users->links() }}
    @if (\Session::has('destroy'))
        <div class="alert alert-danger">
            <p>{{ \Session::get('destroy') }}</p>
        </div>
    @endif

<!-- ELIMINAR USUARIO -->
<div class="modal fade" id="exampleModal-elim" tabindex="-1" aria-labelledby="exampleModalLabel-elim" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-elim">Eliminar Usuario</h5>
            </div>
            <div class="modal-body">
                <!-- CONTENIDO MODAL -->
                    <div class="modal-body">
                        <p>¿Desea eliminar el usuario?</p>
                    </div>

                    <form action="{{ route('ges-usuarios-destroy', [$user->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <!-- Submit button -->
                    <button type="button" class="btn btn-warning" data-mdb-dismiss="modal" aria-label="Close">Cancelar</button>
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!--=============Modal Confirmación=============-->
<script>
    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Se va a eliminar el registro: ' + id)
    })
</script>



<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>