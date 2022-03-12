<div class="modal-dialog modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Info:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body mb-3" style="padding-top: 2%; padding-left: 5%">
            <div class="row">
                <div class="col">
                    <p>Naam:</p>
                    <p>Eigenaar:</p>
                    <p>Geslacht:</p>
                    <p>Leeftijd:</p>
                    <p>Ras:</p>
                    <p>Kleur:</p>
                    <p>Alternatief adres:</p>
                </div>
                <div class="col">
                    <p style="min-height: 24px;">{{ $horses->content1 }}</p>
                    <p style="min-height: 24px;">{{ $horses->content2 }}</p>
                    <p style="min-height: 24px;">{{ $horses->content3 }}</p>
                    <p style="min-height: 24px;">{{ $horses->content4 }}</p>

                    <p style="min-height: 24px;">{{ $horses->content5 }}</p>
                    <p style="min-height: 24px;">{{ $horses->content6 }}</p>
                    <p style="min-height: 24px;">{{ $horses->content7 }}</p>
                </div>
            </div>
    </div>
</div>
</div>
