@extends('layouts.app')

@section('content')

<style>
 .collapsible {
  background-color: #f5f3f3;
  color: rgb(56, 56, 56);
  cursor: pointer;
  padding: 13px;
  width: 100%;
  text-align: left;
  outline: none;
  font-size: 15px;
  border: 1px solid rgb(206, 206, 206);
  border-radius: 4px 4px 0 0;

}

.active, .collapsible:hover {
  background-color:rgb(240, 240, 240);
}

.content {
  border-top: none;
  display: none;
  overflow: hidden;
  background-color: #ffffff;
}

</style>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="subnav">


@foreach($horses as $key => $value)
<h2 style="margin-bottom: 2%; color: rgb(46, 114, 187, 0.8)">
    Sessie - {{ $value->name_horse }}
    ({{ $value->datum }})
    &nbsp; &nbsp;
    &nbsp; &nbsp;
    &nbsp; &nbsp;
    &nbsp; &nbsp;

    &nbsp; &nbsp;
<button class="btn btn-success btn-large" style="margin-bottom: 5px; margin-right: 2px"><i class="fas fa-check"></i> Opslaan</button>
<button class="btn btn-primary btn-large" style="margin-bottom: 5px; margin-right: 2px"><i class="fas fa-plus"></i> Toevoegen</button>
<button class="btn btn-ligth btn-large" style="margin-bottom: 5px; border: 1px solid rgb(204, 204, 204); color: gray; margin-right: 2px"><i class="fas fa-info" style="color: gray"></i> Info</button>
<button class="btn btn-danger btn-large" style="margin-bottom: 5px; margin-right: 2px"><i class="fas fa-minus-circle"></i> Verwijderen</button>

</h2>

@endforeach
</div>


<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'Algemeen')" id="defaultOpen">Algemeen</button>
  <button class="tablinks" onclick="openTab(event, 'Historie')">Historie</button>
  <button class="tablinks" onclick="openTab(event, 'Fotos')">Foto's</button>

  <button class="tablinks" onclick="openTab(event, 'Onderzoek')">Onderzoek</button>
  <button class="tablinks" onclick="openTab(event, 'Behandeling_laser')">Laser</button>
  <button class="tablinks" onclick="openTab(event, 'Behandeling_fysio')">Fysio</button>

  <button class="tab_1" style="height: 53.9px; width: 542px; hover: none; background-color: inherit"></button>

</div>


<div id="Algemeen" class="tabcontent">
 <br>


    <div class="container">
        <div class="row">

            <div class="col-sm-4">
                <div class="collapsible" style="color: gray">
                    <h6 style="margin-bottom: 2px; color:color: rgb(153, 153, 153)">
                    Eigenaar  <i class="fas fa-angle-down" style="float: right; margin-top: 4px; color: rgb(148, 148, 148)"></i>

                </h6>
                </div>
        <div class="content">
                <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none"">
                    @foreach($horses as $key => $value)
                    <div class="container" style="border: 1px solid rgb(209, 209, 209); border-radius: 5px">
                          <h6 style="margin-top: 15px; color: rgb(58, 58, 58)">naam : {{ $value->name }} {{ $value->name_owner }}</p>
                          <h6 style="color: rgb(58, 58, 58)">adres: {{ $value->address }}</p>
                          <h6 style="color: rgb(58, 58, 58)">email: {{ $value->email }}</p>
                          <h6 style="color: rgb(58, 58, 58)">tel: {{ $value->phone_number }}</p>
                </div>
            </div>


                    @endforeach

                </div>
                <br>

                <div class="collapsible" style="border: 1px solid rgb(209, 209, 209); color: gray">
                    <h6 style="margin: 1px">
                    Info
                    <i class="fas fa-angle-down" style="float: right; margin-top:4px; color: rgb(148, 148, 148)"></i>
                </h6>
                </div>
                    <div class="content">
                <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none">

                        @foreach($horses as $key => $value)
                        <div class="container" style="border: 1px solid rgb(214, 214, 214); border-radius: 5px">
                                    <p style="margin-top: 15px; color: rgb(58, 58, 58)">naam: {{ $value->name_horse }}</p>

                                    <p style="color: rgb(58, 58, 58)">geslacht: {{ $value->gender }}</p>
                                    <p style="color: rgb(58, 58, 58)">aankoopkeuring: {{ $value->aankoopkeuring }}</p>
                                    <p style="margin-top: 15px; color: rgb(58, 58, 58)">BAR: {{ $value->BAR }}</p>

                        </div>
                        @endforeach
                    </div>
                    </div>
