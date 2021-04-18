<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horse;
use Session;
use App\Form;
use Browser;
use DB;

class HorseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('horses.index')
        ->with('horses', Horse::all());

    }
    public function twitter()
    {
        return view('horses.twitter');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
    {
        $this->validate($request, [

// DATUM
'datum' => 'required',

// ALGEMEEN
'name' => 'required',
'name_owner' => 'required',
'phone_number' => 'required',
'address' => 'required',
'email' => 'required',

// INFO PAARD
'name_horse' => 'required',
'age' => 'required',
'breed' => 'required',
'gender' => 'required',
'alternatief_adres' => 'required',
'featured' => 'required|image',


// SITUATIE
'bezit_eigenaar' => 'required',
'huisvesting' => 'required',
'voorgeschiedenis' => 'required',
'voeding' => 'required',
'medicijnen' => 'required',
'overig' => 'required',
'aankoopkeuring' => 'required',

// KLACHTEN
'stoornissen' => 'required',
'klacht' => 'required',
'behandeling' => 'required',
'veranderingen' => 'required',
'mesten' => 'required',

// ALGEMENE INDRUK

'BAR' => 'required',
'voedingstoestand' => 'required',
'vacht' => 'required',
'voeten' => 'required',

// INSPECTIE INSTAND
'inspectie_stand' => 'required',

// ORIENTERENDE PALPATIE
'orienterende_palpatie' => 'required',

// BEWEGINGSONDERZOEK
'bewegingsonderzoek' => 'required'


// AFBEELDING BESTANDSNAAM WIJZIGEN EN OPSLAAN

        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/horses/', $featured_new_name);


        $horse = Horse::create([
'featured' => 'uploads/horses/'.$featured_new_name,
'datum' => 'required',

// ALGEMEEN
'name' => 'required',
'name_owner' => 'required',
'phone_number' => 'required',
'address' => 'required',
'email' => 'required',

// INFO PAARD
'name_horse' => 'required',
'age' => 'required',
'breed' => 'required',
'gender' => 'required',
'alternatief_adres' => 'required',

// SITUATIE
'bezit_eigenaar' => 'required',
'huisvesting' => 'required',
'voorgeschiedenis' => 'required',
'voeding' => 'required',
'medicijnen' => 'required',
'overig' => 'required',
'aankoopkeuring' => 'required',

// KLACHTEN
'stoornissen' => 'required',
'klacht' => 'required',
'behandeling' => 'required',
'veranderingen' => 'required',
'mesten' => 'required',

// ALGEMENE INDRUK

'BAR' => 'required',
'voedingstoestand' => 'required',
'vacht' => 'required',
'voeten' => 'required',

// INSPECTIE INSTAND
'inspectie_stand' => 'required',

// ORIENTERENDE PALPATIE
'orienterende_palpatie' => 'required',

// BEWEGINGSONDERZOEK
'bewegingsonderzoek' => 'required'


]);


        // $horse = new Horse;

// DATUM
$horse->datum = $request->datum;

// ALGEMEEN
$horse->name = $request->name;
$horse->name_owner = $request->name_owner;
$horse->phone_number = $request->phone_number;
$horse->address = $request->address;
$horse->email = $request->email;

// INFO PAARD
$horse->name_horse = $request->name_horse;
$horse->age = $request->age;
$horse->breed = $request->breed;
$horse->gender = $request->gender;
$horse->alternatief_adres = $request->alternatief_adres;

// SITUATIE
$horse->bezit_eigenaar = $request->bezit_eigenaar;
$horse->huisvesting = $request->huisvesting;
$horse->voorgeschiedenis = $request->voorgeschiedenis;
$horse->voeding = $request->voeding;
$horse->medicijnen = $request->medicijnen;
$horse->overig = $request->overig;
$horse->aankoopkeuring = $request->aankoopkeuring;

// KLACHTEN
$horse->stoornissen = $request->stoornissen;
$horse->klacht = $request->klacht;
$horse->behandeling = $request->behandeling;
$horse->veranderingen = $request->veranderingen;
$horse->mesten = $request->mesten;

// ALGEMENE INDRUK
$horse->BAR = $request->BAR;
$horse->voedingstoestand = $request->voedingstoestand;
$horse->vacht = $request->vacht;
$horse->voeten = $request->voeten;

// INSPECTIE IN STAND
$horse->inspectie_stand = $request->inspectie_stand;


// ORIENTERENDE PALPATIE
$horse->orienterende_palpatie = $request->orienterende_palpatie;

// BEWEGINGSONDERZOEK
$horse->bewegingsonderzoek = $request->bewegingsonderzoek;


       $horse->save();
    //    Session()->flash('success', 'Post created succesfully');
       return redirect()->route('horses/index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        {

             $horses = Horse::where("id","=","$id")->get();
             return view('horses.show', ['horses' => $horses]);
         }

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
        return view('horses.edit')->with('horse', $horse);
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
        $horse = Horse::find($id);

        if($request->hasFile('featured'))
        {
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/horses/', $featured_new_name);
            $horse->featured = 'uploads/horses/'.$featured_new_name;
        }


// DATUM
$horse->datum = $request->datum;

// ALGEMEEN
$horse->name = $request->name;
$horse->name_owner = $request->name_owner;
$horse->phone_number = $request->phone_number;
$horse->address = $request->address;
$horse->email = $request->email;

// INFO PAARD
$horse->name_horse = $request->name_horse;
$horse->age = $request->age;
$horse->breed = $request->breed;
$horse->gender = $request->gender;
$horse->alternatief_adres = $request->alternatief_adres;

// SITUATIE
$horse->bezit_eigenaar = $request->bezit_eigenaar;
$horse->huisvesting = $request->huisvesting;
$horse->voorgeschiedenis = $request->voorgeschiedenis;
$horse->voeding = $request->voeding;
$horse->medicijnen = $request->medicijnen;
$horse->overig = $request->overig;
$horse->aankoopkeuring = $request->aankoopkeuring;

// KLACHTEN
$horse->stoornissen = $request->stoornissen;
$horse->klacht = $request->klacht;
$horse->behandeling = $request->behandeling;
$horse->veranderingen = $request->veranderingen;
$horse->mesten = $request->mesten;


// ALGEMENE INDRUK
$horse->BAR = $request->BAR;
$horse->voedingstoestand = $request->voedingstoestand;
$horse->vacht = $request->vacht;
$horse->voeten = $request->voeten;

// INSPECTIE IN STAND
$horse->inspectie_stand = $request->inspectie_stand;


// ORIENTERENDE PALPATIE
$horse->orienterende_palpatie = $request->orienterende_palpatie;

// BEWEGINGSONDERZOEK
$horse->bewegingsonderzoek = $request->bewegingsonderzoek;


        $horse->save();


        // Session::flash('success', 'Category updated successfully');

        return redirect()->route('horses/index');

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
