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


/*the container must be positioned relative:*/
.custom-select {
  /* position: relative;
  font-family: Arial; */
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  /* background-color: rgb(174, 215, 255); */
}

/*style the arrow inside the select element:*/
.select-selected:after {
  /* position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent; */
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  /* border-color: transparent transparent #fff transparent;
  top: 7px; */
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  /* color: #ffffff;
  padding: 8px 25px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none; */
}

/*style items (options):*/
.select-items {
  /* position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99; */
}

/*hide the items when the select box is closed:*/
.select-hide {
  /* display: none; */
}

.select-items div:hover, .same-as-selected {
  /* background-color: rgba(0, 0, 0, 0.1); */
}
</style>

<br>

        <div class="card" style="margin-top: 20px; border-radius: 10px">
            <form action="{{ route('horses.store') }}" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}


<div class="card-header"
style="background-color: rgb(233, 246, 247); color: white; border-radius: 10px 10px 0 0px; color: rgb(39, 39, 79)">
    Nieuwe Invoer
</div>

<br>
<br>


<div class="form-group">
    <div class="row">
        <div class="col-sm">
                <label for="title" style="font-weight: bold" class="title">Kies Diersoort</label>
                <div class="select" style="">

                <select class="form-control">
                    <option value="" placeholder="">Soort Dier</option>
                    <option value="paard" placeholder="paard">Paard</option>
                    <option value="hond" placholder="hond">Hond</option>
                    <option value="kat" placeholder="kat">Kat</option>
                </select>
                </div>
        </div>

        <div class="col-sm" style="padding-top: 38px">
        </div>
    </div>
<br>
    <br>
    <div class="row">
        <div class="col-sm">
            <label for="title" style="font-weight: bold" class="title">Datum</label>
            <input type="text" name="datum" placeholder="MM/DD/YYYY" onfocus="(this.type='date')"
            onblur="(this.type='text')" class="form-control">
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
                            {{-- <input type="file" name="featured" class="form-control"> --}}
                        </div>

                    </div>
            </div>
<br>
            <label for="title" style="font-weight: bold; margin-left: 26px" class="title">Foto's</label>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <input type="file" name="featured" class="form-control">
                    </div>
                    <div class="col-sm">
                        <input type="file" name="featured2" class="form-control">
                    </div>

                </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm">
                    <input type="file" name="featured3" class="form-control">
                </div>
                <div class="col-sm">
                    <input type="file" name="featured4" class="form-control">
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
                        <br><br><br>
                        <label for="aankoopkeuring" class="title" style="font-weight: bold">Aankoopkeuring?</label>
                        <select name="aankoopkeuring" id="aankoopkeuring" class="form-control">
                            <option value="ja" placholder="ja">ja</option>
                            <option value="nee" placeholder="nee">nee</option>
                        </select>
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
            <br>
            <label for="BAR" class="title" style="font-weight: bold; margin-top: 5px" >BAR:</label>

            <select name="BAR" id="BAR" class="form-control">
                <option value="-5" placeholder="-5">-5</option>
                <option value="-4" placeholder="-4">-4</option>
                <option value="-3" placeholder="-3">-3</option>
                <option value="-2" placeholder="-2">-2</option>
                <option value="-1" placholder="-1">-1</option>

                <option value="0" placholder="0">0</option>

                <option value="1" placholder="1">1</option>
                <option value="2" placeholder="2">2</option>
                <option value="3" placeholder="3">3</option>
                <option value="4" placeholder="4">4</option>
                <option value="5" placeholder="5">5</option>


            </select>
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
