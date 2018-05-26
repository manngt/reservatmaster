<?php

namespace App\Http\Controllers;

use App\ReservationTime;
use Illuminate\Http\Request;

class ReservationTimeController extends Controller
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

        $reservation_times = ReservationTime::all();

        return view('reservationtime.index',compact('reservation_times'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $reservation_time = ReservationTime::all();

        if(count($reservation_time) == 2)
        {
            return redirect()->route('reservationtime.index')
                ->with('Incorrecto','Solo se puede tener dos vigencias');
        }

        return view('reservationtime.create');

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

            'duration' => 'required|numeric'

        ]);

        $request['id'] = time();

        ReservationTime::create($request->all());

        return redirect()->route('reservationtime.index')

            ->with('Correcto','Vigencia creada');
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
        $reservation_time = ReservationTime::find($id);

        return view('reservationtime.edit',[
            'reservation_time' => $reservation_time
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

            'duration' => 'required',

        ]);

        ReservationTime::find($id)->update($request->except('sequence'));


        return redirect()->route('reservationtime.index')

            ->with('Correcto','Vigencia actualizada');

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
            ReservationTime::find($id)->delete();
        }
        catch (QueryException $qe)
        {
            return redirect()->route('reservationtime.index')
                ->with('Incorrecto',$qe->getMessage());
        }

        return redirect()->route('reservationtime.index')

            ->with('Correcto','Vigencia eliminada');
    }
}
