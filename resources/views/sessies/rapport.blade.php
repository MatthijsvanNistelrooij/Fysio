@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('horse.index') }}" class="btn btn-primary mb-1" style="width: 100%; color: white"><i class="fas fa-horse-head"></i> </a>
            <button class="btn btn-info mb-1" data-toggle="modal" data-target="#exampleModal17" type="button" style="width: 100%; color: white"><i class="fas fa-external-link-alt"></i></button>
            <div class="card mb-1 d-none d-lg-block" style="height: auto; border-radius: 5px">
                <img src="/images/logo2.png" alt="" style="width: 100%; margin-top: 80%; margin-bottom: 25px">
            </div>
        </div>
        <div class="col-md-10">
            <button class="btn btn-primary mb-1" style="width: 100%;">
                <a href="{{ URL::to('/horses/' . $sessies->horse_id ) }}" style="text-decoration: none; color: rgb(255, 255, 255)">
                    <i class="far fa-arrow-alt-circle-left"></i>
                    Terug naar Paard ID: {{ $sessies->horse_id}}
                </a>
            </button>
            <button class="btn btn-info mb-1" style="width: 100%; color: white">
                <a href="/sessies/{{$sessies->id}}" style="text-decoration: none; color: rgb(255, 255, 255)">
                    <i class="far fa-arrow-alt-circle-left"></i>
                    Terug naar Consult ID: {{ $sessies->id}}
                </a>
            </button>

            <div class="card mt-1" style="font-family: 'Padauk', sans-serif; padding-right: 3%">


                <div class="card-body">
                    <div class="rapport">
                        <h6 style="text-align: center"> {{ $sessies->con1 }}
                            @if($sessies->horse_name == true)
                            {{ $sessies->horse_name }},
                            @endif

                            @if($sessies->con182 == true)
                            {{ $sessies->con182 }}
                            @endif

                        </h6>
                        <div class="row">
                            <div class="col" style="margin: 30px">
                                <h6 style="font-size: 15px">
                                    @if($sessies->con2 == true)
                                    <p>
                                        <span style="font-weight: bold; text-align: center">Info: </span>
                                        {{ $sessies->con2 }}
                                    </p>
                                    @endif
                                </h6>
                            </div>
                        </div>



                        {{-- INSPECTIE IN STAND --}}
                        <div class="row">
                            <div class="col-1">
                                <i class="{{ $sessies->con8}} ml-2" style="color: rgb(0, 255, 21);"></i>
                            </div>
                            <div class="col-11">
                                @if($sessies->con8 == true)

                                <p style="font-weight: bold;">Inspectie in Stand</p>

                                <div class="card">
                                    <div class="card-body">
                                        @if($sessies->con4 == true)<h6>Voorzijde: {{ $sessies->con4 }} </h6>@endif
                                        @if($sessies->con5 == true)<h6>Achterzijde: {{ $sessies->con5 }} </h6>@endif
                                        @if($sessies->con6 == true)<h6>Linkerzijde: {{ $sessies->con6 }} </h6>@endif
                                        @if($sessies->con7 == true)<h6>Rechterzijde: {{ $sessies->con7 }} </h6>@endif
                                        </div>
                                    </div>
                                    <br>
                                    @endif
                            </div>
                        </div>


                        {{-- LASER BEHANDELING --}}
                        <div class="row mt-2">
                            <div class="col-1">
                                <i class="{{ $sessies->con14}} ml-2" style="color: rgb(0, 141, 0);"></i>
                            </div>

                            <div class="col-11">
                                @if($sessies->con14 == true)
                                <p style="font-weight: bold;">Laser Behandeling {{ $sessies->con169 }}</p>
                                <div class="card">
                                    <div class="card-body">
                                        @if($sessies->con170 == true)
                                        <h6>{{ $sessies->con170 }}</h6>
                                        @endif
                                    </div>
                                </div>
                                @endif
                                <br>
                            </div>
                        </div>


                        {{-- //ALGEMENE INDRUK --}}
                        <div class="row mt-2">
                            <div class="col-1">
                                <i class="{{ $sessies->con3}} ml-2" style="color: orange;"></i>
                            </div>
                            <div class="col-11">
                                @if($sessies->con3 == true)
                                <p style="font-weight: bold;">Algemene Indruk</p>
                                <div class="card">
                                    <div class="card-body">
                                        @if ($sessies->con15 == true)
                                        <h6> {{ $sessies->con15 }} </h6>
                                        @endif
                                    </div>
                                </div>
                                <br>

                                @endif
                            </div>
                        </div>

                        {{-- INSPECTIE IN BEWEGING --}}
                        <div class="row mt-2">
                            @if($sessies->con9 == true)
                            <div class="col-1">
                                <i class="{{ $sessies->con9}} ml-2" style="color: rgb(0, 60, 255); "></i>
                            </div>
                            <div class="col-11">
                                <p style="font-weight: bold;">
                                    Inspectie in Beweging
                                </p>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>stap</th>
                                            <th>draf</th>
                                            <th>galop</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="background-color: transparent">
                                            <td>rechte lijn harde</td>
                                            <td style="border: 1px solid gray">{{ $sessies->con16 }}</td>
                                            <td style="border: 1px solid gray">{{ $sessies->con17 }}</td>
                                            <td style="border: 1px solid gray">{{ $sessies->con18 }}</td>

                                        </tr>

                                        <tr style="background-color: transparent">
                                            <td>volte harde <i style="float: right">l-om </i></td>
                                            <td style="border: 1px solid gray" >{{  $sessies->con19 }}</td>
                                            <td style="border: 1px solid gray" >{{  $sessies->con20 }}</td>
                                            <td style="border: 1px solid gray" >{{  $sessies->con21 }}</td>
                                        </tr>

                                        <tr>
                                            <td><i style="float: right">r-om </i></td>
                                            <td style="border: 1px solid gray">{{  $sessies->con22 }}</td>
                                            <td style="border: 1px solid gray">{{  $sessies->con23 }}</td>
                                            <td style="border: 1px solid gray">{{  $sessies->con24 }}</td>
                                        </tr>

                                        <tr style="background-color: transparent">
                                            <td>rechte lijn zachte</td>
                                            <td style="border: 1px solid gray">{{ $sessies->con25 }}</td>
                                            <td style="border: 1px solid gray">{{ $sessies->con26 }}</td>
                                            <td style="border: 1px solid gray">{{ $sessies->con27 }}</td>
                                        </tr>

                                        <tr>
                                            <td>volte zachte<i style="float: right">l-om </i></td>
                                            <td style="border: 1px solid gray">{{ $sessies->con28 }}</td>
                                            <td style="border: 1px solid gray">{{ $sessies->con29 }}</td>
                                            <td style="border: 1px solid gray">{{ $sessies->con30 }}</td>
                                        </tr>

                                        <tr style="background-color: transparent">
                                            <td><i style="float: right">r-om </i></td>
                                            <td style="border: 1px solid gray">{{ $sessies->con31 }}</td>
                                            <td style="border: 1px solid gray">{{ $sessies->con32 }}</td>
                                            <td style="border: 1px solid gray">{{ $sessies->con33 }}</td>
                                        </tr>

                                    </tbody>
                                </table>

                                @if ($sessies->con34 == true )
                                Opmerkingen:
                                <td style="border: 1px solid gray">{{ $sessies->con34 }}</td>
                                <br>
                                <br>
                                @endif

                                @endif

                            </div>
                        </div>

            {{--        OPP  PALPATIE --}}
                    <div class="row mt-2">
                        <div class="col-1">
                            <i class="{{ $sessies->con10}} ml-2" style="color: rgb(238, 255, 0); "></i>
                        </div>
                        <div class="col-11">
                            @if($sessies->con10 == true)<p style="font-weight: bold;">Oppervlakkige Palpatie</p>

                            <div class="card">
                                <div class="card-body">
                                    @if($sessies->con35 == true)<h6>Voor inspectie in beweging:  {{ $sessies->con35 }} </h6>@endif
                                    @if($sessies->con36 == true)<h6>Na inspectie in beweging:  {{ $sessies->con36 }} </h6>@endif
                                </div>
                            </div>
                            <br>
                            @endif
                        </div>
                    </div>

            {{--        SPECIFIEKE PALPATIE --}}
            <div class="row mt-2">
                <div class="col-1">
                    <i class="{{ $sessies->con175}} ml-2" style="color: rgb(144, 160, 230); "></i>
                </div>
                <div class="col-11">
                    @if($sessies->con175 == true)<p style="font-weight: bold;">Specifieke Palpatie</p>

                    <div class="card">
                        <div class="card-body">
                            @if($sessies->con176 == true)<h6>Voor inspectie in beweging:  {{ $sessies->con176 }} </h6>@endif
                            @if($sessies->con177 == true)<h6>Na inspectie in beweging:  {{ $sessies->con177 }} </h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif
                </div>
            </div>



            {{-- TMJ HYOID --}}
                    <div class="row mt-2">
                        <div class="col-1">
                            @if($sessies->con11 == true)
                            <i class="{{ $sessies->con11}} ml-2" style="color: rgb(225, 0, 255);"></i>
                        </div>

                        <div class="col-11">
                            <p style="font-weight: bold;">TMJ / HYOID</p>
                            @endif

                            @if($sessies->con37 == true)
                            <div class="card">
                                <div class="card-body">
                                    <p style="font-weight: bold;">TMJ</p>
                                    @if($sessies->con37 == true)<h6>Lateral links: {{ $sessies->con37 }}</h6>@endif
                                    @if($sessies->con38 == true)<h6>Lateral rechts: {{ $sessies->con38 }}</h6>@endif
                                    @if($sessies->con39 == true)<h6>Caudal glide links: {{ $sessies->con39 }}</h6>@endif
                                    @if($sessies->con40 == true)<h6>Caudal glide rechts: {{ $sessies->con40 }}</h6>@endif
                                    @if($sessies->con41 == true)<h6>Rostral glide links: {{ $sessies->con41 }}</h6>@endif
                                    @if($sessies->con42 == true)<h6>Rostral glide rechts: {{ $sessies->con42 }}</h6>@endif
                                </div>
                            </div>
                            @endif

                            <br>
                            @if($sessies->con43 == true)
                            <div class="card">
                                <div class="card-body">
                                    <p style="font-weight: bold;">Hyoid</p>
                                    @if($sessies->con43 == true)<h6>Dorsal: {{ $sessies->con43 }}</h6>@endif
                                    @if($sessies->con44 == true)<h6>Lateral links: {{ $sessies->con44 }}</h6>@endif
                                    @if($sessies->con45 == true)<h6>Lateral rechts: {{ $sessies->con45 }}</h6>@endif
                                </div>
                            </div>
                            <br>
                            @endif
                        </div>
                    </div>

            {{-- WERVELKOLOM --}}
            <div class="row mt-2">
                <div class="col-1">
                    <i class="{{ $sessies->con12}} ml-2" style="color: rgb(253, 57, 43);  margin-top: 2px "></i>
                </div>
                <div class="col-11">
                    @if($sessies->con12 == true)<p style="font-weight: bold;">Wervelkolom</p>@endif

                    <div class="row">
                        <div class="col">


                    @if($sessies->con46 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">General Extension CWK 2</p>
                            @if ($sessies->con46 == true)<h6> {{ $sessies->con46 }} </h6>@endif
                        </div>
                    </div>
                    @endif

                    <br>
                    @if($sessies->con47 == true)
                    <div class="card">
                        <div class="card-body">
                    <p style="font-weight: bold;">C0-C1</p>
                    @if ($sessies->con47 == true)<h6>Flexie {{ $sessies->con47 }} </h6>@endif
                    @if ($sessies->con48 == true)<h6>Extensie {{ $sessies->con48 }} </h6>@endif
                    @if ($sessies->con49 == true)<h6>Lateroflexie links: {{ $sessies->con49 }} </h6>@endif
                    @if ($sessies->con50 == true)<h6>Lateroflexie rechts: {{ $sessies->con50 }} </h6>@endif
                    </div>
                </div>
                @endif
                </div>
            </div>

                    <br>
                    @if($sessies->con51 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">C1-C2</p>
                            @if ($sessies->con51 == true)<h6>Rotatie links: {{ $sessies->con51 }} </h6>@endif
                            @if ($sessies->con52 == true)<h6>Rotatie rechts: {{ $sessies->con52 }} </h6>@endif
                        </div>
                    </div>
                    @endif

                    <br>
                    @if($sessies->con53 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">General Latflex CWK</p>
                            @if ($sessies->con53 == true)<h6>General Latflex CWK links: {{ $sessies->con53 }} </h6>@endif
                            @if ($sessies->con54 == true)<h6>General Latflex CWK rechts: {{ $sessies->con54 }} </h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con55 == true)
                    <div class="card">
                        <div class="card-body">

                            <p style="font-weight: bold;">C2-C7K</p>
                            @if ($sessies->con55 == true)<h6>Lateroflexie links: {{ $sessies->con55 }} </h6>@endif
                            @if ($sessies->con56 == true)<h6>Lateroflexie rechts: {{ $sessies->con56 }} </h6>@endif
                            @if ($sessies->con57 == true)<h6>Flexie: {{ $sessies->con57 }} </h6>@endif
                            @if ($sessies->con58 == true)<h6>Extensie: {{ $sessies->con58 }} </h6>@endif

                        </div>
                    </div>
                    <br>
                    @endif


                    @if($sessies->con59 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">T3-T10</p>
                            @if ($sessies->con59 == true)<h6>General Flexion: {{ $sessies->con59 }} </h6>@endif
                            @if ($sessies->con60 == true)<h6>Specific Flexion: {{ $sessies->con60 }} </h6>@endif
                            @if ($sessies->con61 == true)<h6>General rot/latflex links: {{ $sessies->con61 }} </h6>@endif
                            @if ($sessies->con62 == true)<h6>General rot/latflex rechts: {{ $sessies->con62 }} </h6>@endif
                            @if ($sessies->con63 == true)<h6>Specific rot/latflex links:  {{ $sessies->con63 }} </h6>@endif
                            @if ($sessies->con64 == true)<h6>Specific rot/latflex rechts: {{ $sessies->con64 }} </h6>@endif
                            @if ($sessies->con65 == true)<h6>Active Extension Cranial - Caudal: {{ $sessies->con65 }} </h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con66 == true)
                    <div class="card">
                        <div class="card-body">

                            <p style="font-weight: bold;">T10-L6</p>
                            @if ($sessies->con66 == true)<h6>Active Extension Cranial - Caudal: {{ $sessies->con66 }} </h6>@endif
                            @if ($sessies->con67 == true)<h6>Active Flexion Caudal - Cranial: {{ $sessies->con67 }} </h6>@endif
                            @if ($sessies->con68 == true)<h6>Passive Regional Lateral Bending links: {{ $sessies->con68 }} </h6>@endif
                            @if ($sessies->con69 == true)<h6>Passive Regional Lateral Bending rechts: {{ $sessies->con69 }} </h6>@endif
                            @if ($sessies->con70 == true)<h6>Flexion segmental: {{ $sessies->con70 }} </h6>@endif
                            @if ($sessies->con71 == true)<h6>Latflex/rot links: {{ $sessies->con71 }} </h6>@endif
                            @if ($sessies->con72 == true)<h6>Latflex/rot rechts: {{ $sessies->con72 }} </h6>@endif

                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con73 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Ribs</p>
                            @if ($sessies->con73 == true)<h6>Cranial - Caudal - Cranial links: {{ $sessies->con73 }} </h6>@endif
                            @if ($sessies->con74 == true)<h6>Cranial - Caudal - Cranial rechts: {{ $sessies->con74 }} </h6>@endif
                            @if ($sessies->con75 == true)<h6>Dorso-ventral links: {{ $sessies->con75 }} </h6>@endif
                            @if ($sessies->con76 == true)<h6>Dorso-ventral rechts: {{ $sessies->con76 }} </h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con77 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">L1-L6</p>
                            @if ($sessies->con77 == true)<h6>Extension SP links: {{ $sessies->con77 }} </h6>@endif
                            @if ($sessies->con78 == true)<h6>Extension SP rechts: {{ $sessies->con78 }} </h6>@endif
                            @if ($sessies->con79 == true)<h6>Extension AP links: {{ $sessies->con79 }} </h6>@endif
                            @if ($sessies->con80 == true)<h6>Extension AP rechts: {{ $sessies->con80 }} </h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con81 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">L4-S1</p>
                            @if ($sessies->con81 == true)<h6>Extension Intertransverse links: {{ $sessies->con81 }} </h6>@endif
                            @if ($sessies->con82 == true)<h6>Extension Intertransverse rechts: {{ $sessies->con82 }} </h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif


                    @if($sessies->con83 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">T18-T8</p>
                            @if ($sessies->con83 == true)<h6>Extension: {{ $sessies->con83 }} </h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con84 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Pelvic</p>
                            @if ($sessies->con84 == true)<h6>General Squeeze: {{ $sessies->con84 }} </h6>@endif
                            @if ($sessies->con85 == true)<h6>Forward Rotation Ilium General links: {{ $sessies->con85 }} </h6>@endif
                            @if ($sessies->con86 == true)<h6>Forward Rotation Ilium General rechts: {{ $sessies->con86 }} </h6>@endif
                            @if ($sessies->con87 == true)<h6>Forward Rotation Ilium specific links: {{ $sessies->con87 }} </h6>@endif
                            @if ($sessies->con88 == true)<h6>Forward Rotation Ilium specific rechts: {{ $sessies->con88 }} </h6>@endif
                            @if ($sessies->con89 == true)<h6>Backward Rotation Ilium Tub Sacrale / tub coxae links: {{ $sessies->con89 }} </h6>@endif
                            @if ($sessies->con90 == true)<h6>Backward Rotation Ilium Tub Sacrale / tub coxae rechts: {{ $sessies->con90 }} </h6>@endif
                            @if ($sessies->con91 == true)<h6>Glide tub Sacrale links: {{ $sessies->con91 }} </h6>@endif
                            @if ($sessies->con92 == true)<h6>Glide tub Sacrale rechts: {{ $sessies->con92 }} </h6>@endif
                            @if ($sessies->con93 == true)<h6>Extension Sacrum links: {{ $sessies->con93 }} </h6>@endif
                            @if ($sessies->con94 == true)<h6>Flexion sacrum: {{ $sessies->con94 }} </h6>@endif
                            @if ($sessies->con95 == true)<h6>Rotation Sacrum links: {{ $sessies->con95 }} </h6>@endif
                            @if ($sessies->con96 == true)<h6>Rotation Sacrum rechts: {{ $sessies->con96 }} </h6>@endif
                            @if ($sessies->con97 == true)<h6>Lateral Flexion Sacrum links:{{ $sessies->con97 }} </h6>@endif
                            @if ($sessies->con98 == true)<h6>Lateral Flexion Sacrum rechts: {{ $sessies->con98 }} </h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con99 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Caudal Joints</p>
                            @if ($sessies->con99 == true)<h6> Flexion-extension: {{ $sessies->con99 }} </h6>@endif
                            @if ($sessies->con100 == true)<h6> Lateral flexion: {{ $sessies->con100 }} </h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif
                </div>
            </div>


            {{-- EXTRA ONDERZOEK --}}


            <div class="row mt-2">
                <div class="col-1">
                    <i class="{{ $sessies->con171}} ml-2" style="color: rgb(152, 221, 152);"></i>
                </div>

                <div class="col-11">
                    @if($sessies->con171 == true)
                    <p style="font-weight: bold;">Extra</p>
                    <div class="card">
                        <div class="card-body">
                            @if($sessies->con172 == true)<h6>Harnachement: {{ $sessies->con172 }}</h6>@endif
                            @if($sessies->con173 == true)<h6>Neurologische Onderzoek: {{ $sessies->con173 }}</h6>@endif
                            @if($sessies->con174 == true)<h6>Beweging onder het zadel: {{ $sessies->con174 }}</h6>@endif

                        </div>
                    </div>
                    @endif
                    <br>
                </div>
            </div>



            {{--             EXTREMITEITEN// --}}

            <div class="row mb-2 mt-2">
                <div class="col-1">
                    <i class="{{ $sessies->con13}} ml-2" style="color: rgb(0, 255, 242); "></i>
                </div>
                <div class="col-11">
                    @if($sessies->con13 == true)<p style="font-weight: bold;">Extremiteiten</p>@endif

                    @if($sessies->con101 == true)
                    <div class="card">
                        <div class="card-body">
                                <p style="font-weight: bold;">Front DIJ</p>
                            @if($sessies->con101 == true)<h6>flexion extension links: {{ $sessies->con101 }}</h6>@endif
                            @if($sessies->con102 == true)<h6>flexion extension rechts: {{ $sessies->con102 }}</h6>@endif
                            @if($sessies->con103 == true)<h6>abduction-addaction links: {{ $sessies->con103 }}</h6>@endif
                            @if($sessies->con104 == true)<h6>abduction-addaction rechts: {{ $sessies->con104 }}</h6>@endif
                            @if($sessies->con105 == true)<h6>internal/external rotation links: {{ $sessies->con105 }}</h6>@endif
                            @if($sessies->con106 == true)<h6>internal/external rotation rechts: {{ $sessies->con106 }}</h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con107 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Front PIJ</p>
                            @if($sessies->con107 == true)<h6>flexion extension rechts: {{ $sessies->con107 }}</h6>@endif
                            @if($sessies->con108 == true)<h6>flexion extension rechts: {{ $sessies->con108 }}</h6>@endif
                            @if($sessies->con109 == true)<h6>abduction-addaction links: {{ $sessies->con109 }}</h6>@endif
                            @if($sessies->con110 == true)<h6>abduction-addaction rechts: {{ $sessies->con110 }}</h6>@endif
                            @if($sessies->con111 == true)<h6>internal/external rotation links: {{ $sessies->con111 }}</h6>@endif
                            @if($sessies->con112 == true)<h6>internal/external rotation rechts: {{ $sessies->con112 }}</h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con107 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">MPJ</p>
                            @if($sessies->con113 == true)<h6>flexion extension rechts: {{ $sessies->con113 }}</h6>@endif
                            @if($sessies->con114 == true)<h6>flexion extension rechts: {{ $sessies->con114 }}</h6>@endif
                            @if($sessies->con115 == true)<h6>abduction-addaction links: {{ $sessies->con115 }}</h6>@endif
                            @if($sessies->con116 == true)<h6>abduction-addaction rechts: {{ $sessies->con116 }}</h6>@endif
                            @if($sessies->con117 == true)<h6>Lateroflexie links: {{ $sessies->con117 }}</h6>@endif
                            @if($sessies->con118 == true)<h6>Lateroflexie rechts: {{ $sessies->con118 }}</h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con107 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Carpal joint</p>
                            @if($sessies->con119 == true)<h6>Flexion extension links: {{ $sessies->con119 }}</h6>@endif
                            @if($sessies->con120 == true)<h6>Flexion extension rechts: {{ $sessies->con120 }}</h6>@endif
                            @if($sessies->con121 == true)<h6>Flexion abduction/adduction links: {{ $sessies->con121 }}</h6>@endif
                            @if($sessies->con122 == true)<h6>Flexion abduction/adduction rechts: {{ $sessies->con122 }}</h6>@endif

                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con123 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Accessory Bone</p>
                            @if($sessies->con123 == true)<h6>Lateral-medial motion links: {{ $sessies->con123 }}</h6>@endif
                            @if($sessies->con124 == true)<h6>Lateral-medial motion rechts: {{ $sessies->con124 }}</h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con125 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Elbow</p>
                            @if($sessies->con125 == true)<h6>Flexion-extension links: {{ $sessies->con125 }}</h6>@endif
                            @if($sessies->con126 == true)<h6>Flexion-extension rechts: {{ $sessies->con126 }}</h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con127 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Shoulder</p>
                            @if($sessies->con127 == true)<h6>Flexion abduction/adduction links: {{ $sessies->con127 }}</h6>@endif
                            @if($sessies->con128 == true)<h6>Flexion abduction/adduction rechts: {{ $sessies->con128 }}</h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con129 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Scapula</p>
                            @if($sessies->con129 == true)<h6>Elevation-depression links: {{ $sessies->con129 }}</h6>@endif
                            @if($sessies->con130 == true)<h6>Elevation-depression rechts: {{ $sessies->con130 }}</h6>@endif
                            @if($sessies->con131 == true)<h6>Neutral-abduction links: {{ $sessies->con131 }}</h6>@endif
                            @if($sessies->con132 == true)<h6>Neutral-abduction rechts: {{ $sessies->con132 }}</h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con133 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Front leg general</p>
                            @if($sessies->con133 == true)<h6>Protraction + ab-/adduction links: {{ $sessies->con133 }}</h6>@endif
                            @if($sessies->con134 == true)<h6>Protraction + ab-/adduction rechts: {{ $sessies->con134 }}</h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con133 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Hind DIJ</p>
                            @if($sessies->con135 == true)<h6>Flexion extension links: {{ $sessies->con135 }}</h6>@endif
                            @if($sessies->con136 == true)<h6>Flexion extension rechts: {{ $sessies->con136 }}</h6>@endif
                            @if($sessies->con137 == true)<h6>Abduction-adduction links: {{ $sessies->con137 }}</h6>@endif
                            @if($sessies->con138 == true)<h6>Abduction-adduction rechts: {{ $sessies->con138 }}</h6>@endif
                            @if($sessies->con139 == true)<h6>Internal/external rotation links: {{ $sessies->con139 }}</h6>@endif
                            @if($sessies->con140 == true)<h6>Internal/external rotation rechts: {{ $sessies->con140 }}</h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con141 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Hind PIJ</p>
                            @if($sessies->con141 == true)<h6>Flexion extension links:  {{ $sessies->con141 }}</h6>@endif
                            @if($sessies->con142 == true)<h6>Flexion extension rechts:  {{ $sessies->con142 }}</h6>@endif
                            @if($sessies->con143 == true)<h6>Abduction-adduction links:{{ $sessies->con143 }}</h6>@endif
                            @if($sessies->con144 == true)<h6>Abduction-adduction rechts: {{ $sessies->con144 }}</h6>@endif
                            @if($sessies->con145 == true)<h6>Internal-external rotation links: {{ $sessies->con145 }}</h6>@endif
                            @if($sessies->con146 == true)<h6>Internal-external rotation rechts: {{ $sessies->con146 }}</h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con147 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">MPJ</p>
                            @if($sessies->con147 == true)<h6>Flexion-extension links: {{ $sessies->con147 }}</h6>@endif
                            @if($sessies->con148 == true)<h6>Flexion-extension rechts: {{ $sessies->con148 }}</h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con149 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Tarsal joint</p>
                            @if($sessies->con149 == true)<h6>Flexion-extension links: {{ $sessies->con149 }}</h6>@endif
                            @if($sessies->con150 == true)<h6>Flexion-extension rechts: {{ $sessies->con150 }}</h6>@endif
                            @if($sessies->con151 == true)<h6>Abduction-adduction + rotation links:  {{ $sessies->con151 }}</h6>@endif
                            @if($sessies->con152 == true)<h6>Abduction-adduction + rotation rechts: {{ $sessies->con152 }}</h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con153 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Stiffle</p>
                            @if($sessies->con153 == true)<h6>Flexion links: {{ $sessies->con153 }}</h6>@endif
                            @if($sessies->con154 == true)<h6>Flexion rechts: {{ $sessies->con154 }}</h6>@endif
                            @if($sessies->con155 == true)<h6>Internal-external rotation links: {{ $sessies->con155 }}</h6>@endif
                            @if($sessies->con156 == true)<h6>Internal-external rotation rechts: {{ $sessies->con156 }}</h6>@endif
                            @if($sessies->con157 == true)<h6>Abduction-adduction links: {{ $sessies->con157 }}</h6>@endif
                            @if($sessies->con158 == true)<h6>Abduction-adduction rechts: {{ $sessies->con158 }}</h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con159 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Coxofemoral</p>
                            @if($sessies->con159 == true)<h6>Abduction-adduction links: {{ $sessies->con159 }}</h6>@endif
                            @if($sessies->con160 == true)<h6>Abduction-adduction rechts: {{ $sessies->con160 }}</h6>@endif
                            @if($sessies->con161 == true)<h6>Internal-external rotation links: {{ $sessies->con161 }}</h6>@endif
                            @if($sessies->con162 == true)<h6>Internal-external rotation rechts: {{ $sessies->con162 }}</h6>@endif
                        </div>
                    </div>
                    <br>
                    @endif

                    @if($sessies->con163 == true)
                    <div class="card">
                        <div class="card-body">
                            <p style="font-weight: bold;">Pelvic limb</p>
                            @if($sessies->con163 == true)<h6>Protraction links: {{ $sessies->con163 }}</h6>@endif
                            @if($sessies->con164 == true)<h6>Protraction rechts: {{ $sessies->con164 }}</h6>@endif
                            @if($sessies->con165 == true)<h6>Protraction + adduction links: {{ $sessies->con165 }}</h6>@endif
                            @if($sessies->con166 == true)<h6>Protraction + adduction rechts: {{ $sessies->con166 }}</h6>@endif
                            @if($sessies->con167 == true)<h6>Retraction + ab-/adduction links: {{ $sessies->con167 }}</h6>@endif
                            @if($sessies->con168 == true)<h6>Retraction + ab-/adduction rechts: {{ $sessies->con168 }}</h6>@endif
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
