<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHeroRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required|unique:heroes',
            'nombrereal'=> 'required|unique:heroes',
            'studioanimacion'=> 'required|heroes',
            'descripcion'=> 'required|heroes',
            'origen'=> 'required|heroes',
            'añodebut'=> 'required|heroes',
        ];
    }
}
