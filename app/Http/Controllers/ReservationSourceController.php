<?php

namespace App\Http\Controllers;

use App\ReservationSource;
use Illuminate\Http\Request;

class ReservationSourceController extends Controller
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

        $reservation_sources = ReservationSource::all();

        return view('reservationsource.index',compact('reservation_sources'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('reservationsource.create');

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

            'name' => 'required',
            'description' => 'required',

        ]);

        $request['id'] = time();

        ReservationSource::create($request->all());

        return redirect()->route('reservationsource.index')

            ->with('Correcto','Origen creado');
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
        $reservation_source = reservationsource::find($id);

        return view('reservationsource.edit',[
            'reservation_source' => $reservation_source
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
            'description' => 'required',

        ]);

        ReservationSource::find($id)->update($request->except('id'));


        return redirect()->route('reservationsource.index')

            ->with('Correcto','Origen actualizado');

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
            ReservationSource::find($id)->delete();
        }
        catch (QueryException $qe)
        {
            return redirect()->route('reservationsource.index')
                ->with('Incorrecto',$qe->getMessage());
        }

        return redirect()->route('reservationsource.index')

            ->with('Correcto','Origen eliminado');
    }
    
}
