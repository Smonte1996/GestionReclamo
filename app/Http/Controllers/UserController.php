<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use App\Models\Client;
use App\Models\Supplier;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adm.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        $clients = Client::all();
        $suppliers = Supplier::all();
        $roles = Role::all();
        $permissions = Permission::all();
        return view('adm.user.create')->with(compact('employees'))
            ->with(compact('clients'))
            ->with(compact('suppliers'))
            ->with(compact('roles'))
            ->with(compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'required',
            'tipo_user' => 'required',
            'employee_id' => Rule::requiredIf($request->tipo_user == 0),
            'client_id' => Rule::requiredIf($request->tipo_user == 1),
            'supplier_id' => Rule::requiredIf($request->tipo_user == 2)
        ])->validate();

        if ($request->tipo_user == 0) {
            $class = Employee::find($request->employee_id);
        } else if ($request->tipo_user == 1) {
            $class = Client::find($request->client_id);
        } else {
            $class = Supplier::find($request->supplier_id);
        }

        $users = $class->users()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ])->assignRole($request->role_id);
        
        return redirect()->route('adm.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function getData()
    {
        $users = User::all();
        return DataTables::of($users)->make(true);
    }
}
