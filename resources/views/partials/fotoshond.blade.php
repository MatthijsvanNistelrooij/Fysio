<div class="modal-dialog modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLongTitle">Foto's:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>

        <div class="modal-body mb-3" style="padding: 2%">
            <div>
                <form action="{{ route('dog.update', ['id' => $dogs->id]) }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="row p-4">
                        <div class="col-md-3">
                            <img src="/storage/images/{{ $dogs->image }}" alt="" style="width: 100%; height: auto; min-height: 160px">1
                            <input type="file" class="form-control mb-2 mt-2" name="image" value="{{ $dogs->image }}">

                            <img src="/storage/images/{{ $dogs->image5}}" alt="" style="width: 100%; height: auto; min-height: 160px">5
                            <input type="file" class="form-control mb-2 mt-2" name="image5" value="{{ $dogs->image5 }}">
                        </div>
                        <div class="col-md-3">
                            <img src="/storage/images/{{ $dogs->image2 }}" alt="" style="width: 100%; height: auto; min-height: 160px">2
                            <input type="file" class="form-control mb-2 mt-2" name="image2" value="{{ $dogs->image2 }}">

                            <img src="/storage/images/{{ $dogs->image6 }}" alt="" style="width: 100%; height: auto; min-height: 160px">6
                            <input type="file" class="form-control mb-2 mt-2" name="image6" value="{{ $dogs->image6 }}">
                        </div>

                        <div class="col-md-3">
                            <img src="/storage/images/{{ $dogs->image3 }}" alt="" style="width: 100%; height: auto; min-height: 160px">3
                            <input type="file" class="form-control mb-2 mt-2" name="image3" value="{{ $dogs->image3 }}">

                            <img src="/storage/images/{{ $dogs->image7 }}" alt="" style="width: 100%; height: auto; min-height: 160px">7
                            <input type="file" class="form-control mb-2 mt-2" name="image7" value="{{ $dogs->image7 }}">
                        </div>
                        <div class="col-md-3">
                            <img src="/storage/images/{{ $dogs->image4 }}" alt="" style="width: 100%; height: auto; min-height: 160px">4
                            <input type="file" class="form-control mb-2 mt-2" name="image4" value="{{ $dogs->image4 }}">

                            <img src="/storage/images/{{ $dogs->image8 }}" alt="" style="width: 100%; height: auto; min-height: 160px">8
                            <input type="file" class="form-control mb-2 mt-2" name="image8" value="{{ $dogs->image8 }}">
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-outline-success mt-2 mr-3" type="submit" style="float: right">
                <i class="fas fa-check"></i>
                Opslaan</button>

            <div class="inputs">
                <input type="text" name="content1" value="{{ $dogs->content1 }}">
                <input type="text" name="content2" value="{{ $dogs->content2 }}">
                <input type="text" name="content3" value="{{ $dogs->content3 }}">
                <input type="text" name="content4" value="{{ $dogs->content4 }}">
                <input type="text" name="content5" value="{{ $dogs->content5 }}">
                <input type="text" name="content6" value="{{ $dogs->content6 }}">
                <input type="text" name="content7" value="{{ $dogs->content7 }}">
                <input type="text" name="content8" value="{{ $dogs->content8 }}">
                <input type="text" name="content9" value="{{ $dogs->content9 }}">
                <input type="text" name="content10" value="{{ $dogs->content10 }}">
                <input type="text" name="content11" value="{{ $dogs->content11 }}">
                <input type="text" name="content12" value="{{ $dogs->content12 }}">
                <input type="text" name="content13" value="{{ $dogs->content13 }}">
                <input type="text" name="content14" value="{{ $dogs->content14 }}">
                <input type="text" name="content15" value="{{ $dogs->content15 }}">
            </div>

        </form>
    </div>
</div>
</div>
</div>