<br>
                <div class="collapsible" style="border: 1px solid rgb(209, 209, 209)">
                   <h6 style="margin: 1px; color: gray">
                    Situatie<i class="fas fa-angle-down" style="float: right; margin-top:4px; color: rgb(148, 148, 148)"></i>
                </h6>

                </div>
                    <div class="content">
                <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none">

                        @foreach($horses as $key => $value)
                        <div class="container" style="border: 1px solid rgb(214, 214, 214); border-radius: 5px">
                        <p style="margin-top: 15px; color: rgb(58, 58, 58)">BAR: {{ $value->BAR }}</p>
                        <p style="color: rgb(58, 58, 58)">voeding: {{ $value->voeding }}</p>
                        <p style="color: rgb(58, 58, 58)">voeten: {{ $value->voeten }}</p>
                        <p style="color: rgb(58, 58, 58)">huisvesting: {{ $value->huisvesting }}</p>
                        <div class="collapsible" style="border: 1px solid rgb(209, 209, 209)">
                            <h6 style="margin: 1px; color: gray">
                             Situatie<i class="fas fa-angle-down" style="float: right; margin-top:4px; color: rgb(148, 148, 148)"></i>
                         </h6>
                        </div>

                        <div class="content">
                            <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none">
                            </div>
                            <br>

                        </div>
                        <br>
                    </div>
                        @endforeach
                    </div>
                    </div>
                    <br><br>
            </div>
            <br>



            <div class="col-sm-8">
                <div class="collapsible" style="border: 1px solid rgb(209, 209, 209); color: gray">
                   <h6 style="margin: 1px">
                    Foto
                    <i class="fas fa-angle-down" style="float: right; margin-top:4px; color: rgb(148, 148, 148)"></i>
                </h6>
                </div>
                    <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none">

                        @foreach($horses as $key => $value)

                        <img class="zoom" src="{{ $value->featured }}" width="80%" style="margin-left: 12%; border: 1px solid rgb(202, 202, 202)">
                       <br>

                        @endforeach

                    </div>

                    <br><br>

                </div>
            </div>
        </div>
    </div>



    <div id="Historie" class="tabcontent">
        <br>


        <div class="container">
            <div class="row">

                <div class="col-sm-4">
                    <div class="collapsible" style="color: gray">
                        <h6 style="margin-bottom: 2px; color:color: rgb(153, 153, 153)">
                        Eigenaar  <i class="fas fa-angle-down" style="float: right; margin-top: 4px; color: rgb(148, 148, 148)"></i>

                    </h6>
                    </div>
            <div class="content">
                    <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none"">
                        @foreach($horses as $key => $value)
                        <div class="container" style="border: 1px solid rgb(209, 209, 209); border-radius: 5px">
                              <h6 style="margin-top: 15px; color: rgb(58, 58, 58)">naam : {{ $value->name }} {{ $value->name_owner }}</p>
                              <h6 style="color: rgb(58, 58, 58)">adres: {{ $value->address }}</p>
                              <h6 style="color: rgb(58, 58, 58)">email: {{ $value->email }}</p>
                              <h6 style="color: rgb(58, 58, 58)">tel: {{ $value->phone_number }}</p>
                    </div>
                </div>


                        @endforeach

                    </div>
                    <br>

                    <div class="collapsible" style="border: 1px solid rgb(209, 209, 209); color: gray">
                        <h6 style="margin: 1px">
                        Info
                        <i class="fas fa-angle-down" style="float: right; margin-top:4px; color: rgb(148, 148, 148)"></i>
                    </h6>
                    </div>
                        <div class="content">
                    <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none">

                            @foreach($horses as $key => $value)
                            <div class="container" style="border: 1px solid rgb(214, 214, 214); border-radius: 5px">
                                        <p style="margin-top: 15px; color: rgb(58, 58, 58)">naam: {{ $value->name_horse }}</p>

                                        <p style="color: rgb(58, 58, 58)">geslacht: {{ $value->gender }}</p>
                                        <p style="color: rgb(58, 58, 58)">aankoopkeuring: {{ $value->aankoopkeuring }}</p>
                                        <p style="margin-top: 15px; color: rgb(58, 58, 58)">BAR: {{ $value->BAR }}</p>

                            </div>
                            @endforeach
                        </div>
                        </div>
    <br>
                    <div class="collapsible" style="border: 1px solid rgb(209, 209, 209)">
                       <h6 style="margin: 1px; color: gray">
                        Situatie<i class="fas fa-angle-down" style="float: right; margin-top:4px; color: rgb(148, 148, 148)"></i>
                    </h6>

                    </div>
                        <div class="content">
                    <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none">

                            @foreach($horses as $key => $value)
                            <div class="container" style="border: 1px solid rgb(214, 214, 214); border-radius: 5px">
                            <p style="margin-top: 15px; color: rgb(58, 58, 58)">BAR: {{ $value->BAR }}</p>
                            <p style="color: rgb(58, 58, 58)">voeding: {{ $value->voeding }}</p>
                            <p style="color: rgb(58, 58, 58)">voeten: {{ $value->voeten }}</p>
                            <p style="color: rgb(58, 58, 58)">huisvesting: {{ $value->huisvesting }}</p>
                            </div>
                            @endforeach

                        </div>
                        </div>
                        <br><br>
                </div>
                <br>



                <div class="col-sm-8">
                    <div class="card-header" style="border: 1px solid rgb(209, 209, 209); border-bottom:none; color: gray">
                        Historie
                    </div>
                        <div class="card-body" style="border: 1px solid rgb(209, 209, 209)">

                            @foreach($horses as $key => $value)
                            <div class="container" style="border: 1px solid rgb(214, 214, 214); border-radius: 5px">
           <hr>
                                <p style="margin-top: 15px; color: rgb(58, 58, 58)">Inspectie in stand  :
