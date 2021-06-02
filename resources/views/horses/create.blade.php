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


<div class="card" style="border-radius: 10px">

    <div class="card-header" style="text-align: center; font-weight: bold; background-color: rgb(36, 172, 193); color: white; border-radius: 5px 5px 0 0"> Nieuwe Invoer Paard</div>

    <a href="/horses/index">

        <button class="btn btn-light btn-sm" style="float: left; margin-top: -40px; margin-left: 10px">

            <i class="fas fa-list"></i>

            Index</button>

        </a>

        <a href="/">

            <button class="btn btn-light btn-sm" style="float: right; margin-top: -40px; margin-right: 10px">


                Home
                <i class="fas fa-home"></i>
            </button>

            </a>




            <form action="{{ route('horses.store') }}" method="post"  enctype="multipart/form-data">

                {{ csrf_field() }}


                <div class="form-group">

                    <div class="row">

                        <div class="col-sm">


                            <br><br>

                            <div class="form-group" style="margin-left: 5%">


                                <div class="">

                                    <label for="title" style="font-weight: bold">Datum: </label>

                                    <input type="text" name="datum" id="currentDate" style="max-width: 80%; text-align: left">

                                </div>

                                <br>

                                <div class="">



                                    <label for="title" style="font-weight: bold">Naam:&nbsp;</label>

                                    <input type="text" name="name_horse" value="..." style="max-width: 80%; text-align: left;">



                                </div>

                            </div>

                            <br>


                            <button type="button" class="collapsible">Eigenaar <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>

                            <div class="content" style="max-width: 90%; margin-left: 5%; margin-top: 5px">

                                <div class="form-group" style="margin-left: 5%">

                                    <div class="container">

                                        <form action="/action_page.php">

                                            <div class="row">

                                                <div class="col-25">

                                                    <label for="name">Eigenaar</label>

                                                </div>

                                                <div class="col-75">

                                                    <input type="text" id="fname" name="name" placeholder="Naam" value="...">

                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-25">

                                                    <label for="lname">Achternaam</label>

                                                </div>

                                                <div class="col-75">

                                                    <input type="text" id="lname" name="name_owner" placeholder="Achternaam" value="...">

                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-25">

                                                    <label for="address">Adres</label>

                                                </div>

                                                <div class="col-75">

                                                    <input type="text" name="address" placeholder="Straatnaam" value="...">

                                                </div>

                                            </div>


                                            <div class="row">

                                                <div class="col-25">

                                                    <label for="postcode">Postcode</label>

                                                </div>

                                                <div class="col-75">

                                                    <input type="text" name="zipcode" placeholder="Postcode" value="...">

                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-25">

                                                    <label for="telefoonnummer">Tel:</label>

                                                </div>

                                                <div class="col-75">

                                                    <input type="text" name="phone_number" placeholder="Tel." value="...">

                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-25">

                                                    <label for="email">Email</label>

                                                </div>

                                                <div class="col-75">

                                                    <input type="text" name="email" placeholder="Email" value="...">

                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-25">

                                                    <label for="country">Land</label>

                                                </div>

                                                <div class="col-75">

                                                    <select id="country" name="country">

                                                        <option value="Nederland">Nederland</option>

                                                        <option value="Duitsland">Duitsland</option>

                                                        <option value="België">België</option>

                                                    </select>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-group" style="margin-top: 18px">

                                    <div class="row">

                                        <div class="col-sm">

                                            <button type="button" class="collapsible">Info Paard <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top: 3px; float: right"></i></button>

                                            <div class="content" style="max-width: 90%; margin-left: 5%; margin-top: 18px">

                                                <div class="form-group" style="margin-left: 5%">

                                                    <div class="container">

                                                        <form action="/action_page.php">

                                                            <div class="row">

                                                                <div class="col-25">

                                                                    <label for="age">Leeftijd</label>

                                                                </div>

                                                                <div class="col-75">

                                                                    <input type="text" name="age" placeholder="Leeftijd" value="...">

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-25">

                                                                    <label for="geboortedatum">Geboortedatum</label>

                                                                </div>

                                                                <div class="col-75">

                                                                    <input type="text" name="date_of_birth" placeholder="geboorte datum" value="...">

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-25">

                                                                    <label for="age">Kleur</label>

                                                                </div>

                                                                <div class="col-75">

                                                                    <input type="text" name="color" placeholder="kleur" value="...">

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-25">

                                                                    <label for="gender">Geslacht</label>

                                                                </div>

                                                                <div class="col-75">

                                                                    <select id="gender" name="gender">

                                                                        <option value="m">Man</option>

                                                                        <option value="v">Vrouw</option>

                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-25">

                                                                    <label for="lname">Ras</label>

                                                                </div>

                                                                <div class="col-75">

                                                                    <input type="text" name="breed" placeholder="Achternaam" value="...">

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-25">

                                                                    <label for="address">Alternatief Adres</label>

                                                                </div>

                                                                <div class="col-75">

                                                                    <input type="text" name="alternatief_adres" placeholder="Alternatief Adres" value="nvt">

                                                                </div>
                                                            </div>

                                                                <div class="row">

                                                                <div class="col-25">

                                                                    <label for="featured">Afbeelding</label>

                                                                </div>
                                                                    <div class="col-75">
                                                                        <input type="file" name="featured" class="form-control" multiple>
                                                                    </div>

                                                                </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="content">

                                                    <br>

                                                    <div class="form-group">

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <div class="row">

                                                <div class="col-sm">

                                                    <div class="form-group"></div>

                                                    <div class="row">

                                                        <div class="col-sm">

                                                            <button type="button" class="collapsible">Situatie  <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>

                                                            <div class="content">

                                                                <div class="info">

                                                                    <h6> Huisvesting & ondergrond / Hoe lang in bezit eigenaar? / aankoopkeuring? / Voorgeschiedenis ( dracht / hengstigheid )

                                                                    </h6>

                                                                </div>

                                                                <textarea class="form-control" name="situatie" rows="5" placeholder="Situatie" value="...">...</textarea>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>


                                            <div class="form-group" style="margin-top: 18px">

                                                <div class="row">

                                                    <div class="col-sm">

                                                        <button type="button" class="collapsible">Stoornissen  <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>

                                                        <div class="content">

                                                            <div class="info">

                                                                <h6>Klacht - situatie / verloop / huidige status / ++ /--

                                                                </h6>

                                                            </div>

                                                            <textarea class="form-control" name="klacht" rows="5" placeholder="Klachten">...</textarea>

                                                        </div>

                                                        <div class="content" >

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>


                                            <div class="form-group">

                                                <div class="row">

                                                    <div class="col-sm">

                                                        <button type="button" class="collapsible">Behandeling tot nu toe <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>

                                                        <div class="content">

                                                            <div class="info">

                                                                <h6> Behandeling tot nu toe

                                                                </h6>

                                                            </div>

                                                            <textarea class="form-control" name="behandeling" rows="5" placeholder="Behandeling"> ...</textarea>

                                                        </div>

                                                        <div class="content" >

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>






                                            <div class="form-group">

                                                <div class="row">

                                                    <div class="col-sm">

                                                        <button type="button" class="collapsible">Veranderingen <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>

                                                        <div class="content">

                                                            <div class="info">

                                                                <h6> Uiterlijk / Gedrag / Mesten / Urineren / Voeding / Hoeven / Tanden / Harnachement / Medicijnen / Overige aandoeningen

                                                                </h6>

                                                            </div>

                                                            <textarea class="form-control" name="verandering" rows="5" placeholder="Veranderingen"> ...</textarea>

                                                        </div>

                                                        <div class="content" >

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <div class="row">

                                                    <div class="col-sm">

                                                        <button type="button" class="collapsible">Algemene Indruk <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>

                                                        <div class="content">

                                                            <div class="info">

                                                                <h6> BAR / Voedingstoestand / Vacht / Voeten

                                                                </h6>

                                                            </div>

                                                            <textarea class="form-control" name="algemeen" rows="5" placeholder="Algemene indruk"> ...</textarea>

                                                        </div>

                                                        <div class="content" >

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>









