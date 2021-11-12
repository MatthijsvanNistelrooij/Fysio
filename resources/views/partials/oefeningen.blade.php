<div class="modal-dialog modal-dialog modal-xl">
    <form action="{{ route('sessies.update', ['id' => $sessies->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf

    <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Foto's:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body mb-3">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <img src="/storage/images/{{ $sessies->image }}" alt="" style="width: 100%">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm">
                                <img src="/storage/images/{{ $sessies->image2 }}" alt="" style="width: 100%">
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm">
                                <img src="/storage/images/{{ $sessies->image3 }}" alt="" style="width: 100%">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm">
                                <img src="/storage/images/{{ $sessies->image4 }}" alt="" style="width: 100%">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <img src="/storage/images/{{ $sessies->image5 }}" alt="" style="width: 100%">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm">
                                <img src="/storage/images/{{ $sessies->image6 }}" alt="" style="width: 100%">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm">
                                <img src="/storage/images/{{ $sessies->image7 }}" alt="" style="width: 100%">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm">
                                <img src="/storage/images/{{ $sessies->image8 }}" alt="" style="width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