<hr>
                                {{ $value->inspectie_stand }}</p>
<hr>
                            </div>
                            @endforeach

                            <br>
    <br><br>
                        </div>

                        <br><br>
                    </div>
                </div>
            </div>
        </div>

<div id="Onderzoek" class="tabcontent">
    <br>


    <div class="container">
        <div class="row">

            <div class="col-sm-4">
                <div class="collapsible" style="color: gray">
                    <h6 style="margin-bottom: 2px; color:color: rgb(153, 153, 153)">
                    Hoofd  <i class="fas fa-angle-down" style="float: right; margin-top: 4px; color: rgb(148, 148, 148)"></i>

                </h6>
                </div>
        <div class="content">
                <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none"">
                    @foreach($horses as $key => $value)
                    <form>

                    <div class="container" style="">
                        <select class="form-control">
                            <option value="" placeholder="">Nek</option>
                            <option value="1" placeholder="1">1</option>
                            <option value="2" placholder="2">2</option>
                            <option value="3" placeholder="3">3</option>
                             </select>
                        <br>
                        <select class="form-control">
                            <br>
                            <option value="" placeholder="">Kaak</option>
                            <option value="1" placeholder="1">1</option>
                            <option value="2" placholder="2">2</option>
                            <option value="3" placeholder="3">3</option>
                            <br>
                        </select>

                    </div>
            </div>

                    @endforeach

                </div>
                <br>

                <div class="collapsible" style="border: 1px solid rgb(209, 209, 209); color: gray">
                    <h6 style="margin: 1px">
                    Lichaam
                    <i class="fas fa-angle-down" style="float: right; margin-top:4px; color: rgb(148, 148, 148)"></i>
                </h6>
                </div>
                    <div class="content">
                <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none">

                        @foreach($horses as $key => $value)
                        <div class="container">
                            <select class="form-control">
                                <option value="" placeholder="">Rug</option>
                                <option value="1" placeholder="1">1</option>
                                <option value="2" placholder="2">2</option>
                                <option value="3" placeholder="3">3</option>
                                 </select>
                            <br>
                            <select class="form-control">
                                <br>
                                <option value="" placeholder="">Buik</option>
                                <option value="1" placeholder="1">1</option>
                                <option value="2" placholder="2">2</option>
                                <option value="3" placeholder="3">3</option>
                                <br>
                            </select>

                        </div>
                        @endforeach
                    </div>
                    </div>