<div class="form-group">
    <div class="row">
            <div class="col-sm">
                <button type="button" class="collapsible">Inspectie in stand <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>
                <div class="content" style="margin-top: 5px">
                    <textarea class="form-control" name="inspectie_stand" rows="5">...</textarea>

                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
                <div class="col-sm">
        <button type="button" class="collapsible">Oriënterende Palpatie <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>

        <div class="content" style="margin-top: 5px">
            <textarea class="form-control" name="orienterende_palpatie" rows="5">...</textarea>
  </div>
   </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
                <div class="col-sm">
                    <button type="button" class="collapsible">Inspectie in beweging <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>
                    <div class="content" style="margin-top: 5px">
                        <label for="stap" style="margin-left: 5%; margin-bottom: -15px; color: gray">stap</label>
                        <textarea class="form-control" name="inspectie_beweging_stap" rows="3">...</textarea>
                        <label for="stap" style="margin-left: 5%; margin-bottom: -15px; color: gray">draf</label>
                        <textarea class="form-control" name="inspectie_beweging_draf" rows="3">...</textarea>
                        <label for="stap" style="margin-left: 5%; margin-bottom: -15px; color: gray">galop</label>
                        <textarea class="form-control" name="inspectie_beweging_galop" rows="3">...</textarea>

                    </div>
                </div>
            </div>
        </div>

  <div class="form-group">
    <div class="row">
            <div class="col-sm">
        <button type="button" class="collapsible">Bewegingsonderzoek <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>
        <div class="content" style="margin-top: 5px">

        <textarea class="form-control" name="bewegingsonderzoek" rows="5">...</textarea>
      </div>
     </div>

      <br><br>
</div>


<br>
                </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        <i class="fas fa-chevron-circle-right"></i>
                        Verder
                    </button>
                </div>
                <br>
            </div>
        </form>
    </div>
</div>


<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }

    var today = new Date();

    var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();

    document.getElementById("currentDate").value = date;

</script>


@endsection
