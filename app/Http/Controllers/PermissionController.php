<?php

namespace App\Http\Controllers;

use App\Imports\PermissionImport;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use DataTables;
use Maatwebsite\Excel\Excel;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adm.permission.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('adm.permission.create');
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
            'name' => 'required|unique:Spatie\Permission\Models\Permission,name',
            'description' => 'required'
        ]);

        $permission = Permission::create([
            'name' => $request->name,
            'guard_name' => 'web',
            'description' => $request->description
        ]);

        return redirect()->route('adm.permissions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        return view('adm.permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $validated = $request->validate([
            'name' => 'required|unique:Spatie\Permission\Models\Permission,name',
        ]);

        $permission->update($request->all());

        return redirect()->route('adm.permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('adm.permissions.index');
    }

    public function import(Request $request)
    {
        // var_dump();
        // Excel::import(new PermissionImport, request()->file('filexlsx'));

        (new PermissionImport)->import(request()->file('filexlsx'), 'local', \Maatwebsite\Excel\Excel::XLSX);

        // return redirect('/')->with('success', 'All good!');

        return redirect()->route('adm.dashboard');


    }



    //Presentacion en la tabla
    public function getData()
    {
        $permissions = Permission::select(['id', 'name', 'guard_name']);
        return DataTables::eloquent($permissions)
            ->addColumn('action', function ($permission) {
                return '<div class="btn-group btn-group-sm " role="group" aria-label="Basic mixed styles example">
                        <a href="' .
                    route('adm.permissions.edit', $permission) .
                    '" class="btn btn-sm text-white btn-orange-500"><i class="fa fa-solid fa-pencil"></i></a>
                        <form  action="' .
                    route('adm.permissions.destroy', $permission) .
                    '" method="POST">' .
                    method_field('DELETE') .
                    csrf_field() .
                    ' <button type="submit" class="btn btn-sm btn-danger ms-n5" ><i class="fas fa-trash-alt"></i></button> </form>
                        </div>';
            })
            ->make(true);
    }
}
