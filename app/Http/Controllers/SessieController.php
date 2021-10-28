<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSessieRequest;
use App\Models\Horse;
use Illuminate\Http\Request;
use Session;
use App\Models\Sessie;


class SessieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSessieRequest $request, Horse $horse)
    {
        Sessie::create([
            'horse_id' => $horse->id,
            'con1' => $request->con1,
            'con2' => $request->con2,
            'con3' => $request->con3,
            'con4' => $request->con4,
            'con5' => $request->con5,
            'con6' => $request->con6,
            'con7' => $request->con7,
            'con8' => $request->con8,
            'con9' => $request->con9,
            'con10' => $request->con10,
            'con11' => $request->con11,
            'con12' => $request->con12,
            'con13' => $request->con13,
            'con14' => $request->con14,
            'con15' => $request->con15,
            'con16' => $request->con16,
            'con17' => $request->con17,
            'con18' => $request->con18,
            'con19' => $request->con19,
            'con20' => $request->con20,
            'con21' => $request->con21,
            'con22' => $request->con22,
            'con23' => $request->con23,
            'con24' => $request->con24,
            'con25' => $request->con25,
            'con26' => $request->con26,
            'con27' => $request->con27,
            'con28' => $request->con28,
            'con29' => $request->con29,
            'con30' => $request->con30,
            'con31' => $request->con31,
            'con32' => $request->con32,
            'con33' => $request->con33,
            'con34' => $request->con34,
            'con35' => $request->con35,
            'con36' => $request->con36,
            'con37' => $request->con37,
            'con38' => $request->con38,
            'con39' => $request->con39,
            'con40' => $request->con40,
            'con41' => $request->con41,
            'con42' => $request->con42,
            'con43' => $request->con43,
            'con44' => $request->con44,
            'con45' => $request->con45,
            'con46' => $request->con46,
            'con47' => $request->con47,
            'con48' => $request->con48,
            'con49' => $request->con49,
            'con50' => $request->con50,
            'con51' => $request->con51,
            'con52' => $request->con52,
            'con53' => $request->con53,
            'con54' => $request->con54,
            'con55' => $request->con55,
            'con56' => $request->con56,
            'con57' => $request->con57,
            'con58' => $request->con58,
            'con59' => $request->con59,
            'con60' => $request->con60,
            'con61' => $request->con61,
            'con62' => $request->con62,
            'con63' => $request->con63,
            'con64' => $request->con64,
            'con65' => $request->con65,
            'con66' => $request->con66,
            'con67' => $request->con67,
            'con68' => $request->con68,
            'con69' => $request->con69,
            'con70' => $request->con70,
            'con71' => $request->con71,
            'con72' => $request->con72,
            'con73' => $request->con73,
            'con74' => $request->con74,
            'con75' => $request->con75,
            'con76' => $request->con76,
            'con77' => $request->con77,
            'con78' => $request->con78,
            'con79' => $request->con79,
            'con80' => $request->con80,
            'con81' => $request->con81,
            'con82' => $request->con82,
            'con83' => $request->con83,
            'con84' => $request->con84,
            'con85' => $request->con85,
            'con86' => $request->con86,
            'con87' => $request->con87,
            'con88' => $request->con88,
            'con89' => $request->con89,
            'con90' => $request->con90,
            'con91' => $request->con91,
            'con92' => $request->con92,
            'con93' => $request->con93,
            'con94' => $request->con94,
            'con95' => $request->con95,
            'con96' => $request->con96,
            'con97' => $request->con97,
            'con98' => $request->con98,
            'con99' => $request->con99,
            'con100' => $request->con100,
            'con101' => $request->con101,
            'con102' => $request->con102,
            'con103' => $request->con103,
            'con104' => $request->con104,
            'con105' => $request->con105,
            'con106' => $request->con106,
            'con107' => $request->con107,
            'con108' => $request->con108,
            'con109' => $request->con109,
            'con110' => $request->con110,
            'con111' => $request->con111,
            'con112' => $request->con112,
            'con113' => $request->con113,
            'con114' => $request->con114,
            'con115' => $request->con115,
            'con116' => $request->con116,
            'con117' => $request->con117,
            'con118' => $request->con118,
            'con119' => $request->con119,
            'con120' => $request->con120,
            'con121' => $request->con121,
            'con122' => $request->con122,
            'con123' => $request->con123,
            'con124' => $request->con124,
            'con125' => $request->con125,
            'con126' => $request->con126,
            'con127' => $request->con127,
            'con128' => $request->con128,
            'con129' => $request->con129,
            'con130' => $request->con130,
            'con131' => $request->con131,
            'con132' => $request->con132,
            'con133' => $request->con133,
            'con134' => $request->con134,
            'con135' => $request->con135,
            'con136' => $request->con136,
            'con137' => $request->con137,
            'con138' => $request->con138,
            'con139' => $request->con139,
            'con140' => $request->con143,
            'con141' => $request->con141,
            'con142' => $request->con142,
            'con143' => $request->con143,
            'con144' => $request->con144,
            'con145' => $request->con145,
            'con146' => $request->con146,
            'con147' => $request->con147,
            'con148' => $request->con148,
            'con149' => $request->con149,
            'con150' => $request->con150,
            'con151' => $request->con151,
            'con152' => $request->con152,
            'con153' => $request->con153,
            'con154' => $request->con154,
            'con155' => $request->con155,
            'con156' => $request->con156,
            'con157' => $request->con157,
            'con158' => $request->con158,
            'con159' => $request->con159,
            'con160' => $request->con160,
            'con161' => $request->con161,
            'con162' => $request->con162,
            'con163' => $request->con163,
            'con164' => $request->con164,
            'con165' => $request->con165,
            'con166' => $request->con166,
            'con167' => $request->con167,
            'con168' => $request->con168,
            'con169' => $request->con169,
            'con170' => $request->con170,
            'con171' => $request->con171,
            'con172' => $request->con172,
            'con173' => $request->con173,
        ]);

        // dd($request->sessies);

        session()->flash('success', 'Nieuw consult succesvol opgeslagen.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $sessies = Sessie::find($id);
            return view('sessies.show')->with('sessies', $sessies)->with('horses', Horse::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
        $result = Sessie::find($id);
        $result->con1 = $request->con1;
        $result->con2 = $request->con2;
        $result->con3 = $request->con3;
        $result->con4 = $request->con4;
        $result->con5 = $request->con5;
        $result->con6 = $request->con6;
        $result->con7 = $request->con7;
        $result->con8 = $request->con8;
        $result->con9 = $request->con9;
        $result->con10 = $request->con10;
        $result->con11 = $request->con11;
        $result->con12 = $request->con12;
        $result->con13 = $request->con13;
        $result->con14 = $request->con14;
        $result->con15 = $request->con15;
        $result->con16 = $request->con16;
        $result->con17 = $request->con17;
        $result->con18 = $request->con18;
        $result->con19 = $request->con19;
        $result->con20 = $request->con20;
        $result->con21 = $request->con21;
        $result->con22 = $request->con22;
        $result->con23 = $request->con23;
        $result->con24 = $request->con24;
        $result->con25 = $request->con25;
        $result->con26 = $request->con26;
        $result->con27 = $request->con27;
        $result->con28 = $request->con28;
        $result->con29 = $request->con29;
        $result->con30 = $request->con30;
        $result->con31 = $request->con31;
        $result->con32 = $request->con32;
        $result->con33 = $request->con33;
        $result->con34 = $request->con34;
        $result->con35 = $request->con35;
        $result->con36 = $request->con36;
        $result->con37 = $request->con37;
        $result->con38 = $request->con38;
        $result->con39 = $request->con39;
        $result->con40 = $request->con40;
        $result->con41 = $request->con41;
        $result->con42 = $request->con42;
        $result->con43 = $request->con43;
        $result->con44 = $request->con44;
        $result->con45 = $request->con45;
        $result->con46 = $request->con46;
        $result->con47 = $request->con47;
        $result->con48 = $request->con48;
        $result->con49 = $request->con49;
        $result->con50 = $request->con50;
        $result->con51 = $request->con51;
        $result->con52 = $request->con52;
        $result->con53 = $request->con53;
        $result->con54 = $request->con54;
        $result->con55 = $request->con55;
        $result->con56 = $request->con56;
        $result->con57 = $request->con57;
        $result->con58 = $request->con58;
        $result->con59 = $request->con59;
        $result->con60 = $request->con60;
        $result->con61 = $request->con61;
        $result->con62 = $request->con62;
        $result->con63 = $request->con63;
        $result->con64 = $request->con64;
        $result->con65 = $request->con65;
        $result->con66 = $request->con66;
        $result->con67 = $request->con67;
        $result->con68 = $request->con68;
        $result->con69 = $request->con69;
        $result->con70 = $request->con70;
        $result->con71 = $request->con71;
        $result->con72 = $request->con72;
        $result->con73 = $request->con73;
        $result->con74 = $request->con74;
        $result->con75 = $request->con75;
        $result->con76 = $request->con76;
        $result->con77 = $request->con77;
        $result->con78 = $request->con78;
        $result->con79 = $request->con79;
        $result->con80 = $request->con80;
        $result->con81 = $request->con81;
        $result->con82 = $request->con82;
        $result->con83 = $request->con83;
        $result->con84 = $request->con84;
        $result->con85 = $request->con85;
        $result->con86 = $request->con86;
        $result->con87 = $request->con87;
        $result->con88 = $request->con88;
        $result->con89 = $request->con89;
        $result->con90 = $request->con90;
        $result->con91 = $request->con91;
        $result->con92 = $request->con92;
        $result->con93 = $request->con93;
        $result->con94 = $request->con94;
        $result->con95 = $request->con95;
        $result->con96 = $request->con96;
        $result->con97 = $request->con97;
        $result->con98 = $request->con98;
        $result->con99 = $request->con99;
        $result->con100 = $request->con100;
        $result->con101 = $request->con101;
        $result->con102 = $request->con102;
        $result->con103 = $request->con103;
        $result->con104 = $request->con104;
        $result->con105 = $request->con105;
        $result->con106 = $request->con106;
        $result->con107 = $request->con107;
        $result->con108 = $request->con108;
        $result->con109 = $request->con109;
        $result->con110 = $request->con110;
        $result->con111 = $request->con111;
        $result->con112 = $request->con112;
        $result->con113 = $request->con113;
        $result->con114 = $request->con114;
        $result->con115 = $request->con115;
        $result->con116 = $request->con116;
        $result->con117 = $request->con117;
        $result->con118 = $request->con118;
        $result->con119 = $request->con119;
        $result->con120 = $request->con120;
        $result->con121 = $request->con121;
        $result->con122 = $request->con122;
        $result->con123 = $request->con123;
        $result->con124 = $request->con124;
        $result->con125 = $request->con125;
        $result->con126 = $request->con126;
        $result->con127 = $request->con127;
        $result->con128 = $request->con128;
        $result->con129 = $request->con129;
        $result->con130 = $request->con130;
        $result->con131 = $request->con131;
        $result->con132 = $request->con132;
        $result->con133 = $request->con133;
        $result->con134 = $request->con134;
        $result->con135 = $request->con135;
        $result->con136 = $request->con136;
        $result->con137 = $request->con137;
        $result->con138 = $request->con138;
        $result->con139 = $request->con139;
        $result->con140 = $request->con143;
        $result->con141 = $request->con141;
        $result->con142 = $request->con142;
        $result->con143 = $request->con143;
        $result->con144 = $request->con144;
        $result->con145 = $request->con145;
        $result->con146 = $request->con146;
        $result->con147 = $request->con147;
        $result->con148 = $request->con148;
        $result->con149 = $request->con149;
        $result->con150 = $request->con150;
        $result->con151 = $request->con151;
        $result->con152 = $request->con152;
        $result->con153 = $request->con153;
        $result->con154 = $request->con154;
        $result->con155 = $request->con155;
        $result->con156 = $request->con156;
        $result->con157 = $request->con157;
        $result->con158 = $request->con158;
        $result->con159 = $request->con159;
        $result->con160 = $request->con160;
        $result->con161 = $request->con161;
        $result->con162 = $request->con162;
        $result->con163 = $request->con163;
        $result->con164 = $request->con164;
        $result->con165 = $request->con165;
        $result->con166 = $request->con166;
        $result->con167 = $request->con167;
        $result->con168 = $request->con168;
        $result->con169 = $request->con169;
        $result->con170 = $request->con170;
        $result->con171 = $request->con171;
        $result->con172 = $request->con172;
        $result->con173 = $request->con173;

        if($result->save()){
            session()->flash('success', 'Consult succesvol bijgewerkt.');
        }else{
            session()->flash('flash_message', 'Task failed!');
        }

        return redirect()->back();
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sessie = Sessie::find($id);
        $sessie->delete();
        session()->flash('success', 'Consult succesvol verwijderd.');
        return redirect()->back();
    }

    public function rapport($id)
    {
        $sessies = Sessie::find($id);
        return view('sessies.rapport')->with('sessies', $sessies)->with('horses', Horse::all());

    }
    public function welcome()
    {
        $sessie=Sessie::orderBy('updated_at', 'asc');
        return view('welcome', ['sessies' => $sessie ]);
    }
}
