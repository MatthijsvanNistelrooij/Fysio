<div class="modal-dialog modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nieuw Consult:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('sessies.store', $horses->id) }}" method="POST">
            @csrf

            <div class="modal-body mb-3" style="padding-bottom: 10%; padding-top: 10%">
                <select id="" name="con1" class="form-select mb-2">
                    <option value="Fysioth. Behandeling">Fysiotherapeutische Behandeling</option>
                    <option value="Laser Behandeling">Laser Behandeling</option>
                </select>
                <input type="text" name="con2" id="" class="form-control" placeholder="Info..">


                    <button type="submit" class="btn btn-info mt-2" style="color: white; float: right"><i class="fas fa-check"></i>Opslaan</button>

                </form>
            </div>
        </div>
    </div>
</div>
