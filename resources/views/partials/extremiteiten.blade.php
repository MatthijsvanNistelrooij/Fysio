
    <div class="modal-dialog modal-dialog modal-xl"  role="document">

        <form action="{{ route('sessies.update', ['id' => $sessies->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
    <div class="modal-content">
          <div class="modal-header">
            <input type="radio" name="con13" id="" value="fas fa-square" checked="checked" class="mt-2 mr-2">

          <h5 class="modal-title" id="exampleModalLongTitle">Extremiteiten:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body mb-3">

    <div class="row">
        <div class="col-md-4" style="overflow:scroll; height: 650px; overflow-x: hidden; margin-bottom: 50px; min-width: 290px">
            <button data-toggle="collapse" data-target="#demo41" class="collapsible" style="border-radius: 5px" type="button">
                <span>Front DIJ</span>
                <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
            </button>

            <div id="demo41" class="collapse">
                <h6 for="lateral" class="title">Flexion-extension</h6>

                <div class="row">
                    <div class="col-md-2">li</div>
                    <div class="col-md-10 mb-1">
                         <input type="text" class="form-control" name="con101" value="{{ $sessies->con101 }}" placeholder="...">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">re</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="con102" value="{{ $sessies->con102 }}" placeholder="...">
                    </div>
                </div>

                <h6 for="lateral" class="title">Abduction-addaction</h6>

                <div class="row">
                    <div class="col-md-2 mt-1">li</div>
                    <div class="col-md-10 mb-1">
                        <input type="text" class="form-control" name="con103" value="{{ $sessies->con103 }}" placeholder="...">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">re </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="con104" value="{{ $sessies->con104 }}" placeholder="...">
                    </div>
                </div>

                <h6 for="lateral" class="title">Internal/external rotation</h6>
                <div class="row">
                    <div class="col-md-2 mt-1">li</div>
                    <div class="col-md-10 mb-1">
                        <input type="text" class="form-control" name="con105" value="{{ $sessies->con105 }}" placeholder="...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">re </div>
                    <div class="col-md-10 mb-2">
                        <input type="text" class="form-control" name="con106" value="{{ $sessies->con106 }}" placeholder="...">
                    </div>
                </div>
            </div>

        <button data-toggle="collapse" data-target="#demo42" class="collapsible" style="border-radius: 5px"  type="button">
            <span>Front PIJ</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo42" class="collapse">
            <h6 for="lateral" class="title">Flexion-extension</h6>

            <div class="row">
                <div class="col-md-2 mt-1">li</div>
                <div class="col-md-10 mb-1">
                    <input type="text" class="form-control" name="con107" value="{{ $sessies->con107 }}" placeholder="...">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">re</div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="con108" value="{{ $sessies->con108 }}" placeholder="...">
                </div>
            </div>


            <h6 for="lateral" class="title">Abduction-adduction</h6>
            <div class="row">
                <div class="col-md-2 mt-1">li</div>
                <div class="col-md-10 mb-1">
                    <input type="text" class="form-control" name="con109" value="{{ $sessies->con109 }}" placeholder="...">
                </div>
            </div>
                <div class="row">
                    <div class="col-md-2">re</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="con110" value="{{ $sessies->con110 }}" placeholder="...">
                    </div>
                </div>


            <h6 for="lateral" class="title">Internal/external-adduction</h6>
            <div class="row">
                <div class="col-md-2 mt-1">li</div>
                <div class="col-md-10 mb-1">
                    <input type="text" class="form-control" name="con111" value="{{ $sessies->con111 }}" placeholder="...">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">re</div>
                <div class="col-md-10 mb-2">
                    <input type="text" class="form-control" name="con112" value="{{ $sessies->con112 }}" placeholder="...">
                </div>
            </div>
        </div>

        <button data-toggle="collapse" data-target="#demo43" class="collapsible" style="border-radius: 5px"  type="button"  type="button">
            <span>MPJ</span>
            <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
        </button>

        <div id="demo43" class="collapse">
            <h6 for="lateral" class="title">Flexion-extension</h6>
            <div class="row">
                <div class="col-md-2 mt-1">li</div>
                <div class="col-md-10 mb-1">
                    <input type="text" class="form-control" name="con113" value="{{ $sessies->con113 }}" placeholder="...">

                </div>
            </div>
            <div class="row">
                <div class="col-md-2">re</div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="con114" value="{{ $sessies->con114 }}" placeholder="...">
                </div>
            </div>

            <h6 for="lateral" class="title">Abductionj-adduction</h6>
            <div class="row">
                <div class="col-md-2 mt-1">li</div>
                <div class="col-md-10 mb-1">
                    <input type="text" class="form-control" name="con115" value="{{ $sessies->con115 }}" placeholder="...">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">re</div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="con116" value="{{ $sessies->con116 }}" placeholder="...">
                </div>
            </div>

            <h6 for="lateral" class="title">Lateroflexie</h6>
            <div class="row">
                <div class="col-md-2 mt-1">li</div>
                <div class="col-md-10 mb-1">
                    <input type="text" class="form-control" name="con117" value="{{ $sessies->con117 }}" placeholder="...">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">re</div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="con118" value="{{ $sessies->con118 }}" placeholder="...">
                </div>
            </div>
        </div>



        <h6 for="lateral" class="title" style="font-weight: bold">Proximal sesamoid bones</h6>

    <button data-toggle="collapse" data-target="#demo73" class="collapsible" style="border-radius: 5px"  type="button">
        <span>Carpal joint</span>
        <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
    </button>

    <div id="demo73" class="collapse">
        <h6 for="lateral" class="title">Flexion-extension</h6>
        <div class="row">
            <div class="col-md-2 mt-1">li</div>
            <div class="col-md-10 mb-1">
                <input type="text" class="form-control" name="con119" value="{{ $sessies->con119 }}" placeholder="...">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">re</div>
            <div class="col-md-10">
                <input type="text" class="form-control" name="con120" value="{{ $sessies->con120 }}" placeholder="...">

            </div>
        </div>

        <h6 for="lateral" class="title">Flexion abduction/adduction</h6>
        <div class="row">
            <div class="col-md-2 mt-1">li</div>
            <div class="col-md-10 mb-1">
                <input type="text" class="form-control" name="con121" value="{{ $sessies->con121 }}" placeholder="...">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">re</div>
            <div class="col-md-10 mb-2">
                <input type="text" class="form-control" name="con122" value="{{ $sessies->con122 }}" placeholder="...">
            </div>
        </div>
    </div>

    <button data-toggle="collapse" data-target="#demo44" class="collapsible" style="border-radius: 5px"  type="button">
        <span>Accessory bone</span>
        <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
    </button>

    <div id="demo44" class="collapse">
        <h6 for="lateral" class="title">Lateral-medial motion</h6>
        <div class="row">
            <div class="col-md-2 mt-1">li</div>
            <div class="col-md-10 mb-1">
                <input type="text" class="form-control" name="con123" value="{{ $sessies->con123 }}" placeholder="...">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">re</div>
            <div class="col-md-10 mb-2">
                <input type="text" class="form-control" name="con124" value="{{ $sessies->con124 }}" placeholder="...">
            </div>
        </div>
    </div>

    <button data-toggle="collapse" data-target="#demo45" class="collapsible" style="border-radius: 5px"  type="button">
        <span>Elbow</span>
        <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
    </button>

    <div id="demo45" class="collapse">
        <h6 for="lateral" class="title">Flexion-extension</h6>
        <div class="row">
            <div class="col-md-2 mt-1">li</div>
            <div class="col-md-10 mb-1">
                <input type="text" class="form-control" name="con125" value="{{ $sessies->con125 }}" placeholder="...">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 mt-1">re</div>
            <div class="col-md-10 mb-2">
                <input type="text" class="form-control" name="con126" value="{{ $sessies->con126 }}" placeholder="...">
            </div>
        </div>

    </div>

    <button data-toggle="collapse" data-target="#demo46" class="collapsible" style="border-radius: 5px"  type="button">
        <span>+ shoulder</span>
        <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
    </button>

    <div id="demo46" class="collapse">
        <h6 for="lateral" class="title">Flexion abduction/adduction</h6>
        <div class="row">
            <div class="col-md-2 mb-1">li</div>
            <div class="col-md-10 mb-1">
                <input type="text" class="form-control" name="con127" value="{{ $sessies->con127 }}" placeholder="...">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 mt-1">re</div>
            <div class="col-md-10 mb-2">
                <input type="text" class="form-control" name="con128" value="{{ $sessies->con128 }}" placeholder="...">
            </div>
        </div>
    </div>


    <button data-toggle="collapse" data-target="#demo47" class="collapsible" style="border-radius: 5px"  type="button">
        <span>Scapula</span>
        <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
    </button>

    <div id="demo47" class="collapse">
        <h6 for="lateral" class="title">Elevation-depression</h6>
        <div class="row">
            <div class="col-md-2">li</div>
            <div class="col-md-10 mb-1">
                <input type="text" class="form-control" name="con129" value="{{ $sessies->con129 }}" placeholder="...">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">re</div>
            <div class="col-md-10 mb-2">
                <input type="text" class="form-control" name="con130" value="{{ $sessies->con130 }}" placeholder="...">
            </div>
        </div>

        <h6 for="lateral" class="title">Neutral-abduction</h6>
        <div class="row">
            <div class="col-md-2">li</div>
            <div class="col-md-10 mb-1">
                <input type="text" class="form-control" name="con131" value="{{ $sessies->con131 }}" placeholder="...">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">re</div>
            <div class="col-md-10 mb-2">
                <input type="text" class="form-control" name="con132" value="{{ $sessies->con132 }}" placeholder="...">
            </div>
        </div>
    </div>


    <button data-toggle="collapse" data-target="#demo48" class="collapsible" style="border-radius: 5px" type="button">
        <span>Front leg general</span>
        <i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
    </button>

    <div id="demo48" class="collapse">
        <h6 for="lateral" class="title">Protraction + ab-/adduction</h6>
        <div class="row">
            <div class="col-md-2">li</div>
            <div class="col-md-10 mb-1">
                <input type="text" class="form-control" name="con133" value="{{ $sessies->con133 }}" placeholder="...">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">re</div>
            <div class="col-md-10 mb-2">
                <input type="text" class="form-control" name="con134" value="{{ $sessies->con134 }}" placeholder="...">
            </div>
        </div>
