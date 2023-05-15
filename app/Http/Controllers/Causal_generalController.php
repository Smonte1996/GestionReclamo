<?php

namespace App\Http\Controllers;

use App\Models\Causal_general;
use Illuminate\Http\Request;

class Causal_generalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //se hace el select de todo los datos y se compacta la variable donde contiene el dato.

        $generals = Causal_general::all();

        return view('adm.Causal_general.index', compact('generals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //redireccion al formulario de creacion.
        return view('adm.Causal_general.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //En el store para la validacion de los campos y para registar los datos a la base y redirecciona al index.

        $validated = $request->validate([
            'name' => 'required',
        ]);

         $detalle_causal = Causal_general::create([
             'name' => $request->name,
         ]);

        return redirect()->route('adm.General.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Causal_general $Causal_general)
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
