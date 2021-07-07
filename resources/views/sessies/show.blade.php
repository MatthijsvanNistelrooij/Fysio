@extends('layouts.app')
@section('content')


@foreach ($sessies as $sessie )


<button class="btn btn-info">
    <a href="{{ URL::to('/horses/' . $sessie->horse_id ) }}" style="text-decoration: none; color: rgb(255, 255, 255);">
        <i class="far fa-arrow-alt-circle-left"></i>
             Terug naar   {{ $sessie->name_horse}}
</a>

</button>
<div class="card my-2">
    <div class="card-header" style="max-height: 44px">
                <strong>Sessie:   {{ $sessie->name_horse }} {{ $sessie->datum }}</strong>
    </div>
    <div class="card-body">

</div>
<div class="row" style="width: 95%; margin-left: 2%; margin-bottom: 1%">
    <div class="col"><button type="button" class="tile" data-toggle="modal" data-target="#exampleModal6">
        <h6 class="zoom">
           Algemene Indruk <br>
           <i class="far fa-question-circle" style="font-size: 40px; margin-top:5px"></i>
        </h6>

     </button>
    </div>

    <div class="col"><button type="button" class="tile2" data-toggle="modal" data-target="#exampleModal3">
        <h6 class="zoom">
            Laser Protocol <br>
            <i class="fas fa-stream" style="font-size: 40px; margin-top:5px"></i>

        </h6>
     </button>
    </div>
     <div class="col"><button type="button" class="tile3" data-toggle="modal" data-target="#exampleModal4">
        <h6 class="zoom">
            Beweging Been (rechts) <br>
            <i class="fas fa-angle-double-right" style="font-size: 40px; margin-top:5px"></i>
        </h6>
     </button>
    </div>
</div>

<div class="row" style="width: 95%; margin-left: 2%">
    <div class="col">
        <button type="button" class="tile4" data-toggle="modal" data-target="#exampleModal5">
            <h6 class="zoom">
                Inspectie in Beweging <br>
                <i class="fas fa-arrows-alt" style="font-size: 40px; margin-top:5px"></i>
            </h6>
        </button>
    </div>

    <div class="col"><button type="button" class="tile5" data-toggle="modal" data-target="#exampleModal2">
        <h6 class="zoom">
            Bewegingsonderzoek <br>
            <i class="fas fa-compress-arrows-alt" style="font-size: 40px; margin-top: 5px"></i>

        </h6>
     </button>
    </div>
     <div class="col"><button type="button" class="tile6" data-toggle="modal" data-target="#exampleModal7">
        <h6 class="zoom">
            Beweging Been (links) <br>
            <i class="fas fa-angle-double-left" style="font-size: 40px; margin-top: 5px"></i>

        </h6>

     </button>
    </div>
