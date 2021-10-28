@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('dog.index') }}" class="btn btn-success mb-1" style="width: 100%; color: white"><i class="fas fa-dog"></i> </a>
            <button class="btn btn-success mb-1 " data-toggle="modal" data-target="#exampleModal100" type="button" style="width: 100%; color: white"><i class="fas fa-external-link-alt"></i></button>
            <div class="card mb-1 d-none d-lg-block" style="height: auto; border-radius: 5px">
                <img src="/images/logo2.png" alt="" style="width: 100%; margin-top: 80%; margin-bottom: 25px">
            </div>
        </div>

        <div class="col-md-10">
            @if (session()->has('success'))
            <a href="" onClick="window.location.reload();" style="text-decoration: none">
                <div class="alert alert-success mb-2" style="background-color: #dbf0f0; border: none; color: rgb(121, 178, 182)">
                    <i class="fas fa-check"></i>
                    {{ session()->get('success') }}
                </div>
            </a>
            @endif
        <button class="btn btn-success mb-1" style="width: 100%; height: 35px; border: none; border-radius: 5px">
            <a href="{{ URL::to('/dogs/' . $consults->dog_id ) }}" style="text-decoration: none; color: rgb(255, 255, 255)">
                <i class="far fa-arrow-alt-circle-left"></i>
                Terug naar Hond ID: {{ $consults->dog_id}}
            </a>
        </button>