</div>


<button data-toggle="collapse" data-target="#demo49" class="collapsible" style="border-radius: 5px" type="button">
<span>Hind DIJ</span>
<i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
</button>

<div id="demo49" class="collapse">

<h6 for="lateral" class="title">Flexion-extension</h6>
<div class="row">
    <div class="col-md-2 mt-1">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con135" value="{{ $sessies->con135 }}" placeholder="...">
    </div>
</div>
<div class="row">
    <div class="col-md-2">re</div>
    <div class="col-md-10 mb-2">
        <input type="text" class="form-control" name="con136" value="{{ $sessies->con136 }}" placeholder="...">
    </div>
</div>

<h6 for="lateral" class="title">Abduction-adduction</h6>
<div class="row">
    <div class="col-md-2">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con137" value="{{ $sessies->con137 }}" placeholder="...">
    </div>
</div>
<div class="row">
    <div class="col-md-2">re</div>
    <div class="col-md-10 mb-2">
        <input type="text" class="form-control" name="con138" value="{{ $sessies->con138 }}" placeholder="...">
    </div>
</div>

<h6 for="lateral" class="title">Internal/external rotation</h6>
<div class="row">
    <div class="col-md-2 mt-1">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con139" value="{{ $sessies->con139 }}" placeholder="...">
    </div>