</div>
<br>
<br>
<div class="modal fade-xg bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bewegingsonderzoek {{ $sessie->name_horse }} ({{ $sessie->datum }}) </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
           <form action="{{ route('sessies.update', ['id' =>$sessie->id ]) }}" method="get"  enctype="multipart/form-data">
                {{ csrf_field() }}
        <div class="modal-body">

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4" style="overflow:scroll; height: 650px; overflow-x: hidden; margin-bottom: 50px">
                        <button data-toggle="collapse" data-target="#demo" class="collapsible" style="border-radius: 5px" type='button'>
                            <span>TMJ</span>
                            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                        </button>

                        <div id="demo" class="collapse">
                            <h6 for="lateral" class="title">Lateral</h6>
                            <select name="bo1" id="" class="form-control" style="padding-left: 42%">
                                <option value="{{ $sessie->bo1 }}">{{ $sessie->bo1 }}</option>
                                <option value="li">( li )</option>
                                <option value="re">( re )</option>
                            </select>
                            <input type="text" name="bo2" class="form-control" style="margin-top: 5px; margin-bottom:5px" value="{{ $sessie->bo2 }}">

                            <h6 for="lateral" class="title">Caudal glide</h6>
                            <select name="bo3" id="" class="form-control" style="padding-left: 42%">
                                <option value="{{ $sessie->bo3 }}">{{ $sessie->bo3 }}</option>

                                <option value="li">( li )</option>
                                <option value="re">( re )</option>
                            </select>
                            <input type="text" name="bo4" class="form-control" style="margin-top: 5px" value="{{ $sessie->bo4 }}">

                            <h6 for="lateral" class="title">Rostral glide</h6>
                            <select name="bo5" id="" class="form-control" style="padding-left: 42%">
                                <option value="{{ $sessie->bo5 }}">{{ $sessie->bo5 }}</option>

                                <option value="li">( li )</option>
                                <option value="re">( re )</option>
                            </select>
                            <input type="text" name="bo6" class="form-control" style="margin-top: 5px; margin-bottom:5px" value="{{ $sessie->bo6 }}">
                        </div>

                    <button data-toggle="collapse" data-target="#demo1" class="collapsible" style="border-radius: 5px" type='button'>
                        <span>Hyoid</span>
                        <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                    </button>

                    <div id="demo1" class="collapse">
                        <h6 for="lateral" class="title">Dorsal</h6>

                        <input type="text" name="bo8" class="form-control" style="margin-top: 5px" value="{{ $sessie->bo8 }}">

                        <h6 for="lateral" class="title">Lateral</h6>
                        <select name="bo9" id="" class="form-control" style="padding-left: 42%">
                            <option value="{{ $sessie->bo9 }}">{{ $sessie->bo9 }}</option>

                            <option value="li">( li )</option>
                            <option value="re">( re )</option>
                        </select>
                        <input type="text" name="bo10" class="form-control" style="margin-top: 5px; margin-bottom:5px" value="{{ $sessie->bo10 }}">
                    </div>

                    <button data-toggle="collapse" data-target="#demo200" class="collapsible" style="border-radius: 5px" type='button'>
                        <span>General extension CWK</span>
                        <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                    </button>

                    <div id="demo200" class="collapse">
                        <input type="text" name="bo7" class="form-control" style="margin-top: 5px; margin-bottom:5px" value="{{ $sessie->bo7 }}">
                    </div>

                    <button data-toggle="collapse" data-target="#demo2" class="collapsible" style="border-radius: 5px" type='button'>
                        <span>C0-C1</span>
                        <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                    </button>

                    <div id="demo2" class="collapse">
                        <h6 for="lateral" class="title">Flexie</h6>
                        <input type="text" name="bo12" class="form-control" style="margin-top: 5px" value="{{ $sessie->bo12 }}">

                        <h6 for="lateral" class="title">Extensie</h6>
                        <input type="text" name="bo14" class="form-control" style="margin-top: 5px" value="{{ $sessie->bo14 }}">

                        <h6 for="lateral" class="title">Lateroflexie</h6>
                        <select name="bo15" id="" class="form-control" style="padding-left: 42%">
                            <option value="{{ $sessie->bo15 }}">{{ $sessie->bo15 }}</option>

                            <option value="li">( li )</option>
                            <option value="re">( re )</option>
                        </select>
                        <input type="text" name="bo16" class="form-control" style="margin-top: 5px; margin-bottom:5px" value="{{ $sessie->bo16 }}">
                    </div>

                <button data-toggle="collapse" data-target="#demo3" class="collapsible" style="border-radius: 5px" type='button'>
                    <span>C1-C2</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo3" class="collapse">
                    <h6 for="lateral" class="title">Rotatie</h6>
                    <select name="bo17" id="" class="form-control" style="padding-left: 42%">
                        <option value="{{ $sessie->bo17 }}">{{ $sessie->bo17 }}</option>

                        <option value="li">( li )</option>
                        <option value="re">( re )</option>
                    </select>
                    <input type="text" name="bo18" class="form-control" style="margin-top: 5px; margin-bottom:5px" value="{{ $sessie->bo18 }}">
                </div>
                <button data-toggle="collapse" data-target="#demo201" class="collapsible" style="border-radius: 5px" type='button'>
                    <span>General latflex CWK</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo201" class="collapse">
                    <select name="bo11" id="" class="form-control" style="padding-left: 42%">
                        <option value="{{ $sessie->bo11 }}">{{ $sessie->bo11 }}</option>

                        <option value="li">( li )</option>
                        <option value="re">( re )</option>
                    </select>
                    <input type="text" name="bo13" class="form-control" style="margin-top: 5px; margin-bottom:5px" value="{{ $sessie->bo13 }}">
                </div>

                <button data-toggle="collapse" data-target="#demo4" class="collapsible" style="border-radius: 5px" type='button'>
                    <span>C2-C7</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo4" class="collapse">
                    <h6 for="lateral" class="title">Lateroflexie</h6>
                    <select name="bo19" id="" class="form-control" style="padding-left: 42%">
                        <option value="{{ $sessie->bo19 }}">{{ $sessie->bo19 }}</option>

                        <option value="li">( li )</option>
                        <option value="re">( re )</option>
                    </select>
                    <input type="text" class="form-control" style="margin-top: 5px" name="bo20" value="{{ $sessie->bo20 }}">
                    <h6 for="lateral" class="title">Flexie</h6>
                    <input type="text" class="form-control" style="margin-top: 5px" name="bo21" value="{{ $sessie->bo21 }}">
                    <h6 for="lateral" class="title">Extensie</h6>

                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo22" value="{{ $sessie->bo22 }}">

                </div>

                <button data-toggle="collapse" data-target="#demo5" class="collapsible" style="border-radius: 5px" type='button'>
                    <span>T3-T10</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo5" class="collapse">
                    <h6 for="lateral" class="title">General flexion</h6>
                    <input type="text" class="form-control" style="margin-top: 5px" name="bo25" value="{{ $sessie->bo25 }}">

                    <h6 for="lateral" class="title">Specific flexion</h6>
                    <input type="text" class="form-control" style="margin-top: 5px" name="bo26" value="{{ $sessie->bo26 }}">

                    <h6 for="lateral" class="title">General rot/latflex</h6>
                    <select name="bo27" id="" class="form-control" style="padding-left: 42%">
                        <option value="{{ $sessie->bo27 }}">{{ $sessie->bo27 }}</option>

                        <option value="li">( li )</option>
                        <option value="re">( re )</option>
                    </select>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo28" value="{{ $sessie->bo28 }}">

                    <h6 for="lateral" class="title">Specific rot/latflex</h6>
                    <select name="bo29" id="" class="form-control" style="padding-left: 42%">
                        <option value="{{ $sessie->bo29 }}">{{ $sessie->bo29 }}</option>

                        <option value="li">( li )</option>
                        <option value="re">( re )</option>
                    </select>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo30" value="{{ $sessie->bo30 }}">

                    <h6 for="lateral" class="title">Specific extension</h6>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom: 5px" name="bo31" value="{{ $sessie->bo31 }}">

                </div>

                <button data-toggle="collapse" data-target="#demo6" class="collapsible" style="border-radius: 5px" type='button'>
                    <span>T10-L6</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo6" class="collapse">
                    <h6 for="lateral" class="title">Active extension cranial - caudal</h6>
                    <input type="text" class="form-control" style="margin-top: 5px" name="bo32" value="{{ $sessie->bo32 }}">

                    <h6 for="lateral" class="title">Active flexion caudal -cranial</h6>
                    <input type="text" class="form-control" style="margin-top: 5px" name="bo33" value="{{ $sessie->bo33 }}">

                    <h6 for="lateral" class="title">Passive regional lateral bending</h6>
                    <select name="bo34" id="" class="form-control" style="padding-left: 42%">
                        <option value="{{ $sessie->bo34 }}">{{ $sessie->bo34 }}</option>

                        <option value="li">( li )</option>
                        <option value="re">( re )</option>
                    </select>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo35" value="{{ $sessie->bo35 }}">

                    <h6 for="lateral" class="title">Flexion segmental</h6>

                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo37" value="{{ $sessie->bo37 }}">

                    <h6 for="lateral" class="title">Latflex/rot</h6>
                    <select name="bo38" id="" class="form-control" style="padding-left: 42%">
                        <option value="{{ $sessie->bo38 }}">{{ $sessie->bo38 }}</option>

                        <option value="li">( li )</option>
                        <option value="re">( re )</option>
                    </select>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo39" value="{{ $sessie->bo39 }}">
                </div>


                <button data-toggle="collapse" data-target="#demo7" class="collapsible" style="border-radius: 5px" type='button'>
                    <span>Ribs</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo7" class="collapse">
                    <h6 for="lateral" class="title">Cranial-caudal - cranial</h6>
                    <select name="bo40" id="" class="form-control" style="padding-left: 42%">
                        <option value="{{ $sessie->bo40 }}">{{ $sessie->bo40 }}</option>

                        <option value="li">( li )</option>
                        <option value="re">( re )</option>
                    </select>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo41" value="{{ $sessie->bo41 }}">

                    <h6 for="lateral" class="title">Dorso-ventral</h6>
                    <select name="bo42" id="" class="form-control" style="padding-left: 42%">
                        <option value="{{ $sessie->bo42 }}">{{ $sessie->bo42 }}</option>

                        <option value="li">( li )</option>
                        <option value="re">( re )</option>
                    </select>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo43" value="{{ $sessie->bo43 }}">
                </div>


                <button data-toggle="collapse" data-target="#demo8" class="collapsible" style="border-radius: 5px" type='button'>
                    <span>L1-L6</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo8" class="collapse">
                    <h6 for="lateral" class="title">Extension SP</h6>
                    <select name="bo44" id="" class="form-control" style="padding-left: 42%">
                        <option value="{{ $sessie->bo44 }}">{{ $sessie->bo44 }}</option>

                        <option value="li">( li )</option>
                        <option value="re">( re )</option>
                    </select>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo45" value="{{ $sessie->bo45 }}">

                    <h6 for="lateral" class="title">Extension AP</h6>
                    <select name="bo46" id="" class="form-control" style="padding-left: 42%">
                        <option value="{{ $sessie->bo46 }}">{{ $sessie->bo46 }}</option>

                        <option value="li">( li )</option>
                        <option value="re">( re )</option>
                    </select>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo47" value="{{ $sessie->bo47 }}">
        </div>


        <button data-toggle="collapse" data-target="#demo9" class="collapsible" style="border-radius: 5px" type='button'>
            <span>L4-S1</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo9" class="collapse">
            <h6 for="lateral" class="title">Extension Intertransverse</h6>
            <select name="bo48" id="" class="form-control" style="padding-left: 42%">
                <option value="{{ $sessie->bo48 }}">{{ $sessie->bo48 }}</option>

                <option value="li">( li )</option>
                <option value="re">( re )</option>
            </select>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo49" value="{{ $sessie->bo49 }}">

        </div>

        <button data-toggle="collapse" data-target="#demo10" class="collapsible" style="border-radius: 5px" type='button'>
            <span>T18-T8</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo10" class="collapse">
            <h6 for="lateral" class="title">Extension</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom: 5px" name="bo50" value="{{ $sessie->bo50 }}">
        </div>


        <button data-toggle="collapse" data-target="#demo11" class="collapsible" style="border-radius: 5px" type='button'>
            <span>Pelvic</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo11" class="collapse">
            <h6 for="lateral" class="title">General Squeeze</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo51" value="{{ $sessie->bo51 }}">

            <h6 for="lateral" class="title">Forward rotation ilium general</h6>
            <select name="bo52" id="" class="form-control" style="padding-left: 42%">
                <option value="{{ $sessie->bo52 }}">{{ $sessie->bo52 }}</option>

                <option value="li">( li )</option>
                <option value="re">( re )</option>
            </select>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo53" value="{{ $sessie->bo53 }}">

            <h6 for="lateral" class="title">Forward rotation ilium spec.</h6>
            <select name="bo54" id="" class="form-control" style="padding-left: 42%">
                <option value="{{ $sessie->bo54 }}">{{ $sessie->bo54 }}</option>

                <option value="li">( li )</option>
                <option value="re">( re )</option>
            </select>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo55" value="{{ $sessie->bo55 }}">
            <h6 for="lateral" class="title">Backward rotation ilium tub sacrale / tub coxae</h6>
            <select name="bo56" id="" class="form-control" style="padding-left: 42%">
                <option value="{{ $sessie->bo56 }}">{{ $sessie->bo56 }}</option>

                <option value="li">( li )</option>
                <option value="re">( re )</option>
            </select>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo57" value="{{ $sessie->bo57 }}">
            <h6 for="lateral" class="title">Glide tub sacrale</h6>
            <select name="bo58" id="" class="form-control" style="padding-left: 42%">
                <option value="{{ $sessie->bo58 }}">{{ $sessie->bo58 }}</option>
                <option value="li">( li )</option>
                <option value="re">( re )</option>
            </select>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo59" value="{{ $sessie->bo59 }}">

            <h6 for="lateral" class="title">Extension sacrum</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo60" value="{{ $sessie->bo60 }}">
            <h6 for="lateral" class="title">Flexion sacrum</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo61" value="{{ $sessie->bo61 }}">
            <h6 for="lateral" class="title">Rotation sacrum</h6>
            <select name="bo62" id="" class="form-control" style="padding-left: 42%">
                <option value="{{ $sessie->bo62 }}">{{ $sessie->bo62 }}</option>
                <option value="li">( li )</option>
                <option value="re">( re )</option>
            </select>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo63" value="{{ $sessie->bo63 }}">
            <h6 for="lateral" class="title">Lateral flexion sacrum</h6>
            <select name="bo64" id="" class="form-control" style="padding-left: 42%">
                <option value="{{ $sessie->bo64 }}">{{ $sessie->bo64 }}</option>
                <option value="li">( li )</option>
                <option value="re">( re )</option>
            </select>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo65" value="{{ $sessie->bo65 }}">
        </div>


        <button data-toggle="collapse" data-target="#demo12" class="collapsible" style="border-radius: 5px" type='button'>
            <span>Caudal joints</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo12" class="collapse">
            <h6 for="lateral" class="title">Flexion-extension</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo66" value="{{ $sessie->bo66 }}">

            <h6 for="lateral" class="title">Lateral flexion</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bo67" value="{{ $sessie->bo67 }}">
        </div>

                </div>
                    <div class="col" style="margin-left: 5%; margin-top: 5%">
                              <div class="horse">
                      <div class="row" style="margin-left: 10%">
                          <div class="col" style="margin-left: 20px" >
                              <button class="imgbtn" type="button"  data-toggle="collapse" data-target="#demo" class="collapsible" style="margin-top: 10px"></button>
                              <button class="imgbtn" type="button"  data-toggle="collapse" data-target="#demo1" class="collapsible" style="margin-left: 40px; margin-top: -10px"></button>
                              <button class="imgbtn2" type="button"></button>
                              <button class="imgbtn2" type="button"></button>
                              <button class="imgbtn2" type="button"></button>

                          </div>
                          <div class="col" style="margin-left: -60px" >
                            <button class="imgbtn2" type="button"></button>
                            <button class="imgbtn" type="button"  data-toggle="collapse" data-target="#demo200" class="collapsible" style="margin-left: 20px"></button>
                            <button class="imgbtn" type="button"  data-toggle="collapse" data-target="#demo201" class="collapsible" style="margin-left: -10px"></button>
                            <button class="imgbtn" type="button"  data-toggle="collapse" data-target="#demo3" class="collapsible"></button>
                            <button class="imgbtn" type="button"  data-toggle="collapse" data-target="#demo4" class="collapsible"></button>


                          </div>
                          <div class="col" style="margin-left: -50px">
                            <button class="imgbtn2" type="button"></button>
                            <button class="imgbtn" type="button"  data-toggle="collapse" data-target="#demo5" class="collapsible" ></button>
                            <button class="imgbtn" type="button"  data-toggle="collapse" data-target="#demo7" class="collapsible" style="margin-left: -20px" ></button>
                            <button class="imgbtn2" type="button"></button>
                            <button class="imgbtn2" type="button" ></button>

                          </div>
                          <div class="col" style="margin-left: -50px">
                            <button class="imgbtn2" type="button"></button>
                            <button class="imgbtn" type="button"  data-toggle="collapse" data-target="#demo6" class="collapsible"></button>
                            <button class="imgbtn" type="button"  data-toggle="collapse" data-target="#demo8" class="collapsible"></button>
                            <button class="imgbtn" type="button"  data-toggle="collapse" data-target="#demo9" class="collapsible" style="margin-left: 40px"></button>
                            <button class="imgbtn" type="button"  data-toggle="collapse" data-target="#demo10" class="collapsible" style="margin-left: 40px"></button>

                        </div>

                      </div>


                              </div>
                              <script>
                              var slideIndex = 1;
                                showSlides(slideIndex);

                                function plusSlides(n) {
                                    showSlides(slideIndex += n);
                                }

                                function currentSlide(n) {
                                    showSlides(slideIndex = n);
                                }

                                function showSlides(n) {
                                    var i;
                                    var slides = document.getElementsByClassName("mySlides");
                                    var dots = document.getElementsByClassName("demo");
                                    var captionText = document.getElementById("caption");
                                    if (n > slides.length) {slideIndex = 1}
                                    if (n < 1) {slideIndex = slides.length}
                                    for (i = 0; i < slides.length; i++) {
                                        slides[i].style.display = "none";
                                    }
                                    for (i = 0; i < dots.length; i++) {
                                        dots[i].className = dots[i].className.replace(" active", "");
                                    }
                                    slides[slideIndex-1].style.display = "block";
                                    dots[slideIndex-1].className += " active";
                                    captionText.innerHTML = dots[slideIndex-1].alt;
                                }
                            </script>
                    </div>

        <div class="inputs">
                <input type="text" name="bo23" id="" value="{{ $sessie->bo23 }}">
                <input type="text" name="bo24" id="" value="{{ $sessie->bo24}}">
                <input type="text" name="bo36" id="" value="{{ $sessie->bo36 }}">
                <input type="text" name="name_horse" id="" value="{{ $sessie->name_horse }}">
                <input type="text" name="horse_id" id="" value="{{ $sessie->horse_id }}">
                <input type="text" name="inspectie_stand" id="" value="{{ $sessie->inspectie_stand }}">
                <input type="text" name="behandeling" id="" value="{{ $sessie->behandeling }}">
                <input type="text" name="orienterende_palpatie" id="" value="{{ $sessie->orienterende_palpatie }}">
                <input type="text" name="datum" id="" value="{{ $sessie->datum }}">
                <input type="text" name="ib1" id="" value="{{ $sessie->ib1 }}">
                <input type="text" name="ib2" id="" value="{{ $sessie->ib2 }}">
                <input type="text" name="ib3" id="" value="{{ $sessie->ib3 }}">
                <input type="text" name="ib4" id="" value="{{ $sessie->ib4 }}">
                <input type="text" name="ib5" id="" value="{{ $sessie->ib5 }}">
                <input type="text" name="ib6" id="" value="{{ $sessie->ib6 }}">
                <input type="text" name="ib7" id="" value="{{ $sessie->ib7 }}">
                <input type="text" name="ib8" id="" value="{{ $sessie->ib8 }}">
                <input type="text" name="ib9" id="" value="{{ $sessie->ib9 }}">
                <input type="text" name="ib10" id="" value="{{ $sessie->ib10 }}">
                <input type="text" name="ib11" id="" value="{{ $sessie->ib11 }}">
                <input type="text" name="ib12" id="" value="{{ $sessie->ib12 }}">
                <input type="text" name="ib13" id="" value="{{ $sessie->ib13 }}">
                <input type="text" name="ib14" id="" value="{{ $sessie->ib14 }}">
                <input type="text" name="ib15" id="" value="{{ $sessie->ib15 }}">
                <input type="text" name="ib16" id="" value="{{ $sessie->ib16 }}">
                <input type="text" name="ib17" id="" value="{{ $sessie->ib17 }}">
                <input type="text" name="ib18" id="" value="{{ $sessie->ib18 }}">
                <input type="text" name="ib19" id="" value="{{ $sessie->ib19 }}">
                <input type="text" name="lp1" id="" value="{{ $sessie->lp1 }}">
                <input type="text" name="lp2" id="" value="{{ $sessie->lp2 }}">
                <input type="text" name="bbr1" id="" value="{{ $sessie->bbr1 }}">
                <input type="text" name="bbr2" id="" value="{{ $sessie->bbr2 }}">
                <input type="text" name="bbr3" id="" value="{{ $sessie->bbr3 }}">
                <input type="text" name="bbr4" id="" value="{{ $sessie->bbr4 }}">
                <input type="text" name="bbr5" id="" value="{{ $sessie->bbr5 }}">
                <input type="text" name="bbr6" id="" value="{{ $sessie->bbr6 }}">
                <input type="text" name="bbr7" id="" value="{{ $sessie->bbr7 }}">
                <input type="text" name="bbr8" id="" value="{{ $sessie->bbr8 }}">
                <input type="text" name="bbr9" id="" value="{{ $sessie->bbr9 }}">
                <input type="text" name="bbr10" id="" value="{{ $sessie->bbr10 }}">
                <input type="text" name="bbr11" id="" value="{{ $sessie->bbr11 }}">
                <input type="text" name="bbr12" id="" value="{{ $sessie->bbr12 }}">
                <input type="text" name="bbr13" id="" value="{{ $sessie->bbr13 }}">
                <input type="text" name="bbr14" id="" value="{{ $sessie->bbr14 }}">
                <input type="text" name="bbr15" id="" value="{{ $sessie->bbr15 }}">
                <input type="text" name="bbr16" id="" value="{{ $sessie->bbr16 }}">
                <input type="text" name="bbr17" id="" value="{{ $sessie->bbr17 }}">
                <input type="text" name="bbr18" id="" value="{{ $sessie->bbr18 }}">
                <input type="text" name="bbr19" id="" value="{{ $sessie->bbr19 }}">
                <input type="text" name="bbr20" id="" value="{{ $sessie->bbr20 }}">
                <input type="text" name="bbr21" id="" value="{{ $sessie->bbr21 }}">
                <input type="text" name="bbr22" id="" value="{{ $sessie->bbr22 }}">
                <input type="text" name="bbr23" id="" value="{{ $sessie->bbr23 }}">
                <input type="text" name="bbr24" id="" value="{{ $sessie->bbr24 }}">
                <input type="text" name="bbr25" id="" value="{{ $sessie->bbr25 }}">
                <input type="text" name="bbr26" id="" value="{{ $sessie->bbr26 }}">
                <input type="text" name="bbr27" id="" value="{{ $sessie->bbr27 }}">
                <input type="text" name="bbr28" id="" value="{{ $sessie->bbr28 }}">
                <input type="text" name="bbr29" id="" value="{{ $sessie->bbr29 }}">
                <input type="text" name="bbr30" id="" value="{{ $sessie->bbr30 }}">
                <input type="text" name="bbr31" id="" value="{{ $sessie->bbr31 }}">
                <input type="text" name="bbr32" id="" value="{{ $sessie->bbr32 }}">
                <input type="text" name="bbr33" id="" value="{{ $sessie->bbr33 }}">
                <input type="text" name="bbr34" id="" value="{{ $sessie->bbr34 }}">
                <input type="text" name="bbr35" id="" value="{{ $sessie->bbr35 }}">
                <input type="text" name="bbr36" id="" value="{{ $sessie->bbr36 }}">
                <input type="text" name="bbl1" id="" value="{{ $sessie->bbl1 }}">
                <input type="text" name="bbl2" id="" value="{{ $sessie->bbl2 }}">
                <input type="text" name="bbl3" id="" value="{{ $sessie->bbl3 }}">
                <input type="text" name="bbl4" id="" value="{{ $sessie->bbl4 }}">
                <input type="text" name="bbl5" id="" value="{{ $sessie->bbl5 }}">
                <input type="text" name="bbl6" id="" value="{{ $sessie->bbl6 }}">
                <input type="text" name="bbl7" id="" value="{{ $sessie->bbl7 }}">
                <input type="text" name="bbl8" id="" value="{{ $sessie->bbl8 }}">
                <input type="text" name="bbl9" id="" value="{{ $sessie->bbl9 }}">
                <input type="text" name="bbl10" id="" value="{{ $sessie->bbl10 }}">
                <input type="text" name="bbl11" id="" value="{{ $sessie->bbl11 }}">
                <input type="text" name="bbl12" id="" value="{{ $sessie->bbl12 }}">
                <input type="text" name="bbl13" id="" value="{{ $sessie->bbl13 }}">
                <input type="text" name="bbl14" id="" value="{{ $sessie->bbl14 }}">
                <input type="text" name="bbl15" id="" value="{{ $sessie->bbl15 }}">
                <input type="text" name="bbl16" id="" value="{{ $sessie->bbl16 }}">
                <input type="text" name="bbl17" id="" value="{{ $sessie->bbl17 }}">
                <input type="text" name="bbl18" id="" value="{{ $sessie->bbl18 }}">
                <input type="text" name="bbl19" id="" value="{{ $sessie->bbl19 }}">
                <input type="text" name="bbl20" id="" value="{{ $sessie->bbl20 }}">
                <input type="text" name="bbl21" id="" value="{{ $sessie->bbl21 }}">
                <input type="text" name="bbl22" id="" value="{{ $sessie->bbl22 }}">
                <input type="text" name="bbl23" id="" value="{{ $sessie->bbl23 }}">
                <input type="text" name="bbl24" id="" value="{{ $sessie->bbl24 }}">
                <input type="text" name="bbl25" id="" value="{{ $sessie->bbl25 }}">
                <input type="text" name="bbl26" id="" value="{{ $sessie->bbl26 }}">
                <input type="text" name="bbl27" id="" value="{{ $sessie->bbl27 }}">
                <input type="text" name="bbl28" id="" value="{{ $sessie->bbl28 }}">
                <input type="text" name="bbl29" id="" value="{{ $sessie->bbl29 }}">
                <input type="text" name="bbl30" id="" value="{{ $sessie->bbl30 }}">
                <input type="text" name="bbl31" id="" value="{{ $sessie->bbl31 }}">
                <input type="text" name="bbl32" id="" value="{{ $sessie->bbl32 }}">
                <input type="text" name="bbl33" id="" value="{{ $sessie->bbl33 }}">
                <input type="text" name="bbl34" id="" value="{{ $sessie->bbl34 }}">
                <input type="text" name="bbl35" id="" value="{{ $sessie->bbl35 }}">
                <input type="text" name="bbl36" id="" value="{{ $sessie->bbl36 }}">
        </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" type="submit">
                                        <i class="fas fa-check"></i>
                                        Opslaan
                                    </button>
                                </div>
                            </div>
                        </div>
            </form>
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="modal fade-xg bd-example-modal-lg" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Algemene Indruk {{ $sessie->name_horse }} ({{ $sessie->datum }}) </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('sessies.update', ['id' =>$sessie->id ]) }}" method="get"  enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <label for="">
                            Naam Paard:
                        </label>
                        <label style="margin-top: 30px">
                            Behandeling
                        </label>
                        <label style="margin-top: 70px">
                        Inspectie in Stand
                        </label>

                        <label style="margin-top: 130px">
                            Oriënterende Palpatie
                        </label>
                        </label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="name_horse" id="" class="form-control" value="{{ $sessie->name_horse }}">
                            <br>
                            <select name="behandeling" id="" class="form-control">
                                <option value="{{ $sessie->behandeling }}">{{ $sessie->behandeling }}</option>
                                <option value="Laser Behandeling">Laser Behandeling</option>
                                <option value="Behandeling Been">Behandeling Been</option>
                                <option value="Inspectie in Beweging">Inspectie in Beweging</option>
                                <option value="Bewegingsonderzoek">Bewegingsonderzoek</option>
                            </select>
                            <br>
                            <div class="info">
                                <h6 style="margin-top: 2px">
                                    <i class="far fa-question-circle"></i>
                                    BAR / Voedingstoestand / Vacht / Voeten
                                </h6>
                            </div>
                            <textarea type="text" name="inspectie_stand" id="" cols="5" rows="5" class="form-control">{{ $sessie->inspectie_stand }}</textarea>

                            <br>
                            <textarea type="text" name="orienterende_palpatie" id="" cols="5" rows="5" class="form-control" class="form-control">{{ $sessie->orienterende_palpatie }}</textarea>

                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <button class="btn btn-success btn-sm" type="submit">
                        <i class="fas fa-check"></i>
                        Opslaan</button>
                    </div>
                <div class="inputs">
                    <input type="text" name="datum" id="" value="{{ $sessie->datum }}">
                    <input type="text" name="horse_id" id="" value="{{ $sessie->horse_id }}">
                    <input type="text" name="ib1" id="" value="{{ $sessie->ib1 }}">
                    <input type="text" name="ib2" id="" value="{{ $sessie->ib2 }}">
                    <input type="text" name="ib3" id="" value="{{ $sessie->ib3 }}">
                    <input type="text" name="ib4" id="" value="{{ $sessie->ib4 }}">
                    <input type="text" name="ib5" id="" value="{{ $sessie->ib5 }}">
                    <input type="text" name="ib6" id="" value="{{ $sessie->ib6 }}">
                    <input type="text" name="ib7" id="" value="{{ $sessie->ib7 }}">
                    <input type="text" name="ib8" id="" value="{{ $sessie->ib8 }}">
                    <input type="text" name="ib9" id="" value="{{ $sessie->ib9 }}">
                    <input type="text" name="ib10" id="" value="{{ $sessie->ib10 }}">
                    <input type="text" name="ib11" id="" value="{{ $sessie->ib11 }}">
                    <input type="text" name="ib12" id="" value="{{ $sessie->ib12 }}">
                    <input type="text" name="ib13" id="" value="{{ $sessie->ib13 }}">
                    <input type="text" name="ib14" id="" value="{{ $sessie->ib14 }}">
                    <input type="text" name="ib15" id="" value="{{ $sessie->ib15 }}">
                    <input type="text" name="ib16" id="" value="{{ $sessie->ib16 }}">
                    <input type="text" name="ib17" id="" value="{{ $sessie->ib17 }}">
                    <input type="text" name="ib18" id="" value="{{ $sessie->ib18 }}">
                    <input type="text" name="ib19" id="" value="{{ $sessie->ib19 }}">
                    <input type="text" name="bo1" id="" value="{{ $sessie->bo1 }}">
                    <input type="text" name="bo2" id="" value="{{ $sessie->bo2 }}">
                    <input type="text" name="bo3" id="" value="{{ $sessie->bo3 }}">
                    <input type="text" name="bo4" id="" value="{{ $sessie->bo4 }}">
                    <input type="text" name="bo5" id="" value="{{ $sessie->bo5 }}">
                    <input type="text" name="bo6" id="" value="{{ $sessie->bo6 }}">
                    <input type="text" name="bo7" id="" value="{{ $sessie->bo7 }}">
                    <input type="text" name="bo8" id="" value="{{ $sessie->bo8 }}">
                    <input type="text" name="bo9" id="" value="{{ $sessie->bo9 }}">
                    <input type="text" name="bo10" id="" value="{{ $sessie->bo10 }}">
                    <input type="text" name="bo11" id="" value="{{ $sessie->bo11 }}">
                    <input type="text" name="bo12" id="" value="{{ $sessie->bo12 }}">
                    <input type="text" name="bo13" id="" value="{{ $sessie->bo13 }}">
                    <input type="text" name="bo14" id="" value="{{ $sessie->bo14 }}">
                    <input type="text" name="bo15" id="" value="{{ $sessie->bo15 }}">
                    <input type="text" name="bo16" id="" value="{{ $sessie->bo16 }}">
                    <input type="text" name="bo17" id="" value="{{ $sessie->bo17 }}">
                    <input type="text" name="bo18" id="" value="{{ $sessie->bo18 }}">
                    <input type="text" name="bo19" id="" value="{{ $sessie->bo19 }}">
                    <input type="text" name="bo20" id="" value="{{ $sessie->bo20 }}">
                    <input type="text" name="bo21" id="" value="{{ $sessie->bo21 }}">
                    <input type="text" name="bo22" id="" value="{{ $sessie->bo22 }}">
                    <input type="text" name="bo23" id="" value="{{ $sessie->bo23 }}">
                    <input type="text" name="bo24" id="" value="{{ $sessie->bo24 }}">
                    <input type="text" name="bo25" id="" value="{{ $sessie->bo25 }}">
                    <input type="text" name="bo26" id="" value="{{ $sessie->bo26 }}">
                    <input type="text" name="bo27" id="" value="{{ $sessie->bo27 }}">
                    <input type="text" name="bo28" id="" value="{{ $sessie->bo28 }}">
                    <input type="text" name="bo29" id="" value="{{ $sessie->bo29 }}">
                    <input type="text" name="bo30" id="" value="{{ $sessie->bo30 }}">
                    <input type="text" name="bo31" id="" value="{{ $sessie->bo31 }}">
                    <input type="text" name="bo32" id="" value="{{ $sessie->bo32 }}">
                    <input type="text" name="bo33" id="" value="{{ $sessie->bo33 }}">
                    <input type="text" name="bo34" id="" value="{{ $sessie->bo34 }}">
                    <input type="text" name="bo35" id="" value="{{ $sessie->bo35 }}">
                    <input type="text" name="bo36" id="" value="{{ $sessie->bo36 }}">
                    <input type="text" name="bo37" id="" value="{{ $sessie->bo37 }}">
                    <input type="text" name="bo38" id="" value="{{ $sessie->bo38 }}">
                    <input type="text" name="bo39" id="" value="{{ $sessie->bo39 }}">
                    <input type="text" name="bo40" id="" value="{{ $sessie->bo40 }}">
                    <input type="text" name="bo41" id="" value="{{ $sessie->bo41 }}">
                    <input type="text" name="bo42" id="" value="{{ $sessie->bo42 }}">
                    <input type="text" name="bo43" id="" value="{{ $sessie->bo43 }}">
                    <input type="text" name="bo44" id="" value="{{ $sessie->bo44 }}">
                    <input type="text" name="bo45" id="" value="{{ $sessie->bo45 }}">
                    <input type="text" name="bo46" id="" value="{{ $sessie->bo46 }}">
                    <input type="text" name="bo47" id="" value="{{ $sessie->bo47 }}">
                    <input type="text" name="bo48" id="" value="{{ $sessie->bo48 }}">
                    <input type="text" name="bo49" id="" value="{{ $sessie->bo49 }}">
                    <input type="text" name="bo50" id="" value="{{ $sessie->bo50 }}">
                    <input type="text" name="bo51" id="" value="{{ $sessie->bo51 }}">
                    <input type="text" name="bo52" id="" value="{{ $sessie->bo52 }}">
                    <input type="text" name="bo53" id="" value="{{ $sessie->bo53 }}">
                    <input type="text" name="bo54" id="" value="{{ $sessie->bo54 }}">
                    <input type="text" name="bo55" id="" value="{{ $sessie->bo55 }}">
                    <input type="text" name="bo56" id="" value="{{ $sessie->bo56 }}">
                    <input type="text" name="bo57" id="" value="{{ $sessie->bo57 }}">
                    <input type="text" name="bo58" id="" value="{{ $sessie->bo58 }}">
                    <input type="text" name="bo59" id="" value="{{ $sessie->bo59 }}">
                    <input type="text" name="bo60" id="" value="{{ $sessie->bo60 }}">
                    <input type="text" name="bo61" id="" value="{{ $sessie->bo61 }}">
                    <input type="text" name="bo62" id="" value="{{ $sessie->bo62 }}">
                    <input type="text" name="bo63" id="" value="{{ $sessie->bo63 }}">
                    <input type="text" name="bo64" id="" value="{{ $sessie->bo64 }}">
                    <input type="text" name="bo65" id="" value="{{ $sessie->bo65 }}">
                    <input type="text" name="bo66" id="" value="{{ $sessie->bo66 }}">
                    <input type="text" name="bo67" id="" value="{{ $sessie->bo67 }}">
                    <input type="text" name="lp1" id="" value="{{ $sessie->lp1 }}">
                    <input type="text" name="lp2" id="" value="{{ $sessie->lp2 }}">
                    <input type="text" name="bbr1" id="" value="{{ $sessie->bbr1 }}">
                    <input type="text" name="bbr2" id="" value="{{ $sessie->bbr2 }}">
                    <input type="text" name="bbr3" id="" value="{{ $sessie->bbr3 }}">
                    <input type="text" name="bbr4" id="" value="{{ $sessie->bbr4 }}">
                    <input type="text" name="bbr5" id="" value="{{ $sessie->bbr5 }}">
                    <input type="text" name="bbr6" id="" value="{{ $sessie->bbr6 }}">
                    <input type="text" name="bbr7" id="" value="{{ $sessie->bbr7 }}">
                    <input type="text" name="bbr8" id="" value="{{ $sessie->bbr8 }}">
                    <input type="text" name="bbr9" id="" value="{{ $sessie->bbr9 }}">
                    <input type="text" name="bbr10" id="" value="{{ $sessie->bbr10 }}">
                    <input type="text" name="bbr11" id="" value="{{ $sessie->bbr11 }}">
                    <input type="text" name="bbr12" id="" value="{{ $sessie->bbr12 }}">
                    <input type="text" name="bbr13" id="" value="{{ $sessie->bbr13 }}">
                    <input type="text" name="bbr14" id="" value="{{ $sessie->bbr14 }}">
                    <input type="text" name="bbr15" id="" value="{{ $sessie->bbr15 }}">
                    <input type="text" name="bbr16" id="" value="{{ $sessie->bbr16 }}">
                    <input type="text" name="bbr17" id="" value="{{ $sessie->bbr17 }}">
                    <input type="text" name="bbr18" id="" value="{{ $sessie->bbr18 }}">
                    <input type="text" name="bbr19" id="" value="{{ $sessie->bbr19 }}">
                    <input type="text" name="bbr20" id="" value="{{ $sessie->bbr20 }}">
                    <input type="text" name="bbr21" id="" value="{{ $sessie->bbr21 }}">
                    <input type="text" name="bbr22" id="" value="{{ $sessie->bbr22 }}">
                    <input type="text" name="bbr23" id="" value="{{ $sessie->bbr23 }}">
                    <input type="text" name="bbr24" id="" value="{{ $sessie->bbr24 }}">
                    <input type="text" name="bbr25" id="" value="{{ $sessie->bbr25 }}">
                    <input type="text" name="bbr26" id="" value="{{ $sessie->bbr26 }}">
                    <input type="text" name="bbr27" id="" value="{{ $sessie->bbr27 }}">
                    <input type="text" name="bbr28" id="" value="{{ $sessie->bbr28 }}">
                    <input type="text" name="bbr29" id="" value="{{ $sessie->bbr29 }}">
                    <input type="text" name="bbr30" id="" value="{{ $sessie->bbr30 }}">
                    <input type="text" name="bbr31" id="" value="{{ $sessie->bbr31 }}">
                    <input type="text" name="bbr32" id="" value="{{ $sessie->bbr32 }}">
                    <input type="text" name="bbr33" id="" value="{{ $sessie->bbr33 }}">
                    <input type="text" name="bbr34" id="" value="{{ $sessie->bbr34 }}">
                    <input type="text" name="bbr35" id="" value="{{ $sessie->bbr35 }}">
                    <input type="text" name="bbr36" id="" value="{{ $sessie->bbr36 }}">
                    <input type="text" name="bbl1" id="" value="{{ $sessie->bbl1 }}">
                    <input type="text" name="bbl2" id="" value="{{ $sessie->bbl2 }}">
                    <input type="text" name="bbl3" id="" value="{{ $sessie->bbl3 }}">
                    <input type="text" name="bbl4" id="" value="{{ $sessie->bbl4 }}">
                    <input type="text" name="bbl5" id="" value="{{ $sessie->bbl5 }}">
                    <input type="text" name="bbl6" id="" value="{{ $sessie->bbl6 }}">
                    <input type="text" name="bbl7" id="" value="{{ $sessie->bbl7 }}">
                    <input type="text" name="bbl8" id="" value="{{ $sessie->bbl8 }}">
                    <input type="text" name="bbl9" id="" value="{{ $sessie->bbl9 }}">
                    <input type="text" name="bbl10" id="" value="{{ $sessie->bbl10 }}">
                    <input type="text" name="bbl11" id="" value="{{ $sessie->bbl11 }}">
                    <input type="text" name="bbl12" id="" value="{{ $sessie->bbl12 }}">
                    <input type="text" name="bbl13" id="" value="{{ $sessie->bbl13 }}">
                    <input type="text" name="bbl14" id="" value="{{ $sessie->bbl14 }}">
                    <input type="text" name="bbl15" id="" value="{{ $sessie->bbl15 }}">
                    <input type="text" name="bbl16" id="" value="{{ $sessie->bbl16 }}">
                    <input type="text" name="bbl17" id="" value="{{ $sessie->bbl17 }}">
                    <input type="text" name="bbl18" id="" value="{{ $sessie->bbl18 }}">
                    <input type="text" name="bbl19" id="" value="{{ $sessie->bbl19 }}">
                    <input type="text" name="bbl20" id="" value="{{ $sessie->bbl20 }}">
                    <input type="text" name="bbl21" id="" value="{{ $sessie->bbl21 }}">
                    <input type="text" name="bbl22" id="" value="{{ $sessie->bbl22 }}">
                    <input type="text" name="bbl23" id="" value="{{ $sessie->bbl23 }}">
                    <input type="text" name="bbl24" id="" value="{{ $sessie->bbl24 }}">
                    <input type="text" name="bbl25" id="" value="{{ $sessie->bbl25 }}">
                    <input type="text" name="bbl26" id="" value="{{ $sessie->bbl26 }}">
                    <input type="text" name="bbl27" id="" value="{{ $sessie->bbl27 }}">
                    <input type="text" name="bbl28" id="" value="{{ $sessie->bbl28 }}">
                    <input type="text" name="bbl29" id="" value="{{ $sessie->bbl29 }}">
                    <input type="text" name="bbl30" id="" value="{{ $sessie->bbl30 }}">
                    <input type="text" name="bbl31" id="" value="{{ $sessie->bbl31 }}">
                    <input type="text" name="bbl32" id="" value="{{ $sessie->bbl32 }}">
                    <input type="text" name="bbl33" id="" value="{{ $sessie->bbl33 }}">
                    <input type="text" name="bbl34" id="" value="{{ $sessie->bbl34 }}">
                    <input type="text" name="bbl35" id="" value="{{ $sessie->bbl35 }}">
                    <input type="text" name="bbl36" id="" value="{{ $sessie->bbl36 }}">
                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


 <div class="modal fade-xg bd-example-modal-lg" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Laser Behandeling {{ $sessie->name_horse }} ({{ $sessie->datum }}) </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('sessies.update', ['id' =>$sessie->id ]) }}" method="get"  enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="modal-body">

            <div class="card-body" style="align-content: center">

            <div class="col" style="margin-left: 15%;">
                <img src="/images/horse_left.jpg" alt="">
                <img src="/images/horse_right.jpg" alt="" style="margin-left: 10%">
            </div>
      </div>
            <br><br>
            <div class="row" style="margin-bottom: 10px ">
                <div class="col-md-2">
                    <label for="">Datum</label>
                    <input type="text" name="lp1" class="form-control" style="margin-bottom: 5px; width: 100%" value="{{ $sessie->lp1 }}">

                </div>
                <div class="col-md-10">
                    <label for="">Behandeling</label>
                    <textarea type="text" rows="1" cols="2" class="form-control" style="margin-bottom: 5px; width: 100%" name="lp2">{{ $sessie->lp2}}</textarea>
                </div>
            </div>

        <div class="inputs">
            <input type="text" name="name_horse" id="" value="{{ $sessie->name_horse }}">
            <input type="text" name="horse_id" id="" value="{{ $sessie->horse_id }}">
            <input type="text" name="inspectie_stand" id="" value="{{ $sessie->inspectie_stand }}">
            <input type="text" name="behandeling" id="" value="{{ $sessie->behandeling }}">
            <input type="text" name="orienterende_palpatie" id="" value="{{ $sessie->orienterende_palpatie }}">
            <input type="text" name="datum" id="" value="{{ $sessie->datum }}">
            <input type="text" name="ib1" id="" value="{{ $sessie->ib1 }}">
            <input type="text" name="ib2" id="" value="{{ $sessie->ib2 }}">
            <input type="text" name="ib3" id="" value="{{ $sessie->ib3 }}">
            <input type="text" name="ib4" id="" value="{{ $sessie->ib4 }}">
            <input type="text" name="ib5" id="" value="{{ $sessie->ib5 }}">
            <input type="text" name="ib6" id="" value="{{ $sessie->ib6 }}">
            <input type="text" name="ib7" id="" value="{{ $sessie->ib7 }}">
            <input type="text" name="ib8" id="" value="{{ $sessie->ib8 }}">
            <input type="text" name="ib9" id="" value="{{ $sessie->ib9 }}">
            <input type="text" name="ib10" id="" value="{{ $sessie->ib10 }}">
            <input type="text" name="ib11" id="" value="{{ $sessie->ib11 }}">
            <input type="text" name="ib12" id="" value="{{ $sessie->ib12 }}">
            <input type="text" name="ib13" id="" value="{{ $sessie->ib13 }}">
            <input type="text" name="ib14" id="" value="{{ $sessie->ib14 }}">
            <input type="text" name="ib15" id="" value="{{ $sessie->ib15 }}">
            <input type="text" name="ib16" id="" value="{{ $sessie->ib16 }}">
            <input type="text" name="ib17" id="" value="{{ $sessie->ib17 }}">
            <input type="text" name="ib18" id="" value="{{ $sessie->ib18 }}">
            <input type="text" name="ib19" id="" value="{{ $sessie->ib19 }}">
            <input type="text" name="bo1" id="" value="{{ $sessie->bo1 }}">
            <input type="text" name="bo2" id="" value="{{ $sessie->bo2 }}">
            <input type="text" name="bo3" id="" value="{{ $sessie->bo3 }}">
            <input type="text" name="bo4" id="" value="{{ $sessie->bo4 }}">
            <input type="text" name="bo5" id="" value="{{ $sessie->bo5 }}">
            <input type="text" name="bo6" id="" value="{{ $sessie->bo6 }}">
            <input type="text" name="bo7" id="" value="{{ $sessie->bo7 }}">
            <input type="text" name="bo8" id="" value="{{ $sessie->bo8 }}">
            <input type="text" name="bo9" id="" value="{{ $sessie->bo9 }}">
            <input type="text" name="bo10" id="" value="{{ $sessie->bo10 }}">
            <input type="text" name="bo11" id="" value="{{ $sessie->bo11 }}">
            <input type="text" name="bo12" id="" value="{{ $sessie->bo12 }}">
            <input type="text" name="bo13" id="" value="{{ $sessie->bo13 }}">
            <input type="text" name="bo14" id="" value="{{ $sessie->bo14 }}">
            <input type="text" name="bo15" id="" value="{{ $sessie->bo15 }}">
            <input type="text" name="bo16" id="" value="{{ $sessie->bo16 }}">
            <input type="text" name="bo17" id="" value="{{ $sessie->bo17 }}">
            <input type="text" name="bo18" id="" value="{{ $sessie->bo18 }}">
            <input type="text" name="bo19" id="" value="{{ $sessie->bo19 }}">
            <input type="text" name="bo20" id="" value="{{ $sessie->bo20 }}">
            <input type="text" name="bo21" id="" value="{{ $sessie->bo21 }}">
            <input type="text" name="bo22" id="" value="{{ $sessie->bo22 }}">
            <input type="text" name="bo23" id="" value="{{ $sessie->bo23 }}">
            <input type="text" name="bo24" id="" value="{{ $sessie->bo24 }}">
            <input type="text" name="bo25" id="" value="{{ $sessie->bo25 }}">
            <input type="text" name="bo26" id="" value="{{ $sessie->bo26 }}">
            <input type="text" name="bo27" id="" value="{{ $sessie->bo27 }}">
            <input type="text" name="bo28" id="" value="{{ $sessie->bo28 }}">
            <input type="text" name="bo29" id="" value="{{ $sessie->bo29 }}">
            <input type="text" name="bo30" id="" value="{{ $sessie->bo30 }}">
            <input type="text" name="bo31" id="" value="{{ $sessie->bo31 }}">
            <input type="text" name="bo32" id="" value="{{ $sessie->bo32 }}">
            <input type="text" name="bo33" id="" value="{{ $sessie->bo33 }}">
            <input type="text" name="bo34" id="" value="{{ $sessie->bo34 }}">
            <input type="text" name="bo35" id="" value="{{ $sessie->bo35 }}">
            <input type="text" name="bo36" id="" value="{{ $sessie->bo36 }}">
            <input type="text" name="bo37" id="" value="{{ $sessie->bo37 }}">
            <input type="text" name="bo38" id="" value="{{ $sessie->bo38 }}">
            <input type="text" name="bo39" id="" value="{{ $sessie->bo39 }}">
            <input type="text" name="bo40" id="" value="{{ $sessie->bo40 }}">
            <input type="text" name="bo41" id="" value="{{ $sessie->bo41 }}">
            <input type="text" name="bo42" id="" value="{{ $sessie->bo42 }}">
            <input type="text" name="bo43" id="" value="{{ $sessie->bo43 }}">
            <input type="text" name="bo44" id="" value="{{ $sessie->bo44 }}">
            <input type="text" name="bo45" id="" value="{{ $sessie->bo45 }}">
            <input type="text" name="bo46" id="" value="{{ $sessie->bo46 }}">
            <input type="text" name="bo47" id="" value="{{ $sessie->bo47 }}">
            <input type="text" name="bo48" id="" value="{{ $sessie->bo48 }}">
            <input type="text" name="bo49" id="" value="{{ $sessie->bo49 }}">
            <input type="text" name="bo50" id="" value="{{ $sessie->bo50 }}">
            <input type="text" name="bo51" id="" value="{{ $sessie->bo51 }}">
            <input type="text" name="bo52" id="" value="{{ $sessie->bo52 }}">
            <input type="text" name="bo53" id="" value="{{ $sessie->bo53 }}">
            <input type="text" name="bo54" id="" value="{{ $sessie->bo54 }}">
            <input type="text" name="bo55" id="" value="{{ $sessie->bo55 }}">
            <input type="text" name="bo56" id="" value="{{ $sessie->bo56 }}">
            <input type="text" name="bo57" id="" value="{{ $sessie->bo57 }}">
            <input type="text" name="bo58" id="" value="{{ $sessie->bo58 }}">
            <input type="text" name="bo59" id="" value="{{ $sessie->bo59 }}">
            <input type="text" name="bo60" id="" value="{{ $sessie->bo60 }}">
            <input type="text" name="bo61" id="" value="{{ $sessie->bo61 }}">
            <input type="text" name="bo62" id="" value="{{ $sessie->bo62 }}">
            <input type="text" name="bo63" id="" value="{{ $sessie->bo63 }}">
            <input type="text" name="bo64" id="" value="{{ $sessie->bo64 }}">
            <input type="text" name="bo65" id="" value="{{ $sessie->bo65 }}">
            <input type="text" name="bo66" id="" value="{{ $sessie->bo66 }}">
            <input type="text" name="bo67" id="" value="{{ $sessie->bo67 }}">
            <input type="text" name="bbr1" id="" value="{{ $sessie->bbr1 }}">
            <input type="text" name="bbr2" id="" value="{{ $sessie->bbr2 }}">
            <input type="text" name="bbr3" id="" value="{{ $sessie->bbr3 }}">
            <input type="text" name="bbr4" id="" value="{{ $sessie->bbr4 }}">
            <input type="text" name="bbr5" id="" value="{{ $sessie->bbr5 }}">
            <input type="text" name="bbr6" id="" value="{{ $sessie->bbr6 }}">
            <input type="text" name="bbr7" id="" value="{{ $sessie->bbr7 }}">
            <input type="text" name="bbr8" id="" value="{{ $sessie->bbr8 }}">
            <input type="text" name="bbr9" id="" value="{{ $sessie->bbr9 }}">
            <input type="text" name="bbr10" id="" value="{{ $sessie->bbr10 }}">
            <input type="text" name="bbr11" id="" value="{{ $sessie->bbr11 }}">
            <input type="text" name="bbr12" id="" value="{{ $sessie->bbr12 }}">
            <input type="text" name="bbr13" id="" value="{{ $sessie->bbr13 }}">
            <input type="text" name="bbr14" id="" value="{{ $sessie->bbr14 }}">
            <input type="text" name="bbr15" id="" value="{{ $sessie->bbr15 }}">
            <input type="text" name="bbr16" id="" value="{{ $sessie->bbr16 }}">
            <input type="text" name="bbr17" id="" value="{{ $sessie->bbr17 }}">
            <input type="text" name="bbr18" id="" value="{{ $sessie->bbr18 }}">
            <input type="text" name="bbr19" id="" value="{{ $sessie->bbr19 }}">
            <input type="text" name="bbr20" id="" value="{{ $sessie->bbr20 }}">
            <input type="text" name="bbr21" id="" value="{{ $sessie->bbr21 }}">
            <input type="text" name="bbr22" id="" value="{{ $sessie->bbr22 }}">
            <input type="text" name="bbr23" id="" value="{{ $sessie->bbr23 }}">
            <input type="text" name="bbr24" id="" value="{{ $sessie->bbr24 }}">
            <input type="text" name="bbr25" id="" value="{{ $sessie->bbr25 }}">
            <input type="text" name="bbr26" id="" value="{{ $sessie->bbr26 }}">
            <input type="text" name="bbr27" id="" value="{{ $sessie->bbr27 }}">
            <input type="text" name="bbr28" id="" value="{{ $sessie->bbr28 }}">
            <input type="text" name="bbr29" id="" value="{{ $sessie->bbr29 }}">
            <input type="text" name="bbr30" id="" value="{{ $sessie->bbr30 }}">
            <input type="text" name="bbr31" id="" value="{{ $sessie->bbr31 }}">
            <input type="text" name="bbr32" id="" value="{{ $sessie->bbr32 }}">
            <input type="text" name="bbr33" id="" value="{{ $sessie->bbr33 }}">
            <input type="text" name="bbr34" id="" value="{{ $sessie->bbr34 }}">
            <input type="text" name="bbr35" id="" value="{{ $sessie->bbr35 }}">
            <input type="text" name="bbr36" id="" value="{{ $sessie->bbr36 }}">
            <input type="text" name="bbl1" id="" value="{{ $sessie->bbl1 }}">
            <input type="text" name="bbl2" id="" value="{{ $sessie->bbl2 }}">
            <input type="text" name="bbl3" id="" value="{{ $sessie->bbl3 }}">
            <input type="text" name="bbl4" id="" value="{{ $sessie->bbl4 }}">
            <input type="text" name="bbl5" id="" value="{{ $sessie->bbl5 }}">
            <input type="text" name="bbl6" id="" value="{{ $sessie->bbl6 }}">
            <input type="text" name="bbl7" id="" value="{{ $sessie->bbl7 }}">
            <input type="text" name="bbl8" id="" value="{{ $sessie->bbl8 }}">
            <input type="text" name="bbl9" id="" value="{{ $sessie->bbl9 }}">
            <input type="text" name="bbl10" id="" value="{{ $sessie->bbl10 }}">
            <input type="text" name="bbl11" id="" value="{{ $sessie->bbl11 }}">
            <input type="text" name="bbl12" id="" value="{{ $sessie->bbl12 }}">
            <input type="text" name="bbl13" id="" value="{{ $sessie->bbl13 }}">
            <input type="text" name="bbl14" id="" value="{{ $sessie->bbl14 }}">
            <input type="text" name="bbl15" id="" value="{{ $sessie->bbl15 }}">
            <input type="text" name="bbl16" id="" value="{{ $sessie->bbl16 }}">
            <input type="text" name="bbl17" id="" value="{{ $sessie->bbl17 }}">
            <input type="text" name="bbl18" id="" value="{{ $sessie->bbl18 }}">
            <input type="text" name="bbl19" id="" value="{{ $sessie->bbl19 }}">
            <input type="text" name="bbl20" id="" value="{{ $sessie->bbl20 }}">
            <input type="text" name="bbl21" id="" value="{{ $sessie->bbl21 }}">
            <input type="text" name="bbl22" id="" value="{{ $sessie->bbl22 }}">
            <input type="text" name="bbl23" id="" value="{{ $sessie->bbl23 }}">
            <input type="text" name="bbl24" id="" value="{{ $sessie->bbl24 }}">
            <input type="text" name="bbl25" id="" value="{{ $sessie->bbl25 }}">
            <input type="text" name="bbl26" id="" value="{{ $sessie->bbl26 }}">
            <input type="text" name="bbl27" id="" value="{{ $sessie->bbl27 }}">
            <input type="text" name="bbl28" id="" value="{{ $sessie->bbl28 }}">
            <input type="text" name="bbl29" id="" value="{{ $sessie->bbl29 }}">
            <input type="text" name="bbl30" id="" value="{{ $sessie->bbl30 }}">
            <input type="text" name="bbl31" id="" value="{{ $sessie->bbl31 }}">
            <input type="text" name="bbl32" id="" value="{{ $sessie->bbl32 }}">
            <input type="text" name="bbl33" id="" value="{{ $sessie->bbl33 }}">
            <input type="text" name="bbl34" id="" value="{{ $sessie->bbl34 }}">
            <input type="text" name="bbl35" id="" value="{{ $sessie->bbl35 }}">
            <input type="text" name="bbl36" id="" value="{{ $sessie->bbl36 }}">
        </div>

            <div class="card-body">
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="submit">
                    <i class="fas fa-check"></i>
                    Opslaan
                </button>
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>

