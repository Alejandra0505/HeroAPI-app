<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoremisiongrupoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'misiones_id'=>'required|misiones',
            'grupo_id'=> 'required|grupos'
        ];
    }
}
