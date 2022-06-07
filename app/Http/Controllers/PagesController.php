<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormularioRequest;
use App\Models\formulario_general;
use App\Models\Universidades;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return redirect('curso-semestral');
    }

    public function semestral()
    {
       $universidades = Universidades::all();
        return view('pages.semestral', compact('universidades'));
    }

    public function anual()
    {
        $universidades = Universidades::all();
        return view('pages.anual', compact('universidades'));
    }

    public function semi()
    {
        $universidades = Universidades::all();
        return view('pages.semi', compact('universidades'));
    }


    public function semestral_data(FormularioRequest $request)
    {
        $cursoS = 1;
        return $this -> enviar_formulario($request, $cursoS);
    }

    public function anual_data(FormularioRequest $request)
    {
        $this -> formulario(2);
    }

    public function semi_data(FormularioRequest $request)
    {
        $this -> formulario(3);
    }

    private function enviar_formulario($request, $curso){
        $nombre = $request->input('form_name');
        $edad = $request->input('form_edad');
        $whats = $request->input('form_num');
        $email = $request->input('form_email');
        $face = $request->input('form_face');
        $domicilio = $request->input('form_dom');
        $universidad = $request->input('form_uni');
        $carrera = $request->input('form_carrera');
        $procedencia = $request->input('form_escuela');
        $horario = $request->input('form_horario');
        $pregunta = $request->input('form_cuentanos');
        $csdt = $request->input('form_csdt');
        $nombre_padre = $request->input('form_name_padre');
        $cel_p = $request->input('form_tel_padre');
        $registro = $request->input('form_check');
        $curso_id = $curso;

        formulario_general::create([
            'dp_nombre' => $nombre,
            'dp_edad' => $edad,
            'dp_whatsApp' => $whats,
            'dp_email' => $email ,
            'dp_facebook' => $face,
            'dp_domicilio' => $domicilio,
            'data_carrera' => $carrera,
            'data_escuela' => $procedencia,
            'data_horario' => $horario,
            'data_razonIngreso' => $pregunta,
            'ref_saberNosotros' => $csdt,
            'ref_nombreTutor' => $nombre_padre,
            'ref_telefonoTutor' => $cel_p,
            'curso_id' => $curso_id,
            'universidad_id' => $universidad
        ]);

        return $request;
    }
}
