<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;
use DataTables;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adm.position.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.position.create');
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
            'name' => 'required|unique:App\Models\Position,name',
        ]);

        $position = Position::create([
            'name' => $request->name,
        ]);

        return redirect()->route('adm.positions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit(Position $position)
    {
        return view('adm.position.edit', compact('position'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Position $position)
    {
        $validated = $request->validate([
            'name' => 'required|unique:App\Models\Position,name',
        ]);

        $position->update($request->all());

        return redirect()->route('adm.positions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy(Position $position)
    {
        $position->delete();

        return redirect()->route('adm.positions.index');
    }

    public function getData()
    {
        $positions = Position::select(['id', 'name']);
        return DataTables::eloquent($positions)
            ->addColumn('action', function ($position) {
                return '<div class="btn-group btn-group-sm " role="group" aria-label="Basic mixed styles example">
                        <a href="' .
                    route('adm.positions.edit', $position) .
                    '" class="btn btn-sm text-white btn-orange-500"><i class="fa fa-solid fa-pencil"></i></a>
                        <form  action="' .
                    route('adm.positions.destroy', $position) .
                    '" method="POST">' .
                    method_field('DELETE') .
                    csrf_field() .
                    ' <button type="submit" class="btn btn-sm btn-danger ms-n5" ><i class="fas fa-trash-alt"></i></button> </form>
                        </div>';
            })
            ->make(true);
    }
}