<div class="modal fade-xg bd-example-modal-lg" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Beenbewegingen {{ $sessie->name_horse }} ({{ $sessie->datum }}) </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('sessies.update', ['id' =>$sessie->id ]) }}" method="get"  enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4" style="overflow:scroll; height: 650px; overflow-x: hidden; margin-bottom: 50px">
                        <button data-toggle="collapse" data-target="#demo21" class="collapsible" style="border-radius: 5px" type="button">
                            <span>Front DIJ</span>
                            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                        </button>

                        <div id="demo21" class="collapse">
                            <h6 for="lateral" class="title">Flexion-extension</h6>
                            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr1" value="{{ $sessie->bbr1 }}">

                            <h6 for="lateral" class="title">Abduction-addaction</h6>
                            <input type="text" class="form-control" style="margin-top: 5px" name="bbr2" value="{{ $sessie->bbr2 }}">

                            <h6 for="lateral" class="title">Internal/external rotation</h6>
                            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr3" value="{{ $sessie->bbr3 }}">
                        </div>

                    <button data-toggle="collapse" data-target="#demo22" class="collapsible" style="border-radius: 5px" type="button">
                        <span>Front PIJ</span>
                        <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                    </button>

                    <div id="demo22" class="collapse">
                        <h6 for="lateral" class="title">Flexion-extension</h6>
                        <input type="text" class="form-control" style="margin-top: 5px" name="bbr4" value="{{ $sessie->bbr4 }}">

                        <h6 for="lateral" class="title">Abduction-adduction</h6>
                        <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr5" value="{{ $sessie->bbr5 }}">

                        <h6 for="lateral" class="title">Internal/external-adduction</h6>
                        <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr6" value="{{ $sessie->bbr6 }}">
                    </div>

                    <button data-toggle="collapse" data-target="#demo23" class="collapsible" style="border-radius: 5px" type="button">
                        <span>MPJ</span>
                        <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                    </button>

                    <div id="demo23" class="collapse">
                        <h6 for="lateral" class="title">Flexion-extension</h6>
                        <input type="text" class="form-control" style="margin-top: 5px" name="bbr7" value="{{ $sessie->bbr7 }}">

                        <h6 for="lateral" class="title">Abductionj-adduction</h6>
                        <input type="text" class="form-control" style="margin-top: 5px" name="bbr8" value="{{ $sessie->bbr8 }}">

                        <h6 for="lateral" class="title">Lateroflexie</h6>
                        <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr9" value="{{ $sessie->bbr9 }}">
                    </div>
                    <h6 for="lateral" class="title">Proximal sesamoid bones</h6>

                <button data-toggle="collapse" data-target="#demo83" class="collapsible" style="border-radius: 5px" type="button">
                    <span>Carpal joint</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo83" class="collapse">
                    <h6 for="lateral" class="title">Flexion-extension</h6>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr10" value="{{ $sessie->bbr10 }}">

                    <h6 for="lateral" class="title">Flexion abduction/adduction</h6>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr11" value="{{ $sessie->bbr11}}">
                </div>

                <button data-toggle="collapse" data-target="#demo24" class="collapsible" style="border-radius: 5px" type="button">
                    <span>Accessory bone</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo24" class="collapse">
                    <h6 for="lateral" class="title">Lateral-medial motion</h6>
                    <input type="text" class="form-control" style="margin-bottom: 5px" name="bbr12" value="{{ $sessie->bbr12 }}">
                </div>

                <button data-toggle="collapse" data-target="#demo25" class="collapsible" style="border-radius: 5px" type="button">
                    <span>Elbow</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo25" class="collapse">
                    <h6 for="lateral" class="title">Flexion-extension</h6>
                    <input type="text" class="form-control" style="margin-bottom: 5px" name="bbr13" value="{{ $sessie->bbr13 }}">

                </div>

                <button data-toggle="collapse" data-target="#demo26" class="collapsible" style="border-radius: 5px" type="button">
                    <span>+ shoulder</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo26" class="collapse">
                    <h6 for="lateral" class="title">Flexion abduction/adduction</h6>
                    <input type="text" class="form-control" style="margin-bottom: 5px" name="bbr14" value="{{ $sessie->bbr14 }}">
                </div>


                <button data-toggle="collapse" data-target="#demo27" class="collapsible" style="border-radius: 5px" type="button">
                    <span>Scapula</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo27" class="collapse">
                    <h6 for="lateral" class="title">Elevation-depression</h6>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr15" value="{{ $sessie->bbr15 }}">

                    <h6 for="lateral" class="title">Neutral-abduction</h6>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr16" value="{{ $sessie->bbr16 }}">
                </div>


                <button data-toggle="collapse" data-target="#demo28" class="collapsible" style="border-radius: 5px" type="button">
                    <span>Front leg general</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo28" class="collapse">
                    <h6 for="lateral" class="title">Protraction + ab-/adduction</h6>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr17" value="{{ $sessie->bbr17 }}">
        </div>


        <button data-toggle="collapse" data-target="#demo29" class="collapsible" style="border-radius: 5px" type="button">
            <span>Hind DIJ</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo29" class="collapse">
            <h6 for="lateral" class="title">Flexion-extension</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr19" value="{{ $sessie->bbr19 }}">

            <h6 for="lateral" class="title">Abduction-adduction</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr20" value="{{ $sessie->bbr20 }}">

            <h6 for="lateral" class="title">Internal/external rotation</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr21" value="{{ $sessie->bbr21 }}">
        </div>

        <button data-toggle="collapse" data-target="#demo30" class="collapsible" style="border-radius: 5px" type="button">
            <span>Hind PIJ</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo30" class="collapse">
            <h6 for="lateral" class="title">Flexion-extension</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom: 5px" name="bbr22" value="{{ $sessie->bbr22 }}">
            <h6 for="lateral" class="title">Abduction-adduction</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom: 5px" name="bbr23" value="{{ $sessie->bbr23 }}">
            <h6 for="lateral" class="title">Internal-external rotation</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom: 5px" name="bbr24" value="{{ $sessie->bbr24 }}">
        </div>


        <button data-toggle="collapse" data-target="#demo31" class="collapsible" style="border-radius: 5px" type="button">
            <span>MPJ</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo31" class="collapse">
            <h6 for="lateral" class="title">Flexion-extension</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr25" value="{{ $sessie->bbr25 }}">
        </div>


        <button data-toggle="collapse" data-target="#demo32" class="collapsible" style="border-radius: 5px" type="button">
            <span>Tarsal joint</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo32" class="collapse">
            <h6 for="lateral" class="title">Flexion-extension</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr26" value="{{ $sessie->bbr26 }}">

            <h6 for="lateral" class="title">Abduction-adduction + rotation</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr27" value="{{ $sessie->bbr27 }}">
        </div>


        <button data-toggle="collapse" data-target="#demo33" class="collapsible" style="border-radius: 5px" type="button">
            <span>Stifle</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo33" class="collapse">
            <h6 for="lateral" class="title">Flexion</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr28" value="{{ $sessie->bbr28 }}">

            <h6 for="lateral" class="title">Internal-external rotation</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr29" value="{{ $sessie->bbr29 }}">

            <h6 for="lateral" class="title">Abduction-adduction</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr30" value="{{ $sessie->bbr30 }}">
        </div>

        <button data-toggle="collapse" data-target="#demo34" class="collapsible" style="border-radius: 5px" type="button">
            <span>Coxofemoral</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo34" class="collapse">
            <h6 for="lateral" class="title">Abduction-adduction</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr32" value="{{ $sessie->bbr32 }}">

            <h6 for="lateral" class="title">Internal-external rotation</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr33" value="{{ $sessie->bbr33 }}">
        </div>

        <button data-toggle="collapse" data-target="#demo35" class="collapsible" style="border-radius: 5px" type="button">
            <span>Pelvic limb</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo35" class="collapse">
            <h6 for="lateral" class="title">Protraction</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr34" value="{{ $sessie->bbr34 }}">

            <h6 for="lateral" class="title">Protraction + adduction</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr35" value="{{ $sessie->bbr35 }}">

            <h6 for="lateral" class="title">Retraction + ab-/adduction</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbr36" value="{{ $sessie->bbr36 }}">
        </div>

                </div>
                    <div class="col">
                              <div class="mySlides2">
                                <img src="/images/horse_leg2.jpg" style="width: 90%; margin-left: 5%; margin-top: 5%">
                              </div>

