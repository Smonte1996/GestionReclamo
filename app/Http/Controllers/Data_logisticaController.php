<?php

namespace App\Http\Controllers;

use App\Models\Data_logistica;
use Illuminate\Http\Request;

class Data_logisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Datas = Data_logistica::all();

        return view('adm.data_logistica.index', compact('Datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adm.data_logistica.create');
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
        $validated = $request->validate([
            'sku_quala' => 'required|unique:App\Models\Data_logistica,sku_quala',
            'sku_unilever' => 'required',
            'descripcion' => 'required',
            'cliente'=> 'required',
            'ean13' => 'required',
            'ean14' => 'required',
            'ean128' => 'required',
            'registro_sanitario' => 'required',
            'vida_util' => 'required',
            'pvp' => 'required',
            'cajas_plancha' => 'required',
            'plancha_estibas' => 'required',
            'marca' => 'required',
            'cajas_estibas' => 'required',
            'fecha_actualizacion' => 'required',
            'origen' => 'required',
            'observacion' => 'required',

        ]);

        $data_logistica = Data_logistica::create([
            'sku_quala' => $validated['sku_quala'],
            'sku_unilever' => $validated['sku_unilever'],
            'descripcion' => $validated['descripcion'],
            'cliente' => $validated['cliente'],
            'ean13' => $validated['ean13'],
            'ean14' => $validated['ean14'],
            'ean128' => $validated['ean128'],
            'registro_sanitario' => $validated['registro_sanitario'],
            'vida_util' => $validated['vida_util'],
            'pvp' => $validated['pvp'],
            'cajas_plancha' => $validated['cajas_plancha'],
            'plancha_estibas' => $validated['plancha_estibas'],
            'marca' => $validated['marca'],
            'cajas_estibas' => $validated['cajas_estibas'],
            'fecha_actualizacion' => $validated['fecha_actualizacion'],
             'origen' => $validated['origen'],
             'observacion' => $validated['observacion']
        ]);

        return redirect()->route('adm.data_logisticas.index');
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
    public function edit(Data_logistica $data_logistica)
    { 
        //
        return view('adm.data_logistica.edit', compact('data_logistica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data_logistica $data_logistica)
    {
        //
        $validated = $request->validate([
            'sku_quala' => 'required',
            'sku_unilever' => 'required',
            'descripcion' => 'required',
            'cliente'=> 'required',
            'ean13' => 'required',
            'ean14' => 'required',
            'ean128' => 'required',
            'registro_sanitario' => 'required',
            'vida_util' => 'required',
            'pvp' => 'required',
            'cajas_plancha' => 'required',
            'plancha_estibas' => 'required',
            'marca' => 'required',
            'cajas_estibas' => 'required',
            'fecha_actualizacion' => 'required',
            'origen' => 'required',
            'observacion' => '',

        ]);

        $data_logistica->update($request->all());

        return redirect()->route('adm.data_logisticas.index');
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
