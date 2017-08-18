<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RsclitFormRequest;
use App\Machine;

class MachinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('machines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RsclitFormRequest $request)
    {
        $machine = new Machine(array(
            'machine_no' => $request->get('machine_no'),
            'model_no' => $request->get('model_no'),
            'package' => $request->get('package'),
            'date_started' => $request->get('date_started'),
            'date_finished' => $request->get('date_finished'),
            'work_week' => $request->get('work_week')
        ));
        $machine->save();
        return redirect('/create')->with('status', 'Your Routine SCLIT has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
