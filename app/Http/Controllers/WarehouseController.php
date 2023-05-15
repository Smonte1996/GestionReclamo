<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Warehouse;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adm.warehouse.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('adm.warehouse.create', compact('cities'));
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
            'name' => 'required|unique:App\Models\Warehouse,name',
            'city_id' => 'required'
        ]);

        $warehouse = Warehouse::create($request->all());

        return redirect()->route('adm.warehouses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function show(Warehouse $warehouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function edit(Warehouse $warehouse)
    {
        $cities = City::all();
        return view('adm.warehouse.edit', compact('warehouse'))->with(compact('cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warehouse $warehouse)
    {
        $validated = $request->validate([
            'name' => 'required|unique:App\Models\Warehouse,name',
            'city_id' => 'required'
        ]);
        // Validator::make($request->all(), [
        //     'name' => [
        //         'required',
        //         Rule::unique('warehouses')->ignore($warehouse->name),
        //     ],
        //     'city_id' => ['required'],
        // ]);

        $warehouse->update($request->all());

        return redirect()->route('adm.warehouses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warehouse $warehouse)
    {
        $warehouse->delete();

        return redirect()->route('adm.warehouses.index');
    }

    public function getData()
    {
        $warehouses = Warehouse::with('City')->select(['warehouses.id', 'warehouses.name', 'warehouses.city_id']);
        return DataTables::eloquent($warehouses)
            ->addColumn('action', function ($warehouse) {
                return '<div class="btn-group btn-group-sm " role="group" aria-label="Basic mixed styles example">
                        <a href="' . route("adm.warehouses.edit", $warehouse) . '" class="btn btn-sm text-white btn-orange-500"><i class="fa fa-solid fa-pencil"></i></a>
                        <form  action="' . route('adm.warehouses.destroy', $warehouse) . '" method="POST">' . method_field("DELETE") . csrf_field() . ' <button type="submit" class="btn btn-sm btn-danger ms-n5" ><i class="fas fa-trash-alt"></i></button> </form>
                        </div>';
            })
            ->make(true);
    }
}
