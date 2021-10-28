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

                        <div class="d-flex justify-content-end">
                            <button class="btn btn-info mt-4" style="color: white" type="submit">
                                <i class="fas fa-check"></i>
                                Opslaan</button>
                            </div>
                            <div class="inputs">
                                <input type="text" class="form-control" name="content3">
                                <input type="text" class="form-control" name="content4">
                                <input type="text" class="form-control" name="content5">
                                <input type="text" class="form-control" name="content6">
                                <input type="text" class="form-control" name="content7">
                                <input type="text" class="form-control" name="content8">
                                <input type="text" class="form-control" name="content9">
                                <input type="text" class="form-control" name="content10">
                                <input type="text" class="form-control" name="content11">
                                <input type="text" class="form-control" name="content12">
                                <input type="text" class="form-control" name="content13">
                                <input type="text" class="form-control" name="content14">
                                <input type="text" class="form-control" name="content15">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
