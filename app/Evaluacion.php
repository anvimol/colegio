<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    
    protected $table = 'evaluacions';
    protected $primaryKey = 'id';

    protected $fillable = [
    	'persona_id',
    	'curso_id',
    	'nota_parcial_1',
    	'nota_parcial_2',
    	'nota_parcial_3',
    	'nota_parcial_4',
    	'nota_final',
    	'observaciones'
    ];

    protected $guarded = [

    ];

    public function persona()
    {
        return $this->belongsTo('App\Persona');
    }
}
