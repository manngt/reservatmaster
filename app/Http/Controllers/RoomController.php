<?php

namespace App\Http\Controllers;

use App\Level;
use App\Location;
use App\Room;
use App\RoomStatus;
use App\RoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $rooms = Room::all();

        return view('room.index',compact('rooms'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $locations = Location::select('id','name')->get();

        $room_types = RoomType::select('id','name')->get();

        $levels = Level::select('id','name')->get();

        $roomstatuses = RoomStatus::select('id','name')->get();

        return view('room.create',[
            'edit' => false,

            'locations' => $locations,

            'room_types' => $room_types,

            'levels' => $levels,

            'roomstatuses' => $roomstatuses

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

            'number' => 'required|unique:rooms|numeric',

            'location_id' => 'required|numeric',

            'level_id' => 'required|numeric',

            'room_type_id' => 'required|numeric',

            'room_status_id' => 'required|numeric',

            'cost' => 'required',

            'price' => 'required'

        ]);

        $request['id'] = time();

        $room = $request->all();

        if($request['picture'])
        {
            $imageName = time().'.'.request()->picture->getClientOriginalExtension();
            request()->picture->move(public_path('images/rooms'), $imageName);
            $room['picture'] = $imageName;

        }


        Room::create($room);

        return redirect()->route('room.index')

            ->with('Correcto','Habitación creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::find($id);

        return view('room.show',compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::find($id);

        $room_types = RoomType::select('name','id')->get();

        $locations = Location::select('name','id')->get();

        $levels = Level::select('name','id')->get();

        $roomstatuses = Room::select('id','name')->get();


        return view('room.edit',[

            'room' => $room,

            'room_types' => $room_types,

            'locations' => $locations,

            'levels' => $levels,

            'rommstatuses' => $roomstatuses,

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

            'location_id' => 'required|numeric',

            'level_id' => 'required|numeric',

            'room_type_id' => 'required|numeric',

            'cost' => 'required',

            'price' => 'required'

        ]);

        $room = $request->all();

        if($request['picture'])
        {
            $imageName = time().'.'.request()->picture->getClientOriginalExtension();
            request()->picture->move(public_path('images/rooms'), $imageName);
            $room['picture'] = $imageName;

        }

        Room::find($id)->update($room);


        return redirect()->route('room.index')

            ->with('Correcto','Habitación actualizada');

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
            Room::find($id)->delete();
        }
        catch (QueryException $qe)
        {
            return redirect()->route('room.index')
                ->with('Incorrecto',$qe->getMessage());
        }

        return redirect()->route('room.index')

            ->with('Correcto','Habitación eliminada');
    }
    
}
