
<div class="modal-dialog modal-dialog modal-xl"  role="document">
    <form action="{{ route('horses.update', ['id' =>$horses->id ]) }}" method="POST" enctype="multipart/form-data">
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
            <div class="info"><h6><i class="far fa-question-circle"></i> Huisvesting & ondergrond / Hoe lang in bezit eigenaar? / Aankoopkeuring? / Voorgeschiedenis ( dracht / hengstigheid)</h6></div>
            <textarea name="content13" id="" cols="5" rows="3" class="form-control" placeholder="...">{{ $horses->content13 }}</textarea>
            <label for="" class="title1">Klacht:</label>
            <div class="info"><h6><i class="far fa-question-circle"></i> Verloop / huidige status / ++ / --</h6></div>
            <textarea name="content14" id="" cols="5" rows="3" class="form-control" placeholder="...">{{ $horses->content14 }}</textarea>
            <label for="" class="title1">Verandering:</label>
            <div class="info"><h6><i class="far fa-question-circle"></i> Veranderingen / uiterlijk / gedrag / mesten / urineren / voeding / hoeven / tanden / harnachement / medicijnen / overig</h6></div>
            <textarea name="content15" id="" cols="5" rows="3" class="form-control" placeholder="...">{{ $horses->content15 }}</textarea>

    </div>
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

    </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-info" style="color: white">
            <i class="fas fa-check"></i>
            Opslaan
        </button>
    </form>
</div>