<div class="inputs">
    <input type="text" name="name_horse" id="" value="{{ $sessie->name_horse }}">
    <input type="text" name="horse_id" id="" value="{{ $sessie->horse_id }}">
    <input type="text" name="inspectie_stand" id="" value="{{ $sessie->inspectie_stand }}">
    <input type="text" name="behandeling" id="" value="{{ $sessie->behandeling }}">
    <input type="text" name="orienterende_palpatie" id="" value="{{ $sessie->orienterende_palpatie }}">
    <input type="text" name="datum" id="" value="{{ $sessie->datum }}">
    <input type="text" name="lp1" id="" value="{{ $sessie->lp1 }}">
    <input type="text" name="lp2" id="" value="{{ $sessie->lp2 }}">
    <input type="text" name="bbr18" id="" value="{{ $sessie->bbr18 }}">
    <input type="text" name="bbr31" id="" value="{{ $sessie->bbr31 }}">
    <input type="text" name="ib1" id="" value="{{ $sessie->ib1 }}">
    <input type="text" name="ib2" id="" value="{{ $sessie->ib2 }}">
    <input type="text" name="ib3" id="" value="{{ $sessie->ib3 }}">
    <input type="text" name="ib4" id="" value="{{ $sessie->ib4 }}">
    <input type="text" name="ib5" id="" value="{{ $sessie->ib5 }}">
    <input type="text" name="ib6" id="" value="{{ $sessie->ib6 }}">
    <input type="text" name="ib7" id="" value="{{ $sessie->ib7 }}">
    <input type="text" name="ib8" id="" value="{{ $sessie->ib8 }}">
    <input type="text" name="ib9" id="" value="{{ $sessie->ib9 }}">
    <input type="text" name="ib10" id="" value="{{ $sessie->ib10 }}">
    <input type="text" name="ib11" id="" value="{{ $sessie->ib11 }}">
    <input type="text" name="ib12" id="" value="{{ $sessie->ib12 }}">
    <input type="text" name="ib13" id="" value="{{ $sessie->ib13 }}">
    <input type="text" name="ib14" id="" value="{{ $sessie->ib14 }}">
    <input type="text" name="ib15" id="" value="{{ $sessie->ib15 }}">
    <input type="text" name="ib16" id="" value="{{ $sessie->ib16 }}">
    <input type="text" name="ib17" id="" value="{{ $sessie->ib17 }}">
    <input type="text" name="ib18" id="" value="{{ $sessie->ib18 }}">
    <input type="text" name="ib19" id="" value="{{ $sessie->ib19 }}">
    <input type="text" name="bo1" id="" value="{{ $sessie->bo1 }}">
    <input type="text" name="bo2" id="" value="{{ $sessie->bo2 }}">
    <input type="text" name="bo3" id="" value="{{ $sessie->bo3 }}">
    <input type="text" name="bo4" id="" value="{{ $sessie->bo4 }}">
    <input type="text" name="bo5" id="" value="{{ $sessie->bo5 }}">
    <input type="text" name="bo6" id="" value="{{ $sessie->bo6 }}">
    <input type="text" name="bo7" id="" value="{{ $sessie->bo7 }}">
    <input type="text" name="bo8" id="" value="{{ $sessie->bo8 }}">
    <input type="text" name="bo9" id="" value="{{ $sessie->bo9 }}">
    <input type="text" name="bo10" id="" value="{{ $sessie->bo10 }}">
    <input type="text" name="bo11" id="" value="{{ $sessie->bo11 }}">
    <input type="text" name="bo12" id="" value="{{ $sessie->bo12 }}">
    <input type="text" name="bo13" id="" value="{{ $sessie->bo13 }}">
    <input type="text" name="bo14" id="" value="{{ $sessie->bo14 }}">
    <input type="text" name="bo15" id="" value="{{ $sessie->bo15 }}">
    <input type="text" name="bo16" id="" value="{{ $sessie->bo16 }}">
    <input type="text" name="bo17" id="" value="{{ $sessie->bo17 }}">
    <input type="text" name="bo18" id="" value="{{ $sessie->bo18 }}">
    <input type="text" name="bo19" id="" value="{{ $sessie->bo19 }}">
    <input type="text" name="bo20" id="" value="{{ $sessie->bo20 }}">
    <input type="text" name="bo21" id="" value="{{ $sessie->bo21 }}">
    <input type="text" name="bo22" id="" value="{{ $sessie->bo22 }}">
    <input type="text" name="bo23" id="" value="{{ $sessie->bo23 }}">
    <input type="text" name="bo24" id="" value="{{ $sessie->bo24 }}">
    <input type="text" name="bo25" id="" value="{{ $sessie->bo25 }}">
    <input type="text" name="bo26" id="" value="{{ $sessie->bo26 }}">
    <input type="text" name="bo27" id="" value="{{ $sessie->bo27 }}">
    <input type="text" name="bo28" id="" value="{{ $sessie->bo28 }}">
    <input type="text" name="bo29" id="" value="{{ $sessie->bo29 }}">
    <input type="text" name="bo30" id="" value="{{ $sessie->bo30 }}">
    <input type="text" name="bo31" id="" value="{{ $sessie->bo31 }}">
    <input type="text" name="bo32" id="" value="{{ $sessie->bo32 }}">
    <input type="text" name="bo33" id="" value="{{ $sessie->bo33 }}">
    <input type="text" name="bo34" id="" value="{{ $sessie->bo34 }}">
    <input type="text" name="bo35" id="" value="{{ $sessie->bo35 }}">
    <input type="text" name="bo36" id="" value="{{ $sessie->bo36 }}">
    <input type="text" name="bo37" id="" value="{{ $sessie->bo37 }}">
    <input type="text" name="bo38" id="" value="{{ $sessie->bo38 }}">
    <input type="text" name="bo39" id="" value="{{ $sessie->bo39 }}">
    <input type="text" name="bo40" id="" value="{{ $sessie->bo40 }}">
    <input type="text" name="bo41" id="" value="{{ $sessie->bo41 }}">
    <input type="text" name="bo42" id="" value="{{ $sessie->bo42 }}">
    <input type="text" name="bo43" id="" value="{{ $sessie->bo43 }}">
    <input type="text" name="bo44" id="" value="{{ $sessie->bo44 }}">
    <input type="text" name="bo45" id="" value="{{ $sessie->bo45 }}">
    <input type="text" name="bo46" id="" value="{{ $sessie->bo46 }}">
    <input type="text" name="bo47" id="" value="{{ $sessie->bo47 }}">
    <input type="text" name="bo48" id="" value="{{ $sessie->bo48 }}">
    <input type="text" name="bo49" id="" value="{{ $sessie->bo49 }}">
    <input type="text" name="bo50" id="" value="{{ $sessie->bo50 }}">
    <input type="text" name="bo51" id="" value="{{ $sessie->bo51 }}">
    <input type="text" name="bo52" id="" value="{{ $sessie->bo52 }}">
    <input type="text" name="bo53" id="" value="{{ $sessie->bo53 }}">
    <input type="text" name="bo54" id="" value="{{ $sessie->bo54 }}">
    <input type="text" name="bo55" id="" value="{{ $sessie->bo55 }}">
    <input type="text" name="bo56" id="" value="{{ $sessie->bo56 }}">
    <input type="text" name="bo57" id="" value="{{ $sessie->bo57 }}">
    <input type="text" name="bo58" id="" value="{{ $sessie->bo58 }}">
    <input type="text" name="bo59" id="" value="{{ $sessie->bo59 }}">
    <input type="text" name="bo60" id="" value="{{ $sessie->bo60 }}">
    <input type="text" name="bo61" id="" value="{{ $sessie->bo61 }}">
    <input type="text" name="bo62" id="" value="{{ $sessie->bo62 }}">
    <input type="text" name="bo63" id="" value="{{ $sessie->bo63 }}">
    <input type="text" name="bo64" id="" value="{{ $sessie->bo64 }}">
    <input type="text" name="bo65" id="" value="{{ $sessie->bo65 }}">
    <input type="text" name="bo66" id="" value="{{ $sessie->bo66 }}">
    <input type="text" name="bo67" id="" value="{{ $sessie->bo67 }}">
    <input type="text" name="bbl1" id="" value="{{ $sessie->bbl1 }}">
    <input type="text" name="bbl2" id="" value="{{ $sessie->bbl2 }}">
    <input type="text" name="bbl3" id="" value="{{ $sessie->bbl3 }}">
    <input type="text" name="bbl4" id="" value="{{ $sessie->bbl4 }}">
    <input type="text" name="bbl5" id="" value="{{ $sessie->bbl5 }}">
    <input type="text" name="bbl6" id="" value="{{ $sessie->bbl6 }}">
    <input type="text" name="bbl7" id="" value="{{ $sessie->bbl7 }}">
    <input type="text" name="bbl8" id="" value="{{ $sessie->bbl8 }}">
    <input type="text" name="bbl9" id="" value="{{ $sessie->bbl9 }}">
    <input type="text" name="bbl10" id="" value="{{ $sessie->bbl10 }}">
    <input type="text" name="bbl11" id="" value="{{ $sessie->bbl11 }}">
    <input type="text" name="bbl12" id="" value="{{ $sessie->bbl12 }}">
    <input type="text" name="bbl13" id="" value="{{ $sessie->bbl13 }}">
    <input type="text" name="bbl14" id="" value="{{ $sessie->bbl14 }}">
    <input type="text" name="bbl15" id="" value="{{ $sessie->bbl15 }}">
    <input type="text" name="bbl16" id="" value="{{ $sessie->bbl16 }}">
    <input type="text" name="bbl17" id="" value="{{ $sessie->bbl17 }}">
    <input type="text" name="bbl18" id="" value="{{ $sessie->bbl18 }}">
    <input type="text" name="bbl19" id="" value="{{ $sessie->bbl19 }}">
    <input type="text" name="bbl20" id="" value="{{ $sessie->bbl20 }}">
    <input type="text" name="bbl21" id="" value="{{ $sessie->bbl21 }}">
    <input type="text" name="bbl22" id="" value="{{ $sessie->bbl22 }}">
    <input type="text" name="bbl23" id="" value="{{ $sessie->bbl23 }}">
    <input type="text" name="bbl24" id="" value="{{ $sessie->bbl24 }}">
    <input type="text" name="bbl25" id="" value="{{ $sessie->bbl25 }}">
    <input type="text" name="bbl26" id="" value="{{ $sessie->bbl26 }}">
    <input type="text" name="bbl27" id="" value="{{ $sessie->bbl27 }}">
    <input type="text" name="bbl28" id="" value="{{ $sessie->bbl28 }}">
    <input type="text" name="bbl29" id="" value="{{ $sessie->bbl29 }}">
    <input type="text" name="bbl30" id="" value="{{ $sessie->bbl30 }}">
    <input type="text" name="bbl31" id="" value="{{ $sessie->bbl31 }}">
    <input type="text" name="bbl32" id="" value="{{ $sessie->bbl32 }}">
    <input type="text" name="bbl33" id="" value="{{ $sessie->bbl33 }}">
    <input type="text" name="bbl34" id="" value="{{ $sessie->bbl34 }}">
    <input type="text" name="bbl35" id="" value="{{ $sessie->bbl35 }}">
    <input type="text" name="bbl36" id="" value="{{ $sessie->bbl36 }}">
