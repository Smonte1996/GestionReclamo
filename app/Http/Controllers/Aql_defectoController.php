<?php

namespace App\Http\Controllers;

use App\Models\Aql_defecto;
use App\Models\Matriz_defecto;
use App\Models\Tamano_muestra;
use Illuminate\Http\Request;

class Aql_defectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Aqls = Aql_defecto::all();

        return view('adm.Aql_defecto.index', compact('Aqls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Matriz = Matriz_defecto::all();
        $Tamaño = Tamano_muestra::all();

        return view('adm.Aql_defecto.create', compact('Matriz', 'Tamaño'));
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
            'letra_nivel'=>'required',
            'aceptacion'=>'required',
            'aql'=>'required',
            'rechazo'=>'required',
            ]);
    
            $Aql = Aql_defecto::create([
                'tamano_muestra_id'=>$validar['letra_nivel'],
                // 'matriz_defecto_id'=>$validar['Matriz'],
                // 'Marca'=>$validar['Marca'],
                'Ac'=>$validar['aceptacion'],
                'Aql'=>$validar['aql'],
                'Rec'=>$validar['rechazo'],
            ]);
    
          return redirect()->route('adm.Aql.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Aql_defecto $aql_defecto)
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
