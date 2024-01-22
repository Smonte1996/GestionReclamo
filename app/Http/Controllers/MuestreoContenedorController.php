<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Muestreo;
use App\Models\Evidencia_muestreo;
use Illuminate\Http\Request;
use App\Exports\MuestreoClienteExport;

class MuestreoContenedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Muestreos = Muestreo::where('estado', 2)->get();

        return view('modulos.dissatisfied_services.Muestreos.index', compact('Muestreos'));
    }


/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function GenerarpdfHorizontal($id)
    {
        //
        $pdf = Muestreo::find(decrypt($id));
        // $imagenes = Evidencia_muestreo::find($id);
        
        $pdfs = PDF::loadView('pdf.informeHorizontal', compact('pdf'));
        
        return $pdfs->setPaper('a4','landscape')->stream(strtoupper("$pdf->contenedor.pdf"));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Generarpdf($id)
    {
        //
         $pdf = Muestreo::find(decrypt($id));
    
        $pdfs = PDF::loadView('pdf.informeVertical', compact('pdf'));
        
        return $pdfs->stream(strtoupper("Reporte Transporte $pdf->contenedor.pdf"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ExportarExcel($id)
    {
        return (new MuestreoClienteExport($id))->download('Reporte Muestreo.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
