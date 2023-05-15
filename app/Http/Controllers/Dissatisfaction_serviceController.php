<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Activity;
use App\Models\Dissatisfaction_service;
use App\Models\Employee;
// use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class Dissatisfaction_serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adm.dissatisfaction.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activities = Activity::all();
        $actions = Action::all();
        $employees = Employee::has('users')->get();
        return view('adm.dissatisfaction.create',compact('activities','actions','employees'));
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
            'name' => 'required|unique:App\Models\Dissatisfaction_service,name',
            'notification_type' => 'required',
            'activity_id' => 'required',
            'employee_id' => 'required'

        ]);

        $dissatisfaction_service = Dissatisfaction_service::create($request->all());

        if(!is_null($request->action_id))
        {
            foreach ($request->action_id as $key => $value) {
                $dissatisfaction_service->actions()->attach($value);
            }
        }

        $dissatisfaction_service->responsibles()->create([
            'employee_id' => $request->employee_id
        ]);

        return redirect()->route('adm.dissatisfaction_services.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dissatisfaction_service  $dissatisfaction_service
     * @return \Illuminate\Http\Response
     */
    public function show(Dissatisfaction_service $dissatisfaction_service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dissatisfaction_service  $dissatisfaction_service
     * @return \Illuminate\Http\Response
     */
    public function edit(Dissatisfaction_service $dissatisfaction_service)
    {
        $activities = Activity::all();
        $actions = Action::all();
        $employees = Employee::has('users')->get();
        return view('adm.dissatisfaction.edit',compact('dissatisfaction_service','activities','actions','employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dissatisfaction_service  $dissatisfaction_service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dissatisfaction_service $dissatisfaction_service)
    {
        $validated = $request->validate([
            'name' => 'required|unique:App\Models\Dissatisfaction_service,name',
            'notification_type' => 'required',
            'activity_id' => 'required',
            'employee_id' => 'required'
        ]);

        $dissatisfaction_service->update($request->all());
        if(!is_null($request->action_id))
        {
            $dissatisfaction_service->actions()->sync($request->action_id);

        }

        $dissatisfaction_service->responsibles()->update([
            'employee_id' => $request->employee_id
        ]);



        
        return redirect()->route('adm.dissatisfaction_services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dissatisfaction_service  $dissatisfaction_service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dissatisfaction_service $dissatisfaction_service)
    {
        $dissatisfaction_service->delete();

        return redirect()->route('adm.dissatisfaction_services.index');
    }


    public function getData()
    {
        $dissatisfaction_services = Dissatisfaction_service::with('activity')->select('dissatisfaction_services.*');
        return DataTables::eloquent($dissatisfaction_services)
        ->editColumn('created_at',function($dissatisfaction_service){
            return $dissatisfaction_service->created_at->format('Y-m-d H:i:s');
        })
        ->filterColumn('created_at', function ($query, $keyword) {
            $query->whereRaw("CONVERT(date, created_at) like ?", ["%$keyword%"]);
        })
            ->addColumn('action', function ($dissatisfaction_service) {
                return '<div class="btn-group btn-group-sm " role="group" aria-label="Basic mixed styles example">
                        <a href="'.route("adm.dissatisfaction_services.edit",$dissatisfaction_service).'" class="btn btn-sm text-white btn-orange-500"><i class="fa fa-solid fa-pencil"></i></a>
                        <form  action="'.route('adm.dissatisfaction_services.destroy',$dissatisfaction_service).'" method="POST">'.method_field("DELETE").csrf_field().' <button type="submit" class="btn btn-sm btn-danger ms-n5" ><i class="fas fa-trash-alt"></i></button> </form>
                        </div>';
            })
            ->make(true);
    }


}
