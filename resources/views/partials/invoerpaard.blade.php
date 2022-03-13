<div class="modal-dialog modal-dialog modal-lg" role="document">

    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nieuwe Invoer:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mb-3">
            <div class="card-body" style="padding: 5%">
                        <form action="{{ route('horse.store') }}" method="POST">
                        @csrf
                        <label for="content" class="mt-2">Naam paard:</label>
                        <input type="text" class="form-control" name="content1" placeholder="...">
                        <label for="content" class="mt-2">Eigenaar:</label>
                        <input type="text" class="form-control" name="content2" placeholder="...">
                        <p>

                            <button class="btn outline-light mt-2" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                              <i class="fas fa-info-circle" style="color: rgb(89, 127, 132); font-size: 25px"> </i>
                            </button>
                          </p>
                          <div class="collapse" id="collapseExample">

                            <div class="row">
                                <div class="col-md-2">
                                    <h6 for="lateral" class="title1">Geslacht:</h6>
                                </div>
                                <div class="col-md-10">
                                    <select name="content3" id="" class="form-select mt-1">
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
                                        <input type="number" id="quantity" name="content4" min="0" max="99" class="form-control mt-1">
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <h6 for="lateral" class="title1" >Ras:</h6>
                                </div>
                                <div class="col-md-10">

                                    <input type="text" name="content5" class="form-control mt-1" placeholder="...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h6 for="lateral" class="title1" >Kleur:</h6>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="content6" class="form-control mt-1" placeholder="...">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <h6 for="lateral" class="title1" >Alternatief Adres:</h6>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="content7" class="form-control mt-1" placeholder="...">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <h6 for="lateral" class="title1" >Achternaam:</h6>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="content8" class="form-control mt-1" placeholder="...">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <h6 for="lateral" class="title1" >Adres:</h6>
                                </div>

                                <div class="col-md-10">
                                    <input type="text" name="content9" class="form-control mt-1" placeholder="...">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <h6 for="lateral" class="title1" >Postcode:</h6>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="content10" class="form-control mt-1"  placeholder="...">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <h6 for="lateral" class="title1" >Tel.:</h6>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="content11" class="form-control mt-1"  placeholder="...">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 mb-2">
                                    <h6 for="lateral" class="title1" >Email:</h6>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="content12" class="form-control mt-1"  placeholder="...">
                                </div>
                            </div>
                        </div>

                            <div class="inputs">
                                <input type="text" name="content13" >
                                <input type="text" name="content14" >
                                <input type="text" name="content15" >
                            </div>

                        <div class="d-flex justify-content-end">
                            <button class="btn btn-outline-success mt-4" type="submit">
                                <i class="fas fa-check"></i>
                                Opslaan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
