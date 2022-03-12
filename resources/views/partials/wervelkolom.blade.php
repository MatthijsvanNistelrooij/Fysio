
    <div class="modal-dialog modal-dialog modal-xl"  role="document">
        <div class="modal-content">
            <form action="{{ route('sessies.update', ['id' => $sessies->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf

          <div class="modal-header">
            <input type="radio" name="con12" id="" value="fas fa-square" checked="checked" class="mt-2 mr-2">

          <h5 class="modal-title" id="exampleModalLongTitle">Wervelkolom:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>
              <div class="modal-body mb-3">


        <div class="row">
            <div class="col-md-4 col-sm-12" style="overflow:scroll; height: 700px; overflow-x: hidden; margin-bottom: 50px; min-width: 300px">
                <button data-toggle="collapse" data-target="#demo200" class="collapsible" style="border-radius: 5px" type='button'>
                    <span>General extension CWK 2</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>
                <div id="demo200" class="collapse">
                    <input type="text" name="con46" class="form-control mt-1 mb-1" value="{{ $sessies->con46 }}" placeholder="...">
                </div>
                <button data-toggle="collapse" data-target="#demo2" class="collapsible" style="border-radius: 5px" type='button'>
                    <span>C0-C1</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>
                    <div id="demo2" class="collapse">
                    <h6 for="lateral" class="title">Flexie</h6>
                    <input type="text" name="con47" class="form-control" value="{{ $sessies->con47 }}" placeholder="...">
                    <h6 for="lateral" class="title">Extensie</h6>
                    <input type="text" name="con48" class="form-control" value="{{ $sessies->con48 }}" placeholder="...">
                    <h6 for="lateral" class="title">Lateroflexie</h6>
                    <div class="row">
                        <div class="col-md-2 mt-2">
                            li
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="con49" class="form-control mt-1" value="{{ $sessies->con49 }}" placeholder="...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mt-2">
                            re
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="con50" class="form-control mb-1 mt-1"value="{{ $sessies->con50 }}" placeholder="...">
                        </div>
                    </div>

                </div>
                <button data-toggle="collapse" data-target="#demo3" class="collapsible" style="border-radius: 5px" type='button'>
                    <span>C1-C2</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>
                <div id="demo3" class="collapse">
                    <h6 for="lateral" class="title">Rotatie</h6>
                    <div class="row">
                        <div class="col-md-2 mt-2">
                            li
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="con51" class="form-control mt-1" value="{{ $sessies->con51 }}" placeholder="...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mt-2">
                            re
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="con52" class="form-control mt-1 mb-1" value="{{ $sessies->con52 }}" placeholder="...">
                        </div>
                    </div>

                </div>
                <button data-toggle="collapse" data-target="#demo201" class="collapsible" style="border-radius: 5px;" type='button'>
                    <span>General latflex CWK</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>
                <div id="demo201" class="collapse mt-1">
                    <div class="row">
                        <div class="col-md-2">
                            li
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="con53" class="form-control" value="{{ $sessies->con53 }}" placeholder="...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mt-2">
                            re
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="con54" class="form-control mt-1 mb-1" value="{{ $sessies->con54 }}" placeholder="...">
                        </div>
                    </div>
                </div>

                <button data-toggle="collapse" data-target="#demo4" class="collapsible" style="border-radius: 5px" type='button'>
                    <span>C2-C7</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>
                <div id="demo4" class="collapse">
                    <h6 for="lateral" class="title">Lateroflexie</h6>
                    <div class="row">
                        <div class="col-md-2 mt-1">
                            li
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="con55" class="form-control mt-1" value="{{ $sessies->con55 }}" placeholder="...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mt-1">
                            re
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="con56" class="form-control mt-1" value="{{ $sessies->con56 }}" placeholder="...">
                        </div>
                    </div>
                    <h6 for="lateral" class="title">Flexie</h6>
                    <input type="text" class="form-control mt-1" name="con57" value="{{ $sessies->con57 }}" placeholder="...">
                    <h6 for="lateral" class="title">Extensie</h6>
                    <input type="text" class="form-control mt-1 mb-1" name="con58" value="{{ $sessies->con58 }}" placeholder="...">
                </div>
                <button data-toggle="collapse" data-target="#demo5" class="collapsible" style="border-radius: 5px" type='button'>
                    <span>T3-T10</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>
                <div id="demo5" class="collapse">
                    <h6 for="lateral" class="title">General flexion</h6>
                    <input type="text" class="form-control mt-1" name="con59" value="{{ $sessies->con59 }}" placeholder="...">
                    <h6 for="lateral" class="title">Specific flexion</h6>
                    <input type="text" class="form-control mt-1" name="con60" value="{{ $sessies->con60 }}" placeholder="...">
                    <h6 for="lateral" class="title">General rot/latflex</h6>
                    <div class="row">
                        <div class="col-md-2 mt-1">
                            li
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="con61" class="form-control mt-1" value="{{ $sessies->con61 }}" placeholder="...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mt-1">
                            re
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="con62" class="form-control mt-1" value="{{ $sessies->con62 }}" placeholder="...">
                        </div>
                    </div>
                    <br>
                    <h6 for="lateral" class="title">Specific rot/latflex</h6>
                    <div class="row">
                        <div class="col-md-2 mt-1">
                            li
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="con63" class="form-control mt-1" value="{{ $sessies->con63 }}" placeholder="...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mt-1">
                            re
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="con64" class="form-control mt-1" value="{{ $sessies->con64 }}" placeholder="...">
                        </div>
                    </div>
                    <br>
                    <h6 for="lateral" class="title">Specific extension</h6>
                    <input type="text" class="form-control mt-1 mb-1" name="con65" placeholder="..." value="{{ $sessies->con65 }}">
                </div>
                <button data-toggle="collapse" data-target="#demo6" class="collapsible" style="border-radius: 5px" type='button'>
                    <span>T10-L6</span>
                    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
                </button>
                <div id="demo6" class="collapse">
                    <h6 for="lateral" class="title">Active extension cranial - caudal</h6>
                    <input type="text" class="form-control mt-1" name="con66" value="{{ $sessies->con66 }}" placeholder="...">
                    <h6 for="lateral" class="title">Active flexion caudal -cranial</h6>
                    <input type="text" class="form-control" name="con67" value="{{ $sessies->con67 }}" placeholder="...">
                    <h6 for="lateral" class="title">Passive regional lateral bending</h6>
                    <div class="row">
                        <div class="col-md-2 mt-1">
                            li
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="con68" class="form-control mt-1" value="{{ $sessies->con68 }}" placeholder="...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mt-1">
                            re
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="con69" class="form-control mt-1" value="{{ $sessies->con69 }}" placeholder="...">
                        </div>
                    </div>
                    <br>
                    <h6 for="lateral" class="title">Flexion segmental</h6>
                    <input type="text" class="form-control mt-1 mb-1" name="con70" value="{{ $sessies->con70 }}" placeholder="...">
                    <h6 for="lateral" class="title">Latflex/rot</h6>
                    <div class="row">
                        <div class="col-md-2 mt-1">
                            li
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="con71" class="form-control mt-1" value="{{ $sessies->con71 }}" placeholder="...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mt-1">
                            re
            </div>
            <div class="col-md-10">
                <input type="text" name="con72" class="form-control mt-1 mb-1" value="{{ $sessies->con72 }}" placeholder="...">
            </div>
        </div>
