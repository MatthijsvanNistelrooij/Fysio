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
        <h6 style="text-align: center"> {{ $sessies->con1 }}, {{ $sessies->updated_at->format('d-m-Y') }} </h6>

        <div class="row">
            <div class="col" style="margin: 30px">
                <h6 style="font-size: 15px"> Info:
                    {{ $sessies->con2 }}
                </h6>
            </div>
        </div>


        {{-- INSPECTIE IN STAND --}}
        <div class="row">
            <div class="col-1">
                <i class="{{ $sessies->con8}} ml-2" style="color: rgb(0, 255, 21);"></i>
            </div>
            <div class="col-11">
                <h6> {{ $sessies->con4 }} </h6>
                <h6> {{ $sessies->con5 }} </h6>
                <h6> {{ $sessies->con6 }} </h6>
                <h6> {{ $sessies->con7 }} </h6>
            </div>
        </div>

        {{-- LASER BEHANDELING --}}
        <div class="row mt-2">
            <div class="col-1">
                <i class="{{ $sessies->con14}} ml-2" style="color: rgb(0, 141, 0);"></i>
            </div>
            <div class="col-11">
                <h6> {{ $sessies->con170 }} </h6>
            </div>
        </div>

        {{-- //ALGEMENE INDRUK --}}
        <div class="row mt-2">
            <div class="col-1">
                <i class="{{ $sessies->con3}} ml-2" style="color: orange; "></i>

            </div>
            <div class="col-11">
                <h6> {{ $sessies->con15 }} </h6>
            </div>
        </div>

        {{-- INSPECTIE IN BEWEGING --}}
        <div class="row mt-2">
            <div class="col-1">
                <i class="{{ $sessies->con9}} ml-2" style="color: rgb(0, 60, 255); "></i>

            </div>
            <div class="col-11">
                <h6> {{ $sessies->con16 }} </h6>
                <h6> {{ $sessies->con17 }} </h6>
                <h6> {{ $sessies->con18 }} </h6>
                <h6> {{ $sessies->con19 }} </h6>
                <h6> {{ $sessies->con20 }} </h6>
                <h6> {{ $sessies->con21 }} </h6>
                <h6> {{ $sessies->con22 }} </h6>
                <h6> {{ $sessies->con23 }} </h6>
                <h6> {{ $sessies->con24 }} </h6>
                <h6> {{ $sessies->con25 }} </h6>
                <h6> {{ $sessies->con26 }} </h6>
                <h6> {{ $sessies->con27 }} </h6>
                <h6> {{ $sessies->con28 }} </h6>
                <h6> {{ $sessies->con29 }} </h6>
                <h6> {{ $sessies->con30 }} </h6>
                <h6> {{ $sessies->con31 }} </h6>
                <h6> {{ $sessies->con32 }} </h6>
                <h6> {{ $sessies->con33 }} </h6>
                <h6> {{ $sessies->con34 }} </h6>
            </div>
        </div>

{{--        ORIENTERENDE PALPATIE --}}
        <div class="row mt-2">
            <div class="col-1">
                <i class="{{ $sessies->con10}} ml-2" style="color: rgb(238, 255, 0); "></i>
            </div>
            <div class="col-11">
                <h6> {{ $sessies->con35 }} </h6>
                <h6> {{ $sessies->con36 }} </h6>
            </div>
        </div>


{{-- TMJ HYOID --}}
        <div class="row mt-2">
            <div class="col-1">
                <i class="{{ $sessies->con11}} ml-2" style="color: rgb(225, 0, 255); "></i>
            </div>
            <div class="col-11">
                <h6> {{ $sessies->con37 }} </h6>
                <h6> {{ $sessies->con38 }} </h6>
                <h6> {{ $sessies->con39 }} </h6>
                <h6> {{ $sessies->con40 }} </h6>
                <h6> {{ $sessies->con41 }} </h6>
                <h6> {{ $sessies->con42 }} </h6>
                <h6> {{ $sessies->con43 }} </h6>
                <h6> {{ $sessies->con44 }} </h6>
                <h6> {{ $sessies->con45 }} </h6>
            </div>
        </div>

{{-- WERVELKOLOM --}}
<div class="row mt-2">
    <div class="col-1">
        <i class="{{ $sessies->con12}} ml-2" style="color: rgb(201, 29, 17);  margin-top: 10px "></i>
    </div>
    <div class="col-11">
        <h6> {{ $sessies->con46 }}
        &nbsp;{{ $sessies->con47 }}
        &nbsp;{{ $sessies->con48 }}
        &nbsp;{{ $sessies->con49 }}
        &nbsp;{{ $sessies->con50 }}
        &nbsp;{{ $sessies->con51 }}
        &nbsp;{{ $sessies->con52 }}
        &nbsp;{{ $sessies->con53 }}
        &nbsp;{{ $sessies->con54 }}
        &nbsp;{{ $sessies->con55 }}
        &nbsp;{{ $sessies->con56 }}
        &nbsp;{{ $sessies->con57 }}
        &nbsp;{{ $sessies->con58 }}
        &nbsp;{{ $sessies->con59 }}
        &nbsp;{{ $sessies->con60 }}
        &nbsp;{{ $sessies->con61 }}
        &nbsp;{{ $sessies->con62 }}
        &nbsp;{{ $sessies->con63 }}
        &nbsp;{{ $sessies->con64 }}
        &nbsp;{{ $sessies->con65 }}
        &nbsp;{{ $sessies->con66 }}
        &nbsp;{{ $sessies->con67 }}
        &nbsp;{{ $sessies->con68 }}
        &nbsp;{{ $sessies->con69 }}
        &nbsp;{{ $sessies->con70 }}
        &nbsp;{{ $sessies->con71 }}
        &nbsp;{{ $sessies->con72 }}
        &nbsp;{{ $sessies->con73 }}
        &nbsp;{{ $sessies->con74 }}
        &nbsp;{{ $sessies->con75 }}
        &nbsp;{{ $sessies->con76 }}
        &nbsp;{{ $sessies->con77 }}
        &nbsp;{{ $sessies->con78 }}
        &nbsp;{{ $sessies->con79 }}
        &nbsp;{{ $sessies->con80 }}
        &nbsp;{{ $sessies->con81 }}
        &nbsp;{{ $sessies->con82 }}
        &nbsp;{{ $sessies->con83 }}
        &nbsp;{{ $sessies->con84 }}
        &nbsp;{{ $sessies->con85 }}
        &nbsp;{{ $sessies->con86 }}
        &nbsp;{{ $sessies->con87 }}
        &nbsp;{{ $sessies->con88 }}
        &nbsp;{{ $sessies->con89 }}
        &nbsp;{{ $sessies->con90 }}
        &nbsp;{{ $sessies->con91 }}
        &nbsp;{{ $sessies->con92 }}
        &nbsp;{{ $sessies->con93 }}
        &nbsp;{{ $sessies->con94 }}
        &nbsp;{{ $sessies->con95 }}
        &nbsp;{{ $sessies->con96 }}
        &nbsp;{{ $sessies->con97 }}
        &nbsp;{{ $sessies->con98 }}
        &nbsp;{{ $sessies->con99 }}
        &nbsp;{{ $sessies->con100 }} </h6>
    </div>
</div>
{{--             EXTREMITEITEN// --}}

<div class="row mb-2 mt-2">
    <div class="col-1">
        <i class="{{ $sessies->con13}} ml-2" style="color: rgb(0, 255, 242); "></i>
    </div>
    <div class="col-11">
        <h6> {{ $sessies->con101 }}
        &nbsp;{{ $sessies->con102 }}
        &nbsp;{{ $sessies->con103 }}
        &nbsp;{{ $sessies->con104 }}
        &nbsp;{{ $sessies->con105 }}
        &nbsp;{{ $sessies->con106 }}
        &nbsp;{{ $sessies->con107 }}
        &nbsp;{{ $sessies->con108 }}
        &nbsp;{{ $sessies->con109 }}
        &nbsp;{{ $sessies->con110 }}
        &nbsp;{{ $sessies->con111 }}
        &nbsp;{{ $sessies->con112 }}
        &nbsp;{{ $sessies->con113 }}
        &nbsp;{{ $sessies->con114 }}
        &nbsp;{{ $sessies->con115 }}
        &nbsp;{{ $sessies->con116 }}
        &nbsp;{{ $sessies->con117 }}
        &nbsp;{{ $sessies->con118 }}
        &nbsp;{{ $sessies->con119 }}
        &nbsp;{{ $sessies->con120 }}
        &nbsp;{{ $sessies->con121 }}
        &nbsp;{{ $sessies->con122 }}
        &nbsp;{{ $sessies->con123 }}
        &nbsp;{{ $sessies->con124 }}
        &nbsp;{{ $sessies->con125 }}
        &nbsp;{{ $sessies->con126 }}
        &nbsp;{{ $sessies->con127 }}
        &nbsp;{{ $sessies->con128 }}
        &nbsp;{{ $sessies->con129 }}
        &nbsp;{{ $sessies->con130 }}
        &nbsp;{{ $sessies->con131 }}
        &nbsp;{{ $sessies->con132 }}
        &nbsp;{{ $sessies->con133 }}
        &nbsp;{{ $sessies->con134 }}
        &nbsp;{{ $sessies->con135 }}
        &nbsp;{{ $sessies->con136 }}
        &nbsp;{{ $sessies->con137 }}
        &nbsp;{{ $sessies->con138 }}
        &nbsp;{{ $sessies->con139 }}
        &nbsp;{{ $sessies->con140 }}
        &nbsp;{{ $sessies->con141 }}
        &nbsp;{{ $sessies->con142 }}
        &nbsp;{{ $sessies->con143 }}
        &nbsp;{{ $sessies->con144 }}
        &nbsp;{{ $sessies->con145 }}
        &nbsp;{{ $sessies->con146 }}
        &nbsp;{{ $sessies->con147 }}
        &nbsp;{{ $sessies->con148 }}
        &nbsp;{{ $sessies->con149 }}
        &nbsp;{{ $sessies->con150 }}
        &nbsp;{{ $sessies->con151 }}
        &nbsp;{{ $sessies->con152 }}
        &nbsp;{{ $sessies->con153 }}
        &nbsp;{{ $sessies->con154 }}
        &nbsp;{{ $sessies->con155 }}
        &nbsp;{{ $sessies->con156 }}
        &nbsp;{{ $sessies->con157 }}
        &nbsp; {{ $sessies->con158 }}
        &nbsp; {{ $sessies->con159 }}
        &nbsp; {{ $sessies->con160 }}
        &nbsp; {{ $sessies->con161 }}
        &nbsp; {{ $sessies->con162 }}
        &nbsp; {{ $sessies->con163 }}
        &nbsp; {{ $sessies->con164 }}
        &nbsp; {{ $sessies->con165 }}
        &nbsp; {{ $sessies->con166 }}
        &nbsp; {{ $sessies->con167 }}
        &nbsp; {{ $sessies->con168 }}
        </h6>
    </div>
</div>


    {{-- OEFENINGEN --}}

    <div class="row ml-2 mr-2 mt-2 mb-3">

    <div class="col-md-4 mb-2">
        <iframe width="100%" style="margin: 5px" height="100%" src="{{ $sessies->con171 }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="col-md-4 mb-2">
        <iframe width="100%" style="margin: 5px" height="100%" src="{{ $sessies->con172 }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="col-md-4 mb-2">
        <iframe width="100%" style="margin: 5px" height="100%" src="{{ $sessies->con173 }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

</div>

</div>
</div>
</div>
@endsection
