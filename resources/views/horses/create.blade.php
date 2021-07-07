

@extends('layouts.app')

@section('content')


@if(count($errors) > 0)
<ul class="list-group">
    @foreach($errors->all() as $error)
    <li class="list-group-item text-danger">
        {{ $error }}
    </li>
    @endforeach
    <br>
</ul>
@endif


<div class="card">
    <div class="card-header">Nieuwe Invoer</div>
    <div class="card-body">

            <form action="{{ route('horses.store') }}" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="" class="title1">Naam:</label><br>
                            <label for="" class="title1">Geslacht:</label><br>
                            <label for="" class="title1">Leeftijd:</label><br>
                            <label for="" class="title1">Ras:</label><br>
                            <label for="" class="title1">Kleur:</label><br>
                            <label for="" class="title1">Alternatief adres:</label><br>
                            <label for="" class="title1">Foto:</label><br>

                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="text" name="name_horse" id="currentDate" style="margin-bottom: 15px">
                            <div class="form-group">
                                <select name="gender" id="" class="form-control">
                                    <option value="man">man</option>
                                    <option value="vrouw">vrouw</option>
                                </select>
                            </div>
                            <input type="text" name="age" class="form-control" style="margin-bottom: 15px" value="...">
                            <input type="text" name="breed" class="form-control" style="margin-bottom: 15px" value="...">
                            <input type="text" name="color" class="form-control" style="margin-bottom: 15px" value="...">
                            <input type="text" name="alternatief_adres" class="form-control" style="margin-bottom: 15px" value="...">
                            <input type="file" name="image" class="form-control" style="margin-bottom: 15px" id="image">

                        </div>

                        <div class="col-md-2">
                            <label for="" class="title1">Eigenaar:</label><br>
                            <label for="" class="title1">Achternaam:</label><br>
                            <label for="" class="title1">Adres:</label><br>
                            <label for="" class="title1">Postcode:</label><br>
                            <label for="" class="title1">Tel.:</label><br>
                            <label for="" class="title1">Email:</label><br>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="name_owner" class="form-control" style="margin-bottom: 15px" value="...">
                            <input type="text" name="achternaam" class="form-control" style="margin-bottom: 15px" value="...">
                            <input type="text" name="address" class="form-control" style="margin-bottom: 15px" value="...">
                            <input type="text" name="postcode" class="form-control" style="margin-bottom: 15px" value="...">
                            <input type="text" name="phone_number" class="form-control" style="margin-bottom: 15px" value="...">
                            <input type="text" name="email" class="form-control" style="margin-bottom: 15px" value="...">
                        </div>


                        <div class="row">
                            <div class="col-md-2" style="margin-top: 75px" >
                                <label for="" class="title1" style="margin-bottom: 25px">Situatie:</label><br><br><br><br><br>
                                <label for="" class="title1" style="margin-bottom: 40px">Klacht:</label><br><br><br><br><br>
                                <label for="" class="title1" style="margin-bottom: 25px">Verandering:</label>
                                <br><br>
                            </div>
                            <div class="col-md-10">
                            <div class="info" style="margin-top:35px">
                                <h6 style="font-size: 15px; margin-top: 3px">
                                    <i class="far fa-question-circle"></i>
                                    Huisvesting & ondergrond / Hoe lang in bezit eigenaar? / Aankoopkeuring? / Voorgeschiedenis ( dracht / hengstigheid )</h6>
                                </div>
                                <textarea name="situatie" id="" cols="5" rows="3" class="form-control" style="margin-bottom: 15px" value="...">...</textarea>
                                <div class="info">
                                    <h6 style="font-size: 15px; margin-top: 3px">
                                        <i class="far fa-question-circle"></i>
                                        Verloop / huidige status / ++ / --</h6>
                                    </div>
                                    <textarea name="klacht" id="" cols="5" rows="3" class="form-control" style="margin-bottom: 15px" value="...">...</textarea>
                                    <div class="info">
                                        <h6 style="font-size: 15px; margin-top: 3px">
                                            <i class="far fa-question-circle"></i>
                                            Veranderingen / uiterlijk / gedrag / mesten / urineren / voeding / hoeven / tanden / harnachement / medicijnen / overig</h6>
                                        </div>
                                        <textarea name="verandering" id="" cols="5" rows="3" class="form-control" style="margin-bottom: 15px" value="...">...</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">
                                    <i class="fas fa-check"></i>
                                    Opslaan
                                </button>

                                <div class="inputs">
                                    <input type="text" name="behandeling" id="" value="...">
                                    <input type="text" name="height" id="" value="...">
                                    <input type="text" name="opmerkingen" id="" value="...">
                                    <input type="text" name="content" id="" value="...">
                                    <input type="text" name="channel_id" id="" value="...">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<script>
    var today = new Date();

var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();

document.getElementById("currentDate").value = date;

var today = new Date();

var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();

document.getElementById("currentDate2").value = date;


</script>


@endsection