</div>

<button data-toggle="collapse" data-target="#demo7" class="collapsible" style="border-radius: 5px" type='button'>
    <span>Ribs</span>
    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
</button>

<div id="demo7" class="collapse">
    <h6 for="lateral" class="title">Cranial-caudal - cranial</h6>
    <div class="row">
        <div class="col-md-2 mt-1">
            li
        </div>
        <div class="col-md-10">
            <input type="text" name="con73" class="form-control mt-1" value="{{ $sessies->con73 }}" placeholder="...">
        </div>
        </div>
        <div class="row">
            <div class="col-md-2 mt-1">
                re
            </div>
            <div class="col-md-10">
                <input type="text" name="con74" class="form-control mt-1" value="{{ $sessies->con74 }}" placeholder="...">
            </div>
            </div>


    <h6 for="lateral" class="title">Dorso-ventral</h6>
    <div class="row">
        <div class="col-md-2 mt-1">
            li
        </div>
        <div class="col-md-10">
            <input type="text" name="con75" class="form-control mt-1" value="{{ $sessies->con75 }}" placeholder="...">
        </div>
        </div>
        <div class="row">
            <div class="col-md-2 mt-1">
                re
            </div>
            <div class="col-md-10">
                <input type="text" name="con76" class="form-control mt-1 mb-1" value="{{ $sessies->con76 }}" placeholder="...">
            </div>
        </div>
    </div>

<button data-toggle="collapse" data-target="#demo8" class="collapsible" style="border-radius: 5px" type='button'>
    <span>L1-L6</span>
    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
</button>