</div>


                            </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" type="submit">
                                        <i class="fas fa-check"></i>
                                        Opslaan
                                    </button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="modal fade-xg bd-example-modal-lg" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Inspectie in Beweging {{ $sessie->name_horse }} ({{ $sessie->datum }}) </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('sessies.update', ['id' =>$sessie->id ]) }}" method="get"  enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="container">
                <div class="card-body">

                                <div class="row">
                                        <table class="">
                                            <thead>
                                              <tr>
                                                <th>Inspectie in beweging</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; stap</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;draf</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;galop</th>
                                              </tr>
                                            </thead>
                                            <tbody>

                                              <tr style="background-color: transparent">
                                                <td>rechte lijn harde</td>
                                                <td><input type="text" value="{{ $sessie->ib1 }}" class="form-control" name="ib1"></td>
                                                <td><input type="text" value="{{ $sessie->ib2 }}" class="form-control" name="ib2"></td>
                                                <td><input type="text" value="{{ $sessie->ib3 }}" class="form-control" name="ib3"></td>

                                              </tr>
                                              <tr style="background-color: transparent">
                                                <td>volte harde <i style="float: right">l-om</i></td>
                                                <td><input type="text" value="{{ $sessie->ib4 }}" class="form-control" name="ib4"></td>
                                                <td><input type="text" value="{{ $sessie->ib5 }}" class="form-control" name="ib5"></td>
                                                <td><input type="text" value="{{ $sessie->ib6 }}" class="form-control" name="ib6"></td>
                                              </tr>
                                              <tr>
                                                <td><i style="float: right">r-om</i></td>
                                                <td><input type="text" value="{{ $sessie->ib7 }}" class="form-control" name="ib7"></td>
                                                <td><input type="text" value="{{ $sessie->ib8 }}" class="form-control" name="ib8"></td>
                                                <td><input type="text" value="{{ $sessie->ib9 }}" class="form-control" name="ib9"></td>
                                              </tr>
                                              <tr style="background-color: transparent">
                                                <td>rechte lijn zachte</td>
                                                <td><input type="text" value="{{ $sessie->ib10 }}" class="form-control" name="ib10"></td>
                                                <td><input type="text" value="{{ $sessie->ib11 }}" class="form-control" name="ib11"></td>
                                                <td><input type="text" value="{{ $sessie->ib12 }}" class="form-control" name="ib12"></td>
                                              </tr>
                                              <tr>
                                                <td>volte zachte<i style="float: right">l-om</i></td>
                                                <td><input type="text" value="{{ $sessie->ib13 }}" class="form-control" name="ib13"></td>
                                                <td><input type="text" value="{{ $sessie->ib14 }}" class="form-control" name="ib14"></td>
                                                <td><input type="text" value="{{ $sessie->ib15 }}" class="form-control" name="ib15"></td>
                                              </tr>
                                              <tr style="background-color: transparent">
                                                <td><i style="float: right">r-om</i></td>
                                                <td><input type="text" value="{{ $sessie->ib16 }}" class="form-control" name="ib16"></td>
                                                <td><input type="text" value="{{ $sessie->ib17 }}" class="form-control" name="ib17"></td>
                                                <td><input type="text" value="{{ $sessie->ib18 }}" class="form-control" name="ib18"></td>
                                              </tr>
                                            </tbody>
                                          </table>

                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="opmerkingen">Opmerkingen</label>
                                            </div>
                                            <div class="col-md-10">
                                                <textarea name="ib19" id="" cols="30" rows="5" placeholder="..." class="form-control">{{ $sessie->ib19 }}</textarea>

                                            </div>
                                        </div>
                                        <br>
                                          <div class="modal-footer">

