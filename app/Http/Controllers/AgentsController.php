<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Broker;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.agents.index', [
            'agents' => Agent::orderBy('active', 'DESC')->filter(request(['search']))->simplePaginate(10),
            'sort' => null
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agents.create', ['brokers' => Broker::whereActive(1)->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagePath = null;
        if($request->hasFile('agentImage')){
            $imagePath = Storage::disk('public')->put('/agentImages', $request->agentImage);
        }
        Agent::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'broker_id' => $request->brokerID,
            'contact' => $request->contactNo,
            'email_address' => $request->email,
            'image' => $imagePath,
            'created_by' => session('emp_id')
        ]);

        return redirect()->back()->with('successMessage', 'Agent successfully added to this broker.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.agents.show', ['agent' => Agent::find($id)]);
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
    public function update(Request $request, Agent $agent)
    {
        $previousImage = $agent->image;
        $agentImage = $previousImage;
        if ($request->hasFile('editAgentImage')) {
            if (Storage::exists($previousImage)) {
                Storage::delete($previousImage);
            }
            $agentImage = Storage::disk('public')->put('/agentImages', $request->editAgentImage);
          
        } 
        $agent->name = $request->name;
        $agent->contact = $request->contactNo;
        $agent->email_address = $request->email;
        $agent->image = $agentImage;
        $agent->updated_by = session('emp_id');
        $agent->save();

        return redirect()->back()->with('successMessage' , 'Successfully updated agent.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        $agent->active = 0;
        $agent->updated_by = session('emp_id');
        $agent->save();

        return redirect()->back()->with('successMessage', 'Successfully deleted agent.');
    }
}
