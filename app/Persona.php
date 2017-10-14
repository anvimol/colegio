<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $primaryKey = 'id';

    protected $fillable = [
    	'tipo_persona',
    	'nombre',
    	'apellidos',
    	'direccion',
    	'poblacion',
    	'codigo_postal',
    	'provincia',
    	'telefono',
    	'fecha_nacimiento',
    	'dni',
    	'user_id'
    ];

    protected $guarded = [

    ];

    public function evaluacions()
    {
        return $this->hasMany('App\Evaluacion');
        //return $this->hasMany(Task::Class);
    }
}