<div id="demo8" class="collapse">
    <h6 for="lateral" class="title">Extension SP</h6>
    <div class="row">
        <div class="col-md-2 mt-1">
            li
        </div>
        <div class="col-md-10">
            <input type="text" name="con77" class="form-control mt-1" value="{{ $sessies->con77 }}" placeholder="...">
        </div>
        </div>
        <div class="row">
            <div class="col-md-2 mt-1">
                re
            </div>
            <div class="col-md-10">
                <input type="text" name="con78" class="form-control mt-1" value="{{ $sessies->con78 }}" placeholder="...">
            </div>
            </div>

    <h6 for="lateral" class="title">Extension AP</h6>
    <div class="row">
        <div class="col-md-2 mt-1">
            li
        </div>
        <div class="col-md-10">
            <input type="text" name="con79" class="form-control mt-1" value="{{ $sessies->con79 }}" placeholder="...">
        </div>
        </div>
        <div class="row">
            <div class="col-md-2 mt-1">
                re
            </div>
            <div class="col-md-10">
                <input type="text" name="con80" class="form-control mt-1 mb-1" value="{{ $sessies->con80 }}" placeholder="...">
            </div>
            </div>

</div>

<button data-toggle="collapse" data-target="#demo9" class="collapsible" style="border-radius: 5px" type='button'>
    <span>L4-S1</span>
    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
</button>

<div id="demo9" class="collapse">
    <h6 for="lateral" class="title">Extension Intertransverse</h6>
    <div class="row">
        <div class="col-md-2 mt-1">
            li
        </div>
        <div class="col-md-10">
            <input type="text" name="con81" class="form-control mt-1" value="{{ $sessies->con81 }}" placeholder="...">
        </div>
        </div>
        <div class="row">
            <div class="col-md-2 mt-1">
                re
            </div>
            <div class="col-md-10">
                <input type="text" name="con82" class="form-control mt-1 mb-1" value="{{ $sessies->con82 }}" placeholder="...">
            </div>
            </div>

        </div>

<button data-toggle="collapse" data-target="#demo10" class="collapsible" style="border-radius: 5px" type='button'>
    <span>T18-T8</span>
    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
</button>

<div id="demo10" class="collapse">
    <h6 for="lateral" class="title">Extension</h6>
    <input type="text" class="form-control mt-1 mb-1" name="con83" value="{{ $sessies->con83 }}" placeholder="...">
</div>

<button data-toggle="collapse" data-target="#demo11" class="collapsible" style="border-radius: 5px" type='button'>
    <span>Pelvic</span>
    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
</button>

<div id="demo11" class="collapse">
    <h6 for="lateral" class="title">General Squeeze</h6>
    <input type="text" class="form-control mt-1 mb-1" name="con84" value="{{ $sessies->con84 }}" placeholder="...">

    <h6 for="lateral" class="title">Forward rotation ilium general</h6>
    <div class="row">
        <div class="col-md-2 mt-1">
            li
        </div>
        <div class="col-md-10">
            <input type="text" name="con85" class="form-control mt-1" value="{{ $sessies->con85 }}" placeholder="...">
        </div>
        </div>
        <div class="row">
            <div class="col-md-2 mt-1">
                re
            </div>
            <div class="col-md-10">
                <input type="text" name="con86" class="form-control mt-1 mb-1" value="{{ $sessies->con86 }}" placeholder="...">
            </div>
            </div>


    <h6 for="lateral" class="title">Forward rotation ilium spec.</h6>
    <div class="row">
        <div class="col-md-2 mt-1">
            li
        </div>
        <div class="col-md-10">
            <input type="text" name="con87" class="form-control mt-1" value="{{ $sessies->con87 }}" placeholder="...">
        </div>
        </div>
        <div class="row">
            <div class="col-md-2 mt-1">
                re
            </div>
            <div class="col-md-10">
                <input type="text" name="con88" class="form-control mt-1" value="{{ $sessies->con88 }}" placeholder="...">
            </div>
            </div>
            <br>
    <h6 for="lateral" class="title">Backward rotation ilium tub sacrale / tub coxae</h6>
    <div class="row">
        <div class="col-md-2 mt-1">
            li
        </div>
        <div class="col-md-10">
            <input type="text" name="con89" class="form-control mt-1" value="{{ $sessies->con89 }}" placeholder="...">
        </div>
        </div>
        <div class="row">
            <div class="col-md-2 mt-1">
                re
            </div>
            <div class="col-md-10">
                <input type="text" name="con90" class="form-control mt-1" value="{{ $sessies->con90 }}" placeholder="...">
            </div>
            </div>
            <br>
    <h6 for="lateral" class="title">Glide tub sacrale</h6>
    <div class="row">
        <div class="col-md-2 mt-1">
            li
        </div>
        <div class="col-md-10">
            <input type="text" name="con91" class="form-control mt-1" value="{{ $sessies->con91 }}" placeholder="...">
        </div>
        </div>
        <div class="row">
            <div class="col-md-2 mt-1">
                re
            </div>
            <div class="col-md-10">
                <input type="text" name="con92" class="form-control mt-1" value="{{ $sessies->con92 }}" placeholder="...">
            </div>
            </div>
            <br>

    <h6 for="lateral" class="title">Extension sacrum</h6>
    <input type="text" class="form-control mt-1 mb-1" name="con93" value="{{ $sessies->con93 }}" placeholder="...">
    <h6 for="lateral" class="title">Flexion sacrum</h6>
    <input type="text" class="form-control mt-1 mb-1" name="con94" value="{{ $sessies->con94 }}" placeholder="...">
    <h6 for="lateral" class="title">Rotation sacrum</h6>
    <div class="row">
        <div class="col-md-2 mt-1">
            li
        </div>
        <div class="col-md-10">
            <input type="text" name="con95" class="form-control mt-1" value="{{ $sessies->con95 }}" placeholder="...">
        </div>
        </div>
        <div class="row">
            <div class="col-md-2 mt-1">
                re
            </div>
            <div class="col-md-10">
                <input type="text" name="con96" class="form-control mt-1" value="{{ $sessies->con96 }}" placeholder="...">
            </div>
        </div>
            <h6 for="lateral" class="title">Lateral flexion sacrum</h6>
            <div class="row">
                <div class="col-md-2 mt-1">
                    li
                </div>
                <div class="col-md-10">
                    <input type="text" name="con97" class="form-control mt-1" value="{{ $sessies->con97 }}" placeholder="...">
                </div>
                </div>
                <div class="row">
                    <div class="col-md-2 mt-1">
                        re
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="con98" class="form-control mt-1 mb-1" value="{{ $sessies->con98 }}" placeholder="...">
                    </div>
                </div>
            </div>