<br>
                <div class="collapsible" style="border: 1px solid rgb(209, 209, 209)">
                   <h6 style="margin: 1px; color: gray">
                    Benen<i class="fas fa-angle-down" style="float: right; margin-top:4px; color: rgb(148, 148, 148)"></i>
                </h6>

                </div>
                    <div class="content">
                <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none">

                        @foreach($horses as $key => $value)
                        <div class="container">
                            <select class="form-control">
                                <option value="" placeholder="">Knie</option>
                                <option value="1" placeholder="1">1</option>
                                <option value="2" placholder="2">2</option>
                                <option value="3" placeholder="3">3</option>
                                 </select>
                            <br>
                            <select class="form-control">
                                <br>
                                <option value="" placeholder="">Heup</option>
                                <option value="1" placeholder="1">1</option>
                                <option value="2" placholder="2">2</option>
                                <option value="3" placeholder="3">3</option>
                                <br>
                            </select>
                            </div>
                        @endforeach
                    </div>
                    </div>
                    <br><br>
            </div>
            <br>



            <div class="col-sm-8">
                <div class="card-header" style="border: 1px solid rgb(209, 209, 209); border-bottom:none; color: gray">
                    Content
                </div>
                    <div class="card-body" style="border: 1px solid rgb(209, 209, 209)">
<br>
                        <img src="/images/paard1.png" id="horse" alt="" style="width: 70%; margin-left: 15%">

                        <br><br>
                    </div>

                    <button class="btn btn-primary btn-sm" style="float: right; margin-right:5px; margin-top: 10px">Achter</button>
                    &nbsp;&nbsp;
                    <button class="btn btn-primary btn-sm" style="float: right; margin-right:5px; margin-top: 10px">Links</button>
                    &nbsp;&nbsp;
                    <button class="btn btn-primary btn-sm" style="float: right; margin-right: 5px; margin-top: 10px">Rechts</button>
                    &nbsp;&nbsp;
                    <button class="btn btn-primary btn-sm" style="float: right; margin-right: 5px; margin-top: 10px">Voor</button>
                    <br><br>
                </div>
            </div>
        </div>
    </div>


