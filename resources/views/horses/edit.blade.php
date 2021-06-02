@extends('layouts.app')

@section('content')




    <div class="card" style="border-radius: 10px">

        <div class="card-header" style="text-align: center; font-weight: bold; background-color: rgb(36, 172, 193); color: white; border-radius: 5px 5px 0 0">
            Sessie - {{ $horse->name_horse }} ({{ $horse->datum }})

        </div>

        <a href="/horses/index">

            <button class="btn btn-light btn-sm" style="float: left; margin-top: -40px; margin-left: 10px">

                <i class="fas fa-list"></i>

                Index
            </button>

            </a>

            <a href="/">
                <button class="btn btn-light btn-sm" style="float: right; margin-top: -40px; margin-right: 10px">
                    Home
                    <i class="fas fa-home"></i>

                </button>
                </a>



                <form action="{{ route('horses.update', ['id' =>$horse->id ]) }}" method="get">
                    {{ csrf_field() }}
        <div class="form-group">
            <div class="row">
                <div class="col-sm">


            <div class="card" style="border-radius: 0 0 10px 10px; overflow: hidden; border:1px solid rgb(255, 255, 255); padding: 5px; background-color: rgb(255, 255, 255)">

                <div class="collapsible_2">Info

                    <i class="fas fa-chevron-circle-down" style="float: right; color: rgb(123, 123, 123); margin-top: 5px"></i>

                </div>

                <div class="content_2">


        <div class="form-group">
            <div class="row">
                <div class="col-sm">

                    <div class="form-group" style="margin-left: 5%">
                        <br>

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
                            <textarea class="form-control" name="algemeen" rows="5" placeholder="Algemene Indruk"> {{ $horse->algemeen }}</textarea>
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
                            <textarea class="form-control" name="behandeling" rows="5" placeholder="Behandeling">{{ $horse->behandeling }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
                </div>

                <div class="collapsible_2" style="margin-top: 4px">Foto's

                    <i class="fas fa-chevron-circle-down" style="float: right; color: rgb(123, 123, 123); margin-top: 5px"></i>
                </div>
                <div class="content_2">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                    <div class="container" style="padding: 15px; border-top: none; overflow: hidden; height: auto">
                                        <div class="row">
                                            <div class="col-sm-12" style="overflow-y:auto; height: 750px; border: 1px solid rgb(223, 223, 223); border-radius: 5px; padding-top: 15px; margin-bottom: 15px">

                                                {{-- <img class="" src="{{ $horse->featured }}" width="40%" style="width: 100%; padding: 5px">
                                                <img class="" src="{{ $horse->featured }}" width="40%" style="width: 100%; padding: 5px">
                                                <img class="" src="{{ $horse->featured }}" width="40%" style="width: 100%; padding: 5px">
                                                <img class="" src="{{ $horse->featured }}" width="40%" style="width: 100%; padding: 5px">
                                                <img class="" src="{{ $horse->featured }}" width="40%" style="width: 100%; padding: 5px">
                                                <img class="" src="{{ $horse->featured }}" width="40%" style="width: 100%; padding: 5px">
         --}}


                                                <img src="/images/horse_default.jpg" alt="" style="width: 100%; padding: 5px">
                                                <img src="/images/horse_default.jpg" alt="" style="width: 100%; padding: 5px">
                                                <img src="/images/horse_default.jpg" alt="" style="width: 100%; padding: 5px">
                                                <img src="/images/horse_default.jpg" alt="" style="width: 100%; padding: 5px">
                                                <img src="/images/horse_default.jpg" alt="" style="width: 100%; padding: 5px">
                                                <img src="/images/horse_default.jpg" alt="" style="width: 100%">
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>


            <div class="collapsible_2" style="margin-top: 4px" id="defaultOpen">Overzicht

                <i class="fas fa-chevron-circle-down" style="float: right; color: rgb(123, 123, 123); margin-top: 5px"></i>

            </div>

            <div class="content_2">



                <div class="form-group">



                <div style="text-align: left">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card-header" style="border: 1px solid rgb(209, 209, 209); border-bottom: none; border-radius: 5px 5px 0 0; height: auto"> Eigenaar</div>
                                <div class="container" style="border: 1px solid rgb(214, 214, 214); border-radius:0 0 5px 5px">
                                    <h6 style="color: rgb(58, 58, 58)">Naam : {{ $horse->name }} {{ $horse->name_owner }}</p>
                                        <h6 style="color: rgb(58, 58, 58)">Adres: {{ $horse->address }}</p>
                                            <h6 style="color: rgb(58, 58, 58)">Postcode: ... {{ $horse->zip_code }}</p>
                                            <h6 style="color: rgb(58, 58, 58)">Email: {{ $horse->email }}</p>
                                            <h6 style="color: rgb(58, 58, 58)">Tel: {{ $horse->phone_number }}</p>
                                            </div>
                                            <br>


                                            <div class="card-header" style="border: 1px solid rgb(209, 209, 209); border-bottom: none; border-radius: 5px 5px 0 0; height: auto">
                                               <h6>Info Paard</h6>
                                               <div>
                                            </div>
                                        </div>
                                            <div class="container" style="border: 1px solid rgb(214, 214, 214); border-radius: 0 0 5px 5px; overflow: hidden">
                                                <h6 style="color: rgb(58, 58, 58)">Naam : {{ $horse->name_horse }} </p>
                                                    <h6 style="color: rgb(58, 58, 58)">Leeftijd: {{ $horse->age }}</p>
                                                        <h6 style="color: rgb(58, 58, 58)">Geslacht: {{ $horse->gender }}</p>
                                                            <h6 style="color: rgb(58, 58, 58)">Ras: {{ $horse->breed }}</p>
                                                                <h6 style="color: rgb(58, 58, 58)">Alternatief Adres: {{ $horse->alternatief_adres }}</p>
                                                            </div>
                                        <br>
                                    </div>
                                    <br>



                                    <div class="col-sm-8">

                                        <div class="card-header" style="border: 1px solid rgb(209, 209, 209); border-bottom: none; border-radius: 5px 5px 0 0">Klachten</div>

                                        <div class="container" style="border: 1px solid rgb(214, 214, 214); border-radius: 0 0 5px 5px; height: auto; min-height: 182px">

                                            <h6 style="color: rgb(58, 58, 58); margin-top: -15px"></h6>

                                            <p style="font-weight: bold"> Klachten: </p>

                                            <p>{{ $horse->klacht }}</p>
                                            <hr>
                                            <p style="font-weight: bold">Algemene indruk:  </p>

                                            <p> {{ $horse->algemeen }}</p>
                                            <hr>
                                            <p style="font-weight: bold">Behandeling tot nu toe: </p>


                                            <p value="..."> {{ $horse->behandeling }}</p>

                                        </div>

                                        <br>

                                        <div class="card-header" style="border: 1px solid rgb(209, 209, 209); border-bottom: none; border-radius: 5px 5px 0 0">Situatie</div>

                                        <div class="container" style="border: 1px solid rgb(214, 214, 214); border-radius: 0 0 5px 5px; height: auto;min-height: 180px">

                                            <h6 style="color: rgb(58, 58, 58); margin-top:-15px"></h6>

                                            <p style="font-weight: bold">Situatie: </p>

                                            <p>{{ $horse->situatie }} </p>

                                            <hr>
                                            <p style="font-weight: bold">Veranderingen: </p>

                                            <p>{{ $horse->verandering }} </p>

                                        </div>

                                        <br>


                                    </div>

                            <br><br>

                        </div>

                    </div>
                </div>
                <div>



        </div>
                </div>
            </div>

        <div class="collapsible_2" style="margin-top: 4px">Bewegingsonderzoek

            <i class="fas fa-chevron-circle-down" style="float: right; color: rgb(123, 123, 123); margin-top: 5px"></i>

        </div>

        <div id="" class="tabcontent" style="border: 1px solid rgb(223, 223, 223); border-radius: 5px; margin-top: 5px">
            <div class="container" >
                <div class="row" >
                    <div class="col-sm-4" style="overflow-y:auto; height: 520px; border: 1px solid rgb(223, 223, 223); border-radius: 5px; padding-top: 15px; margin-bottom: 15px">
    <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px; font-weight: bold">


    <option value="">TMJ</option>

    <option value="">Lateral (Li)</option>

    <option value="">Lateral (Re)</option>

    <option value="">Caudal glide (Li)</option>

    <option value="">Caudal glide (Re)</option>

    <option value="">Rostral glide (Li)</option>

    <option value="">Rostral glide (Re)</option>

    </select>


    <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2);

    font-weight: bold">

    <option value="">Hyoid</option>

    <option value="">Dorsal</option>

    <option value="">Lateral (Li)</option>

    <option value="">Lateral (Re)</option>



    </select>

    <label class="title" style="margin-left: 10%">General extension CWK</label>



    <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2);


    font-weight: bold">

    <option value="">C0-C1</option>

    <option value="">Flexie</option>

    <option value="">Extensie</option>

    <option value="">Lateroflexie (Li)</option>

    <option value="">Lateroflexie (Re)</option>



    </select>



    <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;

    font-weight: bold">

    <option value="">C1-C2</option>

    <option value="">Rotatie (Li)</option>

    <option value="">Rotatie (Re)</option>

    </select>





    <label class="title"  style="margin-left: 10%">General latflex CWK</label>




    <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2);

    font-weight: bold">

    <option value="">C2-C7</option>

    <option value="">Lateroflexie (Li)</option>

    <option value="">Lateroflexie (Re)</option>

    <option value="">Flexie</option>

    <option value="Extensie">Extensie</option>

    </select>



    <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2);

    font-weight: bold">

    <option value="">T3-T10</option>

    <option value="">Lateral</option>

    <option value="">Caudal glide</option>

    <option value="">Rostral glide</option>

    </select>



    <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;

    font-weight: bold">
    <option value="">T10-L6</option>
    <option value="">Lateral</option>
    <option value="">Caudal glide</option>
    <option value="">Rostral glide</option>
    </select>



    <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;

    font-weight: bold">

    <option value="">Ribs</option>
    <option value="">Lateral</option>
    <option value="">Caudal glide</option>
    <option value="">Rostral glide</option>
    </select>


    <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;

    font-weight: bold">
    <option value="">L1-L6</option>
    <option value="">Lateral</option>
    <option value="">Caudal glide</option>
    <option value="">Rostral glide</option>
    </select>


    <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;

    font-weight: bold">
    <option value="">L4-S1</option>
    <option value="">Lateral</option>
    <option value="">Caudal glide</option>
    <option value="">Rostral glide</option>
    </select>



    <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;

    font-weight: bold">
    <option value="">T18-T8</option>
    <option value="">Lateral</option>
    <option value="">Caudal glide</option>
    <option value="">Rostral glide</option>
    </select>


    <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;

    font-weight: bold">
    <option value="">Pelvic</option>
    <option value="">General squeeze</option>
    <option value="">Forward rotation ilium general (Li)</option>
    <option value="">Forward rotation ilium general (Re)</option>
    <option value="">Rostral glide</option>
    </select>




    </div>


    <br>




    <div class="col-sm-8">


        <div class="card-body" style="border: 1px solid rgb(226, 226, 226); border-radius: 10px">

            <br>

            <img src="/images/paard_skelet.png" class="img2" alt="">

            <br><br>



        </div>

        <button class="btn btn-primary btn-sm" style="float: right; margin-right:2px; margin-top: 10px">Achter</button>

        &nbsp;&nbsp;

        <button class="btn btn-primary btn-sm" style="float: right; margin-right:2px; margin-top: 10px">Links</button>

        &nbsp;&nbsp;

        <button class="btn btn-primary btn-sm" style="float: right; margin-right: 2px; margin-top: 10px">Rechts</button>

        &nbsp;&nbsp;

        <button class="btn btn-primary btn-sm" style="float: right; margin-right: 2px; margin-top: 10px">Voor</button>



    </div>

    </div>

