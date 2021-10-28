<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDogRequest extends FormRequest
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
                'image' => 'nullable',
                'image2' => 'nullable',
                'image3' => 'nullable',
                'image4' => 'nullable',
                'image5' => 'nullable',
                'image6' => 'nullable',
                'image7' => 'nullable',
                'image8' => 'nullable',

            ];

    }
}
