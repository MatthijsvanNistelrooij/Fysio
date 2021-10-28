<div class="modal-dialog modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Contact:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mb-3" style="padding-top: 2%; padding-left: 5%">
            <div class="row">
                <div class="col">
                    <p>Eigenaar:</p>
                    <p>Achternaam:</p>
                    <p>Adres:</p>
                    <p>Postcode:</p>
                    <p>Tel.:</p>
                    <p>Email:</p>
                </div>
                <div class="col">
                    <p style="min-height: 24px;">{{ $horses->content2 }}</p>
                    <p style="min-height: 24px;">{{ $horses->content8 }}</p>
                    <p style="min-height: 24px;">{{ $horses->content9 }}</p>
                    <p style="min-height: 24px;">{{ $horses->content10 }}</p>
                    <p style="min-height: 24px;">{{ $horses->content11 }}</p>
                    <p style="min-height: 24px;">{{ $horses->content12 }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
