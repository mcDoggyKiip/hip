
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal">
        <i class="fa fa-edit"></i> Wijzig
    </button>

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Wijzigen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Weet je zeker dat je dit item wilt wijzigen?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuleren</button>
                    <form action="{{ route(View::getSection('upRoute', 0), $id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success">Wijzig</button>
                    </form>

                </div>
            </div>
        </div>
    </div>