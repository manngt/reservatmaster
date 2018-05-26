<?php

namespace App\Http\Controllers;

use App\RoomStatus;
use Illuminate\Http\Request;

class RoomStatusController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $roomstatuses = roomstatus::all();

        return view('roomstatus.index',compact('roomstatuses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('roomstatus.create',[

            'edit' => false

        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'sequence' => 'required|unique:room_statuses|numeric',

            'name' => 'required',

        ]);

        $request['id'] = time();

        RoomStatus::create($request->all());

        return redirect()->route('roomstatus.index')

            ->with('Correcto','Estado creado');
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
        $roomstatus = RoomStatus::find($id);

        return view('roomstatus.edit',[
            'roomstatus' => $roomstatus,
            'edit' => true
        ]);
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

        $request->validate([

            'name' => 'required',

        ]);

        roomstatus::find($id)->update($request->except('sequence'));


        return redirect()->route('roomstatus.index')

            ->with('Correcto','Estado actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try
        {
            RoomStatus::find($id)->delete();
        }
        catch (QueryException $qe)
        {
            return redirect()->route('roomstatus.index')
                ->with('Incorrecto',$qe->getMessage());
        }

        return redirect()->route('roomstatus.index')

            ->with('Correcto','Estado eliminado');
    }
    
}
