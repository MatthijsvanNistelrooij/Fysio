@extends('layouts.app')

@section('content')

@foreach($horses as $horse)

    <div class="card" style="border: none">
                <div class="d-flex justify-content-between">

<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal2" style="width: 19.5%; border: 1px solid rgb(230, 230, 230); max-height: 40px; overflow: hidden;">
{{-- Info  {{ $horse->name_horse }} --}}
<i class="fas fa-info" style="color: gray"></i>
</button>
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal3" style="width: 19.5%; border: 1px solid rgb(230, 230, 230); max-height: 40px; overflow: hidden">
{{-- Contact Info --}}
<i class="fas fa-phone" style="color: gray"></i>
</button>
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal4" style="width: 19.5%; border: 1px solid rgb(230, 230, 230); max-height: 40px; overflow: hidden">
{{-- Sessie Overzicht --}}
<i class="fas fa-list" style="color: rgb(126, 126, 126)"></i>
</button>
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal5" style="width: 19.5%; border: 1px solid rgb(230, 230, 230); max-height: 40px; overflow: hidden">
{{-- Foto's --}}
<i class="fas fa-image" style="color: rgb(104, 104, 104); font-size: 17px"></i>
</button>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal6" style="width: 19.5%; border: 1px solid rgb(230, 230, 230); max-height: 40px; overflow: hidden
; background-color: rgb(131, 218, 0)">
    <i class="fas fa-edit" style="font-size: 15px"></i>
{{-- Edit --}}
</button>


    </div>
        <div class="card-body">
            <div class="row">
                <div class="col--md-12">
                    <strong>
                        {{ $horse->name_horse }} ( {{ $horse->achternaam }}, {{ $horse->name_owner }} )
                    </strong>
                    <hr>
                </div>
                <div class="col">
                    <p>
                     <span style="font-weight: bold">Situatie:
                         </span>    {{ $horse->situatie }}
                    </p>
                    <p>
                     <span style="font-weight: bold">Klachten:
                         </span>  {{ $horse->klacht }}
                    </p>
                    <p>
                      <span style="font-weight: bold">Veranderingen:
                          </span>   {{ $horse->verandering }}
                    </p>

                </div>
                <div class="col">
                    <button type="button" data-toggle="modal" data-target="#exampleModal5" style="border: none; padding: -5px">
                        <img src="{{$horse->image}}" style="width: 100%; float: right">
                    </button>
                </div>
            </div>
            <br>
        </div>
    </div>
    <br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="width: 95%; margin-left:2%; font-weight: bold">
        <i class="fas fa-play-circle"></i>
         Start Consult
    </button>
    <br>
@endforeach

<br>
<div class="modal fade-lg bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Consult {{ $horse->name_horse }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

<div class="card mt-4">
    <div class="card-header">Nieuw Consult</div>
    <div class="card-body">
@auth
<form action="{{ route('horses.sessie', $horse->id, $horse->name_horse) }}" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-4">
            <label for="reply" style="margin-bottom: 35px">Datum:</label>
         <br>
            <label for="reply" style="margin-bottom: 35px">Type:</label>
            <br>
            <br>
        </div>
        <div class="col-md-8">
            <input class="form-control" type="date" name="datum" id="datePicker" value="...">
            <br>
                <select name="behandeling" id="" class="form-control">
                        <option value="Fysiotherapeutische Behandeling">Fysiotherapeutische Behandeling</option>
                        <option value="Laser Behandeling">Laser Behandeling</option>

                </select>
                <br>



  <div class="inputs">
      <input type="text" name="bbl36" id="" value="...">
    <input type="text" name="name_horse" value="{{ $horse->name_horse }}">
    <input type="text" name="inspectie_stand" value="...">
    <input type="text" name="orienterende_palpatie" value="...">
    <input type="text" name="lp1" value="...">
    <input type="text" name="lp2" value="...">
    <input type="text" name="bbr1" value="...">
    <input type="text" name="bbr2" value="...">
    <input type="text" name="bbr3" value="...">
    <input type="text" name="bbr4" value="...">
    <input type="text" name="bbr5" value="...">
    <input type="text" name="bbr6" value="...">
    <input type="text" name="bbr7" value="...">
    <input type="text" name="bbr8" value="...">
    <input type="text" name="bbr9" value="...">
    <input type="text" name="bbr10" value="...">
    <input type="text" name="bbr11" value="...">
    <input type="text" name="bbr12" value="...">
    <input type="text" name="bbr13" value="...">
    <input type="text" name="bbr14" value="...">
    <input type="text" name="bbr15" value="...">
    <input type="text" name="bbr16" value="...">
    <input type="text" name="bbr17" value="...">
    <input type="text" name="bbr18" value="...">
    <input type="text" name="bbr19" value="...">
    <input type="text" name="bbr20" value="...">
    <input type="text" name="bbr21" value="...">
    <input type="text" name="bbr22" value="...">
    <input type="text" name="bbr23" value="...">
    <input type="text" name="bbr24" value="...">
    <input type="text" name="bbr25" value="...">
    <input type="text" name="bbr26" value="...">
    <input type="text" name="bbr27" value="...">
    <input type="text" name="bbr28" value="...">
    <input type="text" name="bbr29" value="...">
    <input type="text" name="bbr30" value="...">
    <input type="text" name="bbr31" value="...">
    <input type="text" name="bbr32" value="...">
    <input type="text" name="bbr33" value="...">
    <input type="text" name="bbr34" value="...">
    <input type="text" name="bbr35" value="...">
    <input type="text" name="bbr36" value="...">
    <input type="text" name="bbl1" value="...">
    <input type="text" name="bbl2" value="...">
    <input type="text" name="bbl3" value="...">
    <input type="text" name="bbl4" value="...">
    <input type="text" name="bbl5" value="...">
    <input type="text" name="bbl6" value="...">
    <input type="text" name="bbl7" value="...">
    <input type="text" name="bbl8" value="...">
    <input type="text" name="bbl9" value="...">
    <input type="text" name="bbl10" value="...">
    <input type="text" name="bbl11" value="...">
    <input type="text" name="bbl12" value="...">
    <input type="text" name="bbl13" value="...">
    <input type="text" name="bbl14" value="...">
    <input type="text" name="bbl15" value="...">
    <input type="text" name="bbl16" value="...">
    <input type="text" name="bbl17" value="...">
    <input type="text" name="bbl18" value="...">
    <input type="text" name="bbl19" value="...">
    <input type="text" name="bbl20" value="...">
    <input type="text" name="bbl21" value="...">
    <input type="text" name="bbl22" value="...">
    <input type="text" name="bbl23" value="...">
    <input type="text" name="bbl24" value="...">
    <input type="text" name="bbl25" value="...">
    <input type="text" name="bbl26" value="...">
    <input type="text" name="bbl27" value="...">
    <input type="text" name="bbl28" value="...">
    <input type="text" name="bbl29" value="...">
    <input type="text" name="bbl30" value="...">
    <input type="text" name="bbl31" value="...">
    <input type="text" name="bbl32" value="...">
    <input type="text" name="bbl33" value="...">
    <input type="text" name="bbl34" value="...">
    <input type="text" name="bbl35" value="...">
    <input type="text" name="" value="...">
    <input type="text" name="bo1" value="...">
    <input type="text" name="bo2" value="...">
    <input type="text" name="bo3" value="...">
    <input type="text" name="bo4" value="...">
    <input type="text" name="bo5" value="...">
    <input type="text" name="bo6" value="...">
    <input type="text" name="bo7" value="...">
    <input type="text" name="bo8" value="...">
    <input type="text" name="bo9" value="...">
    <input type="text" name="bo10" value="...">
    <input type="text" name="bo11" value="...">
    <input type="text" name="bo12" value="...">
    <input type="text" name="bo13" value="...">
    <input type="text" name="bo14" value="...">
    <input type="text" name="bo15" value="...">
    <input type="text" name="bo16" value="...">
    <input type="text" name="bo17" value="...">
    <input type="text" name="bo18" value="...">
    <input type="text" name="bo19" value="...">
    <input type="text" name="bo20" value="...">
    <input type="text" name="bo21" value="...">
    <input type="text" name="bo22" value="...">
    <input type="text" name="bo23" value="...">
    <input type="text" name="bo24" value="...">
    <input type="text" name="bo25" value="...">
    <input type="text" name="bo26" value="...">
    <input type="text" name="bo27" value="...">
    <input type="text" name="bo28" value="...">
    <input type="text" name="bo29" value="...">
    <input type="text" name="bo30" value="...">
    <input type="text" name="bo31" value="...">
    <input type="text" name="bo32" value="...">
    <input type="text" name="bo33" value="...">
    <input type="text" name="bo34" value="...">
    <input type="text" name="bo35" value="...">
    <input type="text" name="bo36" value="...">
    <input type="text" name="bo37" value="...">
    <input type="text" name="bo38" value="...">
    <input type="text" name="bo39" value="...">
    <input type="text" name="bo40" value="...">
    <input type="text" name="bo41" value="...">
    <input type="text" name="bo42" value="...">
    <input type="text" name="bo43" value="...">
    <input type="text" name="bo44" value="...">
    <input type="text" name="bo45" value="...">
    <input type="text" name="bo46" value="...">
    <input type="text" name="bo47" value="...">
    <input type="text" name="bo48" value="...">
    <input type="text" name="bo49" value="...">
    <input type="text" name="bo50" value="...">
    <input type="text" name="bo51" value="...">
    <input type="text" name="bo52" value="...">
    <input type="text" name="bo53" value="...">
    <input type="text" name="bo54" value="...">
    <input type="text" name="bo55" value="...">
    <input type="text" name="bo56" value="...">
    <input type="text" name="bo57" value="...">
    <input type="text" name="bo58" value="...">
    <input type="text" name="bo59" value="...">
    <input type="text" name="bo60" value="...">
    <input type="text" name="bo61" value="...">
    <input type="text" name="bo62" value="...">
    <input type="text" name="bo63" value="...">
    <input type="text" name="bo64" value="...">
    <input type="text" name="bo65" value="...">
    <input type="text" name="bo66" value="...">
    <input type="text" name="bo67" value="...">
    <input type="text" name="ib1" value="...">
    <input type="text" name="ib2" value="...">
    <input type="text" name="ib3" value="...">
    <input type="text" name="ib4" value="...">
    <input type="text" name="ib5" value="...">
    <input type="text" name="ib6" value="...">
    <input type="text" name="ib7" value="...">
    <input type="text" name="ib8" value="...">
    <input type="text" name="ib9" value="...">
    <input type="text" name="ib10" value="...">
    <input type="text" name="ib11" value="...">
    <input type="text" name="ib12" value="...">
    <input type="text" name="ib13" value="...">
    <input type="text" name="ib14" value="...">
    <input type="text" name="ib15" value="...">
    <input type="text" name="ib16" value="...">
    <input type="text" name="ib17" value="...">
    <input type="text" name="ib18" value="...">
    <input type="text" name="ib19" value="...">
</div>

        </div>
    </div>
      <br>
        <button class="btn btn-success" type="submit">
            <i class="fas fa-check"></i>
            Opslaan</button>


@else
<a href="{{ route('login') }}" class="btn btn-info" style="color: white">Sign in to add Sessie</a>
@endauth
</div>
</div>
        </div>

      </div>
    </div>
  </div>
</form>


<div class="modal fade-lg bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Info {{ $horse->name_horse }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <div class="card mt-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Naam Paard:</p>
                            <p>Eigenaar:</p>
                            <p>Kleur:</p>
                            <p>Geslacht:</p>
                            <p>Leeftijd:</p>
                            <p>Ras:</p>
                            <p>Alternatief Adres:</p>
                            <p>Foto:</p>

                        </div>
                        <div class="col-md-6">
                            <p>{{ $horse->name_horse }}</p>
                            <p>{{ $horse->name_owner }}</p>
                            <p>{{ $horse->color }}</p>
                            <p>{{ $horse->gender }}</p>
                            <p>{{ $horse->age }} jaar</p>
                            <p>{{ $horse->breed }}</p>
                            <p>{{ $horse->alternatief_adres }}</p>
                            <p>{{ $horse->alternatief_adres }}</p>

                        </div>
                    </div>
                </div>

            </div>
                <div class="modal-footer">

                     </div>


</div>
</div>
    </div>
</div>



<div class="modal fade-lg bd-example-modal-lg" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Contact {{ $horse->name_owner }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <div class="card mt-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p>Eigenaar:</p>
                        <p>Achternaam:</p>
                        <p>Adres:</p>
                        <p>Postcode:</p>
                        <p>Tel.:</p>
                        <p>Email:</p>

                        <br><br><br>
                    </div>
                    <div class="col-md-6">
                        <p>{{ $horse->name_owner }}</p>
                        <p>{{ $horse->achternaam }}</p>
                        <p>{{ $horse->address }}</p>

                        <p>p</p>
                        <p>{{ $horse->phone_number }}</p>
                        <p>{{ $horse->email }}</p>

                    </div>

                </div>
            </div>
        </div>
            <div class="modal-footer">

              </div>

        </div>
      </div>
    </div>
</div>


<div class="modal fade-lg bd-example-modal-lg" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%;">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Overzicht {{ $horse->name_horse }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <div class="card mt-2">

            <div class="card-body" style="min-height: 200px">

              @foreach ($horse->sessies as $sessie )
              <div class="row">
                  <div class="col">
                    {{ $sessie->datum }}: {{ $sessie->bbl36 }}
                  </div>
              </div>
              @endforeach
            </div>
        </div>
        </div>

     <br>
    </div>
    </div>
</div>


<div class="modal fade-lg bd-example-modal-lg" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Foto's {{ $horse->name_horse }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col">

                                <img src="{{$horse->image}}" style="width: 10%; padding: 5px">

                            </div>
                        </div>
                            <div class="container" style="padding: 15px; border-top: none; overflow: hidden; height: auto">
                                <div class="row">
                                    <div class="col-sm-12" style="overflow-y:auto; height: 750px; border: 1px solid rgb(223, 223, 223); border-radius: 5px; padding-top: 15px; margin-bottom: 15px">
                                        <img src="{{$horse->image}}" style="width: 100%; padding: 5px">
                                        <img src="{{$horse->image}}" style="width: 100%; padding: 5px">
                                        <img src="{{$horse->image}}" style="width: 100%; padding: 5px">
                                        <img src="{{$horse->image}}" style="width: 100%; padding: 5px">


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



<div class="modal fade-lg bd-example-modal-lg" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Info {{ $horse->name_horse }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                            <div class="container" style="padding: 15px; border-top: none; overflow: hidden; height: auto">
                                <div class="row">
                                    <div class="col-sm-12" style="overflow-y:auto; height: 750px; border: 1px solid rgb(223, 223, 223); border-radius: 5px; padding-top: 15px; margin-bottom: 15px">
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
                                                            <label for="" class="title1">Alternatief adres:</label><br>
                                                            <label for="" class="title1">Foto:</label><br>

                                                        </div>
                                            <div class="col-md-4">
                                                <input class="form-control" type="text" name="name_horse" style="margin-bottom: 15px" value="{{ $horse->name_horse }}">
                                                <div class="form-group">
                                                    <select name="gender" id="" class="form-control">
                                                        <option value="{{ $horse->gender }}">{{ $horse->gender }}</option>
                                                        <option value="hengst">hengst</option>
                                                        <option value="merrie">merrie</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="age" class="form-control" style="margin-bottom: 15px" value="{{ $horse->age }}">
                                                <input type="text" name="breed" class="form-control" style="margin-bottom: 15px" value="{{ $horse->breed }}">
                                                <input type="text" name="color" class="form-control" style="margin-bottom: 15px" value="{{ $horse->color }}">
                                                <input type="text" name="alternatief_adres" class="form-control" style="margin-bottom: 15px" value="{{ $horse->alternatief_adres }}">


                                          <div class="form-group">

                                                <img src="{{ $horse->image }}" alt="" style="width: 100px">

                                          </div>
                                          <input type="file" name="image" class="form-control" style="margin-bottom: 15px">
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
                            <input type="text" name="name_owner" class="form-control" style="margin-bottom: 15px" value="{{ $horse->name_owner }}">
                            <input type="text" name="achternaam" class="form-control" style="margin-bottom: 15px" value="{{ $horse->achternaam }}">
                            <input type="text" name="address" class="form-control" style="margin-bottom: 15px" value="{{ $horse->address }}">
                            <input type="text" name="postcode" class="form-control" style="margin-bottom: 15px" value="{{ $horse->phone_number }}">

                            <input type="text" name="phone_number" class="form-control" style="margin-bottom: 15px" value="{{ $horse->phone_number }}">
                            <input type="text" name="email" class="form-control" style="margin-bottom: 15px" value="{{ $horse->email }}">
                            <button class="btn btn-success" type="submit" style="float: right">
                                <i class="fas fa-check"></i>
                                Opslaan
                            </button>
                        </div>


                        <div class="row">
                            <div class="col-md-2"><br><br>
                                <label for="" class="title1" style="margin-top: 10px">Situatie:</label><br><br><br>
                                <label for="" class="title1" style="margin-top: 40px">Klacht:</label><br><br>
                                <label for="" class="title1" style="margin-top: 80px">Veranderingen:</label>
                                <br><br>
                            </div>
                            <div class="col-md-10">
                            <div class="info">
                                <h6 style="font-size: 15px; margin-top: 3px">
                                    <i class="far fa-question-circle"></i>
                                    Huisvesting & ondergrond / Hoe lang in bezit eigenaar? / Aankoopkeuring? / Voorgeschiedenis ( dracht / hengstigheid)</h6>
                                </div>
                                <textarea name="situatie" id="" cols="5" rows="3" class="form-control" style="margin-bottom: 15px">{{ $horse->situatie }}</textarea>
                                <div class="info">
                                    <h6 style="font-size: 15px; margin-top: 3px">
                                        <i class="far fa-question-circle"></i>
                                        Verloop / huidige status / ++ / --</h6>
                                    </div>
                                    <textarea name="klacht" id="" cols="5" rows="3" class="form-control" style="margin-bottom: 15px">{{ $horse->klacht }}</textarea>
                                    <div class="info">
                                        <h6 style="font-size: 15px; margin-top: 3px">
                                            <i class="far fa-question-circle"></i>
                                            Veranderingen / uiterlijk / gedrag / mesten / urineren / voeding / hoeven / tanden / harnachement / medicijnen / overig</h6>
                                        </div>
                                        <textarea name="verandering" id="" cols="5" rows="3" class="form-control" style="margin-bottom: 15px">{{ $horse->verandering }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <br>
                            <br>
                            <div class="form-group">


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
            </div>
        </div>
      </div>
    </div>
</div>

</div>






<div class="card">
    <div class="card-header">
<strong>Overzicht Consulten</strong>

<select name="" id=""  class="form-select" style="width: 18%; float: right; margin: -6px; margin-right: -14px; margin-bottom: -7px; border: none; border-radius: 0" class="form-control">
    <option value="">Standaard </option>
    <option value="">Datum (nieuw-oud)</option>
    <option value="">Datum (oud-nieuw)</option>
    <option value="">Type Consult</option>
</select>

</div>
<div class="card-body" style="background-image: url('/images/wp.jpg')">

  <div class="row">
@foreach($horse->sessies as $sessie)
<div class="col">
    </select>
    <a href="{{ URL::to('sessies/' . $sessie->id ) }}" style="text-decoration: none">
        <div class="card my-4" style="width: 100%; min-width: 180px; max-width: 190px; float: left; min-height: 140px">
            <div class="card-header">
                Consult: {{ $sessie->datum }}
                <i class="fas fa-thumbtack" style="float: right; color: rgba(74, 248, 0, 0.8); margin-right: -8px; font-size: 10px"></i>
            </div>
                <div>
                </div>
                <div class="card-body">
                    {{ $sessie->behandeling }}
            </div>
        </a>
        </div>
    </div>
@endforeach

</div>
<div>
</div>

</div>


<script>
document.getElementById('datePicker').value = new Date().toDateInputValue();


    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
@endsection
