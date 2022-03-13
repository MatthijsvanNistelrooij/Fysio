<div class="modal-dialog modal-dialog modal-xl"  role="document">


<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">Info:</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form action="{{ route('dog.update', ['id' =>$dogs->id ]) }}" method="POST" enctype="multipart/form-data">
@csrf


<div class="modal-body mb-3" style="padding: 4%; padding-top: 1%">
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <div class="row">

                    <div class="col-md-12">
                        <h6 for="lateral" class="title1">Naam:</h6>
                        <input type="text" name="content1" class="form-control mt-1" value="{{ $dogs->content1 }}" placeholder="...">
                    </div>

                    <div class="col-md-12">
                        <h6 for="lateral" class="title1">Geslacht:</h6>
                        <select name="content3" id="" class="form-select mt-1">
                            <option value="{{ $dogs->content3 }}" selected>{{ $dogs->content3 }}</option>
                            <option value="reu">reu</option>
                            <option value="teef">teef</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <h6 for="lateral" class="title1">Leeftijd:</h6>
                        <input type="text" name="content4" class="form-control mt-1" placeholder="..." value="{{ $dogs->content4 }}">
                    </div>

                    <div class="col-md-12">
                        <h6 for="lateral" class="title1">Ras:</h6>
                        <input type="text" name="content5" class="form-control mt-1" placeholder="..." value="{{ $dogs->content5 }}">
                    </div>
                    <div class="col-md-12">
                        <h6 for="lateral" class="title1">Kleur:</h6>
                        <input type="text" name="content6" class="form-control mt-1" placeholder="..." value="{{ $dogs->content6 }}">
                    </div>
                    <div class="col-md-12 mb-4">
                        <h6 for="lateral" class="title1">Alternatief Adres:</h6>
                        <input type="text" name="content7" class="form-control mt-1" placeholder="..." value="{{ $dogs->content7 }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h6 for="lateral" class="title1">Eigenaar:</h6>
                        <input type="text" name="content2" class="form-control mt-1" placeholder="..." value="{{ $dogs->content2 }}">
                    </div>

                    <div class="col-md-12">
                        <h6 for="lateral" class="title1">Achternaam:</h6>
                        <input type="text" name="content8" class="form-control mt-1" placeholder="..." value="{{ $dogs->content8 }}">
                    </div>

                    <div class="col-md-12">
                        <h6 for="lateral" class="title1">Adres:</h6>
                        <input type="text" name="content9" class="form-control mt-1" placeholder="..." value="{{ $dogs->content9 }}">
                    </div>

                    <div class="col-md-12">
                        <h6 for="lateral" class="title1">Postcode:</h6>
                        <input type="text" name="content10" class="form-control mt-1"  placeholder="..."value="{{ $dogs->content10 }}">
                    </div>

                    <div class="col-md-12">
                        <h6 for="lateral" class="title1">Tel.:</h6>
                        <input type="text" name="content11" class="form-control mt-1"  placeholder="..."value="{{ $dogs->content11 }}">
                    </div>

                    <div class="col-md-12">
                        <h6 for="lateral" class="title1">Email:</h6>
                        <input type="text" name="content12" class="form-control mt-1"  placeholder="..."value="{{ $dogs->content12 }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="inputs">
            <input type="text" name="content13" value="{{ $dogs->content13 }}">
            <input type="text" name="content14" value="{{ $dogs->content14 }}">
            <input type="text" name="content15" value="{{ $dogs->content15 }}">
        </div>
            <button type="submit" class="btn btn-outline-success" style="float: right">
                <i class="fas fa-check"></i>
                Opslaan
            </button>
        </form>
    </div>
</div>


