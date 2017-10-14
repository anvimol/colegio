<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $primaryKey = 'id';

    protected $fillable = [
    	'curso',
    	'fecha_inicio',
    	'fecha_fin',
    	'hora_inicio',
    	'hora_fin',
    	'incidencias'
    ];

    protected $guarded = [

    ];
}
