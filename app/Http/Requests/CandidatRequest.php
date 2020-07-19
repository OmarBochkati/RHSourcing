<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidatRequest extends FormRequest
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
            'photo_profil'=>['bail|required'],
            'date_nais'=>['bail|required|date'],
            'num_portable'=>['bail|required|max:12'],
            'genre'=>['bail|required'],
            'profession'=>['baiil|required|alpha'],
            'salaire'=>['bail|required'],
            'description'=>['bail|required|alpha|maw:255'],
        ];
    }
}