</div>
<div class="row">
    <div class="col-md-2">re</div>
    <div class="col-md-10 mb-2">
        <input type="text" class="form-control" name="con140" value="{{ $sessies->con140 }}" placeholder="...">
    </div>
</div>
</div>

<button data-toggle="collapse" data-target="#demo50" class="collapsible" style="border-radius: 5px" type="button">
<span>Hind PIJ</span>
<i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
</button>

<div id="demo50" class="collapse">

<h6 for="lateral" class="title">Flexion-extension</h6>
<div class="row">
    <div class="col-md-2 mt-1">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con141" value="{{ $sessies->con141 }}" placeholder="...">
    </div>
</div>
<div class="row">
    <div class="col-md-2">re</div>
    <div class="col-md-10">
        <input type="text" class="form-control" name="con142" value="{{ $sessies->con142 }}" placeholder="...">
    </div>
</div>
<h6 for="lateral" class="title">Abduction-adduction</h6>
<div class="row">
    <div class="col-md-2 mt-1">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con143" value="{{ $sessies->con143 }}" placeholder="...">
    </div>
</div>
<div class="row">
    <div class="col-md-2">re</div>
    <div class="col-md-10">
        <input type="text" class="form-control" name="con144" value="{{ $sessies->con144 }}" placeholder="...">
    </div>
