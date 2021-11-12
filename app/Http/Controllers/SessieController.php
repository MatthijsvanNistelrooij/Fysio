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

    // public function store(CreateSessieRequest $request, Horse $horse)
    // {

    //     Sessie::create([
    //         'horse_id' => $horse->id,
    //         'horse_name' => $horse->content1,

    //         'image' => $horse->image,
            // 'image2' => $horse->image2,
    //         'image3' => $horse->image3,
    //         'image4' => $horse->image4,
    //         'image5' => $horse->image5,
    //         'image6' => $horse->image6,
    //         'image7' => $horse->image7,
    //         'image8' => $horse->image8,

    //         'image9' => $horse->image9,
    //         'image10' => $horse->image10,
    //         'image11' => $horse->image11,
    //         'image12' => $horse->image12,
    //         'image13' => $horse->image13,
    //         'image14' => $horse->image14,
    //         'image15' => $horse->image15,
    //         'image16' => $horse->image16,

            // 'con1' => $request->con1,
            // 'con2' => $request->con2,
    //         'con3' => $request->con3,
    //         'con4' => $request->con4,
    //         'con5' => $request->con5,
    //         'con6' => $request->con6,
    //         'con7' => $request->con7,
    //         'con8' => $request->con8,
    //         'con9' => $request->con9,
    //         'con10' => $request->con10,

    //         'con11' => $request->con11,
    //         'con12' => $request->con12,
    //         'con13' => $request->con13,
    //         'con14' => $request->con14,
    //         'con15' => $request->con15,
    //         'con16' => $request->con16,
    //         'con17' => $request->con17,
    //         'con18' => $request->con18,
    //         'con19' => $request->con19,
    //         'con20' => $request->con20,

    //         'con21' => $request->con21,
    //         'con22' => $request->con22,
    //         'con23' => $request->con23,
    //         'con24' => $request->con24,
    //         'con25' => $request->con25,
    //         'con26' => $request->con26,
    //         'con27' => $request->con27,
    //         'con28' => $request->con28,
    //         'con29' => $request->con29,
    //         'con30' => $request->con30,

    //         'con31' => $request->con31,
    //         'con32' => $request->con32,
    //         'con33' => $request->con33,
    //         'con34' => $request->con34,
    //         'con35' => $request->con35,
    //         'con36' => $request->con36,
    //         'con37' => $request->con37,
    //         'con38' => $request->con38,
    //         'con39' => $request->con39,
    //         'con40' => $request->con40,

    //         'con41' => $request->con41,
    //         'con42' => $request->con42,
    //         'con43' => $request->con43,
    //         'con44' => $request->con44,
    //         'con45' => $request->con45,
    //         'con46' => $request->con46,
    //         'con47' => $request->con47,
    //         'con48' => $request->con48,
    //         'con49' => $request->con49,
    //         'con50' => $request->con50,

    //         'con51' => $request->con51,
    //         'con52' => $request->con52,
    //         'con53' => $request->con53,
    //         'con54' => $request->con54,
    //         'con55' => $request->con55,
    //         'con56' => $request->con56,
    //         'con57' => $request->con57,
    //         'con58' => $request->con58,
    //         'con59' => $request->con59,
    //         'con60' => $request->con60,

    //         'con61' => $request->con61,
    //         'con62' => $request->con62,
    //         'con63' => $request->con63,
    //         'con64' => $request->con64,
    //         'con65' => $request->con65,
    //         'con66' => $request->con66,
    //         'con67' => $request->con67,
    //         'con68' => $request->con68,
    //         'con69' => $request->con69,
    //         'con70' => $request->con70,

    //         'con71' => $request->con71,
    //         'con72' => $request->con72,
    //         'con73' => $request->con73,
    //         'con74' => $request->con74,
    //         'con75' => $request->con75,
    //         'con76' => $request->con76,
    //         'con77' => $request->con77,
    //         'con78' => $request->con78,
    //         'con79' => $request->con79,
    //         'con80' => $request->con80,

    //         'con81' => $request->con81,
    //         'con82' => $request->con82,
    //         'con83' => $request->con83,
    //         'con84' => $request->con84,
    //         'con85' => $request->con85,
    //         'con86' => $request->con86,
    //         'con87' => $request->con87,
    //         'con88' => $request->con88,
    //         'con89' => $request->con89,
    //         'con90' => $request->con90,

    //         'con91' => $request->con91,
    //         'con92' => $request->con92,
    //         'con93' => $request->con93,
    //         'con94' => $request->con94,
    //         'con95' => $request->con95,
    //         'con96' => $request->con96,
    //         'con97' => $request->con97,
    //         'con98' => $request->con98,
    //         'con99' => $request->con99,
    //         'con100' => $request->con100,

    //         'con101' => $request->con101,
    //         'con102' => $request->con102,
    //         'con103' => $request->con103,
    //         'con104' => $request->con104,
    //         'con105' => $request->con105,
    //         'con106' => $request->con106,
    //         'con107' => $request->con107,
    //         'con108' => $request->con108,
    //         'con109' => $request->con109,
    //         'con110' => $request->con110,

    //         'con111' => $request->con111,
    //         'con112' => $request->con112,
    //         'con113' => $request->con113,
    //         'con114' => $request->con114,
    //         'con115' => $request->con115,
    //         'con116' => $request->con116,
    //         'con117' => $request->con117,
    //         'con118' => $request->con118,
    //         'con119' => $request->con119,
    //         'con120' => $request->con120,

    //         'con121' => $request->con121,
    //         'con122' => $request->con122,
    //         'con123' => $request->con123,
    //         'con124' => $request->con124,
    //         'con125' => $request->con125,
    //         'con126' => $request->con126,
    //         'con127' => $request->con127,
    //         'con128' => $request->con128,
    //         'con129' => $request->con129,
    //         'con130' => $request->con130,

    //         'con131' => $request->con131,
    //         'con132' => $request->con132,
    //         'con133' => $request->con133,
    //         'con134' => $request->con134,
    //         'con135' => $request->con135,
    //         'con136' => $request->con136,
    //         'con137' => $request->con137,
    //         'con138' => $request->con138,
    //         'con139' => $request->con139,
    //         'con140' => $request->con143,

    //         'con141' => $request->con141,
    //         'con142' => $request->con142,
    //         'con143' => $request->con143,
    //         'con144' => $request->con144,
    //         'con145' => $request->con145,
    //         'con146' => $request->con146,
    //         'con147' => $request->con147,
    //         'con148' => $request->con148,
    //         'con149' => $request->con149,
    //         'con150' => $request->con150,

    //         'con151' => $request->con151,
    //         'con152' => $request->con152,
    //         'con153' => $request->con153,
    //         'con154' => $request->con154,
    //         'con155' => $request->con155,
    //         'con156' => $request->con156,
    //         'con157' => $request->con157,
    //         'con158' => $request->con158,
    //         'con159' => $request->con159,
    //         'con160' => $request->con160,

    //         'con161' => $request->con161,
    //         'con162' => $request->con162,
    //         'con163' => $request->con163,
    //         'con164' => $request->con164,
    //         'con165' => $request->con165,
    //         'con166' => $request->con166,
    //         'con167' => $request->con167,
    //         'con168' => $request->con168,
    //         'con169' => $request->con169,
    //         'con170' => $request->con170,

    //         'con171' => $request->con171,
    //         'con172' => $request->con172,
    //         'con173' => $request->con173,
    //         'con174' => $request->con174,
    //         'con175' => $request->con175,
    //         'con176' => $request->con176,
    //         'con177' => $request->con177,
    //         'con178' => $request->con178,
    //         'con179' => $request->con179,
    //         'con180' => $request->con180,

    //         'con181' => $request->con181,
    //         'con182' => $request->con182,
    //         'con183' => $request->con183,
    //         'con183' => $request->con183,
    //         'con184' => $request->con184,
    //         'con185' => $request->con185,
    //         'con186' => $request->con186,
    //         'con187' => $request->con187,
    //         'con188' => $request->con188,
    //         'con189' => $request->con189,
    //         'con190' => $request->con190,

    //         'con191' => $request->con191,
    //         'con192' => $request->con192,
    //         'con193' => $request->con193,


    public function store(CreateSessieRequest $request, Horse $horse)
    {

        $this->validate($request, [
            'con1' => 'nullable',
            'con2' => 'nullable',
            'image' => 'image|nullable|max:1999',

        ]);

        if($request->hasFile('image')){
        $filenameWithExt = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } else {
        $fileNameToStore = 'no_image.jpg';
        }

        if($request->hasFile('image2')){
            $filenameWithExt = $request->file('image2')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image2')->getClientOriginalExtension();
            $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image2')->storeAs('public/images', $fileNameToStore2);
            } else {
            $fileNameToStore2 = 'no_image.jpg';
            }

            if($request->hasFile('image3')){
                $filenameWithExt = $request->file('image3')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image3')->getClientOriginalExtension();
                $fileNameToStore3 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image3')->storeAs('public/images', $fileNameToStore3);
                } else {
                $fileNameToStore3 = 'no_image.jpg';
                }
                if($request->hasFile('image4')){
                    $filenameWithExt = $request->file('image4')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file('image4')->getClientOriginalExtension();
                    $fileNameToStore4 = $filename.'_'.time().'.'.$extension;
                    $path = $request->file('image4')->storeAs('public/images', $fileNameToStore4);
                    } else {
                    $fileNameToStore4 = 'no_image.jpg';
                    }

                    if($request->hasFile('image5')){
                        $filenameWithExt = $request->file('image5')->getClientOriginalName();
                        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                        $extension = $request->file('image5')->getClientOriginalExtension();
                        $fileNameToStore5 = $filename.'_'.time().'.'.$extension;
                        $path = $request->file('image5')->storeAs('public/images', $fileNameToStore5);
                        } else {
                        $fileNameToStore5 = 'no_image.jpg';
                        }

                        if($request->hasFile('image6')){
                            $filenameWithExt = $request->file('image6')->getClientOriginalName();
                            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                            $extension = $request->file('image6')->getClientOriginalExtension();
                            $fileNameToStore6 = $filename.'_'.time().'.'.$extension;
                            $path = $request->file('image6')->storeAs('public/images', $fileNameToStore6);
                            } else {
                            $fileNameToStore6 = 'no_image.jpg';
                            }

                            if($request->hasFile('image7')){
                                $filenameWithExt = $request->file('image7')->getClientOriginalName();
                                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                $extension = $request->file('image7')->getClientOriginalExtension();
                                $fileNameToStore7 = $filename.'_'.time().'.'.$extension;
                                $path = $request->file('image7')->storeAs('public/images', $fileNameToStore7);
                                } else {
                                $fileNameToStore7 = 'no_image.jpg';
                                }

                                if($request->hasFile('image8')){
                                    $filenameWithExt = $request->file('image8')->getClientOriginalName();
                                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                    $extension = $request->file('image8')->getClientOriginalExtension();
                                    $fileNameToStore8 = $filename.'_'.time().'.'.$extension;
                                    $path = $request->file('image8')->storeAs('public/images', $fileNameToStore8);
                                    } else {
                                    $fileNameToStore8 = 'no_image.jpg';
                                    }

                                    if($request->hasFile('image9')){
                                        $filenameWithExt = $request->file('image9')->getClientOriginalName();
                                        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                        $extension = $request->file('image9')->getClientOriginalExtension();
                                        $fileNameToStore9 = $filename.'_'.time().'.'.$extension;
                                        $path = $request->file('image9')->storeAs('public/images', $fileNameToStore9);
                                        } else {
                                        $fileNameToStore9 = 'no_video.mp4';
                                        }

                                        if($request->hasFile('image10')){
                                            $filenameWithExt = $request->file('image10')->getClientOriginalName();
                                            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                            $extension = $request->file('image10')->getClientOriginalExtension();
                                            $fileNameToStore10 = $filename.'_'.time().'.'.$extension;
                                            $path = $request->file('image10')->storeAs('public/images', $fileNameToStore10);
                                            } else {
                                            $fileNameToStore10 = 'no_video.mp4';
                                            }

                                            if($request->hasFile('image11')){
                                                $filenameWithExt = $request->file('image11')->getClientOriginalName();
                                                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                                $extension = $request->file('image11')->getClientOriginalExtension();
                                                $fileNameToStore11 = $filename.'_'.time().'.'.$extension;
                                                $path = $request->file('image11')->storeAs('public/images', $fileNameToStore11);
                                                } else {
                                                $fileNameToStore11 = 'no_video.mp4';
                                                }

                                                if($request->hasFile('image12')){
                                                    $filenameWithExt = $request->file('image12')->getClientOriginalName();
                                                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                                    $extension = $request->file('image12')->getClientOriginalExtension();
                                                    $fileNameToStore12 = $filename.'_'.time().'.'.$extension;
                                                    $path = $request->file('image12')->storeAs('public/images', $fileNameToStore12);
                                                    } else {
                                                    $fileNameToStore12 = 'no_video.mp4';
                                                    }

                                                    if($request->hasFile('image13')){
                                                        $filenameWithExt = $request->file('image13')->getClientOriginalName();
                                                        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                                        $extension = $request->file('image13')->getClientOriginalExtension();
                                                        $fileNameToStore13 = $filename.'_'.time().'.'.$extension;
                                                        $path = $request->file('image13')->storeAs('public/images', $fileNameToStore13);
                                                        } else {
                                                        $fileNameToStore13 = 'no_video.mp4';
                                                        }

                                                        if($request->hasFile('image14')){
                                                            $filenameWithExt = $request->file('image14')->getClientOriginalName();
                                                            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                                            $extension = $request->file('image14')->getClientOriginalExtension();
                                                            $fileNameToStore14 = $filename.'_'.time().'.'.$extension;
                                                            $path = $request->file('image14')->storeAs('public/images', $fileNameToStore14);
                                                            } else {
                                                            $fileNameToStore14 = 'no_video.mp4';
                                                            }

                                                            if($request->hasFile('image15')){
                                                                $filenameWithExt = $request->file('image15')->getClientOriginalName();
                                                                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                                                $extension = $request->file('image15')->getClientOriginalExtension();
                                                                $fileNameToStore15 = $filename.'_'.time().'.'.$extension;
                                                                $path = $request->file('image15')->storeAs('public/images', $fileNameToStore15);
                                                                } else {
                                                                $fileNameToStore15 = 'no_video.mp4';
                                                                }

                                                                if($request->hasFile('image16')){
                                                                    $filenameWithExt = $request->file('image16')->getClientOriginalName();
                                                                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                                                    $extension = $request->file('image16')->getClientOriginalExtension();
                                                                    $fileNameToStore16 = $filename.'_'.time().'.'.$extension;
                                                                    $path = $request->file('image16')->storeAs('public/images', $fileNameToStore16);
                                                                    } else {
                                                                    $fileNameToStore16 = 'no_video.mp4';
                                                                    }


        $sessies = new Sessie;
        $sessies->horse_id = $horse->id;
        $sessies->horse_name = $horse->content1;

        $sessies->con1 = $request->input('con1');
        $sessies->con2 = $request->input('con2');
        $sessies->con3 = $request->input('con3');
        $sessies->con4 = $request->input('con4');
        $sessies->con5 = $request->input('con5');
        $sessies->con6 = $request->input('con6');
        $sessies->con7 = $request->input('con7');
        $sessies->con8 = $request->input('con8');
        $sessies->con9 = $request->input('con9');

        $sessies->con10 = $request->input('con10');
        $sessies->con11 = $request->input('con11');
        $sessies->con12 = $request->input('con12');
        $sessies->con13 = $request->input('con13');
        $sessies->con14 = $request->input('con14');
        $sessies->con15 = $request->input('con15');
        $sessies->con16 = $request->input('con16');
        $sessies->con17 = $request->input('con17');
        $sessies->con18 = $request->input('con18');
        $sessies->con19 = $request->input('con19');

        $sessies->con20 = $request->input('con20');
        $sessies->con21 = $request->input('con21');
        $sessies->con22 = $request->input('con22');
        $sessies->con23 = $request->input('con23');
        $sessies->con24 = $request->input('con24');
        $sessies->con25 = $request->input('con25');
        $sessies->con26 = $request->input('con26');
        $sessies->con27 = $request->input('con27');
        $sessies->con28 = $request->input('con28');
        $sessies->con29 = $request->input('con29');

        $sessies->con30 = $request->input('con30');
        $sessies->con31 = $request->input('con31');
        $sessies->con32 = $request->input('con32');
        $sessies->con33 = $request->input('con33');
        $sessies->con34 = $request->input('con34');
        $sessies->con35 = $request->input('con35');
        $sessies->con36 = $request->input('con36');
        $sessies->con37 = $request->input('con37');
        $sessies->con38 = $request->input('con38');
        $sessies->con39 = $request->input('con39');

        $sessies->con40 = $request->input('con40');
        $sessies->con41 = $request->input('con41');
        $sessies->con42 = $request->input('con42');
        $sessies->con43 = $request->input('con43');
        $sessies->con44 = $request->input('con44');
        $sessies->con45 = $request->input('con45');
        $sessies->con46 = $request->input('con46');
        $sessies->con47 = $request->input('con47');
        $sessies->con48 = $request->input('con48');
        $sessies->con49 = $request->input('con49');

        $sessies->con50 = $request->input('con50');
        $sessies->con51 = $request->input('con51');
        $sessies->con52 = $request->input('con52');
        $sessies->con53 = $request->input('con53');
        $sessies->con54 = $request->input('con54');
        $sessies->con55 = $request->input('con55');
        $sessies->con56 = $request->input('con56');
        $sessies->con57 = $request->input('con57');
        $sessies->con58 = $request->input('con58');
        $sessies->con59 = $request->input('con59');

        $sessies->con60 = $request->input('con60');
        $sessies->con61 = $request->input('con61');
        $sessies->con62 = $request->input('con62');
        $sessies->con63 = $request->input('con63');
        $sessies->con64 = $request->input('con64');
        $sessies->con65 = $request->input('con65');
        $sessies->con66 = $request->input('con66');
        $sessies->con67 = $request->input('con67');
        $sessies->con68 = $request->input('con68');
        $sessies->con69 = $request->input('con69');

        $sessies->con70 = $request->input('con70');
        $sessies->con71 = $request->input('con71');
        $sessies->con72 = $request->input('con72');
        $sessies->con73 = $request->input('con73');
        $sessies->con74 = $request->input('con74');
        $sessies->con75 = $request->input('con75');
        $sessies->con76 = $request->input('con76');
        $sessies->con77 = $request->input('con77');
        $sessies->con78 = $request->input('con78');
        $sessies->con79 = $request->input('con79');

        $sessies->con80 = $request->input('con80');
        $sessies->con81 = $request->input('con81');
        $sessies->con82 = $request->input('con82');
        $sessies->con83 = $request->input('con83');
        $sessies->con84 = $request->input('con84');
        $sessies->con85 = $request->input('con85');
        $sessies->con86 = $request->input('con86');
        $sessies->con87 = $request->input('con87');
        $sessies->con88 = $request->input('con88');
        $sessies->con89 = $request->input('con89');

        $sessies->con90 = $request->input('con90');
        $sessies->con91 = $request->input('con91');
        $sessies->con92 = $request->input('con92');
        $sessies->con93 = $request->input('con93');
        $sessies->con94 = $request->input('con94');
        $sessies->con95 = $request->input('con95');
        $sessies->con96 = $request->input('con96');
        $sessies->con97 = $request->input('con97');
        $sessies->con98 = $request->input('con98');
        $sessies->con99 = $request->input('con99');

        $sessies->con100 = $request->input('con100');
        $sessies->con101 = $request->input('con101');
        $sessies->con102 = $request->input('con102');
        $sessies->con103 = $request->input('con103');
        $sessies->con104 = $request->input('con104');
        $sessies->con105 = $request->input('con105');
        $sessies->con106 = $request->input('con106');
        $sessies->con107 = $request->input('con107');
        $sessies->con108 = $request->input('con108');
        $sessies->con109 = $request->input('con109');

        $sessies->con110 = $request->input('con110');
        $sessies->con111 = $request->input('con111');
        $sessies->con112 = $request->input('con112');
        $sessies->con113 = $request->input('con113');
        $sessies->con114 = $request->input('con114');
        $sessies->con115 = $request->input('con115');
        $sessies->con116 = $request->input('con116');
        $sessies->con117 = $request->input('con117');
        $sessies->con118 = $request->input('con118');
        $sessies->con119 = $request->input('con119');

        $sessies->con120 = $request->input('con120');
        $sessies->con121 = $request->input('con121');
        $sessies->con122 = $request->input('con122');
        $sessies->con123 = $request->input('con123');
        $sessies->con124 = $request->input('con124');
        $sessies->con125 = $request->input('con125');
        $sessies->con126 = $request->input('con126');
        $sessies->con127 = $request->input('con127');
        $sessies->con128 = $request->input('con128');
        $sessies->con129 = $request->input('con129');

        $sessies->con130 = $request->input('con130');
        $sessies->con131 = $request->input('con131');
        $sessies->con132 = $request->input('con132');
        $sessies->con133 = $request->input('con133');
        $sessies->con134 = $request->input('con134');
        $sessies->con135 = $request->input('con135');
        $sessies->con136 = $request->input('con136');
        $sessies->con137 = $request->input('con137');
        $sessies->con138 = $request->input('con138');
        $sessies->con139 = $request->input('con139');

        $sessies->con140 = $request->input('con140');
        $sessies->con141 = $request->input('con141');
        $sessies->con142 = $request->input('con142');
        $sessies->con143 = $request->input('con143');
        $sessies->con144 = $request->input('con144');
        $sessies->con145 = $request->input('con145');
        $sessies->con146 = $request->input('con146');
        $sessies->con147 = $request->input('con147');
        $sessies->con148 = $request->input('con148');
        $sessies->con149 = $request->input('con149');

        $sessies->con150 = $request->input('con150');
        $sessies->con151 = $request->input('con151');
        $sessies->con152 = $request->input('con152');
        $sessies->con153 = $request->input('con153');
        $sessies->con154 = $request->input('con154');
        $sessies->con155 = $request->input('con155');
        $sessies->con156 = $request->input('con156');
        $sessies->con157 = $request->input('con157');
        $sessies->con158 = $request->input('con158');
        $sessies->con159 = $request->input('con159');

        $sessies->con160 = $request->input('con160');
        $sessies->con161 = $request->input('con161');
        $sessies->con162 = $request->input('con162');
        $sessies->con163 = $request->input('con163');
        $sessies->con164 = $request->input('con164');
        $sessies->con165 = $request->input('con165');
        $sessies->con166 = $request->input('con166');
        $sessies->con167 = $request->input('con167');
        $sessies->con168 = $request->input('con168');
        $sessies->con169 = $request->input('con169');

        $sessies->con170 = $request->input('con170');
        $sessies->con171 = $request->input('con171');
        $sessies->con172 = $request->input('con172');
        $sessies->con173 = $request->input('con173');
        $sessies->con174 = $request->input('con174');
        $sessies->con175 = $request->input('con175');
        $sessies->con176 = $request->input('con176');
        $sessies->con177 = $request->input('con177');
        $sessies->con178 = $request->input('con178');
        $sessies->con179 = $request->input('con179');

        $sessies->con180 = $request->input('con180');
        $sessies->con181 = $request->input('con181');
        $sessies->con182 = $request->input('con182');
        $sessies->con183 = $request->input('con183');
        $sessies->con184 = $request->input('con184');
        $sessies->con185 = $request->input('con185');
        $sessies->con186 = $request->input('con186');
        $sessies->con187 = $request->input('con187');
        $sessies->con188 = $request->input('con188');
        $sessies->con189 = $request->input('con189');

        $sessies->con190 = $request->input('con190');
        $sessies->con191 = $request->input('con191');
        $sessies->con192 = $request->input('con192');
        $sessies->con193 = $request->input('con193');


        $sessies->image = $fileNameToStore;
        $sessies->image2 = $fileNameToStore2;
        $sessies->image3 = $fileNameToStore3;
        $sessies->image4 = $fileNameToStore4;
        $sessies->image5 = $fileNameToStore5;
        $sessies->image6 = $fileNameToStore6;
        $sessies->image7 = $fileNameToStore7;
        $sessies->image8 = $fileNameToStore8;

        $sessies->image9 = $fileNameToStore9;
        $sessies->image10 = $fileNameToStore10;
        $sessies->image11 = $fileNameToStore11;
        $sessies->image12 = $fileNameToStore12;
        $sessies->image13 = $fileNameToStore13;
        $sessies->image14 = $fileNameToStore14;
        $sessies->image15 = $fileNameToStore15;
        $sessies->image16 = $fileNameToStore16;

            $sessies->save();

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

        $result->image = $request->image;
        $result->image2 = $request->image2;
        $result->image3 = $request->image3;
        $result->image4 = $request->image4;
        $result->image5 = $request->image5;
        $result->image6 = $request->image6;
        $result->image7 = $request->image7;
        $result->image8 = $request->image8;

        $result->image9 = $request->image9;
        $result->image10 = $request->image10;
        $result->image11 = $request->image11;
        $result->image12 = $request->image12;
        $result->image13 = $request->image13;
        $result->image14 = $request->image14;
        $result->image15 = $request->image15;
        $result->image16 = $request->image16;


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
        $result->con174 = $request->con174;
        $result->con175 = $request->con175;
        $result->con176 = $request->con176;
        $result->con177 = $request->con177;
        $result->con178 = $request->con178;
        $result->con179 = $request->con179;
        $result->con180 = $request->con180;
        $result->con181 = $request->con181;
        $result->con182 = $request->con182;
        $result->con183 = $request->con183;
        $result->con184 = $request->con184;
        $result->con185 = $request->con185;
        $result->con186 = $request->con186;
        $result->con187 = $request->con187;
        $result->con188 = $request->con188;
        $result->con189 = $request->con189;
        $result->con190 = $request->con190;
        $result->con191 = $request->con191;
        $result->con192 = $request->con192;
        $result->con193 = $request->con193;


        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
            }
            if($request->hasFile('image2')){
                $filenameWithExt = $request->file('image2')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image2')->getClientOriginalExtension();
                $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image2')->storeAs('public/images', $fileNameToStore2);
                }
                if($request->hasFile('image3')){
                    $filenameWithExt = $request->file('image3')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file('image3')->getClientOriginalExtension();
                    $fileNameToStore3 = $filename.'_'.time().'.'.$extension;
                    $path = $request->file('image3')->storeAs('public/images', $fileNameToStore3);
                    }
                    if($request->hasFile('image4')){
                        $filenameWithExt = $request->file('image4')->getClientOriginalName();
                        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                        $extension = $request->file('image4')->getClientOriginalExtension();
                        $fileNameToStore4 = $filename.'_'.time().'.'.$extension;
                        $path = $request->file('image4')->storeAs('public/images', $fileNameToStore4);
                        }
                        if($request->hasFile('image5')){
                            $filenameWithExt = $request->file('image5')->getClientOriginalName();
                            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                            $extension = $request->file('image5')->getClientOriginalExtension();
                            $fileNameToStore5 = $filename.'_'.time().'.'.$extension;
                            $path = $request->file('image5')->storeAs('public/images', $fileNameToStore5);
                            }
                            if($request->hasFile('image6')){
                                $filenameWithExt = $request->file('image6')->getClientOriginalName();
                                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                $extension = $request->file('image6')->getClientOriginalExtension();
                                $fileNameToStore6 = $filename.'_'.time().'.'.$extension;
                                $path = $request->file('image6')->storeAs('public/images', $fileNameToStore6);
                                }
                                if($request->hasFile('image7')){
                                    $filenameWithExt = $request->file('image7')->getClientOriginalName();
                                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                    $extension = $request->file('image7')->getClientOriginalExtension();
                                    $fileNameToStore7 = $filename.'_'.time().'.'.$extension;
                                    $path = $request->file('image7')->storeAs('public/images', $fileNameToStore7);
                                    }
                                    if($request->hasFile('image8')){
                                        $filenameWithExt = $request->file('image8')->getClientOriginalName();
                                        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                        $extension = $request->file('image8')->getClientOriginalExtension();
                                        $fileNameToStore8 = $filename.'_'.time().'.'.$extension;
                                        $path = $request->file('image8')->storeAs('public/images', $fileNameToStore8);
                                        }

                                        if($request->hasFile('image9')){
                                            $filenameWithExt = $request->file('image9')->getClientOriginalName();
                                            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                            $extension = $request->file('image9')->getClientOriginalExtension();
                                            $fileNameToStore9 = $filename.'_'.time().'.'.$extension;
                                            $path = $request->file('image9')->storeAs('public/images', $fileNameToStore9);
                                            }

                                            if($request->hasFile('image10')){
                                                $filenameWithExt = $request->file('image10')->getClientOriginalName();
                                                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                                $extension = $request->file('image10')->getClientOriginalExtension();
                                                $fileNameToStore10 = $filename.'_'.time().'.'.$extension;
                                                $path = $request->file('image10')->storeAs('public/images', $fileNameToStore10);
                                                }

                                                if($request->hasFile('image11')){
                                                    $filenameWithExt = $request->file('image11')->getClientOriginalName();
                                                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                                    $extension = $request->file('image11')->getClientOriginalExtension();
                                                    $fileNameToStore11 = $filename.'_'.time().'.'.$extension;
                                                    $path = $request->file('image11')->storeAs('public/images', $fileNameToStore11);
                                                    }

                                                    if($request->hasFile('image12')){
                                                        $filenameWithExt = $request->file('image12')->getClientOriginalName();
                                                        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                                        $extension = $request->file('image12')->getClientOriginalExtension();
                                                        $fileNameToStore12 = $filename.'_'.time().'.'.$extension;
                                                        $path = $request->file('image12')->storeAs('public/images', $fileNameToStore12);
                                                        }

                                                        if($request->hasFile('image13')){
                                                            $filenameWithExt = $request->file('image13')->getClientOriginalName();
                                                            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                                            $extension = $request->file('image13')->getClientOriginalExtension();
                                                            $fileNameToStore13 = $filename.'_'.time().'.'.$extension;
                                                            $path = $request->file('image13')->storeAs('public/images', $fileNameToStore13);
                                                            }

                                                            if($request->hasFile('image14')){
                                                                $filenameWithExt = $request->file('image14')->getClientOriginalName();
                                                                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                                                $extension = $request->file('image14')->getClientOriginalExtension();
                                                                $fileNameToStore14 = $filename.'_'.time().'.'.$extension;
                                                                $path = $request->file('image14')->storeAs('public/images', $fileNameToStore14);
                                                                }

                                                                if($request->hasFile('image15')){
                                                                    $filenameWithExt = $request->file('image15')->getClientOriginalName();
                                                                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                                                    $extension = $request->file('image15')->getClientOriginalExtension();
                                                                    $fileNameToStore15 = $filename.'_'.time().'.'.$extension;
                                                                    $path = $request->file('image15')->storeAs('public/images', $fileNameToStore15);
                                                                    }

                                                                    if($request->hasFile('image16')){
                                                                        $filenameWithExt = $request->file('image16')->getClientOriginalName();
                                                                        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                                                        $extension = $request->file('image16')->getClientOriginalExtension();
                                                                        $fileNameToStore16 = $filename.'_'.time().'.'.$extension;
                                                                        $path = $request->file('image16')->storeAs('public/images', $fileNameToStore16);
                                                                        }

                $sessies = Sessie::find($id);


                $sessies->con1 = $request->input('con1');
                $sessies->con2 = $request->input('con2');
                $sessies->con3 = $request->input('con3');
                $sessies->con4 = $request->input('con4');
                $sessies->con5 = $request->input('con5');
                $sessies->con6 = $request->input('con6');
                $sessies->con7 = $request->input('con7');
                $sessies->con8 = $request->input('con8');
                $sessies->con9 = $request->input('con9');

                $sessies->con10 = $request->input('con10');
                $sessies->con11 = $request->input('con11');
                $sessies->con12 = $request->input('con12');
                $sessies->con13 = $request->input('con13');
                $sessies->con14 = $request->input('con14');
                $sessies->con15 = $request->input('con15');
                $sessies->con16 = $request->input('con16');
                $sessies->con17 = $request->input('con17');
                $sessies->con18 = $request->input('con18');
                $sessies->con19 = $request->input('con19');

                $sessies->con20 = $request->input('con20');
                $sessies->con21 = $request->input('con21');
                $sessies->con22 = $request->input('con22');
                $sessies->con23 = $request->input('con23');
                $sessies->con24 = $request->input('con24');
                $sessies->con25 = $request->input('con25');
                $sessies->con26 = $request->input('con26');
                $sessies->con27 = $request->input('con27');
                $sessies->con28 = $request->input('con28');
                $sessies->con29 = $request->input('con29');

                $sessies->con30 = $request->input('con30');
                $sessies->con31 = $request->input('con31');
                $sessies->con32 = $request->input('con32');
                $sessies->con33 = $request->input('con33');
                $sessies->con34 = $request->input('con34');
                $sessies->con35 = $request->input('con35');
                $sessies->con36 = $request->input('con36');
                $sessies->con37 = $request->input('con37');
                $sessies->con38 = $request->input('con38');
                $sessies->con39 = $request->input('con39');

                $sessies->con40 = $request->input('con40');
                $sessies->con41 = $request->input('con41');
                $sessies->con42 = $request->input('con42');
                $sessies->con43 = $request->input('con43');
                $sessies->con44 = $request->input('con44');
                $sessies->con45 = $request->input('con45');
                $sessies->con46 = $request->input('con46');
                $sessies->con47 = $request->input('con47');
                $sessies->con48 = $request->input('con48');
                $sessies->con49 = $request->input('con49');

                $sessies->con50 = $request->input('con50');
                $sessies->con51 = $request->input('con51');
                $sessies->con52 = $request->input('con52');
                $sessies->con53 = $request->input('con53');
                $sessies->con54 = $request->input('con54');
                $sessies->con55 = $request->input('con55');
                $sessies->con56 = $request->input('con56');
                $sessies->con57 = $request->input('con57');
                $sessies->con58 = $request->input('con58');
                $sessies->con59 = $request->input('con59');

                $sessies->con60 = $request->input('con60');
                $sessies->con61 = $request->input('con61');
                $sessies->con62 = $request->input('con62');
                $sessies->con63 = $request->input('con63');
                $sessies->con64 = $request->input('con64');
                $sessies->con65 = $request->input('con65');
                $sessies->con66 = $request->input('con66');
                $sessies->con67 = $request->input('con67');
                $sessies->con68 = $request->input('con68');
                $sessies->con69 = $request->input('con69');

                $sessies->con70 = $request->input('con70');
                $sessies->con71 = $request->input('con71');
                $sessies->con72 = $request->input('con72');
                $sessies->con73 = $request->input('con73');
                $sessies->con74 = $request->input('con74');
                $sessies->con75 = $request->input('con75');
                $sessies->con76 = $request->input('con76');
                $sessies->con77 = $request->input('con77');
                $sessies->con78 = $request->input('con78');
                $sessies->con79 = $request->input('con79');

                $sessies->con80 = $request->input('con80');
                $sessies->con81 = $request->input('con81');
                $sessies->con82 = $request->input('con82');
                $sessies->con83 = $request->input('con83');
                $sessies->con84 = $request->input('con84');
                $sessies->con85 = $request->input('con85');
                $sessies->con86 = $request->input('con86');
                $sessies->con87 = $request->input('con87');
                $sessies->con88 = $request->input('con88');
                $sessies->con89 = $request->input('con89');

                $sessies->con90 = $request->input('con90');
                $sessies->con91 = $request->input('con91');
                $sessies->con92 = $request->input('con92');
                $sessies->con93 = $request->input('con93');
                $sessies->con94 = $request->input('con94');
                $sessies->con95 = $request->input('con95');
                $sessies->con96 = $request->input('con96');
                $sessies->con97 = $request->input('con97');
                $sessies->con98 = $request->input('con98');
                $sessies->con99 = $request->input('con99');

                $sessies->con100 = $request->input('con100');
                $sessies->con101 = $request->input('con101');
                $sessies->con102 = $request->input('con102');
                $sessies->con103 = $request->input('con103');
                $sessies->con104 = $request->input('con104');
                $sessies->con105 = $request->input('con105');
                $sessies->con106 = $request->input('con106');
                $sessies->con107 = $request->input('con107');
                $sessies->con108 = $request->input('con108');
                $sessies->con109 = $request->input('con109');

                $sessies->con110 = $request->input('con110');
                $sessies->con111 = $request->input('con111');
                $sessies->con112 = $request->input('con112');
                $sessies->con113 = $request->input('con113');
                $sessies->con114 = $request->input('con114');
                $sessies->con115 = $request->input('con115');
                $sessies->con116 = $request->input('con116');
                $sessies->con117 = $request->input('con117');
                $sessies->con118 = $request->input('con118');
                $sessies->con119 = $request->input('con119');

                $sessies->con120 = $request->input('con120');
                $sessies->con121 = $request->input('con121');
                $sessies->con122 = $request->input('con122');
                $sessies->con123 = $request->input('con123');
                $sessies->con124 = $request->input('con124');
                $sessies->con125 = $request->input('con125');
                $sessies->con126 = $request->input('con126');
                $sessies->con127 = $request->input('con127');
                $sessies->con128 = $request->input('con128');
                $sessies->con129 = $request->input('con129');

                $sessies->con130 = $request->input('con130');
                $sessies->con131 = $request->input('con131');
                $sessies->con132 = $request->input('con132');
                $sessies->con133 = $request->input('con133');
                $sessies->con134 = $request->input('con134');
                $sessies->con135 = $request->input('con135');
                $sessies->con136 = $request->input('con136');
                $sessies->con137 = $request->input('con137');
                $sessies->con138 = $request->input('con138');
                $sessies->con139 = $request->input('con139');

                $sessies->con140 = $request->input('con140');
                $sessies->con141 = $request->input('con141');
                $sessies->con142 = $request->input('con142');
                $sessies->con143 = $request->input('con143');
                $sessies->con144 = $request->input('con144');
                $sessies->con145 = $request->input('con145');
                $sessies->con146 = $request->input('con146');
                $sessies->con147 = $request->input('con147');
                $sessies->con148 = $request->input('con148');
                $sessies->con149 = $request->input('con149');

                $sessies->con150 = $request->input('con150');
                $sessies->con151 = $request->input('con151');
                $sessies->con152 = $request->input('con152');
                $sessies->con153 = $request->input('con153');
                $sessies->con154 = $request->input('con154');
                $sessies->con155 = $request->input('con155');
                $sessies->con156 = $request->input('con156');
                $sessies->con157 = $request->input('con157');
                $sessies->con158 = $request->input('con158');
                $sessies->con159 = $request->input('con159');

                $sessies->con160 = $request->input('con160');
                $sessies->con161 = $request->input('con161');
                $sessies->con162 = $request->input('con162');
                $sessies->con163 = $request->input('con163');
                $sessies->con164 = $request->input('con164');
                $sessies->con165 = $request->input('con165');
                $sessies->con166 = $request->input('con166');
                $sessies->con167 = $request->input('con167');
                $sessies->con168 = $request->input('con168');
                $sessies->con169 = $request->input('con169');

                $sessies->con170 = $request->input('con170');
                $sessies->con171 = $request->input('con171');
                $sessies->con172 = $request->input('con172');
                $sessies->con173 = $request->input('con173');
                $sessies->con174 = $request->input('con174');
                $sessies->con175 = $request->input('con175');
                $sessies->con176 = $request->input('con176');
                $sessies->con177 = $request->input('con177');
                $sessies->con178 = $request->input('con178');
                $sessies->con179 = $request->input('con179');

                $sessies->con180 = $request->input('con180');
                $sessies->con181 = $request->input('con181');
                $sessies->con182 = $request->input('con182');
                $sessies->con183 = $request->input('con183');
                $sessies->con184 = $request->input('con184');
                $sessies->con185 = $request->input('con185');
                $sessies->con186 = $request->input('con186');
                $sessies->con187 = $request->input('con187');
                $sessies->con188 = $request->input('con188');
                $sessies->con189 = $request->input('con189');

                $sessies->con190 = $request->input('con190');
                $sessies->con191 = $request->input('con191');
                $sessies->con192 = $request->input('con192');
                $sessies->con193 = $request->input('con193');


                if($request->hasFile('image')){
                $sessies->image = $fileNameToStore;
                }
                if($request->hasFile('image2')){
                $sessies->image2 = $fileNameToStore2;
                }
                if($request->hasFile('image3')){
                    $sessies->image3 = $fileNameToStore3;
                    }
                    if($request->hasFile('image4')){
                        $sessies->image4 = $fileNameToStore4;
                        }
                        if($request->hasFile('image5')){
                            $sessies->image5 = $fileNameToStore5;
                            }
                            if($request->hasFile('image6')){
                                $sessies->image6 = $fileNameToStore6;
                                }
                                if($request->hasFile('image7')){
                                    $sessies->image7 = $fileNameToStore7;
                                    }
                                    if($request->hasFile('image8')){
                                        $sessies->image8 = $fileNameToStore8;
                                        }
                                        if($request->hasFile('image9')){
                                            $sessies->image9 = $fileNameToStore9;
                                            }
                                            if($request->hasFile('image10')){
                                                $sessies->image10 = $fileNameToStore10;
                                                }
                                                if($request->hasFile('image11')){
                                                    $sessies->image11 = $fileNameToStore11;
                                                    }
                                                    if($request->hasFile('image12')){
                                                        $sessies->image12 = $fileNameToStore12;
                                                        }
                                                        if($request->hasFile('image13')){
                                                            $sessies->image13 = $fileNameToStore13;
                                                            }
                                                            if($request->hasFile('image14')){
                                                                $sessies->image14 = $fileNameToStore14;
                                                                }
                                                                if($request->hasFile('image15')){
                                                                    $sessies->image15 = $fileNameToStore15;
                                                                    }
                                                                    if($request->hasFile('image16')){
                                                                        $sessies->image16 = $fileNameToStore16;
                                                                        }


        $sessies->save();
        session()->flash('success', 'Consult succesvol bijgewerkt.');

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