</div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm" >
                <button type="button" class="collapsible">Bewegingsonderzoek <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>
                <div class="content" style="margin-top: 5px">
                    <textarea class="form-control" name="bewegingsonderzoek" rows="5" value="{{ $horse->bewegingsonderzoek }}">{{ $horse->bewegingsonderzoek }}</textarea>
                </div>
            </div>
            <br><br>
        </div>
    </div>
    <div>
        <div class="form-group">
            <div class="row">
                <div class="col-12">
                    <div class="card" style="border: 1px solid rgb(225, 225, 225); margin-left: 5%; padding: 2%; width: 90%">
                    <h6> {{ $horse->bewegingsonderzoek }}</h6>
                </div>
                </div>
            </div>
        </div>
    </div>


    </div>



        <div class="collapsible_2" style="margin-top: 4px">Inspectie in Stand
            <i class="fas fa-chevron-circle-down" style="float: right; color: rgb(123, 123, 123); margin-top: 5px"></i>
        </div>
        <div class="content_2">
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <button type="button" class="collapsible">Inspectie in stand <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>
                        <div class="content" style="margin-top: 5px">
                            <textarea class="form-control" name="inspectie_stand" rows="5" value="{{ $horse->inspectie_stand }}">{{ $horse->inspectie_stand }}</textarea>
                        </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="border: 1px solid rgb(225, 225, 225); margin-left: 5%; padding: 2%; width: 90%">
                                <h6> {{ $horse->inspectie_stand }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
        </div>


        <div class="collapsible_2" style="margin-top: 5px">Oriënterende Palpatie
            <i class="fas fa-chevron-circle-down" style="float: right; color: rgb(123, 123, 123); margin-top: 5px"></i>
        </div>
        <div class="content_2">
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <button type="button" class="collapsible">Oriënterende Palpatie <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>
                        <div class="content" style="margin-top: 5px">
                            <textarea class="form-control" name="orienterende_palpatie" rows="5" value="{{ $horse->orienterende_palpatie }}">{{ $horse->orienterende_palpatie }}</textarea>
                        </div>

                    </div>
                </div>
            </div>
<br>
            <div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="border: 1px solid rgb(225, 225, 225); margin-left: 5%; padding: 2%; width: 90%">
                                <h6> {{ $horse->orienterende_palpatie }}</h6>
                            </div>                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>

        <div class="collapsible_2" style="margin-top: 5px">Bewegingsonderzoek Been

            <i class="fas fa-chevron-circle-down" style="float: right; color: rgb(123, 123, 123); margin-top: 5px"></i>

        </div>

        <div class="content_2">

            <div id="" class="">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4" style="overflow-y:auto; height: 520px; border: 1px solid rgb(223, 223, 223); border-radius: 5px; padding-top: 15px; margin-bottom: 15px">
            <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;
            font-weight: bold">
            <option value="">Front DIJ</option>
            <option value="">Abcuction-adduction</option>
            <option value="">Internal/external rotation</option>
            </select>

            <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;

            font-weight: bold">

            <option value="">Front PIJ</option>
            <option value="">Flexion-extension</option>
            <option value="">Abduction-adduction</option>
            <option value="">Internal/external rotation</option>

            </select>


            <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;
            font-weight: bold">
            <option value="">MPJ</option>
            <option value="">Flexion-extension</option>
            <option value="">Abduction-adduction</option>
            </select>
            <label class="title" style="margin-left: 10%">Proximal sesamoid bones</label>

            <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;font-weight: bold">
            <option value="">Carpal joint</option>
            <option value="">Flexion-extension</option>
            <option value="">Flexion abduction/adduction</option>
            </select>
            <label class="title" style="margin-left: 10%">General latflex CWK</label>

            <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px; font-weight: bold">
            <option value="">Accessory bone</option>
            <option value="">Lateral-medial motion</option>
            </select>


            <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;font-weight: bold">
            <option value="">Elbow</option>
            <option value="">Flexion-extension</option>
            </select>

            <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;
            font-weight: bold">
            <option value="">+ shoulder</option>
            <option value="">Flexion abduction/adduction</option>
            </select>


            <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;
            font-weight: bold">
            <option value="">Ribs</option>
            <option value="">Lateral</option>
            <option value="">Caudal glide</option>
            <option value="">Rostral glide</option>
            </select>



            <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;

            font-weight: bold">
            <option value="">L1-L6</option>
            <option value="">Lateral</option>
            <option value="">Caudal glide</option>
            <option value="">Rostral glide</option>
            </select>


            <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;

            font-weight: bold">
            <option value="">L4-S1</option>
            <option value="">Lateral</option>
            <option value="">Caudal glide</option>
            <option value="">Rostral glide</option>
            </select>


            <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;

            font-weight: bold">
            <option value="">T18-T8</option>
            <option value="">Lateral</option>
            <option value="">Caudal glide</option>
            <option value="">Rostral glide</option>

            </select>


            <select name="" id="" style="border-radius: 5px; border:1px solid rgb(226, 226, 226); width: 100%; height: 50px; background-color: rgba(242, 242, 242, 0.2); padding: 15px;

            font-weight: bold">

            <option value="">Pelvic</option>
            <option value="">General squeeze</option>
            <option value="">Forward rotation ilium general (Li)</option>
            <option value="">Forward rotation ilium general (Re)</option>

            <option value="">Rostral glide</option>

            </select>

            </div>

            <br>

            <div class="col-sm-8">
                <div class="card-body" style="border: 1px solid rgb(230, 230, 230); border-radius: 10px">
                    <br>
                    <img src="/images/paard_skelet.png" class="img2" alt="">
                    <br><br>


                </div>

            </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <button type="button" class="collapsible">Bewegingsonderzoek Been <i class="far fa-question-circle"></i><i class="fas fa-chevron-circle-down" style="margin-top:3px; float: right"></i></button>
                        <div class="content" style="margin-top: 5px">
                            <textarea class="form-control" name="bewegingsonderzoek_been" rows="5">...</textarea>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="border: 1px solid rgb(225, 225, 225); margin-left: 5%; padding: 2%; width: 90%">
                                <h6> {{ $horse->bewegingsonderzoek_been }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <div class="collapsible_2" style="margin-top: 4px">Laser Protocol

                <i class="fas fa-chevron-circle-down" style="float: right; color: rgb(123, 123, 123); margin-top: 5px"></i>

            </div>

            <div class="content_2">
                <div id="" class="">

                    <div class="container">

                        <div class="row">

                            <div class="col-sm-12">

                                <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-radius: 5px">

                                    <br>

                                    <div class="row">

                                        <div class="col">

                                            <img src="/images/paard1.png" id="horse" alt="" style="width: 80%; margin-left: 15%">

                                        </div>

                                        <div class="col">

                                            <img src="/images/paard2.png" id="horse" alt="" style="width: 80%; margin-left: 15%">

                                        </div>

                                    </div>


                                </div>

                                <br>



                                <label class="title">&nbsp; Laser Protocol - Datum </label>

                                <input type="text" name="datum" id="currentDate2" style="max-width: 80%; text-align: left; border: 1px solid rgb(242, 242, 242); padding-left: 10px; font-weight: bold; width: 100px">

                                <div style="margin-left: -5.5%; margin-right: -6%">

                                    <textarea class="form-control" name="laser" rows="3" placeholder="Laser Protocol"></textarea>

                                    <div class="form-group">


                                    </div>

                                </div>

                            </div>

                        <table>

                            <tr>

                                <th>Datum</th>

                                <th>Behandeling</th>



                            </tr>


                            <tr>

                                <td> {{ $horse->datum }}</td>
                                <td> {{ $horse->behandeling }} </td>

                            </tr>
                            <tr>

                                <td> {{ $horse->datum }}</td>
                                <td> {{ $horse->behandeling }} </td>

                            </tr>

                            <tr>

                                <td> {{ $horse->datum }}</td>
                                <td> {{ $horse->behandeling }} </td>

                            </tr>


                        </table>

                        <br>

                    </div>

                </div>

                </div>

            </div>

            </div>

                </div>





            </div>

            <br>
            <div class="form-group" style="margin-top: 15px">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        <i class="fas fa-check"></i>
                        Wijzigingen Opslaan
                    </button>
                </div>
            </div>
        </form>
    </div>
<br><br>
</div>



<script>

    var coll = document.getElementsByClassName("collapsible_2");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active_2");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }

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

var today = new Date();

var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();

document.getElementById("currentDate2").value = date;


</script>


@endsection
