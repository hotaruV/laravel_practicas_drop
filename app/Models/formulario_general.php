<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Universidades;
use App\Models\cursos;

class formulario_general extends Model
{
    use HasFactory;


    protected $fillable = [
        'dp_nombre',
        'dp_edad',
        'dp_whatsApp',
        'dp_email',
        'dp_facebook',
        'dp_domicilio',
        'data_carrera',
        'data_escuela',
        'data_horario',
        'data_razonIngreso',
        'ref_saberNosotros',
        'ref_nombreTutor',
        'ref_telefonoTutor',
        'curso_id',
        'universidad_id'

    ];

    public function universidad(){
        return $this->belongsTo(universidades::class, 'id');
    }
    public function curso(){
        return $this->belongsTo(cursos::class, 'id');
    }
}
