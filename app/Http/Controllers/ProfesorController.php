<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PersonaFormRequest;
use DB;

class ProfesorController extends Controller
{
    protected $rulesEdit = [
        'nombre'           =>'required|max:100|min:3',
        'apellidos'        =>'required|max:100|min:3',
        'direccion'        =>'required|max:100',
        'poblacion'        =>'required|max:100',
        'codigo_postal'    =>'required|max:100',
        'provincia'        =>'required|max:100',
        'telefono'         =>'required|max:15',
        'fecha_nacimiento' => 'required',
        'dni'              => 'required|max:9',
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
        if ($request)

        {
            $query=trim($request->get('searchText'));
            $personas=DB::table('personas')
            ->where('nombre','LIKE','%'.$query.'%')
            ->where ('tipo_persona','=','Profesor')
            ->orwhere('dni','LIKE','%'.$query.'%')
            ->where ('tipo_persona','=','Profesor')
            ->orderBy('id','desc')
            ->paginate(7);
            return view('admin.profesores.index',["personas"=>$personas,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $editar = false;
        return view('admin.profesores.create', ['editar' => $editar]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonaFormRequest $request)
    {
        try {
            DB::beginTransaction();

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role_id = 2;
            $user->save();

            $persona = new Persona;
            $persona->tipo_persona= 'Profesor';
            $persona->nombre = $request->nombre;
            $persona->apellidos = $request->apellidos;
            $persona->direccion = $request->direccion;
            $persona->poblacion = $request->poblacion;
            $persona->codigo_postal = $request->codigo_postal;
            $persona->provincia = $request->provincia;
            $persona->telefono = $request->telefono;
            $persona->fecha_nacimiento = $request->fecha_nacimiento;
            $persona->dni = $request->dni;
            $persona->user_id = $user->id;

            $persona->save();

            DB::commit();
            
            
        } catch (\Exception $e) {
            DB::rollback();
        }

        return Redirect::to('admin/profesores');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $persona = Persona::findOrFail($id);
        $editar = true;
        return view("admin.profesores.edit",["persona"=>$persona, 'editar' => $editar]);
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
        $this->validate($request,$this->rulesEdit);
        $persona = Persona::findOrFail($id);
        $persona->tipo_persona= 'Profesor';
        $persona->nombre = $request->nombre;
        $persona->apellidos = $request->apellidos;
        $persona->direccion = $request->direccion;
        $persona->poblacion = $request->poblacion;
        $persona->codigo_postal = $request->codigo_postal;
        $persona->provincia = $request->provincia;
        $persona->telefono = $request->telefono;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->dni = $request->dni;
        $persona->user_id = $persona->user_id;

        $persona->update();

        return Redirect::to('admin/profesores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->tipo_persona = 'Inactivo';
        $persona->update();

        return Redirect::to('admin/profesores');
    }
}
