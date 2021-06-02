@extends('layouts.app')

@section('content')


    <div class="card" style="border-radius: 10px">

        <div class="card-header" style="text-align: center; font-weight: bold; background-color: rgb(36, 172, 193); color: white; border-radius: 5px 5px 0 0">             Info - {{ $horse->name_horse }} ({{ $horse->datum }})

        </div>

        <a href="/horses/index">

            <button class="btn btn-light btn-sm" style="float: left; margin-top: -40px; margin-left: 10px">

                <i class="fas fa-list"></i>

                Index</button>

            </a>

            <a href="/">
                <button class="btn btn-light btn-sm" style="float: right; margin-top: -40px; margin-right: 10px">
                    <i class="fas fa-home"></i>
                    Home</button>
                </a>



        <form action="{{ route('horses.update', ['id' =>$horse->id ]) }}" method="get">
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
                <input type="text" name="name_horse" value="{{ $horse->name_horse }}" style="max-width: 80%; text-align: left;">

            </div>
            </div>



        <div class="form-group">
            <div class="row">
                <div class="col-sm">

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
                      <input type="text" id="fname" name="name" placeholder="Naam" value="{{ $horse->name }}">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="lname">Achternaam</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="lname" name="name_owner" placeholder="Achternaam" value="{{ $horse->name_owner }}">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="address">Adres</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="address" placeholder="Straatnaam" value="{{ $horse->address }}">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="postcode">Postcode</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="zipcode" placeholder="Postcode" value="{{ $horse->zipcode }}">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="telefoonnummer">Tel:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="phone_number" placeholder="Tel." value="{{ $horse->phone_number }}">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="email">Email</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="email" placeholder="Email" value="{{ $horse->email }}">
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

                      <div class="row" style="margin-top: -10px">
                        <div class="col-25">
                          <label for="age">Leeftijd</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="age" placeholder="Leeftijd" value="{{ $horse->age }}">
                        </div>
                      </div>



                      <div class="row">
                        <div class="col-25">
                          <label for="geboortedatum">Geboortedatum</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="date_of_birth" placeholder="geboorte datum" value="{{ $horse->date_of_birth }}">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-25">
                          <label for="age">Kleur</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="color" placeholder="kleur" value="{{ $horse->kleur }}">
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
                          <input type="text" name="breed" placeholder="Ras" value="{{ $horse->breed }}">
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-25">
                          <label for="address">Alternatief Adres</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="alternatief_adres" placeholder="Alternatief Adres" value="{{ $horse->alternatief_adres }}">
                        </div>
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
                                <textarea class="form-control" name="situatie" rows="5" placeholder="Situatie" value="...">{{ $horse->situatie }}</textarea>
                            </div>
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

                            <button type="button" class="collapsible">Stoornissen  <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>

                            <div class="content">

                                <div class="info">

                                    <h6> Klacht - situatie / verloop / huidige status / ++ /--

                                    </h6>

                                </div>

                                <textarea class="form-control" name="klacht" rows="5" placeholder="Klachten" value="...">{{ $horse->klacht }}</textarea>

                            </div>

                        </div>

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

                        <textarea class="form-control" name="behandeling" rows="5" placeholder="Behandeling">{{ $horse->behandeling }}</textarea>

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

                        <textarea class="form-control" name="verandering" rows="5" placeholder="Veranderingen">{{ $horse->verandering }}</textarea>

                    </div>

                    <div class="content" >

                    </div>

                </div>

            </div>

        </div>


        <div class="form-group">

            <div class="row">

                <div class="col-sm">

                    <button type="button" class="collapsible">Algemene indruk  <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>

                    <div class="content">



                        <div class="info">

                            <h6> BAR / Voedingstoestand / Vacht / Voeten

                            </h6>

                        </div>

                        <textarea class="form-control" name="algemeen" rows="5" placeholder="Algemene Indruk"> ...</textarea>

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

                            <button type="button" class="collapsible">Bewegingsonderzoek <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>

                            <div class="content" style="margin-top: 5px">



                                <textarea class="form-control" name="bewegingsonderzoek" rows="5">...</textarea>

                            </div>

                        </div>


                        <br><br>

                    </div>



                </div>


            </div>

            <br>

            <div class="form-group">

                <div class="text-center">

                    <button class="btn btn-success" type="submit">

                        <i class="fas fa-check"></i>
                        Wijzigingen Opslaan

                    </button>

                </div>



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
