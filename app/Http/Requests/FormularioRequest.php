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
            "form_name.required" => "El campo Nombre es requerido",
            "form_edad.required" => "El campo Edad es requerido",
            "form_num.required" => "El campo WhatsApp es requerido",
            "form_email.email" => "El campo Email es requerido",
            "form_face.required" => "El campo Facebook es requerido",
            "form_dom.required" => "El campo Domicilio es requerido",
            "form_uni.required" => "El campo Universidad es requerido",
            "form_carrera.required" => "El campo A que carrera desea ingresar es requerido",
            "form_escuela.required" => "El campo Escuela de procedencia es requerido",
            "form_horario.required" => "El campo Horario es requerido",
            "form_cuentanos.required" => "El campo Como supiste... es requerido",
            "form_csdt.required" => "El campo Cuentanos... es requerido",
            "form_name_padre.required" => "El campo Nombre del padre/tutor es requerido",
            "form_tel_padre.required" => "El campo Telefono del padre/tutor es requerido"
        ];
    }
}