<div class="inputs">
    <input type="text" name="datum" id="" value="{{ $sessie->datum }}">
    <input type="text" name="name_horse" id="" value="{{ $sessie->name_horse }}">
    <input type="text" name="horse_id" id="" value="{{ $sessie->horse_id }}">
    <input type="text" name="inspectie_stand" id="" value="{{ $sessie->inspectie_stand }}">
    <input type="text" name="behandeling" id="" value="{{ $sessie->behandeling }}">
    <input type="text" name="orienterende_palpatie" id="" value="{{ $sessie->orienterende_palpatie }}">
    <input type="text" name="bo1" id="" value="{{ $sessie->bo1 }}">
    <input type="text" name="bo2" id="" value="{{ $sessie->bo2 }}">
    <input type="text" name="bo3" id="" value="{{ $sessie->bo3 }}">
    <input type="text" name="bo4" id="" value="{{ $sessie->bo4 }}">
    <input type="text" name="bo5" id="" value="{{ $sessie->bo5 }}">
    <input type="text" name="bo6" id="" value="{{ $sessie->bo6 }}">
    <input type="text" name="bo7" id="" value="{{ $sessie->bo7 }}">
    <input type="text" name="bo8" id="" value="{{ $sessie->bo8 }}">
    <input type="text" name="bo9" id="" value="{{ $sessie->bo9 }}">
    <input type="text" name="bo10" id="" value="{{ $sessie->bo10 }}">
    <input type="text" name="bo11" id="" value="{{ $sessie->bo11 }}">
    <input type="text" name="bo12" id="" value="{{ $sessie->bo12 }}">
    <input type="text" name="bo13" id="" value="{{ $sessie->bo13 }}">
    <input type="text" name="bo14" id="" value="{{ $sessie->bo14 }}">
    <input type="text" name="bo15" id="" value="{{ $sessie->bo15 }}">
    <input type="text" name="bo16" id="" value="{{ $sessie->bo16 }}">
    <input type="text" name="bo17" id="" value="{{ $sessie->bo17 }}">
    <input type="text" name="bo18" id="" value="{{ $sessie->bo18 }}">
    <input type="text" name="bo19" id="" value="{{ $sessie->bo19 }}">
    <input type="text" name="bo20" id="" value="{{ $sessie->bo20 }}">
    <input type="text" name="bo21" id="" value="{{ $sessie->bo21 }}">
    <input type="text" name="bo22" id="" value="{{ $sessie->bo22 }}">
    <input type="text" name="bo23" id="" value="{{ $sessie->bo23 }}">
    <input type="text" name="bo24" id="" value="{{ $sessie->bo24 }}">
    <input type="text" name="bo25" id="" value="{{ $sessie->bo25 }}">
    <input type="text" name="bo26" id="" value="{{ $sessie->bo26 }}">
    <input type="text" name="bo27" id="" value="{{ $sessie->bo27 }}">
    <input type="text" name="bo28" id="" value="{{ $sessie->bo28 }}">
    <input type="text" name="bo29" id="" value="{{ $sessie->bo29 }}">
    <input type="text" name="bo30" id="" value="{{ $sessie->bo30 }}">
    <input type="text" name="bo31" id="" value="{{ $sessie->bo31 }}">
    <input type="text" name="bo32" id="" value="{{ $sessie->bo32 }}">
    <input type="text" name="bo33" id="" value="{{ $sessie->bo33 }}">
    <input type="text" name="bo34" id="" value="{{ $sessie->bo34 }}">
    <input type="text" name="bo35" id="" value="{{ $sessie->bo35 }}">
    <input type="text" name="bo36" id="" value="{{ $sessie->bo36 }}">
    <input type="text" name="bo37" id="" value="{{ $sessie->bo37 }}">
    <input type="text" name="bo38" id="" value="{{ $sessie->bo38 }}">
    <input type="text" name="bo39" id="" value="{{ $sessie->bo39 }}">
    <input type="text" name="bo40" id="" value="{{ $sessie->bo40 }}">
    <input type="text" name="bo41" id="" value="{{ $sessie->bo41 }}">
    <input type="text" name="bo42" id="" value="{{ $sessie->bo42 }}">
    <input type="text" name="bo43" id="" value="{{ $sessie->bo43 }}">
    <input type="text" name="bo44" id="" value="{{ $sessie->bo44 }}">
    <input type="text" name="bo45" id="" value="{{ $sessie->bo45 }}">
    <input type="text" name="bo46" id="" value="{{ $sessie->bo46 }}">
    <input type="text" name="bo47" id="" value="{{ $sessie->bo47 }}">
    <input type="text" name="bo48" id="" value="{{ $sessie->bo48 }}">
    <input type="text" name="bo49" id="" value="{{ $sessie->bo49 }}">
    <input type="text" name="bo50" id="" value="{{ $sessie->bo50 }}">
    <input type="text" name="bo51" id="" value="{{ $sessie->bo51 }}">
    <input type="text" name="bo52" id="" value="{{ $sessie->bo52 }}">
    <input type="text" name="bo53" id="" value="{{ $sessie->bo53 }}">
    <input type="text" name="bo54" id="" value="{{ $sessie->bo54 }}">
    <input type="text" name="bo55" id="" value="{{ $sessie->bo55 }}">
    <input type="text" name="bo56" id="" value="{{ $sessie->bo56 }}">
    <input type="text" name="bo57" id="" value="{{ $sessie->bo57 }}">
    <input type="text" name="bo58" id="" value="{{ $sessie->bo58 }}">
    <input type="text" name="bo59" id="" value="{{ $sessie->bo59 }}">
    <input type="text" name="bo60" id="" value="{{ $sessie->bo60 }}">
    <input type="text" name="bo61" id="" value="{{ $sessie->bo61 }}">
    <input type="text" name="bo62" id="" value="{{ $sessie->bo62 }}">
    <input type="text" name="bo63" id="" value="{{ $sessie->bo63 }}">
    <input type="text" name="bo64" id="" value="{{ $sessie->bo64 }}">
    <input type="text" name="bo65" id="" value="{{ $sessie->bo65 }}">
    <input type="text" name="bo66" id="" value="{{ $sessie->bo66 }}">
    <input type="text" name="bo67" id="" value="{{ $sessie->bo67 }}">
    <input type="text" name="lp1" id="" value="{{ $sessie->lp1 }}">
    <input type="text" name="lp2" id="" value="{{ $sessie->lp2 }}">
    <input type="text" name="bbr1" id="" value="{{ $sessie->bbr1 }}">
    <input type="text" name="bbr2" id="" value="{{ $sessie->bbr2 }}">
    <input type="text" name="bbr3" id="" value="{{ $sessie->bbr3 }}">
    <input type="text" name="bbr4" id="" value="{{ $sessie->bbr4 }}">
    <input type="text" name="bbr5" id="" value="{{ $sessie->bbr5 }}">
    <input type="text" name="bbr6" id="" value="{{ $sessie->bbr6 }}">
    <input type="text" name="bbr7" id="" value="{{ $sessie->bbr7 }}">
    <input type="text" name="bbr8" id="" value="{{ $sessie->bbr8 }}">
    <input type="text" name="bbr9" id="" value="{{ $sessie->bbr9 }}">
    <input type="text" name="bbr10" id="" value="{{ $sessie->bbr10 }}">
    <input type="text" name="bbr11" id="" value="{{ $sessie->bbr11 }}">
    <input type="text" name="bbr12" id="" value="{{ $sessie->bbr12 }}">
    <input type="text" name="bbr13" id="" value="{{ $sessie->bbr13 }}">
    <input type="text" name="bbr14" id="" value="{{ $sessie->bbr14 }}">
    <input type="text" name="bbr15" id="" value="{{ $sessie->bbr15 }}">
    <input type="text" name="bbr16" id="" value="{{ $sessie->bbr16 }}">
    <input type="text" name="bbr17" id="" value="{{ $sessie->bbr17 }}">
    <input type="text" name="bbr18" id="" value="{{ $sessie->bbr18 }}">
    <input type="text" name="bbr19" id="" value="{{ $sessie->bbr19 }}">
    <input type="text" name="bbr20" id="" value="{{ $sessie->bbr20 }}">
    <input type="text" name="bbr21" id="" value="{{ $sessie->bbr21 }}">
    <input type="text" name="bbr22" id="" value="{{ $sessie->bbr22 }}">
    <input type="text" name="bbr23" id="" value="{{ $sessie->bbr23 }}">
    <input type="text" name="bbr24" id="" value="{{ $sessie->bbr24 }}">
    <input type="text" name="bbr25" id="" value="{{ $sessie->bbr25 }}">
    <input type="text" name="bbr26" id="" value="{{ $sessie->bbr26 }}">
    <input type="text" name="bbr27" id="" value="{{ $sessie->bbr27 }}">
    <input type="text" name="bbr28" id="" value="{{ $sessie->bbr28 }}">
    <input type="text" name="bbr29" id="" value="{{ $sessie->bbr29 }}">
    <input type="text" name="bbr30" id="" value="{{ $sessie->bbr30 }}">
    <input type="text" name="bbr31" id="" value="{{ $sessie->bbr31 }}">
    <input type="text" name="bbr32" id="" value="{{ $sessie->bbr32 }}">
    <input type="text" name="bbr33" id="" value="{{ $sessie->bbr33 }}">
    <input type="text" name="bbr34" id="" value="{{ $sessie->bbr34 }}">
    <input type="text" name="bbr35" id="" value="{{ $sessie->bbr35 }}">
    <input type="text" name="bbr36" id="" value="{{ $sessie->bbr36 }}">
    <input type="text" name="bbl1" id="" value="{{ $sessie->bbl1 }}">
    <input type="text" name="bbl2" id="" value="{{ $sessie->bbl2 }}">
    <input type="text" name="bbl3" id="" value="{{ $sessie->bbl3 }}">
    <input type="text" name="bbl4" id="" value="{{ $sessie->bbl4 }}">
    <input type="text" name="bbl5" id="" value="{{ $sessie->bbl5 }}">
    <input type="text" name="bbl6" id="" value="{{ $sessie->bbl6 }}">
    <input type="text" name="bbl7" id="" value="{{ $sessie->bbl7 }}">
    <input type="text" name="bbl8" id="" value="{{ $sessie->bbl8 }}">
    <input type="text" name="bbl9" id="" value="{{ $sessie->bbl9 }}">
    <input type="text" name="bbl10" id="" value="{{ $sessie->bbl10 }}">
    <input type="text" name="bbl11" id="" value="{{ $sessie->bbl11 }}">
    <input type="text" name="bbl12" id="" value="{{ $sessie->bbl12 }}">
    <input type="text" name="bbl13" id="" value="{{ $sessie->bbl13 }}">
    <input type="text" name="bbl14" id="" value="{{ $sessie->bbl14 }}">
    <input type="text" name="bbl15" id="" value="{{ $sessie->bbl15 }}">
    <input type="text" name="bbl16" id="" value="{{ $sessie->bbl16 }}">
    <input type="text" name="bbl17" id="" value="{{ $sessie->bbl17 }}">
    <input type="text" name="bbl18" id="" value="{{ $sessie->bbl18 }}">
    <input type="text" name="bbl19" id="" value="{{ $sessie->bbl19 }}">
    <input type="text" name="bbl20" id="" value="{{ $sessie->bbl20 }}">
    <input type="text" name="bbl21" id="" value="{{ $sessie->bbl21 }}">
    <input type="text" name="bbl22" id="" value="{{ $sessie->bbl22 }}">
    <input type="text" name="bbl23" id="" value="{{ $sessie->bbl23 }}">
    <input type="text" name="bbl24" id="" value="{{ $sessie->bbl24 }}">
    <input type="text" name="bbl25" id="" value="{{ $sessie->bbl25 }}">
    <input type="text" name="bbl26" id="" value="{{ $sessie->bbl26 }}">
    <input type="text" name="bbl27" id="" value="{{ $sessie->bbl27 }}">
    <input type="text" name="bbl28" id="" value="{{ $sessie->bbl28 }}">
    <input type="text" name="bbl29" id="" value="{{ $sessie->bbl29 }}">
    <input type="text" name="bbl30" id="" value="{{ $sessie->bbl30 }}">
    <input type="text" name="bbl31" id="" value="{{ $sessie->bbl31 }}">
    <input type="text" name="bbl32" id="" value="{{ $sessie->bbl32 }}">
    <input type="text" name="bbl33" id="" value="{{ $sessie->bbl33 }}">
    <input type="text" name="bbl34" id="" value="{{ $sessie->bbl34 }}">
    <input type="text" name="bbl35" id="" value="{{ $sessie->bbl35 }}">
    <input type="text" name="bbl36" id="" value="{{ $sessie->bbl36 }}">
</div>

                                            <button class="btn btn-success" type="submit">
                                                <i class="fas fa-check"></i>
                                                Opslaan
                                            </button>
                                          </div>
                                        </form>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
<br>

<div class="modal fade-xg bd-example-modal-lg" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Beenbewegingen {{ $sessie->name_horse }} ({{ $sessie->datum }}) </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('sessies.update', ['id' =>$sessie->id ]) }}" method="get"  enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4" style="overflow:scroll; height: 650px; overflow-x: hidden; margin-bottom: 50px">
                        <button data-toggle="collapse" data-target="#demo41" class="collapsible" style="border-radius: 5px" type="button">
                            <span>Front DIJ</span>
                            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                        </button>

                        <div id="demo41" class="collapse">
                            <h6 for="lateral" class="title">Flexion-extension</h6>
                            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl1" value=" {{ $sessie->bbl1 }}">

                            <h6 for="lateral" class="title">Abduction-addaction</h6>
                            <input type="text" class="form-control" style="margin-top: 5px" name="bbl2" value=" {{ $sessie->bbl2 }}">

                            <h6 for="lateral" class="title">Internal/external rotation</h6>
                            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl3" value="{{ $sessie->bbl3 }}">
                        </div>

                    <button data-toggle="collapse" data-target="#demo42" class="collapsible" style="border-radius: 5px"  type="button">
                        <span>Front PIJ</span>
                        <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                    </button>

                    <div id="demo42" class="collapse">
                        <h6 for="lateral" class="title">Flexion-extension</h6>
                        <input type="text" class="form-control" style="margin-top: 5px" name="bbl4"  value="{{ $sessie->bbl4 }}">

                        <h6 for="lateral" class="title">Abduction-adduction</h6>
                        <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl5" value="{{ $sessie->bbl5 }}">

                        <h6 for="lateral" class="title">Internal/external-adduction</h6>
                        <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl6" value="{{ $sessie->bbl6 }}">
                    </div>

                    <button data-toggle="collapse" data-target="#demo43" class="collapsible" style="border-radius: 5px"  type="button"  type="button">
                        <span>MPJ</span>
                        <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                    </button>

                    <div id="demo43" class="collapse">
                        <h6 for="lateral" class="title">Flexion-extension</h6>
                        <input type="text" class="form-control" style="margin-top: 5px" name="bbl7" value="{{ $sessie->bbl7 }}">

                        <h6 for="lateral" class="title">Abductionj-adduction</h6>
                        <input type="text" class="form-control" style="margin-top: 5px" name="bbl8" value="{{ $sessie->bbl8 }}">

                        <h6 for="lateral" class="title">Lateroflexie</h6>
                        <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl9" value="{{ $sessie->bbl9 }}">
                    </div>
                    <h6 for="lateral" class="title">Proximal sesamoid bones</h6>

                <button data-toggle="collapse" data-target="#demo73" class="collapsible" style="border-radius: 5px"  type="button">
                    <span>Carpal joint</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo73" class="collapse">
                    <h6 for="lateral" class="title">Flexion-extension</h6>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl10" value="{{ $sessie->bbl10 }}">

                    <h6 for="lateral" class="title">Flexion abduction/adduction</h6>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl11" value="{{ $sessie->bbl11 }}">
                </div>

                <button data-toggle="collapse" data-target="#demo44" class="collapsible" style="border-radius: 5px"  type="button">
                    <span>Accessory bone</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo44" class="collapse">
                    <h6 for="lateral" class="title">Lateral-medial motion</h6>
                    <input type="text" class="form-control" style="margin-bottom: 5px" name="bbl12" value="{{ $sessie->bbl12 }}">
                </div>

                <button data-toggle="collapse" data-target="#demo45" class="collapsible" style="border-radius: 5px"  type="button">
                    <span>Elbow</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo45" class="collapse">
                    <h6 for="lateral" class="title">Flexion-extension</h6>
                    <input type="text" class="form-control" style="margin-bottom: 5px" name="bbl13" value="{{ $sessie->bbl13 }}">

                </div>

                <button data-toggle="collapse" data-target="#demo46" class="collapsible" style="border-radius: 5px"  type="button">
                    <span>+ shoulder</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo46" class="collapse">
                    <h6 for="lateral" class="title">Flexion abduction/adduction</h6>
                    <input type="text" class="form-control" style="margin-bottom: 5px" name="bbl14" value="{{ $sessie->bbl14 }}">
                </div>


                <button data-toggle="collapse" data-target="#demo47" class="collapsible" style="border-radius: 5px"  type="button">
                    <span>Scapula</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo47" class="collapse">
                    <h6 for="lateral" class="title">Elevation-depression</h6>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl15" value="{{ $sessie->bbl15 }}">

                    <h6 for="lateral" class="title">Neutral-abduction</h6>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl16" value="{{ $sessie->bbl16 }}">
                </div>


                <button data-toggle="collapse" data-target="#demo48" class="collapsible" style="border-radius: 5px" type="button">
                    <span>Front leg general</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>

                <div id="demo48" class="collapse">
                    <h6 for="lateral" class="title">Protraction + ab-/adduction</h6>
                    <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl17" value="{{ $sessie->bbl17 }}">
        </div>


        <button data-toggle="collapse" data-target="#demo49" class="collapsible" style="border-radius: 5px" type="button">
            <span>Hind DIJ</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo49" class="collapse">
            <h6 for="lateral" class="title">Flexion-extension</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl18" value="{{ $sessie->bbl18 }}">

            <h6 for="lateral" class="title">Abduction-adduction</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl19" value="{{ $sessie->bbl19 }}">

            <h6 for="lateral" class="title">Internal/external rotation</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl20" value="{{ $sessie->bbl20 }}">
        </div>

        <button data-toggle="collapse" data-target="#demo50" class="collapsible" style="border-radius: 5px" type="button">
            <span>Hind PIJ</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo50" class="collapse">
            <h6 for="lateral" class="title">Flexion-extension</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom: 5px" name="bbl21" value="{{ $sessie->bbl21 }}">
            <h6 for="lateral" class="title">Abduction-adduction</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom: 5px" name="bbl22" value="{{ $sessie->bbl22 }}">
            <h6 for="lateral" class="title">Internal-external rotation</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom: 5px" name="bbl23" value="{{ $sessie->bbl23 }}">
        </div>


        <button data-toggle="collapse" data-target="#demo51" class="collapsible" style="border-radius: 5px" type="button">
            <span>MPJ</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo51" class="collapse">
            <h6 for="lateral" class="title">Flexion-extension</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl24" value="{{ $sessie->bbl24 }}">
        </div>


        <button data-toggle="collapse" data-target="#demo52" class="collapsible" style="border-radius: 5px" type="button">
            <span>Tarsal joint</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo52" class="collapse">
            <h6 for="lateral" class="title">Flexion-extension</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl25" value="{{ $sessie->bbl25 }}">

            <h6 for="lateral" class="title">Abduction-adduction + rotation</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl26" value="{{ $sessie->bbl26 }}">
        </div>


        <button data-toggle="collapse" data-target="#demo53" class="collapsible" style="border-radius: 5px" type="button">
            <span>Stifle</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo53" class="collapse">
            <h6 for="lateral" class="title">Flexion</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl27" value="{{ $sessie->bbl27 }}">

            <h6 for="lateral" class="title">Internal-external rotation</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl28" value="{{ $sessie->bbl28 }}">

            <h6 for="lateral" class="title">Abduction-adduction</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl29" value="{{ $sessie->bbl29 }}">
        </div>

        <button data-toggle="collapse" data-target="#demo54" class="collapsible" style="border-radius: 5px" type="button">
            <span>Coxofemoral</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo54" class="collapse">
            <h6 for="lateral" class="title">Abduction-adduction</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl30" value="{{ $sessie->bbl30 }}">

            <h6 for="lateral" class="title">Internal-external rotation</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl31" value="{{ $sessie->bbl31 }}">
        </div>

        <button data-toggle="collapse" data-target="#demo55" class="collapsible" style="border-radius: 5px" type="button">
            <span>Pelvic limb</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo55" class="collapse">
            <h6 for="lateral" class="title">Protraction</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl32" value="{{ $sessie->bbl32 }}">

            <h6 for="lateral" class="title">Protraction + adduction</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl33" value="{{ $sessie->bbl33 }}">

            <h6 for="lateral" class="title">Retraction + ab-/adduction</h6>
            <input type="text" class="form-control" style="margin-top: 5px; margin-bottom:5px" name="bbl34" value="{{ $sessie->bbl34 }}">
        </div>

                </div>
                    <div class="col">
                              <div class="">
                                <img src="/images/horse_leg.jpg" style="width: 90%; margin-left: 15%; margin-top: 5%">
                              </div>

                    <br>
                            </div>


