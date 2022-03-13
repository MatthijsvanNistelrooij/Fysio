<div class="modal-dialog modal-dialog modal-xl"  role="document">


    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Info:</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <form action="{{ route('horses.update', ['id' =>$horses->id ]) }}" method="POST" enctype="multipart/form-data">
    @csrf


    <div class="modal-body mb-3" style="padding: 10%; padding-top: 4%; padding-bottom: 4%">
        <div class="form-group">
            <div class="row">
                <div class="col-md-2">
                    <h6 for="lateral" class="title1" >Naam:</h6>
                </div>
                <div class="col-md-10">
                    <input type="text" name="content1" class="form-control mt-1" value="{{ $horses->content1 }}" placeholder="...">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <h6 for="lateral" class="title1" >Geslacht:</h6>
                </div>
                <div class="col-md-10">
                    <select name="content3" id="" class="form-select mt-1">
                        <option value="{{ $horses->content3 }}" selected>{{ $horses->content3 }}</option>
                        <option value="hengst">hengst</option>
                        <option value="merrie">merrie</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <h6 for="lateral" class="title1" >Leeftijd:</h6>
                </div>
                    <div class="col-md-10">
                        <input type="number" id="quantity" name="content4" min="0" max="99" class="form-control mt-1" value="{{ $horses->content4 }}">
                    </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <h6 for="lateral" class="title1" >Ras:</h6>
                </div>
                <div class="col-md-10">

                    <input type="text" name="content5" class="form-control mt-1" placeholder="..." value="{{ $horses->content5 }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <h6 for="lateral" class="title1" >Kleur:</h6>
                </div>
                <div class="col-md-10">
                    <input type="text" name="content6" class="form-control mt-1" placeholder="..." value="{{ $horses->content6 }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 mb-4">
                    <h6 for="lateral" class="title1" >Alternatief Adres:</h6>
                </div>
                <div class="col-md-10">
                    <input type="text" name="content7" class="form-control mt-1" placeholder="..." value="{{ $horses->content7 }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <h6 for="lateral" class="title1" >Eigenaar:</h6>
                </div>
                <div class="col-md-10">
                    <input type="text" name="content2" class="form-control mt-1" placeholder="..." value="{{ $horses->content2 }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <h6 for="lateral" class="title1" >Achternaam:</h6>
                </div>
                <div class="col-md-10">
                    <input type="text" name="content8" class="form-control mt-1" placeholder="..." value="{{ $horses->content8 }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <h6 for="lateral" class="title1" >Adres:</h6>
                </div>

                <div class="col-md-10">
                    <input type="text" name="content9" class="form-control mt-1" placeholder="..." value="{{ $horses->content9 }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <h6 for="lateral" class="title1" >Postcode:</h6>
                </div>
                <div class="col-md-10">
                    <input type="text" name="content10" class="form-control mt-1"  placeholder="..."value="{{ $horses->content10 }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <h6 for="lateral" class="title1" >Tel.:</h6>
                </div>
                <div class="col-md-10">
                    <input type="text" name="content11" class="form-control mt-1"  placeholder="..."value="{{ $horses->content11 }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 mb-2">
                    <h6 for="lateral" class="title1" >Email:</h6>
                </div>
                <div class="col-md-10">
                    <input type="text" name="content12" class="form-control mt-1"  placeholder="..."value="{{ $horses->content12 }}">
                </div>
            </div>
        </div>

            <div class="inputs">
                <input type="text" name="content13" value="{{ $horses->content13 }}">
                <input type="text" name="content14" value="{{ $horses->content14 }}">
                <input type="text" name="content15" value="{{ $horses->content15 }}">
            </div>

                <button type="submit" class="btn btn-outline-success" style="float: right">
                    <i class="fas fa-check"></i>
                    Opslaan
                </button>
                <br>
            </form>
        </div>
    </div>
</div>
</div>
</div>


