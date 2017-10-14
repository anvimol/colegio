<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CursoFormRequest;
use DB;

class CursoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
    	$query = trim($request->get('searchText'));
        $cursos = DB::table('cursos')->where('curso','LIKE','%' . $query . '%')
        ->orderBy('curso','desc')
        ->paginate(7);

    	return view('admin.cursos.index', ['cursos' => $cursos, "searchText" => $query]);
    }

    public function create()
    {
        return view("admin.cursos.create");
    }

    public function store(CursoFormRequest $request)
    {
        $curso = new Curso;
        $curso->curso = $request->curso;
        $curso->fecha_inicio = $request->fecha_inicio;
        $curso->fecha_fin = $request->fecha_fin;
        $curso->hora_inicio = $request->hora_inicio;
        $curso->hora_fin = $request->hora_fin;
        $curso->incidencias = $request->incidencias;
        $curso->save();
        return Redirect::to('admin/cursos');
    }

    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Curso::find($id);
        if(is_null($curso)) return redirect(route('cursos.index'));

        return view("admin.cursos.edit", ['curso' => $curso]);
    }

    public function update(CursoFormRequest $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->curso = $request->curso;
        $curso->fecha_inicio = $request->fecha_inicio;
        $curso->fecha_fin = $request->fecha_fin;
        $curso->hora_inicio = $request->hora_inicio;
        $curso->hora_fin = $request->hora_fin;
        $curso->incidencias = $request->incidencias;
        $curso->update();
        return Redirect::to('admin/cursos');
    }

    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return Redirect::to('admin/cursos');
    }
}