<div id="Behandeling_laser" class="tabcontent">
    <br>
    <div class="container">
        <div class="row">

            <div class="col-sm-4">
                <div class="collapsible" style="color: gray">
                    <h6 style="margin-bottom: 2px; color:color: rgb(153, 153, 153)">
                    Behandeling  <i class="fas fa-angle-down" style="float: right; margin-top: 4px; color: rgb(148, 148, 148)"></i>

                </h6>
                </div>
        <div class="content">
                <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none"">
                    @foreach($horses as $key => $value)
                    <div class="container" style="border: 1px solid rgb(209, 209, 209); border-radius: 5px">
                          <h6 style="margin-top: 15px; color: rgb(58, 58, 58)">naam : {{ $value->name }} {{ $value->name_owner }}</p>
                          <h6 style="color: rgb(58, 58, 58)">adres: {{ $value->address }}</p>
                          <h6 style="color: rgb(58, 58, 58)">email: {{ $value->email }}</p>
                          <h6 style="color: rgb(58, 58, 58)">tel: {{ $value->phone_number }}</p>
                </div>
            </div>


                    @endforeach

                </div>
                <br>

                <div class="collapsible" style="border: 1px solid rgb(209, 209, 209); color: gray">
                    <h6 style="margin: 1px">
                    Info
                    <i class="fas fa-angle-down" style="float: right; margin-top:4px; color: rgb(148, 148, 148)"></i>
                </h6>
                </div>
                    <div class="content">
                <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none">

                        @foreach($horses as $key => $value)
                        <div class="container" style="border: 1px solid rgb(214, 214, 214); border-radius: 5px">
                                    <p style="margin-top: 15px; color: rgb(58, 58, 58)">naam: {{ $value->name_horse }}</p>

                                    <p style="color: rgb(58, 58, 58)">geslacht: {{ $value->gender }}</p>
                                    <p style="color: rgb(58, 58, 58)">aankoopkeuring: {{ $value->aankoopkeuring }}</p>
                                    <p style="margin-top: 15px; color: rgb(58, 58, 58)">BAR: {{ $value->BAR }}</p>

                        </div>
                        @endforeach
                    </div>
                    </div>
<br>
                <div class="collapsible" style="border: 1px solid rgb(209, 209, 209)">
                   <h6 style="margin: 1px; color: gray">
                    Voorgaande<i class="fas fa-angle-down" style="float: right; margin-top:4px; color: rgb(148, 148, 148)"></i>
                </h6>

                </div>
                    <div class="content">
                <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none">

                        @foreach($horses as $key => $value)
                        <div class="container" style="border: 1px solid rgb(214, 214, 214); border-radius: 5px">
                        <p style="margin-top: 15px; color: rgb(58, 58, 58)">BAR: {{ $value->BAR }}</p>
                        <p style="color: rgb(58, 58, 58)">voeding: {{ $value->voeding }}</p>
                        <p style="color: rgb(58, 58, 58)">voeten: {{ $value->voeten }}</p>
                        <p style="color: rgb(58, 58, 58)">huisvesting: {{ $value->huisvesting }}</p>
                        </div>
                        @endforeach

                    </div>
                    </div>
                    <br><br>
            </div>

            <div class="col-sm-8">
                <div class="card-header" style="border: 1px solid rgb(209, 209, 209); border-bottom:none; color: gray">
                    Historie
                </div>
                    <div class="card-body" style="border: 1px solid rgb(209, 209, 209)">
<br>
                        <img src="/images/graph.png" alt="" style="width: 80%; margin-left: 10%">
                    </div>

                    <br><br>
                </div>
            </div>
        </div>
    </div>



    <div id="Fotos" class="tabcontent">
<br>

