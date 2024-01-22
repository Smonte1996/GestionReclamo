<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pasillo;
use App\Models\Seco_frio;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PasilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Pasillos_R = Pasillo::where('warehouse_id', Auth::user()->Employee->warehouse->id)->where('estado', 1)->get();
        return view('adm.Pasillos_checklist.index', compact('Pasillos_R'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (Auth::user()->Employee->warehouse->id == 1) {
            $Zona = Seco_frio::all();
            $supervisores =  User::with('Employee')->whereHas('Employee', function($query){
            $query->WhereIn('position_id', [4,14])->where('warehouse_id', 1)->where('departament_id', 1);
            })->get();
          } else {
            $Zona = Seco_frio::whereIn('id', [1,4,7])->get();
            $supervisores =  User::with('Employee')->whereHas('Employee', function($query){
                $query->WhereIn('position_id', [4,14])->where('warehouse_id', 2)->where('departament_id', 1);
                 })->get();
          }
    
    
          return view('adm.Pasillos_checklist.create', compact('Zona', 'supervisores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
        $validacion = $request->validate([
            'zona' => 'required',
            'Pasillos' => 'required',
            'coordinador' => 'required',
            'supervisor' => 'required',
            'responsable' => 'required'
           ]);
        $pasillo = Pasillo::create([
          'seco_frio_id' => $validacion['zona'],
          'user_id' => $validacion['supervisor'],
          'warehouse_id' => Auth::user()->Employee->warehouse->id,
          'coordinador' => $validacion['coordinador'],
          'name' => $validacion['Pasillos'],
          'responsables' => $validacion['responsable'],
          'estado' => 1
        ]);
   
       return redirect()->route('adm.check.pasillos.index');

    } catch (Exception $e) {
        return $Mensaje = $e->getMessage();
    }
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
    public function edit($pasillos)
    {
        //
        $pasillo = Pasillo::find(decrypt($pasillos));
        $supervisor = Pasillo::all();
        return view('adm.Pasillos_checklist.edit', compact('pasillo', 'supervisor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pasillo)
    {
        try {
        $validated = $request->validate([
            'coordinador' => 'required',
            'supervisor'=> 'required',
            'responsable' => 'required',
        ]);

        $Pasillos = DB::table('pasillos')
        ->where('id', decrypt($pasillo))
        ->update(['coordinador' => $validated['coordinador'],
                  'user_id' => $validated['supervisor'],
                  'responsables' => $validated['responsable']]);

        return redirect()->route('adm.check.pasillos.index');

        } catch (Exception $e) {
            return $Mensaje = $e->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function Eliminar($id) {
        $Pasillos = DB::table('pasillos')
        ->where('id', decrypt($id))
        ->update(['estado' => 0,
                ]);

        return redirect()->route('adm.check.pasillos.index');
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
