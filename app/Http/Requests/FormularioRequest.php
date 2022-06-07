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
            "form_edad" => 'required|integer',
            "form_num" => 'required|integer',
            "form_email" => 'required|email',
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

    public function messages(){
        return [
            'form_name.required' => "El campo Nombre es Obligagorio",
            "form_edad.required" => 'El campo Edad es Obligagorio',
            "form_num.required" => 'El campo Whatsap es Obligagorio',
            "form_email.required" => 'El campo email es Obligagorio',
            "form_email.email" => 'El campo email no es valido',
            "form_face.required" => 'El campo Facebook es Obligagorio',
            "form_dom.required" => 'El campo Domicilio es Obligagorio',
            "form_uni.required" => 'El campo Universidad es Obligagorio',
            "form_carrera.required" => 'El campo Carrera es Obligagorio',
            "form_escuela.required" => 'El campo Escuela es Obligagorio',
            "form_horario.required" => 'El campo Horario es Obligagorio',
            "form_cuentanos.required" => 'El campo Cuentanos es Obligagorio',
            "form_csdt.required" => 'El campo nombre es Obligagorio',
            "form_name_padre.required" => 'El campo Nombre de Padre o Tutor es Obligagorio',
            "form_tel_padre.required" => 'El campo Telefono de Padre o Tutor es Obligagorio'
        ];
    }

}