</div>
<h6 for="lateral" class="title">Internal-external rotation</h6>
<div class="row">
    <div class="col-md-2 mt-1">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con145" value="{{ $sessies->con145 }}" placeholder="...">
    </div>
</div>
<div class="row">
    <div class="col-md-2 mt-1">re</div>
    <div class="col-md-10 mb-2">
        <input type="text" class="form-control" name="con146" value="{{ $sessies->con146 }}" placeholder="...">
    </div>
</div>
</div>


<button data-toggle="collapse" data-target="#demo51" class="collapsible" style="border-radius: 5px" type="button">
<span>MPJ</span>
<i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
</button>

<div id="demo51" class="collapse">
<h6 for="lateral" class="title">Flexion-extension</h6>
<div class="row">
    <div class="col-md-2">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con147" value="{{ $sessies->con147 }}" placeholder="...">
    </div>
</div>
<div class="row">
    <div class="col-md-2">re</div>
    <div class="col-md-10 mb-2">
        <input type="text" class="form-control" name="con148" value="{{ $sessies->con148 }}" placeholder="...">
    </div>
</div>
</div>



<button data-toggle="collapse" data-target="#demo52" class="collapsible" style="border-radius: 5px" type="button">
<span>Tarsal joint</span>
<i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
</button>

<div id="demo52" class="collapse">
<h6 for="lateral" class="title">Flexion-extension</h6>
<div class="row">
    <div class="col-md-2 mt-1">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con149" value="{{ $sessies->con149 }}" placeholder="...">
    </div>
</div>
<div class="row">
    <div class="col-md-2">re</div>
    <div class="col-md-10 mb-2">
        <input type="text" class="form-control" name="con150" value="{{ $sessies->con150 }}" placeholder="...">
    </div>
</div>

<h6 for="lateral" class="title">Abduction-adduction + rotation</h6>
<div class="row">
    <div class="col-md-2 mt-1">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con151" value="{{ $sessies->con151 }}" placeholder="...">
    </div>
</div>
<div class="row">
    <div class="col-md-2 mt-1">re</div>
    <div class="col-md-10 mb-2">
        <input type="text" class="form-control" name="con152" value="{{ $sessies->con152 }}" placeholder="...">
    </div>
</div>
</div>


<button data-toggle="collapse" data-target="#demo53" class="collapsible" style="border-radius: 5px" type="button">
<span>Stifle</span>
<i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
</button>

<div id="demo53" class="collapse">
<h6 for="lateral" class="title">Flexion</h6>
<div class="row">
    <div class="col-md-2 mt-1">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con153" value="{{ $sessies->con153 }}" placeholder="...">
    </div>
</div>

<div class="row">
    <div class="col-md-2">re</div>
    <div class="col-md-10 mb-2">
        <input type="text" class="form-control" name="con154" value="{{ $sessies->con154 }}" placeholder="...">
    </div>
</div>

<h6 for="lateral" class="title">Internal-external rotation</h6>
   <div class="row">
    <div class="col-md-2 mt-1">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con155" value="{{ $sessies->con155 }}" placeholder="...">
    </div>
</div>

<div class="row">
    <div class="col-md-2">re</div>
    <div class="col-md-10 mb-2">
        <input type="text" class="form-control" name="con156" value="{{ $sessies->con156 }}" placeholder="...">
    </div>
</div>
<h6 for="lateral" class="title">Abduction-adduction</h6>
<div class="row">
    <div class="col-md-2 mt-1">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con157" value="{{ $sessies->con157 }}" placeholder="...">
    </div>
</div>

<div class="row">
    <div class="col-md-2">re</div>
    <div class="col-md-10 mb-2">
        <input type="text" class="form-control" name="con158" value="{{ $sessies->con158 }}" placeholder="...">
    </div>
</div>
</div>

<button data-toggle="collapse" data-target="#demo54" class="collapsible" style="border-radius: 5px" type="button">
<span>Coxofemoral</span>
<i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
</button>

