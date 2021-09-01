<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSessieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            // 'datum' => 'required',

            // 'horse_id' => 'required',
            // 'content' => 'required',
            // 'inspectie_stand' => 'required',


            // 'op1' => 'required',
            // 'op2' => 'required',

            // 'iis1' => 'required',
            // 'iis2' => 'required',
            // 'iis3' => 'required',
            // 'iis4' => 'required',


            // 'op1' => 'required',
            // 'op2' => 'required',
            // 'op3' => 'required',
            // 'op4' => 'required',
            // 'op5' => 'required',
            // 'op6' => 'required',
            // 'op7' => 'required',
            // 'op8' => 'required',
            // 'op9' => 'required',
            // 'op10' => 'required',
            // 'op11' => 'required',
            // 'op12' => 'required',
            // 'op13' => 'required',
            // 'op14' => 'required',
            // 'op15' => 'required',
            // 'op16' => 'required',

            // 'op17' => 'required',
            // 'op18' => 'required',

            // 'lp1' => 'required',
            // 'lp2' => 'required',
            // 'lp3' => 'required',
            // 'lp4' => 'required',
            // 'lp5' => 'required',
            // 'lp6' => 'required',
            // 'lp7' => 'required',
            // 'lp8' => 'required',
            // 'lp9' => 'required',
            // 'lp10' => 'required',
            // 'lp11' => 'required',
            // 'lp12' => 'required',
            // 'lp13' => 'required',
            // 'lp14' => 'required',
            // 'lp15' => 'required',

            // 'lp_opmerkingen' => 'required',

        ];
    }
}
