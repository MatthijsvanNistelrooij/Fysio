<div class="modal-dialog modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Foto's toevoegen:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>

        <div class="modal-body mb-3" style="padding: 2%">
            <div>
                <form action="{{ route('horses.update', ['id' => $horses->id]) }}" method="POST" enctype="multipart/form-data">

                    @csrf


                            <table class="table" style="border: none">
                                <thead>
                                    <tr style="border:1px solid white">

                                        <th scope="col" style="border: 1px solid white; text-align: center"><i class="fas fa-hashtag"
                                            style="color: gray; border: 1px solid rgb(255, 255, 255); border-radius: 50%; padding: 15px; "></i></th>
                                            <th scope="col" style="border: 1px solid white; text-align: left"><i class="far fa-image"
                                            style="color: gray; border: 1px solid rgb(255, 255, 255); border-radius: 50%; padding: 15px;  box-shadow: 0px 3px 15px rgba(0,0,0,0.2);"></i></th>
                                            <th scope="col" style="border: 1px solid white; text-align: center"><i class="fas fa-search"
                                            style="color: gray; border: 1px solid rgb(255, 255, 255); border-radius: 50%; padding: 15px;  box-shadow: 0px 3px 15px rgba(0,0,0,0.2);"></i></th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <tr style="border:1px solid white">
                                        <td style="color: gray; text-align: center">1</td>

                                        <td style="width: 85%"><input type="file" name="image" id="" class="form-control mb-2" value="{{ $horses->image }}"></td>
                                        <td><img src="/storage/images/{{ $horses->image }}" alt="" style="width: 100%"></td>
                                    </tr>
                                    <tr style="border:1px solid white">
                                        <td style="color: gray; text-align: center">2</td>

                                        <td style="width: 85%"><input type="file" name="image2" id="" class="form-control mb-2" value="{{ $horses->image2 }}"></td>
                                        <td><img src="/storage/images/{{ $horses->image2 }}" alt="" style="width: 100%"></td>
                                    </tr>
                                    <tr style="border:1px solid white">
                                        <td style="color: gray; text-align: center">3</td>

                                        <td style="width: 85%"><input type="file" name="image3" id="" class="form-control mb-2" value="{{ $horses->image3 }}"></td>
                                        <td><img src="/storage/images/{{ $horses->image3 }}" alt="" style="width: 100%"></td>
                                    </tr>
                                    <tr style="border:1px solid white">
                                        <td style="color: gray; text-align: center">4</td>

                                        <td style="width: 85%"><input type="file" name="image4" id="" class="form-control mb-2" value="{{ $horses->image4 }}"></td>
                                        <td><img src="/storage/images/{{ $horses->image4 }}" alt="" style="width: 100%"></td>
                                    </tr>

                                    <tr style="border:1px solid white">
                                        <td style="color: gray; text-align: center">5</td>

                                        <td style="width: 85%"><input type="file" name="image5" id="" class="form-control mb-2" value="{{ $horses->image4 }}"></td>
                                        <td><img src="/storage/images/{{ $horses->image5 }}" alt="" style="width: 100%"></td>
                                    </tr>
                                    <tr style="border:1px solid white">
                                        <td style="color: gray; text-align: center">6</td>

                                        <td style="width: 85%"><input type="file" name="image6" id="" class="form-control mb-2" value="{{ $horses->image6 }}"></td>
                                        <td><img src="/storage/images/{{ $horses->image6 }}" alt="" style="width: 100%"></td>
                                    </tr>
                                    <tr style="border:1px solid white">
                                        <td style="color: gray; text-align: center">7</td>

                                        <td style="width: 85%"><input type="file" name="image7" id="" class="form-control mb-2" value="{{ $horses->image7 }}"></td>
                                        <td><img src="/storage/images/{{ $horses->image7 }}" alt="" style="width: 100%"></td>
                                    </tr>
                                    <tr style="border:1px solid white">
                                        <td style="color: gray; text-align: center">8</td>

                                        <td style="width: 85%"><input type="file" name="image8" id="" class="form-control mb-2" value="{{ $horses->image8 }}"></td>
                                        <td><img src="/storage/images/{{ $horses->image8 }}" alt="" style="width: 100%"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

        </div>
        <div class="modal-footer">
            <button class="btn btn-info mt-2 mr-3" type="submit" style="float: right; color: white">
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


                    <input type="file" name="video" value="{{ $horses->video }}">
                    <input type="file" name="video2" value="{{ $horses->video2 }}">
                    <input type="file" name="video3" value="{{ $horses->video3 }}">
                    <input type="file" name="video4" value="{{ $horses->video4 }}">
                    <input type="file" name="video5" value="{{ $horses->video5 }}">
                    <input type="file" name="video6" value="{{ $horses->video6 }}">
                    <input type="file" name="video7" value="{{ $horses->video7 }}">
                    <input type="file" name="video8" value="{{ $horses->video8 }}">
                </div>

        </form>
    </div>
</div>
</div>
</div>