<div class="inputs">

    <input type="text" name="datum" id="" value="{{ $sessie->datum }}">
    <input type="text" name="name_horse" id="" value="{{ $sessie->name_horse }}">
    <input type="text" name="horse_id" id="" value="{{ $sessie->horse_id }}">
    <input type="text" name="inspectie_stand" id="" value="{{ $sessie->inspectie_stand }}">
    <input type="text" name="behandeling" id="" value="{{ $sessie->behandeling }}">
    <input type="text" name="orienterende_palpatie" id="" value="{{ $sessie->orienterende_palpatie }}">
    <input type="text" name="bo1" id="" value="{{ $sessie->bo1 }}">
    <input type="text" name="bo2" id="" value="{{ $sessie->bo2 }}">
    <input type="text" name="bo3" id="" value="{{ $sessie->bo3 }}">
    <input type="text" name="bo4" id="" value="{{ $sessie->bo4 }}">
    <input type="text" name="bo5" id="" value="{{ $sessie->bo5 }}">
    <input type="text" name="bo6" id="" value="{{ $sessie->bo6 }}">
    <input type="text" name="bo7" id="" value="{{ $sessie->bo7 }}">
    <input type="text" name="bo8" id="" value="{{ $sessie->bo8 }}">
    <input type="text" name="bo9" id="" value="{{ $sessie->bo9 }}">
    <input type="text" name="bo10" id="" value="{{ $sessie->bo10 }}">
    <input type="text" name="bo11" id="" value="{{ $sessie->bo11 }}">
    <input type="text" name="bo12" id="" value="{{ $sessie->bo12 }}">
    <input type="text" name="bo13" id="" value="{{ $sessie->bo13 }}">
    <input type="text" name="bo14" id="" value="{{ $sessie->bo14 }}">
    <input type="text" name="bo15" id="" value="{{ $sessie->bo15 }}">
    <input type="text" name="bo16" id="" value="{{ $sessie->bo16 }}">
    <input type="text" name="bo17" id="" value="{{ $sessie->bo17 }}">
    <input type="text" name="bo18" id="" value="{{ $sessie->bo18 }}">
    <input type="text" name="bo19" id="" value="{{ $sessie->bo19 }}">
    <input type="text" name="bo20" id="" value="{{ $sessie->bo20 }}">
    <input type="text" name="bo21" id="" value="{{ $sessie->bo21 }}">
    <input type="text" name="bo22" id="" value="{{ $sessie->bo22 }}">
    <input type="text" name="bo23" id="" value="{{ $sessie->bo23 }}">
    <input type="text" name="bo24" id="" value="{{ $sessie->bo24 }}">
    <input type="text" name="bo25" id="" value="{{ $sessie->bo25 }}">
    <input type="text" name="bo26" id="" value="{{ $sessie->bo26 }}">
    <input type="text" name="bo27" id="" value="{{ $sessie->bo27 }}">
    <input type="text" name="bo28" id="" value="{{ $sessie->bo28 }}">
    <input type="text" name="bo29" id="" value="{{ $sessie->bo29 }}">
    <input type="text" name="bo30" id="" value="{{ $sessie->bo30 }}">
    <input type="text" name="bo31" id="" value="{{ $sessie->bo31 }}">
    <input type="text" name="bo32" id="" value="{{ $sessie->bo32 }}">
    <input type="text" name="bo33" id="" value="{{ $sessie->bo33 }}">
    <input type="text" name="bo34" id="" value="{{ $sessie->bo34 }}">
    <input type="text" name="bo35" id="" value="{{ $sessie->bo35 }}">
    <input type="text" name="bo36" id="" value="{{ $sessie->bo36 }}">
    <input type="text" name="bo37" id="" value="{{ $sessie->bo37 }}">
    <input type="text" name="bo38" id="" value="{{ $sessie->bo38 }}">
    <input type="text" name="bo39" id="" value="{{ $sessie->bo39 }}">
    <input type="text" name="bo40" id="" value="{{ $sessie->bo40 }}">
    <input type="text" name="bo41" id="" value="{{ $sessie->bo41 }}">
    <input type="text" name="bo42" id="" value="{{ $sessie->bo42 }}">
    <input type="text" name="bo43" id="" value="{{ $sessie->bo43 }}">
    <input type="text" name="bo44" id="" value="{{ $sessie->bo44 }}">
    <input type="text" name="bo45" id="" value="{{ $sessie->bo45 }}">
    <input type="text" name="bo46" id="" value="{{ $sessie->bo46 }}">
    <input type="text" name="bo47" id="" value="{{ $sessie->bo47 }}">
    <input type="text" name="bo48" id="" value="{{ $sessie->bo48 }}">
    <input type="text" name="bo49" id="" value="{{ $sessie->bo49 }}">
    <input type="text" name="bo50" id="" value="{{ $sessie->bo50 }}">
    <input type="text" name="bo51" id="" value="{{ $sessie->bo51 }}">
    <input type="text" name="bo52" id="" value="{{ $sessie->bo52 }}">
    <input type="text" name="bo53" id="" value="{{ $sessie->bo53 }}">
    <input type="text" name="bo54" id="" value="{{ $sessie->bo54 }}">
    <input type="text" name="bo55" id="" value="{{ $sessie->bo55 }}">
    <input type="text" name="bo56" id="" value="{{ $sessie->bo56 }}">
    <input type="text" name="bo57" id="" value="{{ $sessie->bo57 }}">
    <input type="text" name="bo58" id="" value="{{ $sessie->bo58 }}">
    <input type="text" name="bo59" id="" value="{{ $sessie->bo59 }}">
    <input type="text" name="bo60" id="" value="{{ $sessie->bo60 }}">
    <input type="text" name="bo61" id="" value="{{ $sessie->bo61 }}">
    <input type="text" name="bo62" id="" value="{{ $sessie->bo62 }}">
    <input type="text" name="bo63" id="" value="{{ $sessie->bo63 }}">
    <input type="text" name="bo64" id="" value="{{ $sessie->bo64 }}">
    <input type="text" name="bo65" id="" value="{{ $sessie->bo65 }}">
    <input type="text" name="bo66" id="" value="{{ $sessie->bo66 }}">
    <input type="text" name="bo67" id="" value="{{ $sessie->bo67 }}">
    <input type="text" name="lp1" id="" value="{{ $sessie->lp1 }}">
    <input type="text" name="lp2" id="" value="{{ $sessie->lp2 }}">
    <input type="text" name="bbr1" id="" value="{{ $sessie->bbr1 }}">
    <input type="text" name="bbr2" id="" value="{{ $sessie->bbr2 }}">
    <input type="text" name="bbr3" id="" value="{{ $sessie->bbr3 }}">
    <input type="text" name="bbr4" id="" value="{{ $sessie->bbr4 }}">
    <input type="text" name="bbr5" id="" value="{{ $sessie->bbr5 }}">
    <input type="text" name="bbr6" id="" value="{{ $sessie->bbr6 }}">
    <input type="text" name="bbr7" id="" value="{{ $sessie->bbr7 }}">
    <input type="text" name="bbr8" id="" value="{{ $sessie->bbr8 }}">
    <input type="text" name="bbr9" id="" value="{{ $sessie->bbr9 }}">
    <input type="text" name="bbr10" id="" value="{{ $sessie->bbr10 }}">
    <input type="text" name="bbr11" id="" value="{{ $sessie->bbr11 }}">
    <input type="text" name="bbr12" id="" value="{{ $sessie->bbr12 }}">
    <input type="text" name="bbr13" id="" value="{{ $sessie->bbr13 }}">
    <input type="text" name="bbr14" id="" value="{{ $sessie->bbr14 }}">
    <input type="text" name="bbr15" id="" value="{{ $sessie->bbr15 }}">
    <input type="text" name="bbr16" id="" value="{{ $sessie->bbr16 }}">
    <input type="text" name="bbr17" id="" value="{{ $sessie->bbr17 }}">
    <input type="text" name="bbr18" id="" value="{{ $sessie->bbr18 }}">
    <input type="text" name="bbr19" id="" value="{{ $sessie->bbr19 }}">
    <input type="text" name="bbr20" id="" value="{{ $sessie->bbr20 }}">
    <input type="text" name="bbr21" id="" value="{{ $sessie->bbr21 }}">
    <input type="text" name="bbr22" id="" value="{{ $sessie->bbr22 }}">
    <input type="text" name="bbr23" id="" value="{{ $sessie->bbr23 }}">
    <input type="text" name="bbr24" id="" value="{{ $sessie->bbr24 }}">
    <input type="text" name="bbr25" id="" value="{{ $sessie->bbr25 }}">
    <input type="text" name="bbr26" id="" value="{{ $sessie->bbr26 }}">
    <input type="text" name="bbr27" id="" value="{{ $sessie->bbr27 }}">
    <input type="text" name="bbr28" id="" value="{{ $sessie->bbr28 }}">
    <input type="text" name="bbr29" id="" value="{{ $sessie->bbr29 }}">
    <input type="text" name="bbr30" id="" value="{{ $sessie->bbr30 }}">
    <input type="text" name="bbr31" id="" value="{{ $sessie->bbr31 }}">
    <input type="text" name="bbr32" id="" value="{{ $sessie->bbr32 }}">
    <input type="text" name="bbr33" id="" value="{{ $sessie->bbr33 }}">
    <input type="text" name="bbr34" id="" value="{{ $sessie->bbr34 }}">
    <input type="text" name="bbr35" id="" value="{{ $sessie->bbr35 }}">
    <input type="text" name="bbr36" id="" value="{{ $sessie->bbr36 }}">
    <input type="text" name="bbl35" id="" value="{{ $sessie->bbl35 }}">
    <input type="text" name="bbl36" id="" value="{{ $sessie->bbl36 }}">
    <input type="text" name="ib1" id="" value="{{ $sessie->ib1 }}">
    <input type="text" name="ib2" id="" value="{{ $sessie->ib2 }}">
    <input type="text" name="ib3" id="" value="{{ $sessie->ib3 }}">
    <input type="text" name="ib4" id="" value="{{ $sessie->ib4 }}">
    <input type="text" name="ib5" id="" value="{{ $sessie->ib5 }}">
    <input type="text" name="ib6" id="" value="{{ $sessie->ib6 }}">
    <input type="text" name="ib7" id="" value="{{ $sessie->ib7 }}">
    <input type="text" name="ib8" id="" value="{{ $sessie->ib8 }}">
    <input type="text" name="ib9" id="" value="{{ $sessie->ib9 }}">
    <input type="text" name="ib10" id="" value="{{ $sessie->ib10 }}">
    <input type="text" name="ib11" id="" value="{{ $sessie->ib11 }}">
    <input type="text" name="ib12" id="" value="{{ $sessie->ib12 }}">
    <input type="text" name="ib13" id="" value="{{ $sessie->ib13 }}">
    <input type="text" name="ib14" id="" value="{{ $sessie->ib14 }}">
    <input type="text" name="ib15" id="" value="{{ $sessie->ib15 }}">
    <input type="text" name="ib16" id="" value="{{ $sessie->ib16 }}">
    <input type="text" name="ib17" id="" value="{{ $sessie->ib17 }}">
    <input type="text" name="ib18" id="" value="{{ $sessie->ib18 }}">
    <input type="text" name="ib19" id="" value="{{ $sessie->ib19 }}">
</div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" type="submit">
                                        <i class="fas fa-check"></i>
                                        Opslaan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="subnav" style="margin-left: 25%">
        <div class="row">
            <div class="col">
                <button class="btn btn-success" style="width: 45%" type="submit">
                    <i class="fas fa-check"></i>
                    Opslaan
                </button>
                <a href="" class="btn btn-light" style="width: 45%; border: 1px solid rgb(220, 220, 220)" data-toggle="modal" data-target="#exampleModal10">
                    <i class="fas fa-file-alt"></i>
                    Rapport
                </a>
            </div>
            {{-- <div class="col">

            </div> --}}
        </div>

    </form>

</div>
<br>
<div class="modal fade-xg bd-example-modal-lg" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rapport {{ $sessie->name_horse }} ({{ $sessie->datum }}) </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-body">
                    <div></div>
                    <h5 style="text-align: center">Rapport {{ $sessie->name_horse }} {{ $sessie->datum }}</h5>
                    <br>
                    <span style="font-weight: bold;">
                        Algemeen
                    </span>

                   {{-- <button data-toggle="collapse" data-target="#demo101" type='button' style="float: right; border:none; background-color:transparent">
                        <i class="fas fa-chevron-circle-down"></i>
                    </button>


                    <div id="demo101" class="collapse"> --}}
                    <table class="table">
                        <br>
                        <tbody>
                            <tr>
                                <th style="border-top: 2px solid black">
                                    <p style="margin-top: 15px; font-weight: initial">
                                        <span style="font-weight: bold">Inspectie in Stand:</span>
                                        {{ $sessie->inspectie_stand}}</p>
                                </th>
                                <th style="border-top: 2px solid black">
                                    <p  style="margin-top: 15px; font-weight: initial">
                                        <span style="font-weight: bold"> Oriënterende Palpatie:</span>
                                        {{ $sessie->orienterende_palpatie }}
                                    </p>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                {{-- </div> --}}
                <br>
                    <br>

                    <span style="font-weight: bold">Laser Behandeling</span>
                    {{--
                    <button data-toggle="collapse" data-target="#demo103" type='button' style="float: right; border:none; background-color:transparent">
                        <i class="fas fa-chevron-circle-down"></i>
                    </button>
                    <div id="demo103" class="collapse"> --}}
                                        <table class="table">
                                            <br>
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        {{ $sessie->lp1 }}
                                                    </th>
                                                    <th>
                                                        {{ $sessie->lp2}}
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <br>
                    <span style="font-weight: bold">
                        Inspectie in Beweging
                    </span>
                   {{-- <button data-toggle="collapse" data-target="#demo100" type='button' style="float: right; border:none; background-color:transparent">
                        <i class="fas fa-chevron-circle-down"></i>
                    </button>
                    <div id="demo100" class="collapse"> --}}

                            <table class="table">
                                <br>
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">stap</th>
                                        <th scope="col">draf</th>
                                        <th scope="col">galop</th>
                                        <th>

                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th style="width: 30%;">rechte lijn harde</th>
                                        <th>
                                            <p style="font-weight: initial">  {{ $sessie->ib1 }}</p>
                                        </th>
                                        <th>
                                            <p style="font-weight: initial"> {{ $sessie->ib2 }}</p>
                                        </th>
                                        <th>
                                            <p style="font-weight: initial"> {{ $sessie->ib3 }}</p>
                                        </th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>volte harde  <span style="float: right">l-om</span></th>
                                        <th>
                                            <p style="font-weight: initial">  {{ $sessie->ib4 }}</p>
                                        </th>
                                        <th>
                                            <p style="font-weight: initial"> {{ $sessie->ib5 }}</p>
                                        </th>
                                        <th>
                                            <p style="font-weight: initial"> {{ $sessie->ib6 }}</p>
                                        </th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th><span style="float: right">r-om</span></th>
                                        <th>
                                            <p style="font-weight: initial">  {{ $sessie->ib7 }}</p>
                                        </th>
                                        <th>
                                            <p style="font-weight: initial"> {{ $sessie->ib8 }}</p>
                                        </th>
                                        <th>
                                            <p style="font-weight: initial"> {{ $sessie->ib9 }}</p>
                                        </th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>rechte lijn zachte</span></th>
                                        <th>
                                            <p style="font-weight: initial">  {{ $sessie->ib10 }}</p>
                                        </th>
                                        <th>
                                            <p style="font-weight: initial"> {{ $sessie->ib11 }}</p>
                                        </th>
                                        <th>
                                            <p style="font-weight: initial"> {{ $sessie->ib12 }}</p>
                                        </th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>volte zachte<span style="float: right">l-om</span></th>
                                        <th>
                                            <p style="font-weight: initial">  {{ $sessie->ib13 }}</p>
                                        </th>
                                        <th>
                                            <p style="font-weight: initial"> {{ $sessie->ib14 }}</p>
                                        </th>
                                        <th>
                                            <p style="font-weight: initial"> {{ $sessie->ib15 }}</p>
                                        </th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th><span style="float: right">r-om</span></th>
                                        <th>
                                            <p style="font-weight: initial">  {{ $sessie->ib16 }}</p>
                                        </th>
                                        <th>
                                            <p style="font-weight: initial"> {{ $sessie->ib17 }}</p>
                                        </th>
                                        <th>
                                            <p style="font-weight: initial"> {{ $sessie->ib18 }}</p>
                                        </th>
                                        <th></th>
                                    </tr>
                                </tbody>
                            </table>
                            <p style="font-weight: initial"> <span style="font-weight: bold">Opmerkingen:</span> {{ $sessie->ib19 }}</p>
                            <hr>
                        <br>
                        <br>
<br>

<span style="font-weight: bold">Bewegingsonderzoek</span>

                    <table class="table" style="font-size: 15px">
                        <br>
                        <tbody>
                            <tr>
                                <th style="border-top: 2px solid rgb(0, 0, 0)">TMJ</th>
                                <th style="border-top: 2px solid black">
                                    Lateral:   <p style="font-weight: initial">{{ $sessie->bo1 }} - {{ $sessie->bo2}}</p>
                                </th>
                                <th style="border-top: 2px solid black">
                                   Caudal glide:  <p style="font-weight: initial">{{ $sessie->bo3 }} - {{ $sessie->bo4}}</p>
                                </th>
                                <th style="border-top: 2px solid black">
                                   Rostral glide:  <p style="font-weight: initial">{{ $sessie->bo5 }} - {{ $sessie->bo6}}</p>
                                </th>

                            </tr>
                            <tr>
                                <th style="height: 30px">Hyoid</th>
                                <th>
                                     Dorsal <p style="font-weight: initial">{{ $sessie->bo7 }} - {{ $sessie->bo8}}</p>
                                </th>
                                <th>
                                     Lateral <p style="font-weight: initial">{{ $sessie->bo9 }} - {{ $sessie->bo10}}</p>
                                </th>
                                <th>
                                </th>

                            </tr>
                            <tr>
                                <th>General extension CWK</th>
                                <th>
                                    <p style="font-weight: initial">{{ $sessie->bo7 }} </p>
                                </th>
                            </tr>
                            <tr>
                                <th>C01-C1</th>
                                <th>
                                    Flexie <p style="font-weight: initial">{{ $sessie->bo12 }}</p>
                                </th>
                                <th>
                                    Extensie <p style="font-weight: initial">{{ $sessie->bo14 }}</p>
                                </th>
                                <th>
                                   Lateroflexie <p style="font-weight: initial">{{ $sessie->bo15 }} - {{ $sessie->bo16}}</p>
                                </th>



                            </tr>
                            <tr>
                                <th>C1-C2</th>
                                <th>
                                    Rotatie <p style="font-weight: initial">{{ $sessie->bo17 }} - {{ $sessie->bo18}}</p>
                                </th>
                                <th></th>
                                <th></th>


                            </tr>
                            <tr>
                                <th>General latflex CWK</th>
                                    <th>
                                        <p style="font-weight: initial">{{ $sessie->bo11 }} - {{ $sessie->bo13}}</p>
                                    </th>
                            </tr>
                            <tr>
                                <th>C2-C7</th>
                                <th>
                                    Lateroflexie <p style="font-weight: initial">{{ $sessie->bo19 }} - {{ $sessie->bo20}}</p>
                                </th>
                                <th>
                                  Flexie <p style="font-weight: initial">{{ $sessie->bo21 }}</p>
                                </th>
                                <th>
                                    Extensie <p style="font-weight: initial">{{ $sessie->bo22 }}</p>
                                </th>


                            </tr>
                            <tr>
                                <th>T3-T10</th>

                                <th>
                                    General Flexion <p style="font-weight: initial">{{ $sessie->bo25 }}</p>
                                </th>
                                <th>
                                    Specific flexion <p style="font-weight: initial">{{ $sessie->bo26 }}</p>
                                </th>
                                <th>
                                    General rot/latflex <p style="font-weight: initial">{{ $sessie->bo27 }} - {{ $sessie->bo28 }}</p>
                                </th>

                            </tr>
                                <tr>
