<?php

namespace App\Http\Controllers;

use App\Models\Causal_general;
use App\Models\Detalle_causal;
use Illuminate\Http\Request;

class Detalle_causalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //se hace el select de todo los datos y se compacta la variable donde contiene el dato.

        $detalles = Detalle_causal::all();

        return view('adm.Detalle_causal.index', compact('detalles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Se hace la consulta de todo los datos y lo compacta en la variable para llenar el select.

        $generals = Causal_general::all();

        return view('adm.Detalle_causal.create', compact('generals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //El metodo store te hace validacion de los campos requerido y se registra los datos a la base y redirecciona al index.

        $validated = $request->validate([
            'name' => 'required|unique:App\Models\Detalle_causal,name',
            'General' => 'required',
        ]);

        $Detalle_causal = Detalle_causal::create([
            'name' => $request->name,
            'causal_general_id' => $request->General,
        ]);
        return redirect()->route('adm.Detalle.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Detalle_causal $Detalle_causal)
    {
        //aqui define el modelo con estan todo los datos.
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
