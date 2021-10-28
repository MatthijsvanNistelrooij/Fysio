
<div class="modal-dialog modal-dialog modal-xl"  role="document">
    <form action="{{ route('dog.update', ['id' =>$dogs->id ]) }}" method="POST" enctype="multipart/form-data">
        @csrf

    <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Situatie:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>

        <div class="modal-body mb-3" style="padding-top: 1%">
            <label for="" class="title1" >Situatie:</label>
            <div class="info"><h6><i class="far fa-question-circle"></i> Hoe lang in bezit eigenaar? / Voorgeschiedenis ?</h6></div>
            <textarea name="content13" id="" cols="5" rows="3" class="form-control" placeholder="...">{{ $dogs->content13 }}</textarea>
            <label for="" class="title1">Klacht:</label>
            <div class="info"><h6><i class="far fa-question-circle"></i> Verloop / huidige status / ++ / --</h6></div>
            <textarea name="content14" id="" cols="5" rows="3" class="form-control" placeholder="...">{{ $dogs->content14 }}</textarea>
            <label for="" class="title1">Verandering:</label>
            <div class="info"><h6><i class="far fa-question-circle"></i> Veranderingen / uiterlijk / gedrag / medicijnen / overig</h6></div>
            <textarea name="content15" id="" cols="5" rows="3" class="form-control" placeholder="...">{{ $dogs->content15 }}</textarea>

    </div>
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

    </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-info" style="color: white">
            <i class="fas fa-check"></i>
            Opslaan
        </button>
    </form>
</div>

