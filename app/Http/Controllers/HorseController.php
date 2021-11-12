<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHorseRequest;
use Illuminate\Http\Request;
use App\Models\Horse;
use App\Models\Sessie;
use App\Session;

class HorseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('horses.index')->with('horses', Horse::all())->with('sessies', Sessie::all());
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
    public function store(CreateHorseRequest $request)
    {

        $this->validate($request, [
            'content1' => 'nullable',
            'content2' => 'nullable',
            'content3' => 'nullable',
            'content4' => 'nullable',
            'content5' => 'nullable',
            'content6' => 'nullable',
            'content7' => 'nullable',
            'content8' => 'nullable',
            'content9' => 'nullable',
            'content10' => 'nullable',
            'content11' => 'nullable',
            'content12' => 'nullable',
            'content13' => 'nullable',
            'content14' => 'nullable',
            'content15' => 'nullable',

            'image' => 'image|nullable|max:1999',
            'image2' => 'image|nullable|max:1999',
            'image3' => 'image|nullable|max:1999',
            'image4' => 'image|nullable|max:1999',
            'image5' => 'image|nullable|max:1999',
            'image6' => 'image|nullable|max:1999',
            'image7' => 'image|nullable|max:1999',
            'image8' => 'image|nullable|max:1999',

            'image9' => 'image|nullable|max:1999',
            'image10' => 'image|nullable|max:1999',
            'image11' => 'image|nullable|max:1999',
            'image12' => 'image|nullable|max:1999',
            'image13' => 'image|nullable|max:1999',
            'image14' => 'image|nullable|max:1999',
            'image15' => 'image|nullable|max:1999',
            'image16' => 'image|nullable|max:1999',

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

        $horse = new Horse;
        $horse->content1 = $request->input('content1');
        $horse->content2 = $request->input('content2');
        $horse->content3 = $request->input('content3');
        $horse->content4 = $request->input('content4');
        $horse->content5 = $request->input('content5');
        $horse->content6 = $request->input('content6');
        $horse->content7 = $request->input('content7');
        $horse->content8 = $request->input('content8');
        $horse->content9 = $request->input('content9');
        $horse->content10 = $request->input('content10');
        $horse->content11 = $request->input('content11');
        $horse->content12 = $request->input('content12');
        $horse->content13 = $request->input('content13');
        $horse->content14 = $request->input('content14');
        $horse->content15 = $request->input('content15');

        $horse->image = $fileNameToStore;
        $horse->image2 = $fileNameToStore2;
        $horse->image3 = $fileNameToStore3;
        $horse->image4 = $fileNameToStore4;
        $horse->image5 = $fileNameToStore5;
        $horse->image6 = $fileNameToStore6;
        $horse->image7 = $fileNameToStore7;
        $horse->image8 = $fileNameToStore8;

        $horse->image9 = $fileNameToStore9;
        $horse->image10 = $fileNameToStore10;
        $horse->image11 = $fileNameToStore11;
        $horse->image12 = $fileNameToStore12;
        $horse->image13 = $fileNameToStore13;
        $horse->image14 = $fileNameToStore14;
        $horse->image15 = $fileNameToStore15;
        $horse->image16 = $fileNameToStore16;

        $horse->save();

        session()->flash('success', 'Nieuwe invoer succesvol opgeslagen.');
        return redirect()->route('horse.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $horse = Horse::find($id);
        return view('horses.show')->with('horses', $horse)->with('sessies', Sessie::orderBy('id', 'asc')->get());
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
        return view('horses.edit')->with('horses', $horse);

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

        $result = Horse::find($id);
        $result->content1 = $request->content1;

        $result->content2 = $request->content2;
        $result->content3 = $request->content3;

        $result->content4 = $request->content4;
        $result->content5 = $request->content5;
        $result->content6 = $request->content6;
        $result->content7 = $request->content7;
        $result->content8 = $request->content8;
        $result->content9 = $request->content9;
        $result->content10 = $request->content10;
        $result->content11 = $request->content11;
        $result->content12 = $request->content12;
        $result->content13 = $request->content13;
        $result->content14 = $request->content14;
        $result->content15 = $request->content15;

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
                    $horse = Horse::find($id);
                    $horse->content1 = $request->input('content1');
                    $horse->content2 = $request->input('content2');
                    $horse->content3 = $request->input('content3');
                    $horse->content4 = $request->input('content4');
                    $horse->content5 = $request->input('content5');
                    $horse->content6 = $request->input('content6');
                    $horse->content7 = $request->input('content7');
                    $horse->content8 = $request->input('content8');
                    $horse->content9 = $request->input('content9');
                    $horse->content10 = $request->input('content10');
                    $horse->content11 = $request->input('content11');
                    $horse->content12 = $request->input('content12');
                    $horse->content13 = $request->input('content13');
                    $horse->content14 = $request->input('content14');
                    $horse->content15 = $request->input('content15');


                    if($request->hasFile('image')){
                    $horse->image = $fileNameToStore;
                    }
                    if($request->hasFile('image2')){
                    $horse->image2 = $fileNameToStore2;
                    }
                    if($request->hasFile('image3')){
                        $horse->image3 = $fileNameToStore3;
                        }
                        if($request->hasFile('image4')){
                            $horse->image4 = $fileNameToStore4;
                            }
                            if($request->hasFile('image5')){
                                $horse->image5 = $fileNameToStore5;
                                }
                                if($request->hasFile('image6')){
                                    $horse->image6 = $fileNameToStore6;
                                    }
                                    if($request->hasFile('image7')){
                                        $horse->image7 = $fileNameToStore7;
                                        }
                                        if($request->hasFile('image8')){
                                            $horse->image8 = $fileNameToStore8;
                                            }
                    $horse->save();

                    session()->flash('success', 'Invoer succesvol bijgewerkt.');

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
        $horse = Horse::find($id);
        $horse->delete();
        session()->flash('success', 'Invoer succesvol verwijderd.');
        return redirect()->back();
    }

}
