<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use DataTables;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('adm.city.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('adm.city.create',compact('countries'));
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
            'name' => 'required|unique:App\Models\City,name',
            'country_id' => 'required'
        ]);

        $city = City::create($request->all());

        return redirect()->route('adm.cities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $countries = Country::all();
        return view('adm.city.edit',compact('city'))->with(compact('countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $validated = $request->validate([
            'name' => 'required|unique:App\Models\City,name',
            'country_id' => 'required'
        ]);

        $city->update($request->all());

        return redirect()->route('adm.cities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->route('adm.cities.index');
    }


    public function getData()
    {
        $cities = City::with('country')->select(['cities.id', 'cities.name','cities.country_id']);
        return DataTables::eloquent($cities)
            ->addColumn('action', function ($city) {
                return '<div class="btn-group btn-group-sm " role="group" aria-label="Basic mixed styles example">
                        <a href="'.route("adm.cities.edit",$city).'" class="btn btn-sm text-white btn-orange-500"><i class="fa fa-solid fa-pencil"></i></a>
                        <form  action="'.route('adm.cities.destroy',$city).'" method="POST">'.method_field("DELETE").csrf_field().' <button type="submit" class="btn btn-sm btn-danger ms-n5" ><i class="fas fa-trash-alt"></i></button> </form>
                        </div>';
            })
            ->make(true);
    }


}