<div class="card">
    <div class="card-header">
        <form action="{{ route('consults.update', ['id' => $consults->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="input-group mt-2">
            <input type="text" class="form-control" placeholder="Info..." aria-label="" name="con2" aria-describedby="basic-addon2" value="{{ $consults->con2 }}">
            <div class="input-group-append">
                <button class="btn btn-success" style="width: auto; border-radius: 0 5px 5px 0; color: white" type="submit">
                    <i class="fas fa-check"></i>
                </button>
            </div>
        </div>
        <div class="inputs">
            <input type="text" name="con1" id="" value="{{ $consults->con1 }}">
            <input type="text" name="con3" id="" value="{{ $consults->con3 }}">
            <input type="text" name="con4" id="" value="{{ $consults->con4 }}">
            <input type="text" name="con5" id="" value="{{ $consults->con5 }}">
            <input type="text" name="con6" id="" value="{{ $consults->con6 }}">
            <input type="text" name="con7" id="" value="{{ $consults->con7 }}">
            <input type="text" name="con8" id="" value="{{ $consults->con8 }}">
            <input type="text" name="con9" id="" value="{{ $consults->con9 }}">
            <input type="text" name="con10" id="" value="{{ $consults->con10 }}">
            <input type="text" name="con11" id="" value="{{ $consults->con11 }}">
            <input type="text" name="con12" id="" value="{{ $consults->con12 }}">
            <input type="text" name="con13" id="" value="{{ $consults->con13 }}">
            <input type="text" name="con14" id="" value="{{ $consults->con14 }}">

                <input type="text" name="con15" id="" class="form-control" value="{{ $consults->con15 }}">
                <input type="text" name="con16" id="" class="form-control" value="{{ $consults->con16 }}">
                <input type="text" name="con17" id="" class="form-control" value="{{ $consults->con17 }}">
                <input type="text" name="con18" id="" class="form-control" value="{{ $consults->con18 }}">
                <input type="text" name="con19" id="" class="form-control" value="{{ $consults->con19 }}">
                <input type="text" name="con20" id="" class="form-control" value="{{ $consults->con20 }}">
                <input type="text" name="con21" id="" class="form-control" value="{{ $consults->con21 }}">
                <input type="text" name="con22" id="" class="form-control" value="{{ $consults->con22 }}">
                <input type="text" name="con23" id="" class="form-control" value="{{ $consults->con23 }}">
                <input type="text" name="con24" id="" class="form-control" value="{{ $consults->con24 }}">
                <input type="text" name="con25" id="" class="form-control" value="{{ $consults->con25 }}">
                <input type="text" name="con26" id="" class="form-control" value="{{ $consults->con26 }}">
                <input type="text" name="con27" id="" class="form-control" value="{{ $consults->con27 }}">
                <input type="text" name="con28" id="" class="form-control" value="{{ $consults->con28 }}">
                <input type="text" name="con29" id="" class="form-control" value="{{ $consults->con29 }}">
                <input type="text" name="con30" id="" class="form-control" value="{{ $consults->con30 }}">
                <input type="text" name="con31" id="" class="form-control" value="{{ $consults->con31 }}">
                <input type="text" name="con32" id="" class="form-control" value="{{ $consults->con32 }}">
                <input type="text" name="con33" id="" class="form-control" value="{{ $consults->con33 }}">
                <input type="text" name="con34" id="" class="form-control" value="{{ $consults->con34 }}">
                <input type="text" name="con35" id="" class="form-control" value="{{ $consults->con35 }}">
                <input type="text" name="con36" id="" class="form-control" value="{{ $consults->con36 }}">
                <input type="text" name="con37" id="" class="form-control" value="{{ $consults->con37 }}">
                <input type="text" name="con38" id="" class="form-control" value="{{ $consults->con38 }}">
                <input type="text" name="con39" id="" class="form-control" value="{{ $consults->con39 }}">
                <input type="text" name="con40" id="" class="form-control" value="{{ $consults->con40 }}">
                <input type="text" name="con41" id="" class="form-control" value="{{ $consults->con41 }}">
                <input type="text" name="con42" id="" class="form-control" value="{{ $consults->con42 }}">
                <input type="text" name="con43" id="" class="form-control" value="{{ $consults->con43 }}">
                <input type="text" name="con44" id="" class="form-control" value="{{ $consults->con44 }}">
                <input type="text" name="con45" id="" class="form-control" value="{{ $consults->con45 }}">
                <input type="text" name="con46" id="" class="form-control" value="{{ $consults->con46 }}">
                <input type="text" name="con47" id="" class="form-control" value="{{ $consults->con47 }}">
                <input type="text" name="con48" id="" class="form-control" value="{{ $consults->con48 }}">
                <input type="text" name="con49" id="" class="form-control" value="{{ $consults->con49 }}">
                <input type="text" name="con50" id="" class="form-control" value="{{ $consults->con50 }}">
                <input type="text" name="con51" id="" class="form-control" value="{{ $consults->con51 }}">
                <input type="text" name="con52" id="" class="form-control" value="{{ $consults->con52 }}">
                <input type="text" name="con53" id="" class="form-control" value="{{ $consults->con53 }}">
                <input type="text" name="con54" id="" class="form-control" value="{{ $consults->con54 }}">
                <input type="text" name="con55" id="" class="form-control" value="{{ $consults->con55 }}">
                <input type="text" name="con56" id="" class="form-control" value="{{ $consults->con56 }}">
                <input type="text" name="con57" id="" class="form-control" value="{{ $consults->con57 }}">
                <input type="text" name="con58" id="" class="form-control" value="{{ $consults->con58 }}">
                <input type="text" name="con59" id="" class="form-control" value="{{ $consults->con59 }}">
                <input type="text" name="con60" id="" class="form-control" value="{{ $consults->con60 }}">
                <input type="text" name="con61" id="" class="form-control" value="{{ $consults->con61 }}">
                <input type="text" name="con62" id="" class="form-control" value="{{ $consults->con62 }}">
                <input type="text" name="con63" id="" class="form-control" value="{{ $consults->con63 }}">
                <input type="text" name="con64" id="" class="form-control" value="{{ $consults->con64 }}">
                <input type="text" name="con65" id="" class="form-control" value="{{ $consults->con55 }}">
                <input type="text" name="con66" id="" class="form-control" value="{{ $consults->con66 }}">
                <input type="text" name="con67" id="" class="form-control" value="{{ $consults->con67 }}">
                <input type="text" name="con68" id="" class="form-control" value="{{ $consults->con68 }}">
                <input type="text" name="con69" id="" class="form-control" value="{{ $consults->con69 }}">
                <input type="text" name="con70" id="" class="form-control" value="{{ $consults->con70 }}">
                <input type="text" name="con71" id="" class="form-control" value="{{ $consults->con71 }}">
                <input type="text" name="con72" id="" class="form-control" value="{{ $consults->con72 }}">
                <input type="text" name="con73" id="" class="form-control" value="{{ $consults->con73 }}">
                <input type="text" name="con74" id="" class="form-control" value="{{ $consults->con74 }}">
                <input type="text" name="con75" id="" class="form-control" value="{{ $consults->con75 }}">
                <input type="text" name="con76" id="" class="form-control" value="{{ $consults->con76 }}">
                <input type="text" name="con77" id="" class="form-control" value="{{ $consults->con77 }}">
                <input type="text" name="con78" id="" class="form-control" value="{{ $consults->con78 }}">
                <input type="text" name="con79" id="" class="form-control" value="{{ $consults->con79 }}">
                <input type="text" name="con80" id="" class="form-control" value="{{ $consults->con80 }}">
                <input type="text" name="con81" id="" class="form-control" value="{{ $consults->con81 }}">
                <input type="text" name="con82" id="" class="form-control" value="{{ $consults->con82 }}">
                <input type="text" name="con83" id="" class="form-control" value="{{ $consults->con83 }}">
                <input type="text" name="con84" id="" class="form-control" value="{{ $consults->con84 }}">
                <input type="text" name="con85" id="" class="form-control" value="{{ $consults->con85 }}">
                <input type="text" name="con86" id="" class="form-control" value="{{ $consults->con86 }}">
                <input type="text" name="con87" id="" class="form-control" value="{{ $consults->con87 }}">
                <input type="text" name="con88" id="" class="form-control" value="{{ $consults->con88 }}">
                <input type="text" name="con89" id="" class="form-control" value="{{ $consults->con89 }}">
                <input type="text" name="con90" id="" class="form-control" value="{{ $consults->con90 }}">
                <input type="text" name="con91" id="" class="form-control" value="{{ $consults->con91 }}">
                <input type="text" name="con92" id="" class="form-control" value="{{ $consults->con92 }}">
                <input type="text" name="con93" id="" class="form-control" value="{{ $consults->con93 }}">
                <input type="text" name="con94" id="" class="form-control" value="{{ $consults->con94 }}">
                <input type="text" name="con95" id="" class="form-control" value="{{ $consults->con95 }}">
                <input type="text" name="con96" id="" class="form-control" value="{{ $consults->con96 }}">
                <input type="text" name="con97" id="" class="form-control" value="{{ $consults->con97 }}">
                <input type="text" name="con98" id="" class="form-control" value="{{ $consults->con98 }}">
                <input type="text" name="con99" id="" class="form-control" value="{{ $consults->con99 }}">
                <input type="text" name="con100" id="" class="form-control" value="{{ $consults->con100 }}">
                <input type="text" name="con101" id="" class="form-control" value="{{ $consults->con101 }}">
                <input type="text" name="con102" id="" class="form-control" value="{{ $consults->con102 }}">
                <input type="text" name="con103" id="" class="form-control" value="{{ $consults->con103 }}">
                <input type="text" name="con104" id="" class="form-control" value="{{ $consults->con104 }}">
                <input type="text" name="con105" id="" class="form-control" value="{{ $consults->con105 }}">
                <input type="text" name="con106" id="" class="form-control" value="{{ $consults->con106 }}">
                <input type="text" name="con107" id="" class="form-control" value="{{ $consults->con107 }}">
                <input type="text" name="con108" id="" class="form-control" value="{{ $consults->con108 }}">
                <input type="text" name="con109" id="" class="form-control" value="{{ $consults->con109 }}">
                <input type="text" name="con110" id="" class="form-control" value="{{ $consults->con110 }}">
                <input type="text" name="con111" id="" class="form-control" value="{{ $consults->con111 }}">
                <input type="text" name="con112" id="" class="form-control" value="{{ $consults->con112 }}">
                <input type="text" name="con113" id="" class="form-control" value="{{ $consults->con113 }}">
                <input type="text" name="con114" id="" class="form-control" value="{{ $consults->con114 }}">
                <input type="text" name="con115" id="" class="form-control" value="{{ $consults->con115 }}">
                <input type="text" name="con116" id="" class="form-control" value="{{ $consults->con116 }}">
                <input type="text" name="con117" id="" class="form-control" value="{{ $consults->con117 }}">
                <input type="text" name="con118" id="" class="form-control" value="{{ $consults->con118 }}">
                <input type="text" name="con119" id="" class="form-control" value="{{ $consults->con119 }}">
                <input type="text" name="con120" id="" class="form-control" value="{{ $consults->con120 }}">
                <input type="text" name="con121" id="" class="form-control" value="{{ $consults->con121 }}">
                <input type="text" name="con122" id="" class="form-control" value="{{ $consults->con122 }}">
                <input type="text" name="con123" id="" class="form-control" value="{{ $consults->con123 }}">
                <input type="text" name="con124" id="" class="form-control" value="{{ $consults->con124 }}">
                <input type="text" name="con125" id="" class="form-control" value="{{ $consults->con125 }}">
                <input type="text" name="con126" id="" class="form-control" value="{{ $consults->con126 }}">
                <input type="text" name="con127" id="" class="form-control" value="{{ $consults->con127 }}">
                <input type="text" name="con128" id="" class="form-control" value="{{ $consults->con128 }}">
                <input type="text" name="con129" id="" class="form-control" value="{{ $consults->con129 }}">
                <input type="text" name="con130" id="" class="form-control" value="{{ $consults->con130 }}">
                <input type="text" name="con131" id="" class="form-control" value="{{ $consults->con131 }}">
                <input type="text" name="con132" id="" class="form-control" value="{{ $consults->con132 }}">
                <input type="text" name="con133" id="" class="form-control" value="{{ $consults->con133 }}">
                <input type="text" name="con134" id="" class="form-control" value="{{ $consults->con134 }}">
                <input type="text" name="con135" id="" class="form-control" value="{{ $consults->con135 }}">
                <input type="text" name="con136" id="" class="form-control" value="{{ $consults->con136 }}">
                <input type="text" name="con137" id="" class="form-control" value="{{ $consults->con137 }}">
                <input type="text" name="con138" id="" class="form-control" value="{{ $consults->con138 }}">
                <input type="text" name="con139" id="" class="form-control" value="{{ $consults->con139 }}">
                <input type="text" name="con140" id="" class="form-control" value="{{ $consults->con140 }}">
                <input type="text" name="con141" id="" class="form-control" value="{{ $consults->con141 }}">
                <input type="text" name="con142" id="" class="form-control" value="{{ $consults->con142 }}">
                <input type="text" name="con143" id="" class="form-control" value="{{ $consults->con143 }}">
                <input type="text" name="con144" id="" class="form-control" value="{{ $consults->con144 }}">
                <input type="text" name="con145" id="" class="form-control" value="{{ $consults->con145 }}">
                <input type="text" name="con146" id="" class="form-control" value="{{ $consults->con146 }}">
                <input type="text" name="con147" id="" class="form-control" value="{{ $consults->con147 }}">
                <input type="text" name="con148" id="" class="form-control" value="{{ $consults->con148 }}">
                <input type="text" name="con149" id="" class="form-control" value="{{ $consults->con149 }}">
                <input type="text" name="con150" id="" class="form-control" value="{{ $consults->con150 }}">
                <input type="text" name="con151" id="" class="form-control" value="{{ $consults->con151 }}">
                <input type="text" name="con152" id="" class="form-control" value="{{ $consults->con152 }}">
                <input type="text" name="con153" id="" class="form-control" value="{{ $consults->con153 }}">
                <input type="text" name="con154" id="" class="form-control" value="{{ $consults->con154 }}">
                <input type="text" name="con155" id="" class="form-control" value="{{ $consults->con155 }}">
                <input type="text" name="con156" id="" class="form-control" value="{{ $consults->con156 }}">
                <input type="text" name="con157" id="" class="form-control" value="{{ $consults->con157 }}">
                <input type="text" name="con158" id="" class="form-control" value="{{ $consults->con158 }}">
                <input type="text" name="con159" id="" class="form-control" value="{{ $consults->con159 }}">
                <input type="text" name="con160" id="" class="form-control" value="{{ $consults->con160 }}">
                <input type="text" name="con161" id="" class="form-control" value="{{ $consults->con161 }}">
                <input type="text" name="con162" id="" class="form-control" value="{{ $consults->con162 }}">
                <input type="text" name="con163" id="" class="form-control" value="{{ $consults->con163 }}">
                <input type="text" name="con164" id="" class="form-control" value="{{ $consults->con164 }}">
                <input type="text" name="con165" id="" class="form-control" value="{{ $consults->con165 }}">
                <input type="text" name="con166" id="" class="form-control" value="{{ $consults->con166 }}">
                <input type="text" name="con167" id="" class="form-control" value="{{ $consults->con167 }}">
                <input type="text" name="con168" id="" class="form-control" value="{{ $consults->con168 }}">
                <input type="text" name="con169" id="" class="form-control" value="{{ $consults->con169 }}">
                <input type="text" name="con170" id="" class="form-control" value="{{ $consults->con170 }}">
                <input type="text" name="con171" id="" class="form-control" value="{{ $consults->con171 }}">
                <input type="text" name="con172" id="" class="form-control" value="{{ $consults->con172 }}">
                <input type="text" name="con173" id="" class="form-control" value="{{ $consults->con173 }}">
           </div>
       </div>
    </form>

