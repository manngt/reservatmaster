<?php

namespace App\Http\Controllers;

use App\Room;
use App\RoomPicture;
use Illuminate\Http\Request;

class RoomPictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room_pictures = RoomPicture::all();

        return view('roompicture.index',compact('room_pictures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::all();
        return view('roompicture.create',compact('rooms'));
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
            'picture' => 'required',
        ]);
        $request['id'] = time();
        $room_picture = $request->all();

        if($request['picture'])
        {
            $imageName = time().'.'.request()->picture->getClientOriginalExtension();
            request()->picture->move(public_path('images/rooms'), $imageName);
            $room_picture['picture'] = $imageName;

        }




        RoomPicture::create($room_picture);

        return redirect()->route('roompicture.index')
            ->with('Correcto','Imagen creada');
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
        $room_picture = RoomPicture::find($id);

        return view('roompicture.edit',compact('room_picture'));
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
            'picture' => 'required',
        ]);

        $room_picture = $request->all();

        if($request['picture'])
        {
            $imageName = time().'.'.request()->picture->getClientOriginalExtension();
            request()->picture->move(public_path('images/rooms'), $imageName);
            $room_picture['picture'] = $imageName;

        }

        roompicture::find($id)->update($room_picture);

        return redirect()->route('roompicture.index')
            ->with('Correcto','Imagen actualizada');
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
            RoomPicture::find($id)->delete();
        }
        catch (QueryException $qe)
        {
            return redirect()->route('roompicture.index')
                ->with('Incorrecto',$qe->getMessage());
        }

        return redirect()->route('roompicture.index')

            ->with('Correcto','Imagen eliminada');
    }
}
