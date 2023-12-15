<?php

namespace App\Http\Controllers;

use App\Models\Defecto;
use App\Models\Matriz_defecto;
use Illuminate\Http\Request;

class DefectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Defectos = Defecto::all();
       return view('adm.Defectos.index', compact('Defectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $matrices = Matriz_defecto::all();
        return view('adm.Defectos.create', compact('matrices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validar = $request->validate([
            'matriz'=>'required',
            'defecto'=>'required',
            'descripcion'=>'required',
            'clasificacion'=>'required'
           ]);
           $Defectos = Defecto::create([
               'matriz_defecto_id'=>$validar['matriz'],
               'defectos' =>$validar['defecto'],
               'descripcion'=>$validar['descripcion'],
               'clasificacion'=>$validar['clasificacion'],
           ]);
   
           return redirect()->route('adm.Defectos.index');
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
        //
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
}