<div class="card-body" style="height: auto; background-color: rgba(223, 247, 252, 0.2)">
    @include('partials.tileshond')
</div>

{{-- MODALS --}}

{{-- <div class="modal fade bd-example-modal-xl" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.fotoshond')
</div> --}}
{{--
<div class="modal fade bd-example-modal-xl" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.inspectiestand')
</div>

<div class="modal fade bd-example-modal-xl" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.inspectiebeweging')
</div>

<div class="modal fade bd-example-modal-xl" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.orienterendepalpatie')
</div>

<div class="modal fade bd-example-modal-xl" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.tmjhyoid')
</div>

<div class="modal fade bd-example-modal-xl" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.wervelkolom')
</div>

<div class="modal fade bd-example-modal-xl" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.extremiteiten')
</div>

<div class="modal fade bd-example-modal-xl" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.oefeningen')
</div>

<div class="modal fade bd-example-modal-xl" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.laser')
</div>

<div class="modal fade bd-example-modal-xl" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.rapport')
</div>

<div class="modal fade bd-example-modal-lg" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.fotos')
</div> --}}



<script>
//    OPEN MODAL

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})


// CHANGE THEME

function myFunction() {
    var e = document.getElementById("theme");
    var c = window.getComputedStyle(e).backgroundColor;
    if (c === "rgb(255, 214, 255)") {
    document.getElementById("theme").style.background = "#48BFE3";
} else{
    document.getElementById("theme").style.background = "rgb(255, 214, 255)";
}
}
function myFunction2() {
    var e = document.getElementById("theme2");
    var c = window.getComputedStyle(e).backgroundColor;
    if (c === "rgb(231, 198, 255)") {
    document.getElementById("theme2").style.background = "#4FC7E2";
} else{
    document.getElementById("theme2").style.background = "rgb(231, 198, 255)";
}
}
function myFunction3() {
    var e = document.getElementById("theme3");
    var c = window.getComputedStyle(e).backgroundColor;
    if (c === "rgb(216, 190, 255)") {
    document.getElementById("theme3").style.background = "#56CFE1";
} else{
    document.getElementById("theme3").style.background = "rgb(216, 190, 255)";
}
}
function myFunction4() {
    var e = document.getElementById("theme4");
    var c = window.getComputedStyle(e).backgroundColor;
    if (c === "rgb(200, 182, 255)") {
    document.getElementById("theme4").style.background = "#5DD7E0";
} else{
    document.getElementById("theme4").style.background = "rgb(200, 182, 255)";
}
}
function myFunction5() {
    var e = document.getElementById("theme5");
    var c = window.getComputedStyle(e).backgroundColor;
    if (c === "rgb(184, 192, 255)") {
    document.getElementById("theme5").style.background = "#64DFDF";
} else{
    document.getElementById("theme5").style.background = "rgb(184, 192, 255)";
}
}
function myFunction6() {
    var e = document.getElementById("theme6");
    var c = window.getComputedStyle(e).backgroundColor;
    if (c === "rgb(186, 200, 255)") {
    document.getElementById("theme6").style.background = "#72EFDD";
} else{
    document.getElementById("theme6").style.background = "rgb(186, 200, 255)";
}
}
function myFunction7() {
    var e = document.getElementById("theme7");
    var c = window.getComputedStyle(e).backgroundColor;
    if (c === "rgb(187, 208, 255)") {
    document.getElementById("theme7").style.background = "#80FFDB";
} else{
    document.getElementById("theme7").style.background = "rgb(187, 208, 255)";
}
}
function myFunction8() {
    var e = document.getElementById("theme8");
    var c = window.getComputedStyle(e).backgroundColor;
    if (c === "rgb(229, 29, 255)") {
    document.getElementById("theme8").style.background = "#5dd7e0";
} else{
    document.getElementById("theme8").style.background = "rgb(229, 29, 255)";
}
}

</script>

@endsection

