<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepoderhRequest extends FormRequest
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
            'nivel'=>'required|poderhs',
            'hero_id'=> 'required|heroes',
            'poder_id'=> 'required|poders',
        ];
    }
}
