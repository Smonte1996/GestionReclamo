<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use DataTables;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adm.country.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.country.create');
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
            'name' => 'required|unique:App\Models\Country,name',
        ]);

        $country = Country::create($request->all());

        return redirect()->route('adm.countries.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('adm.country.edit',compact('country'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $validated = $request->validate([
            'name' => 'required|unique:App\Models\Country,name',
        ]);

        $country->update($request->all());

        return redirect()->route('adm.countries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();

        return redirect()->route('adm.countries.index');
    }

    public function getData()
    {
        $countries = Country::select(['id', 'name']);
        return DataTables::eloquent($countries)
            ->addColumn('action', function ($country) {
                return '<div class="btn-group btn-group-sm " role="group" aria-label="Basic mixed styles example">
                        <a href="'.route("adm.countries.edit",$country).'" class="btn btn-sm text-white btn-orange-500"><i class="fa fa-solid fa-pencil"></i></a>
                        <form  action="'.route('adm.countries.destroy',$country).'" method="POST">'.method_field("DELETE").csrf_field().' <button type="submit" class="btn btn-sm btn-danger ms-n5" ><i class="fas fa-trash-alt"></i></button> </form>
                        </div>';
            })
            ->make(true);
    }
}
