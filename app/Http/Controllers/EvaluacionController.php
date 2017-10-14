<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Evaluacion;
use App\Persona;
use App\Curso;
use Illuminate\Support\Facades\Redirect;
//use App\Http\Requests\CursoFormRequest;
use DB;

class EvaluacionController extends Controller
{
    protected $rules = [
        'nombre' => ['required','min:2'],
        'apellidos' => ['required'],
        'curso' => ['required'],
        'observaciones' => ['required'],
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = trim($request->get('searchText'));
        $evaluaciones = DB::table('evaluacions as e')
        ->join('personas as p','e.persona_id','=','p.id')
        ->join('cursos as c','e.curso_id','=','c.id')
        ->select('p.nombre','p.apellidos','c.curso','e.id','e.nota_parcial_1','e.nota_parcial_2','e.nota_parcial_3','e.nota_parcial_4','e.nota_final','e.observaciones')
        ->where('p.nombre','LIKE','%' . $query . '%')
        ->orwhere('c.curso','LIKE','%' . $query . '%')
        ->orderBy('e.id','desc')
        ->groupBy('p.nombre','p.apellidos','c.curso','e.id','e.nota_parcial_1','e.nota_parcial_2','e.nota_parcial_3','e.nota_parcial_4','e.nota_final','e.observaciones')
        ->paginate(7);

        return view('admin.evaluacion.index', ['evaluaciones' => $evaluaciones, "searchText" => $query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = Persona::all()->where('tipo_persona','=','Alumno');
        $cursos = DB::table('cursos')->pluck('curso','id');
        return view("admin.evaluacion.create",['personas'=>$personas,'cursos'=>$cursos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evaluacion = new Evaluacion;
        $evaluacion->persona_id = $request->nombre;
        $evaluacion->curso_id = $request->curso;
        $evaluacion->nota_parcial_1 = $request->parcial_1;
        $evaluacion->nota_parcial_2 = $request->parcial_2;
        $evaluacion->nota_parcial_3 = $request->parcial_3;
        $evaluacion->nota_parcial_4 = $request->parcial_4;
        $evaluacion->nota_final = ($evaluacion->nota_parcial_1 + $evaluacion->nota_parcial_2 + $evaluacion->nota_parcial_3 + $evaluacion->nota_parcial_4) / 4;
        $evaluacion->observaciones = $request->observaciones;

        $evaluacion->save();

        return Redirect::to('admin/evaluaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evaluacion = Evaluacion::findOrFail($id);
        $personas = Persona::all()->where('tipo_persona','=','Alumno');
        $cursos = DB::table('cursos')->pluck('curso','id');

        return view("admin.evaluacion.edit",['evaluacion' => $evaluacion,'personas'=>$personas,'cursos'=>$cursos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $evaluacion = Evaluacion::findOrFail($id);
        $evaluacion->persona_id = $request->nombre;
        $evaluacion->curso_id = $request->curso;
        $evaluacion->nota_parcial_1 = $request->parcial_1;
        $evaluacion->nota_parcial_2 = $request->parcial_2;
        $evaluacion->nota_parcial_3 = $request->parcial_3;
        $evaluacion->nota_parcial_4 = $request->parcial_4;
        $evaluacion->nota_final = ($evaluacion->nota_parcial_1 + $evaluacion->nota_parcial_2 + $evaluacion->nota_parcial_3 + $evaluacion->nota_parcial_4) / 4;
        $evaluacion->observaciones = $request->observaciones;

        $evaluacion->update();

        return Redirect::to('admin/evaluaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evaluacion = Evaluacion::find($id);
        $evaluacion->delete();
        return Redirect::to('admin/evaluaciones');
    }
}
