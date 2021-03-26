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

        <div class="card" style="margin-top: 20px; border-radius: 10px">
            <form action="{{ route('horses.store') }}" method="post">
                {{ csrf_field() }}


<div class="card-header" style="background-color: rgba(90, 158, 247, 0.8); color: white; border-radius: 10px 10px 0 0px">
    Nieuwe Invoer
</div>

<br>
<br>

<div class="form-group">
    <div class="row">
        <div class="col-sm">
            <label for="title" style="font-weight: bold" class="title">Datum</label>
            <input type="text" name="datum" placeholder="datum" class="form-control">
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
                        <input type="text" name="name" placeholder="naam eigenaar" class="form-control">
                    </div>
                    <div class="col-sm" style="padding-top: 38px">
                        <input type="text" name="name_owner" placeholder="achternaam" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <input type="text" placeholder="telefoonnummer" name="phone_number" class="form-control">
                    </div>
                    <div class="col-sm">
                        <input type="text" placeholder="adres" name="address" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <input type="text" placeholder="email" name="email" class="form-control">
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
                        <input type="text" placeholder="naam paard" name="name_horse" class="form-control">
                    </div>
                    <div class="col-sm" style="padding-top: 38px">
                        <input type="text" placeholder="leeftijd" name="age" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <input type="text" placeholder="ras" name="breed" class="form-control">
                    </div>
                    <div class="col-sm">
                        <input type="text" placeholder="geslacht" name="gender" class="form-control">
                    </div>
                </div>
            </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm">
                            <input type="text" placeholder="alternatief adres" name="alternatief_adres" class="form-control">
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
                        <input type="text" name="bezit_eigenaar" placeholder="hoe lang in bezit eigenaar?" class="form-control">
                    </div>
                    <div class="col-sm" style="padding-top: 38px">
                        <input type="text" placeholder="huisvesting en ondergrond" name="huisvesting" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <input type="text" placeholder="voorgeschiedenis (dracht/hengstigheid)" name="voorgeschiedenis" class="form-control">
                    </div>
                    <div class="col-sm">
                        <input type="text" placeholder="voeding/hoeven/tanden/harnachement" name="voeding" class="form-control">
                    </div>
                </div>

            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <input type="text" placeholder="medicijnen" name="medicijnen" class="form-control">
                    </div>
                    <div class="col-sm">
                        <input type="text" placeholder="overige aandoeningen" name="overig" class="form-control">
                    </div>
                </div>
                    <div class="form-group"></div>
                <div class="row">
                    <div class="col-sm">
                        <input type="text" placeholder="aankoopkeuring?" name="aankoopkeuring" class="form-control">
                    </div>
                    <div class="col-sm">
                        <input type="text" placeholder="mesten/urineren" name="mesten" class="form-control">
                    </div>
                </div>

            </div>


            <br>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <label for="title" style="font-weight: bold" class="title">Klachten</label>
                        <input type="text" name="stoornissen" placeholder="stoornissen" class="form-control">
                    </div>
                    <div class="col-sm" style="padding-top: 38px">
                        <input type="text" name="klacht" placeholder="klacht - situatie" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <input type="text" placeholder="behandeling tot nu toe" name="behandeling" class="form-control">
                    </div>
                    <div class="col-sm">
                        <input type="text" placeholder="veranderingen ja/nee?" name="veranderingen" class="form-control">
                    </div>

                </div>

            </div>



<br>

<div class="form-group">
    <div class="row">
        <div class="col-sm">
            <label for="title" style="font-weight: bold" class="title">Algemene Indruk</label>
            <input type="text" name="BAR" placeholder="BAR" class="form-control">
        </div>
        <div class="col-sm" style="padding-top: 38px">
            <input type="text" name="voedingstoestand" placeholder="voedingstoestand" class="form-control">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-sm">
            <input type="text" placeholder="vacht" name="vacht" class="form-control">
        </div>
        <div class="col-sm">
            <input type="text" placeholder="voeten" name="voeten" class="form-control">
        </div>
    </div>
</div>
<br>
<br>

<div class="form-group" style="margin-left:-15px">
    <label for="orienterende_palpatie" class="title" style="font-weight: bold">Inspectie in stand</label>
    <textarea class="form-control" name="inspectie_stand" rows="3"></textarea>
  </div>

  <br>

<div class="form-group" style="margin:-15px">
    <label for="orienterende_palpatie" class="title" style="font-weight: bold">Oriënterende Palpatie</label>
    <textarea class="form-control" name="orienterende_palpatie" rows="3"></textarea>
  </div>

  <br>
<br>
    <div class="form-group" style="margin: -15px">
        <label for="bewegingsonderzoek" class="title" style="font-weight: bold">Bewegingsonderzoek</label>
        <textarea class="form-control" name="bewegingsonderzoek" rows="3"></textarea>
      </div>
      <br><br>
</div>

</div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Opslaan
                    </button>
                </div>
                <br>
            </div>
        </form>
    </div>
</div>


@endsection