<th></th>
                                <th>
                                    Specific rot/latflex <p style="font-weight: initial">{{ $sessie->bo29 }} - {{ $sessie->bo30 }}</p>
                                </th>
                                <th>
                                    Specific extension <p style="font-weight: initial">{{ $sessie->bo31 }}</p>
                                </th>

                            </tr>
                            <tr>
                                <th>T10-L6</th>
                                <th>
                                    Active extension cranial - caudal <p style="font-weight: initial">{{ $sessie->bo32 }}</p>
                                </th>
                                <th>
                                    Active flexion caudal - cranial <p style="font-weight: initial">{{ $sessie->bo33 }}</p>
                                </th>
                                <th>
                                     Passive regional lateral bending <p style="font-weight: initial">{{ $sessie->bo34 }} - {{ $sessie->bo35 }}</p>
                                </th>
                            </tr>
                                <tr>
                                    <th></th>

                                <th>
                                    Flexion segmental <p style="font-weight: initial">{{ $sessie->bo37 }} </p>
                                </th>
                                <th>
                                    Latflex/rot <p style="font-weight: initial">{{ $sessie->bo38 }} - {{ $sessie->bo39 }} </p>
                                </th>
                                <th></th>
                            </tr>

                            <tr>
                                <th>Ribs</th>
                                <th>
                                    Cranial-caudal -cranial <p style="font-weight: initial">{{ $sessie->bo40 }} - {{ $sessie->bo41 }} </p>
                                </th>
                                <th>
                                    Dorso-ventral <p style="font-weight: initial">{{ $sessie->bo42 }} - {{ $sessie->bo43 }} </p>
                                </th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>L1-L6</th>
                                <th>
                                    Extension SP <p style="font-weight: initial">{{ $sessie->bo44 }} - {{ $sessie->bo45 }} </p>
                                </th>
                                <th>
                                    Extension AP <p style="font-weight: initial">{{ $sessie->bo46 }} - {{ $sessie->bo47 }} </p>
                                </th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>L4-S1</th>
                                <th>
                                    Extension Intertransverse <p style="font-weight: initial">{{ $sessie->bo48 }} - {{ $sessie->bo49 }} </p>
                                </th>
                                <th></th>
                                <th></th>
                                </tr>
                            <tr>
                                <th>T18-T8</th>
                                <th>
                                    Extension <p style="font-weight: initial">{{ $sessie->bo50 }} </p>
                                </th>
                                <th></th>

                                <th></th>
                            </tr>
                            <tr>
                                <th>Pelvic</th>
                                <th>
                                    General squeeze <p style="font-weight: initial">{{ $sessie->bo51 }} </p>
                                </th>
                                <th>
                                    Forward rotation ilium general <p style="font-weight: initial">{{ $sessie->bo52 }} - {{ $sessie->bo53 }} </p>
                                </th>
                                <th>
                                    Forward rotation ilium spec. <p style="font-weight: initial">{{ $sessie->bo54 }} - {{ $sessie->bo55 }} </p>
                                </th>

                            </tr>
                                <tr>

                                    <th></th>

                                <th>
                                    Backward rotation ilium tub sacrale / tub coxae <p style="font-weight: initial">{{ $sessie->bo56 }} - {{ $sessie->bo57 }} </p>
                                </th>
                                <th>
                                    Glide tub sacrale <p style="font-weight: initial">{{ $sessie->bo58 }} - {{ $sessie->bo59 }} </p>
                                </th>
                                <th>
                                    Extension sacrum <p style="font-weight: initial">{{ $sessie->bo60 }} </p>
                                </th>
                            </tr>
                                <tr>
                                    <th></th>

                                <th>
                                    Flexion sacrum <p style="font-weight: initial">{{ $sessie->bo61 }} </p>
                                </th>
                                <th>
                                    Rotation sacrum <p style="font-weight: initial">{{ $sessie->bo62 }} - {{ $sessie->bo63 }} </p>
                                </th>
                                <th>
                                    Lateral flexion sacrum <p style="font-weight: initial">{{ $sessie->bo64 }} - {{ $sessie->bo65 }} </p>
                                </th>
                              </tr>
                            <tr>
                                <th>Caudal joints</th>
                                <th>
                                    Flexion-extension <p style="font-weight: initial">{{ $sessie->bo66 }} </p>
                                </th>
                                <th>
                                    Lateral flexion <p style="font-weight: initial">{{ $sessie->bo67 }} </p>
                                </th>
                                <th></th>
                                <th></th>
                                <th></th>

                            </tr>
                        </tbody>
                    </table>
{{-- </div> --}}
<br>
<br>

{{-- </div> --}}
<br>
<br>
<span style="font-weight: bold">Behandeling Been (rechts)</span>
<table class="table" style="font-size: 15px">
    <br>
    <tbody>
        <tr>
            <th style="border-top: 2px solid rgb(0, 0, 0)">Front DIJ</th>
            <th style="border-top: 2px solid black">
                Flexion-extension   <p style="font-weight: initial">{{ $sessie->bbr1 }} </p>
            </th>
            <th style="border-top: 2px solid black">
                Abduction-addaction <p style="font-weight: initial">{{ $sessie->bbr2 }}</p>
            </th>
            <th style="border-top: 2px solid black">
                Internal/external rotation<p style="font-weight: initial">{{ $sessie->bbr3 }}</p>
            </th>

        </tr>
        <tr>
            <th style="height: 30px">Front PIJ</th>
            <th>
                Flexion-extension<p style="font-weight: initial">{{ $sessie->bbr4 }}</p>
            </th>
            <th>
                Abduction-adduction <p style="font-weight: initial">{{ $sessie->bbr5 }}</p>
            </th>
            <th>
                Internal/external-adduction <p style="font-weight: initial">{{ $sessie->bbr6 }}</p>
            </th>

        <tr>
            <th>MPJ</th>
            <th>
                Flexion-extension <p style="font-weight: initial">{{ $sessie->bbr7 }}</p>
            </th>
            <th>
                Abductionj-adduction <p style="font-weight: initial">{{ $sessie->bbr8 }}</p>
            </th>
            <th>
                Lateroflexie <p style="font-weight: initial">{{ $sessie->bbr9 }}</p>
            </th>



        </tr>
        <tr>
            <th>Carpal Joints</th>
            <th>
                Flexion-extension <p style="font-weight: initial">{{ $sessie->bbr10 }}</p>
            </th>
            <th>Flexion abduction/adductio <p style="font-weight: initial">{{ $sessie->bbr11 }}</p>

            </th>
            <th></th>


        </tr>
        <tr>
            <th>Accessory bone</th>
                <th>
                    Lateral-medial motion
                    <p style="font-weight: initial">{{ $sessie->bbr12 }}</p>
                </th>
        </tr>
        <tr>
            <th>Elbow</th>
            <th>
                Flexion-extension <p style="font-weight: initial">{{ $sessie->bbr13 }}</p>
            </th>
            <th>
            </th>
            <th>
            </th>


        </tr>
        <tr>
            <th>Shoulder</th>

            <th>
                Flexion abduction/adductio <p style="font-weight: initial">{{ $sessie->bbr14 }}</p>
            </th>
            <th>
            </th>
            <th>
            </th>

        </tr>
            <tr>
                <th>Scapula</th>


                <th>

                    Elevation-depression

                    <p style="font-weight: initial">{{ $sessie->bbr15 }}</p>

                </th>
            <th>
                Neutral-abduction       <p style="font-weight: initial">{{ $sessie->bbr16 }}</p>

            </th>
            <th>
            </th>

        </tr>
        <tr>
            <th>Front leg general</th>
            <th>
                Protraction + ab-/adduction <p style="font-weight: initial">{{ $sessie->bbr17 }}</p>
            </th>
            <th>
            </th>
            <th>
            </th>
        </tr>
            <tr>
                <th>Hind DIJ</th>

            <th>
                Flexion-extension

                <p style="font-weight: initial">{{ $sessie->bbr18 }} </p>
            </th>
            <th>
                Abduction-adduction <p style="font-weight: initial">{{ $sessie->bbr19 }} </p>
            </th>
            <th>Internal/external rotation
                <p style="font-weight: initial">{{ $sessie->bbr20 }} </p>
            </th>
        </tr>

        <tr>
            <th>Hind PIJ</th>
            <th>
                Flexion-extension
                <p style="font-weight: initial">{{ $sessie->bbr21}} </p>
            </th>
            <th>
                Abduction-adduction <p style="font-weight: initial">{{ $sessie->bbr22 }} </p>
            </th>
            <th>
                Internal-external rotation
              <p style="font-weight: initial">{{ $sessie->bbr23 }} </p>

            </th>
        </tr>
        <tr>
            <th>MPJ</th>
            <th>
                Flexion-extension

                <p style="font-weight: initial">{{ $sessie->bbr24 }}  </p>
            </th>
            <th>
            </th>
            <th></th>
        </tr>
        <tr>
            <th>Tarsal joint</th>
            <th>
                Flexion-extension
                <p style="font-weight: initial">{{ $sessie->bbr25 }} </p>
            </th>
            <th>Abduction-adduction + rotation
                <p style="font-weight: initial">{{ $sessie->bbr26 }} </p>

            </th>
            <th></th>
            </tr>
        <tr>
            <th>Stifle</th>
            <th>
                Flexion <p style="font-weight: initial">{{ $sessie->bbr27 }} </p>
            </th>
            <th>Internal-external rotation
                <p style="font-weight: initial">{{ $sessie->bbr28 }} </p>
            </th>

            <th>Abduction-adduction
                <p style="font-weight: initial">{{ $sessie->bbr29 }} </p>

            </th>
        </tr>
        <tr>
            <th>Coxofemeral</th>
            <th>
                Abduction-adduction <p style="font-weight: initial">{{ $sessie->bbr30 }} </p>
            </th>
            <th>
                Internal-external rotation<p style="font-weight: initial">{{ $sessie->bbr31 }} </p>
            </th>
            <th>
            </th>

        </tr>
            <tr>

                <th>Pelvic limb</th>

            <th>
                Protraction <p style="font-weight: initial">{{ $sessie->bbr32 }}  </p>
            </th>
            <th>
                Protraction + adduction <p style="font-weight: initial">{{ $sessie->bbr33 }} </p>
            </th>
            <th>
                Retraction + ab-/adduction <p style="font-weight: initial">{{ $sessie->bbr34 }} </p>
            </th>
        </tr>
        <br>
        <br>
        <span style="font-weight: bold">Behandeling Been (links)</span>
        <table class="table" style="font-size: 15px">
            <br>
            <tbody>
                <tr>
                    <th style="border-top: 2px solid rgb(0, 0, 0)">Front DIJ</th>
                    <th style="border-top: 2px solid black">
                        Flexion-extension   <p style="font-weight: initial">{{ $sessie->bbl1 }} </p>
                    </th>
                    <th style="border-top: 2px solid black">
                        Abduction-addaction <p style="font-weight: initial">{{ $sessie->bbl2 }}</p>
                    </th>
                    <th style="border-top: 2px solid black">
                        Internal/external rotation<p style="font-weight: initial">{{ $sessie->bbl3 }}</p>
                    </th>

                </tr>
                <tr>
                    <th style="height: 30px">Front PIJ</th>
                    <th>
                        Flexion-extension<p style="font-weight: initial">{{ $sessie->bbl4 }}</p>
                    </th>
                    <th>
                        Abduction-adduction <p style="font-weight: initial">{{ $sessie->bbl5 }}</p>
                    </th>
                    <th>
                        Internal/external-adduction <p style="font-weight: initial">{{ $sessie->bbl6 }}</p>
                    </th>

                <tr>
                    <th>MPJ</th>
                    <th>
                        Flexion-extension <p style="font-weight: initial">{{ $sessie->bbl7 }}</p>
                    </th>
                    <th>
                        Abductionj-adduction <p style="font-weight: initial">{{ $sessie->bbl8 }}</p>
                    </th>
                    <th>
                        Lateroflexie <p style="font-weight: initial">{{ $sessie->bbl9 }}</p>
                    </th>



                </tr>
                <tr>
                    <th>Carpal Joints</th>
                    <th>
                        Flexion-extension <p style="font-weight: initial">{{ $sessie->bbl10 }}</p>
                    </th>
                    <th>Flexion abduction/adductio <p style="font-weight: initial">{{ $sessie->bbl11 }}</p>

                    </th>
                    <th></th>


                </tr>
                <tr>
                    <th>Accessory bone</th>
                        <th>
                            Lateral-medial motion
                            <p style="font-weight: initial">{{ $sessie->bbl12 }}</p>
                        </th>
                </tr>
                <tr>
                    <th>Elbow</th>
                    <th>
                        Flexion-extension <p style="font-weight: initial">{{ $sessie->bbl13 }}</p>
                    </th>
                    <th>
                    </th>
                    <th>
                    </th>


                </tr>
                <tr>
                    <th>Shoulder</th>

                    <th>
                        Flexion abduction/adductio <p style="font-weight: initial">{{ $sessie->bbl14 }}</p>
                    </th>
                    <th>
                    </th>
                    <th>
                    </th>

                </tr>
                    <tr>
                        <th>Scapula</th>


                        <th>

                            Elevation-depression

                            <p style="font-weight: initial">{{ $sessie->bbl15 }}</p>

                        </th>
                    <th>
                        Neutral-abduction       <p style="font-weight: initial">{{ $sessie->bbl16 }}</p>

                    </th>
                    <th>
                    </th>

                </tr>
                <tr>
                    <th>Front leg general</th>
                    <th>
                        Protraction + ab-/adduction <p style="font-weight: initial">{{ $sessie->bbr17 }}</p>
                    </th>
                    <th>
                    </th>
                    <th>
                    </th>
                </tr>
                    <tr>
                        <th>Hind DIJ</th>

                    <th>
                        Flexion-extension

                        <p style="font-weight: initial">{{ $sessie->bbl18 }} </p>
                    </th>
                    <th>
                        Abduction-adduction <p style="font-weight: initial">{{ $sessie->bbl19 }} </p>
                    </th>
                    <th>Internal/external rotation
                        <p style="font-weight: initial">{{ $sessie->bbl20 }} </p>
                    </th>
                </tr>

                <tr>
                    <th>Hind PIJ</th>
                    <th>
                        Flexion-extension
                        <p style="font-weight: initial">{{ $sessie->bbl21}} </p>
                    </th>
                    <th>
                        Abduction-adduction <p style="font-weight: initial">{{ $sessie->bbl22 }} </p>
                    </th>
                    <th>
                        Internal-external rotation
                      <p style="font-weight: initial">{{ $sessie->bbl23 }} </p>

                    </th>
                </tr>
                <tr>
                    <th>MPJ</th>
                    <th>
                        Flexion-extension

                        <p style="font-weight: initial">{{ $sessie->bbl24 }}  </p>
                    </th>
                    <th>
                    </th>
                    <th></th>
                </tr>
                <tr>
                    <th>Tarsal joint</th>
                    <th>
                        Flexion-extension
                        <p style="font-weight: initial">{{ $sessie->bbl25 }} </p>
                    </th>
                    <th>Abduction-adduction + rotation
                        <p style="font-weight: initial">{{ $sessie->bbl26 }} </p>

                    </th>
                    <th></th>
                    </tr>
                <tr>
                    <th>Stifle</th>
                    <th>
                        Flexion <p style="font-weight: initial">{{ $sessie->bbl27 }} </p>
                    </th>
                    <th>Internal-external rotation
                        <p style="font-weight: initial">{{ $sessie->bbl28 }} </p>
                    </th>

                    <th>Abduction-adduction
                        <p style="font-weight: initial">{{ $sessie->bbl29 }} </p>

                    </th>
                </tr>
                <tr>
                    <th>Coxofemeral</th>
                    <th>
                        Abduction-adduction <p style="font-weight: initial">{{ $sessie->bbl30 }} </p>
                    </th>
                    <th>
                        Internal-external rotation<p style="font-weight: initial">{{ $sessie->bbl31 }} </p>
                    </th>
                    <th>
                    </th>

                </tr>
                    <tr>

                        <th>Pelvic limb</th>

                    <th>
                        Protraction <p style="font-weight: initial">{{ $sessie->bbl32 }}  </p>
                    </th>
                    <th>
                        Protraction + adduction <p style="font-weight: initial">{{ $sessie->bbl33 }} </p>
                    </th>
                    <th>
                        Retraction + ab-/adduction <p style="font-weight: initial">{{ $sessie->bbl34 }} </p>
                    </th>
                </tr>


    </tbody>
</table>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" style="border: 1px solid rgb(206, 206, 206)">
                    <i class="fas fa-at"></i>
                    Email
                </button>
                <button class="btn btn-light" style="border: 1px solid rgb(204, 204, 204)">
                    <i class="fas fa-print"></i>
                    Print
                </button>
            </div>
        </div>
    </div>
</div>

@endforeach

<script>
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})

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
function redirectToMyPage(){
            location.href = document.getElementById('select').value;
        }

</script>
@endsection
