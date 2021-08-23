<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateHorseRequest;
use App\Models\Horse;
use App\Models\Channel;
use App\Models\User;
use App\Models\Sessie;
use App\Form;
use Browser;
use CreateHorsesTable;
use DB;
use App\Session;

class HorseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function welcome()
    {

        $horse=Horse::orderBy('id', 'desc')->paginate(5);
        return view('welcome', ['horses' =>$horse ]);

    }


    public function index()
    {

        // $horse=Horse::paginate(4);
        $horse=Horse::all();
        return view('horses.index', ['horses' =>$horse ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horses.create')->with('channels', Channel::all());;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(CreateHorseRequest $request)
     {
$this->validate($request, [
'image' => 'required|image',
'name_horse' => 'required',
'name_owner' => 'required',
'achternaam' => 'required',
'age' => 'required',
'breed' => 'required',
'gender' => 'required',
'color' => 'required',
'height' => 'required',
'klacht' => 'required',
'address' => 'required',
'alternatief_adres' => 'required',
'phone_number' => 'required',
'email' => 'required',
'behandeling' => 'required',
'verandering' => 'required',
'opmerkingen' => 'required',
'situatie' => 'required',

]);

$image =  $request->image;
$image_new_name = time().$image->getClientOriginalName();
$image->move('uploads/horses', $image_new_name);

$horse = Horse::create([

    'name_owner' => $request->name_owner,
    'achternaam' => $request->achternaam,
    'name_horse' => $request->name_horse,
    'image' => 'uploads/horses/'. $image_new_name,
    'name_horse' => $request->name_horse,
    'age' => $request->age,
    'breed' => $request->breed,
    'gender' => $request->gender,
    'color' => $request->color,
    'height' => $request->height,
    'klacht' => $request->klacht,
    'address' => $request->address,
    'alternatief_adres' => $request->alternatief_adres,
    'phone_number' => $request->phone_number,
    'email' => $request->email,
    'behandeling' => $request->behandeling,
    'verandering' => $request->verandering,
    'opmerkingen' => $request->opmerkingen,
    'situatie' => $request->situatie,

]);
$horse->save();

session()->flash('success', 'Nieuwe invoer succesvol opgeslagen.');

return redirect()->route('horses/index');
 }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Horse $horses, $id)
    {
        $horse = Horse::where("id","=","$id")->with('sessies')->get();
        return view('horses.show')->with('horses', $horse);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horse = Horse::find($id);
        return view('horses.edit')->with('horse', $horse)->with('channels', Channel::all());
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

    $this->validate($request, [
            'name_horse' => 'required',
            'name_owner' => 'required',
            'achternaam' => 'required',
            'age' => 'required',
            'breed' => 'required',
            'gender' => 'required',
            'color' => 'required',
            'height' => 'required',
            'klacht' => 'required',
            'address' => 'required',
            'alternatief_adres' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'behandeling' => 'required',
            'verandering' => 'required',
            'opmerkingen' => 'required',
            'situatie' => 'required',
]);

$horse = Horse::find($id);
if($request->hasFile('image'))
{
    $image = $request->image;
    $image_new_name = time().$image->getClientOriginalName();
    $image->move('uploads/horses', $image_new_name);
    $horse->image = 'uploads/horses/'.$image_new_name;
}

            $horse->name_owner = $request->name_owner;
            $horse->achternaam = $request->achternaam;
            $horse->name_horse = $request->name_horse;
            $horse->age = $request->age;
            $horse->breed = $request->breed;
            $horse->gender = $request->gender;
            $horse->color = $request->color;
            $horse->height = $request->height;
            $horse->klacht = $request->klacht;
            $horse->address = $request->address;
            $horse->alternatief_adres = $request->alternatief_adres;
            $horse->phone_number = $request->phone_number;
            $horse->email = $request->email;
            $horse->behandeling = $request->behandeling;
            $horse->verandering = $request->verandering;
            $horse->opmerkingen = $request->opmerkingen;
            $horse->situatie = $request->situatie;

        $horse->save();

        session()->flash('success', 'Wijzigingen succesvol opgeslagen.');

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



    public function sessie($id)
    {

        $horse = Horse::find($id);
        $sessie = Sessie::create([

            'name_horse' => request()->name_horse,
            'datum' => request()->datum,
            'horse_id' => $id,
            'inspectie_stand' => request()->inspectie_stand,
            'behandeling' => request()->behandeling,
            'orienterende_palpatie' =>request()->orienterende_palpatie,

            // Inspectie Beweging
            'ib1' => request()->ib1,
            'ib2' => request()->ib2,
            'ib3' => request()->ib3,
            'ib4' => request()->ib4,
            'ib5' => request()->ib5,
            'ib6' => request()->ib6,
            'ib7' => request()->ib7,
            'ib8' => request()->ib8,
            'ib9' => request()->ib9,
            'ib10' => request()->ib10,
            'ib11' => request()->ib11,
            'ib12' => request()->ib12,
            'ib13' => request()->ib13,
            'ib14' => request()->ib14,
            'ib15' => request()->ib15,
            'ib16' => request()->ib16,
            'ib17' => request()->ib17,
            'ib18' => request()->ib18,
            'ib19' => request()->ib19,

            // Been Links
            'bbl1' => request()->bbl1,
            'bbl2' => request()->bbl2,
            'bbl3' => request()->bbl3,
            'bbl4' => request()->bbl4,
            'bbl5' => request()->bbl5,
            'bbl6' => request()->bbl6,
            'bbl7' => request()->bbl7,
            'bbl8' => request()->bbl8,
            'bbl9' => request()->bbl9,
            'bbl10' => request()->bbl10,
            'bbl11' => request()->bbl11,
            'bbl12' => request()->bbl12,
            'bbl13' => request()->bbl13,
            'bbl14' => request()->bbl14,
            'bbl15' => request()->bbl15,
            'bbl16' => request()->bbl16,
            'bbl17' => request()->bbl17,
            'bbl18' => request()->bbl18,
            'bbl19' => request()->bbl19,
            'bbl20' => request()->bbl20,
            'bbl21' => request()->bbl21,
            'bbl22' => request()->bbl22,
            'bbl23' => request()->bbl23,
            'bbl24' => request()->bbl24,
            'bbl25' => request()->bbl25,
            'bbl26' => request()->bbl26,
            'bbl27' => request()->bbl27,
            'bbl28' => request()->bbl28,
            'bbl29' => request()->bbl29,
            'bbl30' => request()->bbl30,
            'bbl31' => request()->bbl31,
            'bbl32' => request()->bbl32,
            'bbl33' => request()->bbl33,
            'bbl34' => request()->bbl34,
            'bbl35' => request()->bbl35,
            'bbl36' => request()->bbl36,


    // BEENBEWEGING RECHTS
    'bbr1' => request()->bbr1,
    'bbr2' => request()->bbr2,
    'bbr3' => request()->bbr3,
    'bbr4' => request()->bbr4,
    'bbr5' => request()->bbr5,
    'bbr6' => request()->bbr6,
    'bbr7' => request()->bbr7,
    'bbr8' => request()->bbr8,
    'bbr9' => request()->bbr9,
    'bbr10' => request()->bbr10,
    'bbr11' => request()->bbr11,
    'bbr12' => request()->bbr12,
    'bbr13' => request()->bbr13,
    'bbr14' => request()->bbr14,
    'bbr15' => request()->bbr15,
    'bbr16' => request()->bbr16,
    'bbr17' => request()->bbr17,
    'bbr18' => request()->bbr18,
    'bbr19' => request()->bbr19,
    'bbr20' => request()->bbr20,
    'bbr21' => request()->bbr21,
    'bbr22' => request()->bbr22,
    'bbr23' => request()->bbr23,
    'bbr24' => request()->bbr24,
    'bbr25' => request()->bbr25,
    'bbr26' => request()->bbr26,
    'bbr27' => request()->bbr27,
    'bbr28' => request()->bbr28,
    'bbr29' => request()->bbr29,
    'bbr30' => request()->bbr30,
    'bbr31' => request()->bbr31,
    'bbr32' => request()->bbr32,
    'bbr33' => request()->bbr33,
    'bbr34' => request()->bbr34,
    'bbr35' => request()->bbr35,
    'bbr36' => request()->bbr36,



//BEWEGINSONDERZOEK
'bo1' => request()->bo1,
'bo2' => request()->bo2,
'bo3' => request()->bo3,
'bo4' => request()->bo4,
'bo5' => request()->bo5,
'bo6' => request()->bo6,
'bo7' => request()->bo7,
'bo8' => request()->bo8,
'bo9' => request()->bo9,
'bo10' => request()->bo10,
'bo11' => request()->bo11,
'bo12' => request()->bo12,
'bo13' => request()->bo13,
'bo14' => request()->bo14,
'bo15' => request()->bo15,
'bo16' => request()->bo16,
'bo17' => request()->bo17,
'bo18' => request()->bo18,
'bo19' => request()->bo19,
'bo20' => request()->bo20,
'bo21' => request()->bo21,
'bo22' => request()->bo22,
'bo23' => request()->bo23,
'bo24' => request()->bo24,
'bo25' => request()->bo25,
'bo26' => request()->bo26,
'bo27' => request()->bo27,
'bo28' => request()->bo28,
'bo29' => request()->bo29,
'bo30' => request()->bo30,
'bo31' => request()->bo31,
'bo32' => request()->bo32,
'bo33' => request()->bo33,
'bo34' => request()->bo34,
'bo35' => request()->bo35,
'bo36' => request()->bo36,
'bo37' => request()->bo37,
'bo38' => request()->bo38,
'bo39' => request()->bo39,
'bo40' => request()->bo40,
'bo41' => request()->bo41,
'bo42' => request()->bo42,
'bo43' => request()->bo43,
'bo44' => request()->bo44,
'bo45' => request()->bo45,
'bo46' => request()->bo46,
'bo47' => request()->bo47,
'bo48' => request()->bo48,
'bo49' => request()->bo49,
'bo50' => request()->bo50,
'bo51' => request()->bo51,
'bo52' => request()->bo52,
'bo53' => request()->bo53,
'bo54' => request()->bo54,
'bo55' => request()->bo55,
'bo56' => request()->bo56,
'bo57' => request()->bo57,
'bo58' => request()->bo58,
'bo59' => request()->bo59,
'bo60' => request()->bo60,
'bo61' => request()->bo61,
'bo62' => request()->bo62,
'bo63' => request()->bo63,
'bo64' => request()->bo64,
'bo65' => request()->bo65,
'bo66' => request()->bo66,
'bo67' => request()->bo67,


'lp1' => request()->lp1,
'lp2' => request()->lp2,

        ]);



        return redirect()->back()->with('horses', Horse::all())->with(session()->flash('success', 'Nieuw consult succesvol opgeslagen.'));

    }
}
