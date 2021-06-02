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

///IMAGE
'featured' => 'image|nullable|max:1999',

// EIGENAAR
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
'situatie' => 'required',

// STOORNISSEN
'klacht' => 'required',

// BEHANDELING TNT
'behandeling' => 'required',

// VERANDERINGEN
'verandering' => 'required',

// ALGEMENE INDRUK
'algemeen' => 'required',

// INSPECTIE INSTAND
'inspectie_stand' => 'required',

// ORIENTERENDE PALPATIE
'orienterende_palpatie' => 'required',

// BEWEGINGSONDERZOEK
'bewegingsonderzoek' => 'required',

]);


  // Handle File Upload

  if($request->hasFile('featured')){

    //Get Filename with extension

    $filenameWithExt = $request->file('featured')->getClientOriginalName();

    // Get Just Filename

    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

    // Get Just Ext

    $extension = $request->file('featured')->getClientOriginalExtension();

    // Filename to store

    $fileNameToStore = $filename.'_'.time().'.'.$extension;

    // Upload image

    $path = $request->file('featured')->storeAs('public/storage/uploads/horses', $fileNameToStore);

    } else {

    $fileNameToStore = 'no_image.jpg';

    }




     // Create Horse

     $horse = new Horse;

//IMAGE

$horse->featured = $fileNameToStore;

// DATUM


$horse->datum = $request->datum;

// EIENAAR
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
$horse->situatie = $request->situatie;

// STOORNISSEN
$horse->klacht = $request->klacht;

// BEHANDELING TNT
$horse->behandeling = $request->behandeling;

// VERANDERINGEN
$horse->verandering = $request->verandering;


// ALGEMENE INDRUK
$horse->algemeen = $request->algemeen;


// // INSPECTIE IN STAND
$horse->inspectie_stand = $request->inspectie_stand;

// ORIENTERENDE PALPATIE
$horse->orienterende_palpatie = $request->orienterende_palpatie;

// BEWEGINGSONDERZOEK
$horse->bewegingsonderzoek = $request->bewegingsonderzoek;

       $horse->save();
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

        if($request->hasFile('featured')){

            //Get Filename with extension

            $filenameWithExt = $request->file('featured')->getClientOriginalName();

            // Get Just Filename

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get Just Ext

            $extension = $request->file('featured')->getClientOriginalExtension();

            // Filename to store

            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload image

            $path = $request->file('featured')->storeAs('public/storage/uploads/horses', $fileNameToStore);

            }

// DATUM
$horse->datum = $request->datum;

// EIGENAAR
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
$horse->situatie = $request->situatie;

// KLACHTEN
$horse->klacht = $request->klacht;

// BEHANDELING TNT
$horse->behandeling = $request->behandeling;

//VERANDERINGEN
$horse->verandering = $request->verandering;

// ALGEMENE INDRUK
$horse->algemeen = $request->algemeen;

// INSPECTIE IN STAND
$horse->inspectie_stand = $request->inspectie_stand;

// ORIENTERENDE PALPATIE
$horse->orienterende_palpatie = $request->orienterende_palpatie;

// BEWEGINGSONDERZOEK
$horse->bewegingsonderzoek = $request->bewegingsonderzoek;


        $horse->save();

        // return redirect()->route('horses/index');
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
