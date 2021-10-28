<div class="modal-dialog modal-dialog modal-lg" role="document">
    <div class="modal-content" style="background-color: rgb(112, 112, 112)">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white"> Verwijder invoer:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>

        <div class="modal-body mb-3" style="padding: 15%; text-align: center; ">
            <h2 style="color: white">Wil je deze invoer verwijderen?</h2>
            @if($horses->count() > 0)
            <a href="{{ route('horses.delete', ['id' => $horse->id])}}" style="color: rgb(255, 124, 124); text-decoration: none; font-size: 25px">JA, VERWIJDER</a>
             @endif
        </div>
    </div>
    </div>

