<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddSessieRequest;
use Illuminate\Http\Request;
use App\Models\Horse;
use App\Models\Sessie;
use App\Models\Channel;

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
    public function store(AddSessieRequest $request, Horse $horse, Sessie $sessie)
    {
//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $sessies = Sessie::where("id","=","$id")->get();
        $horse = Horse::where("id","=","$id")->get();
        return view('sessies.show', ['sessies' => $sessies])->with('horses', Horse::all())
        ->with('channels', Channel::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sessie = Sessie::where("id","=","$id");
        return view('sessies.edit')->with('sessies', Sessie::all());
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

    $sessie = Sessie::find($id);

    $sessie->name_horse = $request->name_horse;
    $sessie->datum = $request->datum;
    $sessie->horse_id = $request->horse_id;
    $sessie->inspectie_stand = $request->inspectie_stand;
    $sessie->behandeling = $request->behandeling;
    $sessie->orienterende_palpatie = $request->orienterende_palpatie;


    $sessie->ib1 = $request->ib1;
    $sessie->ib2 = $request->ib2;
    $sessie->ib3 = $request->ib3;
    $sessie->ib4 = $request->ib4;
    $sessie->ib5 = $request->ib5;
    $sessie->ib6 = $request->ib6;
    $sessie->ib7 = $request->ib7;
    $sessie->ib8 = $request->ib8;
    $sessie->ib9 = $request->ib9;
    $sessie->ib10 = $request->ib10;
    $sessie->ib11 = $request->ib11;
    $sessie->ib12 = $request->ib12;
    $sessie->ib13 = $request->ib13;
    $sessie->ib14 = $request->ib14;
    $sessie->ib15 = $request->ib15;
    $sessie->ib16 = $request->ib16;
    $sessie->ib17 = $request->ib17;
    $sessie->ib18 = $request->ib18;
    $sessie->ib19 = $request->ib19;

    // BEENBEWEGING LINKS
    $sessie->bbl1 = $request->bbl1;
    $sessie->bbl2 = $request->bbl2;
    $sessie->bbl3 = $request->bbl3;
    $sessie->bbl4 = $request->bbl4;
    $sessie->bbl5 = $request->bbl5;
    $sessie->bbl6 = $request->bbl6;
    $sessie->bbl7 = $request->bbl7;
    $sessie->bbl8 = $request->bbl8;
    $sessie->bbl9 = $request->bbl9;
    $sessie->bbl10 = $request->bbl10;
    $sessie->bbl11 = $request->bbl11;
    $sessie->bbl12 = $request->bbl12;
    $sessie->bbl13 = $request->bbl13;
    $sessie->bbl14 = $request->bbl14;
    $sessie->bbl15 = $request->bbl15;
    $sessie->bbl16 = $request->bbl16;
    $sessie->bbl17 = $request->bbl17;
    $sessie->bbl18 = $request->bbl18;
    $sessie->bbl19 = $request->bbl19;
    $sessie->bbl20 = $request->bbl20;
    $sessie->bbl21 = $request->bbl21;
    $sessie->bbl22 = $request->bbl22;
    $sessie->bbl23 = $request->bbl23;
    $sessie->bbl24 = $request->bbl24;
    $sessie->bbl25 = $request->bbl25;
    $sessie->bbl26 = $request->bbl26;
    $sessie->bbl27 = $request->bbl27;
    $sessie->bbl28 = $request->bbl28;
    $sessie->bbl29 = $request->bbl29;
    $sessie->bbl30 = $request->bbl30;
    $sessie->bbl31 = $request->bbl31;
    $sessie->bbl32 = $request->bbl32;
    $sessie->bbl33 = $request->bbl33;
    $sessie->bbl34 = $request->bbl34;
    $sessie->bbl35 = $request->bbl35;
    $sessie->bbl36 = $request->bbl36;


    // BEENBEWEGING RECHTS
    $sessie->bbr1 = $request->bbr1;
    $sessie->bbr2 = $request->bbr2;
    $sessie->bbr3 = $request->bbr3;
    $sessie->bbr4 = $request->bbr4;
    $sessie->bbr5 = $request->bbr5;
    $sessie->bbr6 = $request->bbr6;
    $sessie->bbr7 = $request->bbr7;
    $sessie->bbr8 = $request->bbr8;
    $sessie->bbr9 = $request->bbr9;
    $sessie->bbr10 = $request->bbr10;
    $sessie->bbr11 = $request->bbr11;
    $sessie->bbr12 = $request->bbr12;
    $sessie->bbr13 = $request->bbr13;
    $sessie->bbr14 = $request->bbr14;
    $sessie->bbr15 = $request->bbr15;
    $sessie->bbr16 = $request->bbr16;
    $sessie->bbr17 = $request->bbr17;
    $sessie->bbr18 = $request->bbr18;
    $sessie->bbr19 = $request->bbr19;
    $sessie->bbr20 = $request->bbr20;
    $sessie->bbr21 = $request->bbr21;
    $sessie->bbr22 = $request->bbr22;
    $sessie->bbr23 = $request->bbr23;
    $sessie->bbr24 = $request->bbr24;
    $sessie->bbr25 = $request->bbr25;
    $sessie->bbr26 = $request->bbr26;
    $sessie->bbr27 = $request->bbr27;
    $sessie->bbr28 = $request->bbr28;
    $sessie->bbr29 = $request->bbr29;
    $sessie->bbr30 = $request->bbr30;
    $sessie->bbr31 = $request->bbr31;
    $sessie->bbr32 = $request->bbr32;
    $sessie->bbr33 = $request->bbr33;
    $sessie->bbr34 = $request->bbr34;
    $sessie->bbr35 = $request->bbr35;
    $sessie->bbr36 = $request->bbr36;

//BEWEGINSONDERZOEK
$sessie->bo1 = $request->bo1;
$sessie->bo2 = $request->bo2;
$sessie->bo3 = $request->bo3;
$sessie->bo4 = $request->bo4;
$sessie->bo5 = $request->bo5;
$sessie->bo6 = $request->bo6;
$sessie->bo7 = $request->bo7;
$sessie->bo8 = $request->bo8;
$sessie->bo9 = $request->bo9;
$sessie->bo10 = $request->bo10;
$sessie->bo11 = $request->bo11;
$sessie->bo12 = $request->bo12;
$sessie->bo13 = $request->bo13;
$sessie->bo14 = $request->bo14;
$sessie->bo15 = $request->bo15;
$sessie->bo16 = $request->bo16;
$sessie->bo17 = $request->bo17;
$sessie->bo18 = $request->bo18;
$sessie->bo19 = $request->bo19;
$sessie->bo20 = $request->bo20;
$sessie->bo21 = $request->bo21;
$sessie->bo22 = $request->bo22;
$sessie->bo23 = $request->bo23;
$sessie->bo24 = $request->bo24;
$sessie->bo25 = $request->bo25;
$sessie->bo26 = $request->bo26;
$sessie->bo27 = $request->bo27;
$sessie->bo28 = $request->bo28;
$sessie->bo29 = $request->bo29;
$sessie->bo30 = $request->bo30;
$sessie->bo31 = $request->bo31;
$sessie->bo32 = $request->bo32;
$sessie->bo33 = $request->bo33;
$sessie->bo34 = $request->bo34;
$sessie->bo35 = $request->bo35;
$sessie->bo36 = $request->bo36;
$sessie->bo37 = $request->bo37;
$sessie->bo38 = $request->bo38;
$sessie->bo39 = $request->bo39;
$sessie->bo40 = $request->bo40;
$sessie->bo41 = $request->bo41;
$sessie->bo42 = $request->bo42;
$sessie->bo43 = $request->bo43;
$sessie->bo44 = $request->bo44;
$sessie->bo45 = $request->bo45;
$sessie->bo46 = $request->bo46;
$sessie->bo47 = $request->bo47;
$sessie->bo48 = $request->bo48;
$sessie->bo49 = $request->bo49;
$sessie->bo50 = $request->bo50;
$sessie->bo51 = $request->bo51;
$sessie->bo52 = $request->bo52;
$sessie->bo53 = $request->bo53;
$sessie->bo54 = $request->bo54;
$sessie->bo55 = $request->bo55;
$sessie->bo56 = $request->bo56;
$sessie->bo57 = $request->bo57;
$sessie->bo58 = $request->bo58;
$sessie->bo59 = $request->bo59;
$sessie->bo60 = $request->bo60;
$sessie->bo61 = $request->bo61;
$sessie->bo62 = $request->bo62;
$sessie->bo63 = $request->bo63;
$sessie->bo64 = $request->bo64;
$sessie->bo65 = $request->bo65;
$sessie->bo66 = $request->bo66;
$sessie->bo67 = $request->bo67;



    $sessie->lp1 = $request->lp1;
    $sessie->lp2 = $request->lp2;




    $sessie->save();
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
        //
    }

}

