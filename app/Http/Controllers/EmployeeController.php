<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Departament;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use DataTables;

class EmployeeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('can:adm.employees.index')->only('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adm.employee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $warehouses = Warehouse::all();
        $departaments = Departament::all();
        $clients = Client::all();
        $employees = Employee::all();
        $positions = Position::all();
        return view('adm.employee.create', compact('warehouses'))
            ->with(compact('departaments'))
            ->with(compact('clients'))
            ->with(compact('employees'))
            ->with(compact('positions'));
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
            'name' => 'required',
            'lastname' => 'required',
            'identification_card' => 'required|numeric|digits:10|unique:App\Models\Employee,identification_card',
            'position_id' => 'required',
            'warehouse_id' => 'required',
            'departament_id' => 'required',
            'client_id' => 'nullable|array',
            'employee_id' => 'nullable',
            'leader' => 'required',
        ]);

        $employee = Employee::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'identification_card' => $request->identification_card,
            'position_id' => $request->position_id,
            'warehouse_id' => $request->warehouse_id,
            'departament_id' => $request->departament_id,
            'parent_id' => $request->employee_id,
            'leader' => $request->leader,
        ]);
        if (!is_null($request->client_id)) {
            foreach ($request->client_id as $key => $value) {
                $employee->clients()->attach($value);
            }
        }

        return redirect()->route('adm.employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $warehouses = Warehouse::all();
        $departaments = Departament::all();
        $clients = Client::all();
        $employees = Employee::all();        
        $positions = Position::all();
        return view('adm.employee.edit', compact('employee','warehouses','clients','departaments','positions','employees'))
            ->with(compact('departaments'))
            ->with(compact('clients'))
            ->with(compact('warehouses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'identification_card' => 'required|numeric|digits:10|unique:App\Models\Employee,identification_card',
            'warehouse_id' => 'required',
            'departament_id' => 'required',
            'position' => 'nullable|string',
            'client_id' => 'nullable|array',
        ]);

        $employee->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'identification_card' => $request->identification_card,
            'position_id' => $request->position_id,
            'warehouse_id' => $request->warehouse_id,
            'departament_id' => $request->departament_id,
            'parent_id' => $request->employee_id,
            'leader' => $request->leader,            
        ]);

        $employee->clients()->sync($request->client_id);

        return redirect()->route('adm.employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('adm.employees.index');
    }

    public function getData()
    {
        $employees = Employee::with('warehouse')
            ->with('departament')
            ->with('position')
            ->select(['id', 'name', 'lastname', 'identification_card', 'position_id', 'warehouse_id', 'departament_id', 'created_at', 'updated_at']);
        return DataTables::eloquent($employees)
            ->editColumn('position_id', function (Employee $employee) {
                return $employee->position->name;
            })
            ->editColumn('warehouse_id', function (Employee $employee) {
                return $employee->warehouse->name;
            })
            ->editColumn('departament_id', function (Employee $employee) {
                return $employee->departament->name;
            })
            ->addColumn('action', function ($employee) {
                return '<div class="btn-group btn-group-sm " role="group" aria-label="Basic mixed styles example">
                        <a href="' .
                    route('adm.employees.edit', $employee) .
                    '" class="btn btn-sm text-white btn-orange-500"><i class="fa fa-solid fa-pencil"></i></a>
                        <form  action="' .
                    route('adm.employees.destroy', $employee) .
                    '" method="POST">' .
                    method_field('DELETE') .
                    csrf_field() .
                    ' <button type="submit" class="btn btn-sm btn-danger ms-n5" ><i class="fas fa-trash-alt"></i></button> </form>
                        </div>';
            })
            ->make(true);
    }
}
