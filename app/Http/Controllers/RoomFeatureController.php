<?php

namespace App\Http\Controllers;

use App\Room;
use App\RoomFeature;
use Illuminate\Http\Request;

class RoomFeatureController extends Controller
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

        $room_features = RoomFeature::all();

        return view('roomfeature.index',compact('room_features'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::all();
        return view('roomfeature.create',compact('rooms'));

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

            'room_id' => 'required',
            'feature' => 'required',

        ]);


        RoomFeature::create($request->all());

        return redirect()->route('roomfeature.index')

            ->with('Correcto','Caracteristica creada');
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
        $room_feature = RoomFeature::find($id);
        $rooms = Room::all();

        return view('roomfeature.edit',[
            'room_feature' => $room_feature,
            'rooms' => $rooms
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
            'room_id' => 'required',
            'feature' => 'required',
        ]);

        RoomFeature::find($id)->update($request->except('id'));


        return redirect()->route('roomfeature.index')

            ->with('Correcto','Caracteristica actualizada');

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
            RoomFeature::find($id)->delete();
        }
        catch (QueryException $qe)
        {
            return redirect()->route('roomfeature.index')
                ->with('Incorrecto',$qe->getMessage());
        }

        return redirect()->route('roomfeature.index')

            ->with('Correcto','Caracteritica eliminada');
    }
}
