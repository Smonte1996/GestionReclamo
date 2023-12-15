<?php

namespace App\Http\Controllers;

use App\Models\Niveles_estandar;
use App\Models\Tamano_muestra;
use Illuminate\Http\Request;

class Tamano_muestraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Tamaños = Tamano_muestra::all();

        return view('adm.Tamano_muestra.index', compact('Tamaños'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Niveles = Niveles_estandar::all();

        return view('adm.Tamano_muestra.create', compact('Niveles'));
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
            'Nivel' => 'required',
            'Estandar' => 'required',
            'muestra' => 'required',
            // 'Tamaño_lote' => 'required',
          ]);
  
          $Tamaño_muestra = Tamano_muestra::create([
              'niveles_estandar_id' => $validar['Estandar'],
              'nivel' => $validar['Nivel'],
              'muestra' => $validar['muestra'],
            //   'tamano_lote' => $validar['Tamaño_lote']
          ]);
  
          return redirect()->route('adm.Tamaño_muestra.index');
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
