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
    <div class="card-header">Gegevens Updaten</div>
    <div class="card-body">

            <form action="{{ route('horses.update', ['id' =>$horse->id ]) }}" method="get"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="" class="title1">Naam:</label><br>
                            <label for="" class="title1">Geslacht:</label><br>
                            <label for="" class="title1">Leeftijd:</label><br>
                            <label for="" class="title1">Ras:</label><br>
                            <label for="" class="title1">Kleur:</label><br>
                            <label for="" class="title1">Naam Eigenaar:</label><br>
                            <label for="" class="title1" style="margin-bottom: 25px">Opmerkingen:</label><br><br><br>
                            <label for="" class="title1" style="margin-bottom: 25px">Klacht:</label><br><br><br><br>
                            <br><br>
                        </div>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="name_horse" id="currentDate" style="margin-bottom: 15px" value="{{ $horse->name_horse }}">
                            <div class="form-group">
                                <select name="gender" id="" class="form-control">
                                    <option value="{{ $horse->gender }}">{{ $horse->gender }}</option>
                                    <option value="man">man</option>
                                    <option value="vrouw">vrouw</option>
                                </select>
                            </div>
                            <input type="text" name="age" class="form-control" style="margin-bottom: 15px" value="{{ $horse->age }}">
                            <input type="text" name="breed" class="form-control" style="margin-bottom: 15px" value="{{ $horse->breed }}">
                            <input type="text" name="color" class="form-control" style="margin-bottom: 15px" value="{{ $horse->color }}">
                            <input type="text" name="name_owner" class="form-control" style="margin-bottom: 15px" value="{{ $horse->name_owner }}">
                            <div class="info">
                                <h6>
                                    <i class="far fa-question-circle"></i>
                                    Huisvesting & ondergrond / Hoe lang in bezit eigenaar? / Aankoopkeuring? / Voorgeschiedenis ( dracht / hengstigheid)</h6>
                                </div>
                                <textarea name="opmerkingen" id="" cols="5" rows="3" class="form-control" style="margin-bottom: 15px">{{ $horse->opmerkingen }}</textarea>
                                <div class="info">
                                    <h6>
                                        <i class="far fa-question-circle"></i>
                                        Verloop / huidige status / ++ / --</h6>
                                    </div>
                                    <textarea name="klacht" id="" cols="5" rows="3" class="form-control" style="margin-bottom: 15px">{{ $horse->klacht }}</textarea>
                                    <div class="info">
                                        <h6>
                                            <i class="far fa-question-circle"></i>
                                            Veranderingen / uiterlijk / gedrag / mesten / urineren / voeding / hoeven / tanden / harnachement / medicijnen / overig</h6>
                                        </div>
                                        <textarea name="verandering" id="" cols="5" rows="3" class="form-control" style="margin-bottom: 15px">{{ $horse->verandering }}</textarea>
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
                                    <input type="text" name="address" id="" value="...">
                                    <input type="text" name="alternatief_adres" id="" value="...">
                                    <input type="text" name="email" id="" value="...">
                                    <input type="text" name="phone_number" id="" value="...">
                                    <input type="text" name="behandeling" id="" value="...">
                                    <input type="text" name="height" id="" value="...">
                                    <input type="text" name="situatie" id="" value="...">
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