<div id="demo54" class="collapse">
<h6 for="lateral" class="title">Abduction-adduction</h6>
<div class="row">
    <div class="col-md-2 mt-1">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con159" value="{{ $sessies->con159 }}" placeholder="...">
    </div>
</div>

<div class="row">
    <div class="col-md-2">re</div>
    <div class="col-md-10 mb-2">
        <input type="text" class="form-control" name="con160" value="{{ $sessies->con160 }}" placeholder="...">
    </div>
</div>
<h6 for="lateral" class="title">Internal-external rotation</h6>
<div class="row">
    <div class="col-md-2 mt-1">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con161" value="{{ $sessies->con161 }}" placeholder="...">
    </div>
</div>

<div class="row">
    <div class="col-md-2">re</div>
    <div class="col-md-10 mb-2">
        <input type="text" class="form-control" name="con162" value="{{ $sessies->con162 }}" placeholder="...">
    </div>
</div>
</div>

<button data-toggle="collapse" data-target="#demo55" class="collapsible" style="border-radius: 5px" type="button">
<span>Pelvic limb</span>
<i class="fas fa-chevron-circle-down" style="color:rgb(208, 208, 208); float: right; font-size: 17px; margin-top: 2px"></i>
</button>

<div id="demo55" class="collapse">
<h6 for="lateral" class="title">Protraction</h6>
<div class="row">
    <div class="col-md-2 mt-1">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con163" value="{{ $sessies->con163 }}" placeholder="...">
    </div>
</div>

<div class="row">
    <div class="col-md-2">re</div>
    <div class="col-md-10 mb-2">
        <input type="text" class="form-control" name="con164" value="{{ $sessies->con164 }}" placeholder="...">
    </div>
</div>
<h6 for="lateral" class="title">Protraction + adduction</h6>
<div class="row">
    <div class="col-md-2 mt-1">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con165" value="{{ $sessies->con165 }}" placeholder="...">
    </div>
</div>

<div class="row">
    <div class="col-md-2">re</div>
    <div class="col-md-10 mb-2">
        <input type="text" class="form-control" name="con166" value="{{ $sessies->con166 }}" placeholder="...">
    </div>
</div>
<h6 for="lateral" class="title">Retraction + ab-/adduction</h6>
<div class="row">
    <div class="col-md-2 mt-1">li</div>
    <div class="col-md-10 mb-1">
        <input type="text" class="form-control" name="con167" value="{{ $sessies->con167 }}" placeholder="...">
    </div>
</div>

<div class="row">
    <div class="col-md-2">re</div>
    <div class="col-md-10 mb-2">
        <input type="text" class="form-control" name="con168" value="{{ $sessies->con168 }}" placeholder="...">
    </div>
</div>
    </div>

    </div>
        <div class="col">
            <img src="/images/horse_leg.jpg" alt="" style="width: 40%; margin-left: 30%; margin-top: 10%">
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
    <input type="text" name="con12" id="" value="{{ $sessies->con12 }}">
    {{-- <input type="text" name="con13" id="" value="{{ $sessies->con13 }}"> --}}
    <input type="text" name="con14" id="" value="{{ $sessies->con14 }}">
        <input type="text" name="con15" id="" class="form-control" value="{{ $sessies->con15 }}">
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
        <input type="text" name="con46" id="" class="form-control" value="{{ $sessies->con46 }}">
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
        <input type="text" name="con100" id="" class="form-control" value="{{ $sessies->con100 }}">

        {{-- <input type="text" name="con101" id="" class="form-control" value="{{ $sessies->con101 }}">
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
        <input type="text" name="con168" id="" class="form-control" value="{{ $sessies->con168 }}"> --}}
        <input type="text" name="con169" id="" class="form-control" value="{{ $sessies->con169 }}">
        <input type="text" name="con170" id="" class="form-control" value="{{ $sessies->con170 }}">
        <input type="text" name="con171" id="" class="form-control" value="{{ $sessies->con171 }}">
        <input type="text" name="con172" id="" class="form-control" value="{{ $sessies->con172 }}">
        <input type="text" name="con173" id="" class="form-control" value="{{ $sessies->con173 }}">
   </div>

                    <div class="modal-footer">
                        <button class="btn btn-info" style="color: white" type="submit">
                            <i class="fas fa-check"></i>
                            Opslaan</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>