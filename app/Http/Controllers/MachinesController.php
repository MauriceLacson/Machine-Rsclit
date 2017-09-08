<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RsclitFormRequest;
use App\Machine;
use Carbon\Carbon;
<<<<<<< HEAD
=======

>>>>>>> f89ba425cfcc6b3b2afb11b0a57767b207a63a4e
class MachinesController extends Controller
{

    public function __construct()
        {
            config(['app.timezone' => 'Asia/Manila']);
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $machines = Machine::all();
        return view('machines.index', compact('machines'));
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
            'date_next_rsclit' => $request->get('date_next_rsclit'),
            'work_week' => $request->get('work_week')
        ));
        $dateFinished = new Carbon($machine[4]);
<<<<<<< HEAD
        $machine['date_next_rsclit'] = $dateFinished->addHour(672);
=======
        $machine['date_next_rsclit'] = $dateFinished->addDays(28);
>>>>>>> f89ba425cfcc6b3b2afb11b0a57767b207a63a4e
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
