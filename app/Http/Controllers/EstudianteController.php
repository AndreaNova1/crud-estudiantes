<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estudiante;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
       $estudiantes=DB::table('estudiante')
                        ->select('id', 'nombre', 'correo', 'grado')
                        ->where('nombre','LIKE', '%' .$texto. '%')
                        ->orWhere('correo', 'LIKE', '%' .$texto. '%')
                        ->paginate(10);
       return view ('estudiante.index', compact('estudiantes', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante=new Estudiante;
        $estudiante->nombre=$request->input('nombre');
        $estudiante->correo=$request->input('correo');
        $estudiante->grado=$request->input('grado');
        $estudiante->save();
        return redirect()->route('estudiante.index');
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
        $estudiantes= Estudiante::findOrFail($id);

        return view('estudiante.index', compact('estudiantes'));

        return back()->with('usuarioModificado','Usuario Modificado');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function save(Request $request)
    {
        $validator = $this->validate($request, [
            'nombre' => 'required',
            'correo' => 'required|string|max:75',
            'grado' => 'required',
        ]);
    }
    public function delete($id){
        Estudiante::destroy($id);

        return back()->with('registroElimnado', 'registroEliminado');
    }

}
