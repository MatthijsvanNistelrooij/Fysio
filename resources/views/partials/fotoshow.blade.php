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
                <form action="{{ route('horses.update', ['id' => $horses->id]) }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="row p-4">
                        <div class="col-md-3">
                            <img src="/storage/images/{{ $horses->image }}" alt="" style="width: 100%; height: auto; min-height: 160px">1
                            <input type="file" class="form-control mb-2 mt-2" name="image" value="{{ $horses->image }}">

                            <img src="/storage/images/{{ $horses->image5}}" alt="" style="width: 100%; height: auto; min-height: 160px">5
                            <input type="file" class="form-control mb-2 mt-2" name="image5" value="{{ $horses->image5 }}">
                        </div>
                        <div class="col-md-3">
                            <img src="/storage/images/{{ $horses->image2 }}" alt="" style="width: 100%; height: auto; min-height: 160px">2
                            <input type="file" class="form-control mb-2 mt-2" name="image2" value="{{ $horses->image2 }}">

                            <img src="/storage/images/{{ $horses->image6 }}" alt="" style="width: 100%; height: auto; min-height: 160px">6
                            <input type="file" class="form-control mb-2 mt-2" name="image6" value="{{ $horses->image6 }}">
                        </div>

                        <div class="col-md-3">
                            <img src="/storage/images/{{ $horses->image3 }}" alt="" style="width: 100%; height: auto; min-height: 160px">3
                            <input type="file" class="form-control mb-2 mt-2" name="image3" value="{{ $horses->image3 }}">

                            <img src="/storage/images/{{ $horses->image7 }}" alt="" style="width: 100%; height: auto; min-height: 160px">7
                            <input type="file" class="form-control mb-2 mt-2" name="image7" value="{{ $horses->image7 }}">
                        </div>
                        <div class="col-md-3">
                            <img src="/storage/images/{{ $horses->image4 }}" alt="" style="width: 100%; height: auto; min-height: 160px">4
                            <input type="file" class="form-control mb-2 mt-2" name="image4" value="{{ $horses->image4 }}">

                            <img src="/storage/images/{{ $horses->image8 }}" alt="" style="width: 100%; height: auto; min-height: 160px">8
                            <input type="file" class="form-control mb-2 mt-2" name="image8" value="{{ $horses->image8 }}">
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-info mt-2 mr-3" type="submit" style="float: right">
                <i class="fas fa-check"></i>
                Opslaan</button>

            <div class="inputs">
                <input type="text" name="content1" value="{{ $horses->content1 }}">
                <input type="text" name="content2" value="{{ $horses->content2 }}">
                <input type="text" name="content3" value="{{ $horses->content3 }}">
                <input type="text" name="content4" value="{{ $horses->content4 }}">
                <input type="text" name="content5" value="{{ $horses->content5 }}">
                <input type="text" name="content6" value="{{ $horses->content6 }}">
                <input type="text" name="content7" value="{{ $horses->content7 }}">
                <input type="text" name="content8" value="{{ $horses->content8 }}">
                <input type="text" name="content9" value="{{ $horses->content9 }}">
                <input type="text" name="content10" value="{{ $horses->content10 }}">
                <input type="text" name="content11" value="{{ $horses->content11 }}">
                <input type="text" name="content12" value="{{ $horses->content12 }}">
                <input type="text" name="content13" value="{{ $horses->content13 }}">
                <input type="text" name="content14" value="{{ $horses->content14 }}">
                <input type="text" name="content15" value="{{ $horses->content15 }}">
            </div>

        </form>
    </div>
</div>
</div>
</div>
