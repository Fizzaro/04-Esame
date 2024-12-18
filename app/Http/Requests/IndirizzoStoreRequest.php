<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndirizzoStoreRequest extends FormRequest
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
            'idUtente' => 'required|integer',
            'idTipologiaIndirizzo' => 'required|integer',
            'idComune' => 'required|integer',
            'indirizzo' => 'required|string|max:255',
            'lat' => 'required|string|max:255',
            'long' => 'required|string|max:255'
        ];
    }
}
