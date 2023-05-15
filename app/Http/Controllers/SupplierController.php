<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use DataTables;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adm.supplier.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'social_reason' => 'required',
            'ruc' => 'required|numeric|digits:13|ends_with:001|unique:App\Models\Client,ruc',
        ]);

        $supplier = Supplier::create($request->all());

        return redirect()->route('adm.suppliers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('adm.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $validated = $request->validate([
            'social_reason' => 'required',
            'ruc' => 'required|numeric|digits:13|ends_with:001|unique:App\Models\Client,ruc',
        ]);

        $supplier->update($request->all());

        return redirect()->route('adm.suppliers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect()->route('adm.suppliers.index');
    }

    public function getData()
    {
        $suppliers = Supplier::select(['id', 'social_reason', 'ruc']);
        return DataTables::eloquent($suppliers)
            ->addColumn('action', function ($supplier) {
                return '<div class="btn-group btn-group-sm " role="group" aria-label="Basic mixed styles example">
                        <a href="' .
                    route('adm.suppliers.edit', $supplier) .
                    '" class="btn btn-sm text-white btn-orange-500"><i class="fa fa-solid fa-pencil"></i></a>
                        <form  action="' .
                    route('adm.suppliers.destroy', $supplier) .
                    '" method="POST">' .
                    method_field('DELETE') .
                    csrf_field() .
                    ' <button type="submit" class="btn btn-sm btn-danger ms-n5" ><i class="fas fa-trash-alt"></i></button> </form>
                        </div>';
            })
            ->make(true);
    }
}