<button data-toggle="collapse" data-target="#demo12" class="collapsible" style="border-radius: 5px" type='button'>
    <span>Caudal joints</span>
    <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
</button>

    <div id="demo12" class="collapse">
        <h6 for="lateral" class="title">Flexion-extension</h6>
        <input type="text" class="form-control mb-1 mt-1" name="con99" value="{{ $sessies->con99 }}" placeholder="...">
        <h6 for="lateral" class="title">Lateral flexion</h6>
        <input type="text" class="form-control mb-1 mt-1" name="con100" value="{{ $sessies->con100}}" placeholder="...">
        </div>
    </div>

     <div class="col">
        <div class="col">
            <div class="containerskelet">
                <img src="/images/horse_skelet.png" style="width:100%;">
                <div class="c0" data-toggle="collapse" data-target="#demo2">C0</div>
                <div class="c1" data-toggle="collapse" data-target="#demo3">C1</div>
                <div class="c2" data-toggle="collapse" data-target="#demo4">C2</div>
                <div class="t3" data-toggle="collapse" data-target="#demo5">T3</div>
                <div class="t10" data-toggle="collapse" data-target="#demo6">T10</div>
                <div class="ribs" data-toggle="collapse" data-target="#demo7">Ribs</div>
                <div class="l1" data-toggle="collapse" data-target="#demo8">L1</div>
                <div class="l4" data-toggle="collapse" data-target="#demo9">L4</div>
                <div class="t18" data-toggle="collapse" data-target="#demo10">T18</div>
                <div class="pelvic" data-toggle="collapse" data-target="#demo11">Pelvic</div>
                <div class="caudal" data-toggle="collapse" data-target="#demo12">Caudal</div>

              </div>
        </div>
    </div>

    <div class="inputs">
        <input type="text" name="con1" id="" value="{{ $sessies->con1 }}">
        <input type="text" name="con2" id="" value="{{ $sessies->con2 }}">
        <input type="text" name="con3" id="" value="{{ $sessies->con3 }}">
        <input type="text" name="con4" id="" value="{{ $sessies->con4 }}">
        <input type="text" name="con5" id="" value="{{ $sessies->con5 }}">
        <input type="text" name="con6" id="" value="{{ $sessies->con6 }}">
        <input type="text" name="con7" id="" value="{{ $sessies->con7 }}">
        <input type="text" name="con8" id="" value="{{ $sessies->con8 }}">
        <input type="text" name="con9" id="" value="{{ $sessies->con9 }}">
        <input type="text" name="con10" id="" value="{{ $sessies->con10 }}">
        <input type="text" name="con11" id="" value="{{ $sessies->con11 }}">
        {{-- <input type="text" name="con12" id="" value="{{ $sessies->con12 }}"> --}}
        <input type="text" name="con13" id="" value="{{ $sessies->con13 }}">
        <input type="text" name="con14" id="" value="{{ $sessies->con14 }}">
        <input type="text" name="con15" id="" value="{{ $sessies->con15 }}">

        <input type="text" name="con16" id="" class="form-control" value="{{ $sessies->con16 }}">
        <input type="text" name="con17" id="" class="form-control" value="{{ $sessies->con17 }}">
        <input type="text" name="con18" id="" class="form-control" value="{{ $sessies->con18 }}">
        <input type="text" name="con19" id="" class="form-control" value="{{ $sessies->con19 }}">
        <input type="text" name="con20" id="" class="form-control" value="{{ $sessies->con20 }}">
        <input type="text" name="con21" id="" class="form-control" value="{{ $sessies->con21 }}">
        <input type="text" name="con22" id="" class="form-control" value="{{ $sessies->con22 }}">
        <input type="text" name="con23" id="" class="form-control" value="{{ $sessies->con23 }}">
        <input type="text" name="con24" id="" class="form-control" value="{{ $sessies->con24 }}">
        <input type="text" name="con25" id="" class="form-control" value="{{ $sessies->con25 }}">
        <input type="text" name="con26" id="" class="form-control" value="{{ $sessies->con26 }}">
        <input type="text" name="con27" id="" class="form-control" value="{{ $sessies->con27 }}">
        <input type="text" name="con28" id="" class="form-control" value="{{ $sessies->con28 }}">
        <input type="text" name="con29" id="" class="form-control" value="{{ $sessies->con29 }}">
        <input type="text" name="con30" id="" class="form-control" value="{{ $sessies->con30 }}">
        <input type="text" name="con31" id="" class="form-control" value="{{ $sessies->con31 }}">
        <input type="text" name="con32" id="" class="form-control" value="{{ $sessies->con32 }}">
        <input type="text" name="con33" id="" class="form-control" value="{{ $sessies->con33 }}">
        <input type="text" name="con34" id="" class="form-control" value="{{ $sessies->con34 }}">
        <input type="text" name="con35" id="" class="form-control" value="{{ $sessies->con35 }}">
        <input type="text" name="con36" id="" class="form-control" value="{{ $sessies->con36 }}">
        <input type="text" name="con37" id="" class="form-control" value="{{ $sessies->con37 }}">
        <input type="text" name="con38" id="" class="form-control" value="{{ $sessies->con38 }}">
        <input type="text" name="con39" id="" class="form-control" value="{{ $sessies->con39 }}">
        <input type="text" name="con40" id="" class="form-control" value="{{ $sessies->con40 }}">
        <input type="text" name="con41" id="" class="form-control" value="{{ $sessies->con41 }}">
        <input type="text" name="con42" id="" class="form-control" value="{{ $sessies->con42 }}">
        <input type="text" name="con43" id="" class="form-control" value="{{ $sessies->con43 }}">
        <input type="text" name="con44" id="" class="form-control" value="{{ $sessies->con44 }}">
        <input type="text" name="con45" id="" class="form-control" value="{{ $sessies->con45 }}">
        {{-- <input type="text" name="con46" id="" class="form-control" value="{{ $sessies->con46 }}">
        <input type="text" name="con47" id="" class="form-control" value="{{ $sessies->con47 }}">
        <input type="text" name="con48" id="" class="form-control" value="{{ $sessies->con48 }}">
        <input type="text" name="con49" id="" class="form-control" value="{{ $sessies->con49 }}">
        <input type="text" name="con50" id="" class="form-control" value="{{ $sessies->con50 }}">
        <input type="text" name="con51" id="" class="form-control" value="{{ $sessies->con51 }}">
        <input type="text" name="con52" id="" class="form-control" value="{{ $sessies->con52 }}">
        <input type="text" name="con53" id="" class="form-control" value="{{ $sessies->con53 }}">
        <input type="text" name="con54" id="" class="form-control" value="{{ $sessies->con54 }}">
        <input type="text" name="con55" id="" class="form-control" value="{{ $sessies->con55 }}">
        <input type="text" name="con56" id="" class="form-control" value="{{ $sessies->con56 }}">
        <input type="text" name="con57" id="" class="form-control" value="{{ $sessies->con57 }}">
        <input type="text" name="con58" id="" class="form-control" value="{{ $sessies->con58 }}">
        <input type="text" name="con59" id="" class="form-control" value="{{ $sessies->con59 }}">
        <input type="text" name="con60" id="" class="form-control" value="{{ $sessies->con60 }}">
        <input type="text" name="con61" id="" class="form-control" value="{{ $sessies->con61 }}">
        <input type="text" name="con62" id="" class="form-control" value="{{ $sessies->con62 }}">
        <input type="text" name="con63" id="" class="form-control" value="{{ $sessies->con63 }}">
        <input type="text" name="con64" id="" class="form-control" value="{{ $sessies->con64 }}">
        <input type="text" name="con65" id="" class="form-control" value="{{ $sessies->con55 }}">
        <input type="text" name="con66" id="" class="form-control" value="{{ $sessies->con66 }}">
        <input type="text" name="con67" id="" class="form-control" value="{{ $sessies->con67 }}">
        <input type="text" name="con68" id="" class="form-control" value="{{ $sessies->con68 }}">
        <input type="text" name="con69" id="" class="form-control" value="{{ $sessies->con69 }}">
        <input type="text" name="con70" id="" class="form-control" value="{{ $sessies->con70 }}">
        <input type="text" name="con71" id="" class="form-control" value="{{ $sessies->con71 }}">
        <input type="text" name="con72" id="" class="form-control" value="{{ $sessies->con72 }}">
        <input type="text" name="con73" id="" class="form-control" value="{{ $sessies->con73 }}">
        <input type="text" name="con74" id="" class="form-control" value="{{ $sessies->con74 }}">
        <input type="text" name="con75" id="" class="form-control" value="{{ $sessies->con75 }}">
        <input type="text" name="con76" id="" class="form-control" value="{{ $sessies->con76 }}">
        <input type="text" name="con77" id="" class="form-control" value="{{ $sessies->con77 }}">
        <input type="text" name="con78" id="" class="form-control" value="{{ $sessies->con78 }}">
        <input type="text" name="con79" id="" class="form-control" value="{{ $sessies->con79 }}">
        <input type="text" name="con80" id="" class="form-control" value="{{ $sessies->con80 }}">
        <input type="text" name="con81" id="" class="form-control" value="{{ $sessies->con81 }}">
        <input type="text" name="con82" id="" class="form-control" value="{{ $sessies->con82 }}">
        <input type="text" name="con83" id="" class="form-control" value="{{ $sessies->con83 }}">
        <input type="text" name="con84" id="" class="form-control" value="{{ $sessies->con84 }}">
        <input type="text" name="con85" id="" class="form-control" value="{{ $sessies->con85 }}">
        <input type="text" name="con86" id="" class="form-control" value="{{ $sessies->con86 }}">
        <input type="text" name="con87" id="" class="form-control" value="{{ $sessies->con87 }}">
        <input type="text" name="con88" id="" class="form-control" value="{{ $sessies->con88 }}">
        <input type="text" name="con89" id="" class="form-control" value="{{ $sessies->con89 }}">
        <input type="text" name="con90" id="" class="form-control" value="{{ $sessies->con90 }}">
        <input type="text" name="con91" id="" class="form-control" value="{{ $sessies->con91 }}">
        <input type="text" name="con92" id="" class="form-control" value="{{ $sessies->con92 }}">
        <input type="text" name="con93" id="" class="form-control" value="{{ $sessies->con93 }}">
        <input type="text" name="con94" id="" class="form-control" value="{{ $sessies->con94 }}">
        <input type="text" name="con95" id="" class="form-control" value="{{ $sessies->con95 }}">
        <input type="text" name="con96" id="" class="form-control" value="{{ $sessies->con96 }}">
        <input type="text" name="con97" id="" class="form-control" value="{{ $sessies->con97 }}">
        <input type="text" name="con98" id="" class="form-control" value="{{ $sessies->con98 }}">
        <input type="text" name="con99" id="" class="form-control" value="{{ $sessies->con99 }}">
        <input type="text" name="con100" id="" class="form-control" value="{{ $sessies->con100 }}"> --}}
        <input type="text" name="con101" id="" class="form-control" value="{{ $sessies->con101 }}">
        <input type="text" name="con102" id="" class="form-control" value="{{ $sessies->con102 }}">
        <input type="text" name="con103" id="" class="form-control" value="{{ $sessies->con103 }}">
        <input type="text" name="con104" id="" class="form-control" value="{{ $sessies->con104 }}">
        <input type="text" name="con105" id="" class="form-control" value="{{ $sessies->con105 }}">
        <input type="text" name="con106" id="" class="form-control" value="{{ $sessies->con106 }}">
        <input type="text" name="con107" id="" class="form-control" value="{{ $sessies->con107 }}">
        <input type="text" name="con108" id="" class="form-control" value="{{ $sessies->con108 }}">
        <input type="text" name="con109" id="" class="form-control" value="{{ $sessies->con109 }}">
        <input type="text" name="con110" id="" class="form-control" value="{{ $sessies->con110 }}">
        <input type="text" name="con111" id="" class="form-control" value="{{ $sessies->con111 }}">
        <input type="text" name="con112" id="" class="form-control" value="{{ $sessies->con112 }}">
        <input type="text" name="con113" id="" class="form-control" value="{{ $sessies->con113 }}">
        <input type="text" name="con114" id="" class="form-control" value="{{ $sessies->con114 }}">
        <input type="text" name="con115" id="" class="form-control" value="{{ $sessies->con115 }}">
        <input type="text" name="con116" id="" class="form-control" value="{{ $sessies->con116 }}">
        <input type="text" name="con117" id="" class="form-control" value="{{ $sessies->con117 }}">
        <input type="text" name="con118" id="" class="form-control" value="{{ $sessies->con118 }}">
        <input type="text" name="con119" id="" class="form-control" value="{{ $sessies->con119 }}">
        <input type="text" name="con120" id="" class="form-control" value="{{ $sessies->con120 }}">
        <input type="text" name="con121" id="" class="form-control" value="{{ $sessies->con121 }}">
        <input type="text" name="con122" id="" class="form-control" value="{{ $sessies->con122 }}">
        <input type="text" name="con123" id="" class="form-control" value="{{ $sessies->con123 }}">
        <input type="text" name="con124" id="" class="form-control" value="{{ $sessies->con124 }}">
        <input type="text" name="con125" id="" class="form-control" value="{{ $sessies->con125 }}">
        <input type="text" name="con126" id="" class="form-control" value="{{ $sessies->con126 }}">
        <input type="text" name="con127" id="" class="form-control" value="{{ $sessies->con127 }}">
        <input type="text" name="con128" id="" class="form-control" value="{{ $sessies->con128 }}">
        <input type="text" name="con129" id="" class="form-control" value="{{ $sessies->con129 }}">
        <input type="text" name="con130" id="" class="form-control" value="{{ $sessies->con130 }}">
        <input type="text" name="con131" id="" class="form-control" value="{{ $sessies->con131 }}">
        <input type="text" name="con132" id="" class="form-control" value="{{ $sessies->con132 }}">
        <input type="text" name="con133" id="" class="form-control" value="{{ $sessies->con133 }}">
        <input type="text" name="con134" id="" class="form-control" value="{{ $sessies->con134 }}">
        <input type="text" name="con135" id="" class="form-control" value="{{ $sessies->con135 }}">
        <input type="text" name="con136" id="" class="form-control" value="{{ $sessies->con136 }}">
        <input type="text" name="con137" id="" class="form-control" value="{{ $sessies->con137 }}">
        <input type="text" name="con138" id="" class="form-control" value="{{ $sessies->con138 }}">
        <input type="text" name="con139" id="" class="form-control" value="{{ $sessies->con139 }}">
        <input type="text" name="con140" id="" class="form-control" value="{{ $sessies->con140 }}">
        <input type="text" name="con141" id="" class="form-control" value="{{ $sessies->con141 }}">
        <input type="text" name="con142" id="" class="form-control" value="{{ $sessies->con142 }}">
        <input type="text" name="con143" id="" class="form-control" value="{{ $sessies->con143 }}">
        <input type="text" name="con144" id="" class="form-control" value="{{ $sessies->con144 }}">
        <input type="text" name="con145" id="" class="form-control" value="{{ $sessies->con145 }}">
        <input type="text" name="con146" id="" class="form-control" value="{{ $sessies->con146 }}">
        <input type="text" name="con147" id="" class="form-control" value="{{ $sessies->con147 }}">
        <input type="text" name="con148" id="" class="form-control" value="{{ $sessies->con148 }}">
        <input type="text" name="con149" id="" class="form-control" value="{{ $sessies->con149 }}">
        <input type="text" name="con150" id="" class="form-control" value="{{ $sessies->con150 }}">
        <input type="text" name="con151" id="" class="form-control" value="{{ $sessies->con151 }}">
        <input type="text" name="con152" id="" class="form-control" value="{{ $sessies->con152 }}">
        <input type="text" name="con153" id="" class="form-control" value="{{ $sessies->con153 }}">
        <input type="text" name="con154" id="" class="form-control" value="{{ $sessies->con154 }}">
        <input type="text" name="con155" id="" class="form-control" value="{{ $sessies->con155 }}">
        <input type="text" name="con156" id="" class="form-control" value="{{ $sessies->con156 }}">
        <input type="text" name="con157" id="" class="form-control" value="{{ $sessies->con157 }}">
        <input type="text" name="con158" id="" class="form-control" value="{{ $sessies->con158 }}">
        <input type="text" name="con159" id="" class="form-control" value="{{ $sessies->con159 }}">
        <input type="text" name="con160" id="" class="form-control" value="{{ $sessies->con160 }}">
        <input type="text" name="con161" id="" class="form-control" value="{{ $sessies->con161 }}">
        <input type="text" name="con162" id="" class="form-control" value="{{ $sessies->con162 }}">
        <input type="text" name="con163" id="" class="form-control" value="{{ $sessies->con163 }}">
        <input type="text" name="con164" id="" class="form-control" value="{{ $sessies->con164 }}">
        <input type="text" name="con165" id="" class="form-control" value="{{ $sessies->con165 }}">
        <input type="text" name="con166" id="" class="form-control" value="{{ $sessies->con166 }}">
        <input type="text" name="con167" id="" class="form-control" value="{{ $sessies->con167 }}">
        <input type="text" name="con168" id="" class="form-control" value="{{ $sessies->con168 }}">
        <input type="text" name="con169" id="" class="form-control" value="{{ $sessies->con169 }}">
        <input type="text" name="con170" id="" class="form-control" value="{{ $sessies->con170 }}">
        <input type="text" name="con171" id="" class="form-control" value="{{ $sessies->con171 }}">
        <input type="text" name="con172" id="" class="form-control" value="{{ $sessies->con172 }}">
        <input type="text" name="con173" id="" class="form-control" value="{{ $sessies->con173 }}">

        <input type="text" name="con174" id="" class="form-control" value="{{ $sessies->con174 }}">
        <input type="text" name="con175" id="" class="form-control" value="{{ $sessies->con175 }}">
        <input type="text" name="con176" id="" class="form-control" value="{{ $sessies->con176 }}">
        <input type="text" name="con177" id="" class="form-control" value="{{ $sessies->con177 }}">
        <input type="text" name="con178" id="" class="form-control" value="{{ $sessies->con178 }}">
        <input type="text" name="con179" id="" class="form-control" value="{{ $sessies->con179 }}">
        <input type="text" name="con180" id="" class="form-control" value="{{ $sessies->con180 }}">
        <input type="text" name="con181" id="" class="form-control" value="{{ $sessies->con181 }}">
        <input type="text" name="con182" id="" class="form-control" value="{{ $sessies->con182 }}">
        <input type="text" name="con183" id="" class="form-control" value="{{ $sessies->con183 }}">

        <input type="text" name="con184" id="" class="form-control" value="{{ $sessies->con184 }}">
        <input type="text" name="con185" id="" class="form-control" value="{{ $sessies->con185 }}">
        <input type="text" name="con186" id="" class="form-control" value="{{ $sessies->con186 }}">
        <input type="text" name="con187" id="" class="form-control" value="{{ $sessies->con187 }}">
        <input type="text" name="con188" id="" class="form-control" value="{{ $sessies->con188 }}">
        <input type="text" name="con189" id="" class="form-control" value="{{ $sessies->con189 }}">
        <input type="text" name="con190" id="" class="form-control" value="{{ $sessies->con190 }}">
        <input type="text" name="con191" id="" class="form-control" value="{{ $sessies->con191 }}">
        <input type="text" name="con192" id="" class="form-control" value="{{ $sessies->con192 }}">
        <input type="text" name="con193" id="" class="form-control" value="{{ $sessies->con193 }}">

        <input type="file" name="image" id="" class="form-control" value="{{ $sessies->image }}">
        <input type="file" name="image2" id="" class="form-control" value="{{ $sessies->image2 }}">
        <input type="file" name="image3" id="" class="form-control" value="{{ $sessies->image3 }}">
        <input type="file" name="image4" id="" class="form-control" value="{{ $sessies->image4 }}">
        <input type="file" name="image5" id="" class="form-control" value="{{ $sessies->image5 }}">
        <input type="file" name="image6" id="" class="form-control" value="{{ $sessies->image6 }}">
        <input type="file" name="image7" id="" class="form-control" value="{{ $sessies->image7 }}">
        <input type="file" name="image8" id="" class="form-control" value="{{ $sessies->image8 }}">

        <input type="file" name="image9" id="" class="form-control" value="{{ $sessies->image9 }}">
        <input type="file" name="image10" id="" class="form-control" value="{{ $sessies->image10 }}">
        <input type="file" name="image11" id="" class="form-control" value="{{ $sessies->image11 }}">
        <input type="file" name="image12" id="" class="form-control" value="{{ $sessies->image12 }}">
        <input type="file" name="image13" id="" class="form-control" value="{{ $sessies->image13 }}">
        <input type="file" name="image14" id="" class="form-control" value="{{ $sessies->image14 }}">
        <input type="file" name="image15" id="" class="form-control" value="{{ $sessies->image15 }}">
        <input type="file" name="image16" id="" class="form-control" value="{{ $sessies->image16 }}">
   </div>

</div>


<div class="modal-footer">
    <button class="btn btn-info" style="color: white" type="submit">
        <i class="fas fa-check"></i>
        Opslaan
    </button>
</div>
</form>



</div>
</div>
</div>
</div>