<div class="container">
    <div class="row">

        <div class="col-sm-4">
            <div class="collapsible" style="color: gray">
                <h6 style="margin-bottom: 2px; color:color: rgb(153, 153, 153)">
                Overzicht  <i class="fas fa-angle-down" style="float: right; margin-top: 4px; color: rgb(148, 148, 148)"></i>
            </h6>
        </div>
    <div class="content">
            <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none"">


                @foreach($horses as $key => $value)

                <br>
                <p style="font-weight: lighter;color: rgb(46, 114, 187, 0.8)">datum: {{ $value->datum }}</p>
                <p style="font-weight: lighter;color: rgb(46, 114, 187, 0.8)">behandeling: {{ $value->behandeling }}</p>
                <p style="font-weight: lighter;color: rgb(46, 114, 187, 0.8)">leeftijd: {{ $value->age }}</p>
                <p style="font-weight: lighter;color: rgb(46, 114, 187, 0.8)">ras: {{ $value->breed }}</p>
                <p style="font-weight: lighter;color: rgb(46, 114, 187, 0.8)">geslacht: {{ $value->gender }}</p>
                <p style="font-weight: lighter; color: rgb(46, 114, 187, 0.8)">aankoopkeuring: {{ $value->aankoopkeuring }}</p>
                <p style="font-weight: lighter; color: rgb(46, 114, 187, 0.8)">bezit eigenaar: {{ $value->bezit_eigenaar }}</p>
                <p style="font-weight: lighter; color: rgb(46, 114, 187, 0.8)">huisvesting: {{ $value->huisvesting }}</p>
                <p style="font-weight: lighter; color: rgb(46, 114, 187, 0.8)">medicijnen: {{ $value->medicijnen }}</p>
                <p style="font-weight: lighter; color: rgb(46, 114, 187, 0.8)">klacht: {{ $value->klacht }}</p>
                <p style="font-weight: lighter; color: rgb(46, 114, 187, 0.8)">voeten: {{ $value->voeten }}</p>
                <p style="font-weight: lighter; color: rgb(46, 114, 187, 0.8)">vacht: {{ $value->vacht }}</p>
                <p style="font-weight: lighter; color: rgb(46, 114, 187, 0.8)">mesten: {{ $value->mesten }}</p>

            </div>
            @endforeach
        </div>
        <br>
    </div>





    <div class="col-sm-8">

        <div class="card-header" style="border: 1px solid rgb(209, 209, 209); border-bottom:none; color: gray">

            Foto's
        </div>


        <div class="card-body" style="border: 1px solid rgb(209, 209, 209)">

            @foreach($horses as $key => $value)

            <a href="#">

                <img class="zoom" src="{{ $value->featured }}" width="30%" style="margin-left: 2%; border: 1px solid rgb(202, 202, 202)">

            </a>

            <a href="#">

                <img class="zoom" src="{{ $value->featured }}" width="30%" style="margin-left: 2%; border: 1px solid rgb(202, 202, 202)">

            </a>

            <a href="#">

                <img class="zoom" src="{{ $value->featured }}" width="30%" style="margin-left: 2%; border: 1px solid rgb(202, 202, 202)">
            </a>

            @endforeach



        </div>

                <br>
                <button class="btn btn-sm btn-primary" style="float: right" >Foto's Toevoegen</button>
<br><br>
            </div>
        </div>

    </div>

</div>


<div id="Behandeling_fysio" class="tabcontent">
    <br>

    <div class="container">
        <div class="row">

            <div class="col-sm-4">
                <div class="collapsible" style="color: gray">
                    <h6 style="margin-bottom: 2px; color:color: rgb(153, 153, 153)">
                    Overzicht  <i class="fas fa-angle-down" style="float: right; margin-top: 4px; color: rgb(148, 148, 148)"></i>
                </h6>
            </div>
        <div class="content">
                <div class="card-body" style="border: 1px solid rgb(209, 209, 209); border-top: none"">


                    @foreach($horses as $key => $value)

                    <br>
                </div>
                @endforeach
            </div>
            <br>
        </div>





        <div class="col-sm-8">
            <div class="card-header" style="border: 1px solid rgb(209, 209, 209); border-bottom:none; color: gray">
            Fysio
        </div>


            <div class="card-body" style="border: 1px solid rgb(209, 209, 209)">

                @foreach($horses as $key => $value)

<div style="width: 90%; border: 1px solid gray; margin-left: 5%">
    <br><br>
                <div style="margin-left: 15px; color: rgb(153, 153, 245); background-color: rgb(153, 153, 245); width: 50px">
                    {{ $value->BAR }}
                </div>
                <div style="margin-left: 15px; color: rgb(153, 153, 245); background-color: rgb(153, 153, 245); width: 50px">
                    {{ $value->BAR }}
                </div>
                 @endforeach

                </div>
<div class="numbers">
           <h5 style="margin-left: 60px">1
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  2
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  3
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  4
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      5</h5>

            </div>

            </div>

                    <br>

                </div>
            </div>

        </div>

    </div>

{{-- SCRIPT SCRIPT SCRIPT --}}

<script>
    function openTab(evt, tabName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();


    /// Collapsible

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

</script>



@endsection
