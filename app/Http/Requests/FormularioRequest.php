<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormularioRequest extends FormRequest
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
            "form_name" => 'required',
            "form_edad" => 'required',
            "form_num" => 'required',
            "form_email" => 'required',
            "form_face" => 'required',
            "form_dom" => 'required',
            "form_uni" => 'required',
            "form_carrera" => 'required',
            "form_escuela" => 'required',
            "form_horario" => 'required',
            "form_cuentanos" => 'required',
            "form_csdt" => 'required',
            "form_name_padre" => 'required',
            "form_tel_padre" => 'required'
        ];
    }
}
