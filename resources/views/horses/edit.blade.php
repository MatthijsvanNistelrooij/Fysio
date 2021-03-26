@extends('layouts.app')

@section('content')

<style>
    .form-control{
        padding: 6px 12px;
        margin-left: 4%;
        margin-right: 5%;
        max-width: 90%;
    }
    .title {
        margin-left: 5%;
        padding-bottom: 6px;
    }
</style>



<br>

<form action="{{ route('horses.update', ['id' =>$horse->id ]) }}" method="get">
    {{ csrf_field() }}

    <div class="card" style="margin-top: 20px; border-radius: 10px">

        <div class="card-header" style="background-color: rgb(92, 184, 92); color: rgb(255, 255, 255); border-radius: 10px 10px 0 0">
        Aanpassen
        </div>

        <br>
        <br>

        <div class="form-group">
            <div class="row">
                <div class="col-sm">
                    <label for="title" style="font-weight: bold" class="title">Datum</label>
                    <input type="text" name="datum" placeholder="datum" class="form-control" value="{{ $horse->datum }}">
                </div>
                <div class="col-sm" style="padding-top: 38px">
                </div>
            </div>
        </div>

                <br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm">
                                <label for="title" style="font-weight: bold" class="title">Algemeen</label>
                                <input type="text" name="name" placeholder="naam eigenaar" class="form-control" value="{{ $horse->name }}">
                            </div>
                            <div class="col-sm" style="padding-top: 38px">
                                <input type="text" name="name_owner" placeholder="achternaam" class="form-control"value="{{ $horse->name_owner}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm">
                                <input type="text" placeholder="telefoonnummer" name="phone_number" class="form-control" value="{{ $horse->phone_number }}">
                            </div>
                            <div class="col-sm">
                                <input type="text" placeholder="adres" name="address" class="form-control" value="{{ $horse->address }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm">
                                <input type="text" placeholder="email" name="email" class="form-control" value="{{ $horse->email }}">
                            </div>
                            <div class="col-sm">
                            </div>
                        </div>
                    </div>
        <br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm">
                                <label for="title" style="font-weight: bold" class="title">Info Paard</label>
                                <input type="text" placeholder="naam paard" name="name_horse" class="form-control" value="{{ $horse->name_horse }}">
                            </div>
                            <div class="col-sm" style="padding-top: 38px">
                                <input type="text" placeholder="leeftijd" name="age" class="form-control" value="{{ $horse->age }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm">
                                <input type="text" placeholder="ras" name="breed" class="form-control" value="{{ $horse->breed }}">
                            </div>
                            <div class="col-sm">
                                <input type="text" placeholder="geslacht" name="gender" class="form-control" value="{{ $horse->gender }}">
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm">
                                    <input type="text" placeholder="alternatief adres" name="alternatief_adres" class="form-control" value="{{ $horse->alternatief_adres }}">
                                </div>
                                <div class="col-sm">
                                    {{-- <input type="text" placeholder="geslacht" name="gender" class="form-control"> --}}
                                </div>
                            </div>
                    </div>


                    <br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm">
                                <label for="title" style="font-weight: bold" class="title">Situatie</label>
                                <input type="text" name="bezit_eigenaar" placeholder="hoe lang in bezit eigenaar?" class="form-control" value="{{ $horse->bezit_eigenaar }}">
                            </div>
                            <div class="col-sm" style="padding-top: 38px">
                                <input type="text" placeholder="huisvesting en ondergrond" name="huisvesting" class="form-control" value="{{ $horse->huisvesting }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm">
                                <input type="text" placeholder="voorgeschiedenis (dracht/hengstigheid)" name="voorgeschiedenis" class="form-control" value="{{ $horse->voorgeschiedenis }}">
                            </div>
                            <div class="col-sm">
                                <input type="text" placeholder="voeding/hoeven/tanden/harnachement" name="voeding" class="form-control" value="{{ $horse->voeding }}">
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm">
                                <input type="text" placeholder="medicijnen" name="medicijnen" class="form-control" value="{{ $horse->medicijnen }}">
                            </div>
                            <div class="col-sm">
                                <input type="text" placeholder="overige aandoeningen" name="overig" class="form-control" value="{{ $horse->overig }}">
                            </div>
                        </div>
                            <div class="form-group"></div>
                        <div class="row">
                            <div class="col-sm">
                                <input type="text" placeholder="aankoopkeuring?" name="aankoopkeuring" class="form-control" value="{{ $horse->aankoopkeuring }}">
                            </div>
                            <div class="col-sm">
                                <input type="text" placeholder="mesten" name="mesten" class="form-control" value="{{ $horse->mesten }}">
                            </div>
                        </div>

                    </div>


                    <br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm">
                                <label for="title" style="font-weight: bold" class="title">Klachten</label>
                                <input type="text" name="stoornissen" placeholder="stoornissen" class="form-control" value="{{ $horse->stoornissen }}">
                            </div>
                            <div class="col-sm" style="padding-top: 38px">
                                <input type="text" name="klacht" placeholder="klacht - situatie" class="form-control" value="{{ $horse->klacht }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm">
                                <input type="text" placeholder="behandeling tot nu toe" name="behandeling" class="form-control" value="{{ $horse->behandeling }}">
                            </div>
                            <div class="col-sm">
                                <input type="text" placeholder="veranderingen ja/nee?" name="veranderingen" class="form-control" value="{{ $horse->veranderingen }}">
                            </div>

                        </div>

                    </div>



        <br>

        <div class="form-group">
            <div class="row">
                <div class="col-sm">
                    <label for="title" style="font-weight: bold" class="title">Algemene Indruk</label>
                    <input type="text" name="BAR" placeholder="BAR" class="form-control" value="{{ $horse->BAR }}">
                </div>
                <div class="col-sm" style="padding-top: 38px">
                    <input type="text" name="voedingstoestand" placeholder="voedingstoestand" class="form-control" value="{{ $horse->voedingstoestand }}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm">
                    <input type="text" placeholder="vacht" name="vacht" class="form-control" value="{{ $horse->vacht }}">
                </div>
                <div class="col-sm">
                    <input type="text" placeholder="voeten" name="voeten" class="form-control" value="{{ $horse->voeten }}">
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="form-group" style="margin-left:-15px">
            <label for="orienterende_palpatie" class="title" style="font-weight: bold">Inspectie in stand</label>
            <textarea class="form-control" name="inspectie_stand" rows="3">{{ $horse->inspectie_stand }}</textarea>
          </div>

          <br>

        <div class="form-group" style="margin:-15px">
            <label for="orienterende_palpatie" class="title" style="font-weight: bold">Oriënterende Palpatie</label>
            <textarea class="form-control" name="orienterende_palpatie" rows="3">{{ $horse->orienterende_palpatie }}</textarea>
          </div>

          <br>
        <br>
            <div class="form-group" style="margin: -15px">
                <label for="bewegingsonderzoek" class="title" style="font-weight: bold">Bewegingsonderzoek</label>
                <textarea class="form-control" name="bewegingsonderzoek" rows="3">{{ $horse->bewegingsonderzoek }}</textarea>
              </div>
              <br><br>
        </div>

        </div>

                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">
                                Wijzigingen Opslaan
                            </button>
                        </div>
                        <br>
                    </div>
                </form>
            </div>
        </div>

        <br>

@endsection
