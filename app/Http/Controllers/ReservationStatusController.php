<?php

namespace App\Http\Controllers;

use App\ReservationStatus;
use Illuminate\Http\Request;

class ReservationStatusController extends Controller
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

        $reservation_statuses = reservationstatus::all();

        return view('reservationstatus.index',compact('reservation_statuses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('reservationstatus.create',[

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

            'sequence' => 'required|unique:reservation_statuses|numeric',

            'name' => 'required',

            'description' => 'required'

        ]);


        ReservationStatus::create($request->all());

        return redirect()->route('reservationstatus.index')

            ->with('Correcto','Estado de reservación creado');
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
        $reservation_status = reservationstatus::find($id);

        return view('reservationstatus.edit',[
            'reservation_status' => $reservation_status,
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
            'description' => 'required'

        ]);

        ReservationStatus::find($id)->update($request->except('sequence'));


        return redirect()->route('reservationstatus.index')

            ->with('Correcto','Estado de reservacion actualizado');

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
            ReservationStatus::find($id)->delete();
        }
        catch (QueryException $qe)
        {
            return redirect()->route('reservationstatus.index')
                ->with('Incorrecto',$qe->getMessage());
        }

        return redirect()->route('reservationstatus.index')

            ->with('Correcto','Estado de reservación eliminado');
    }
}
