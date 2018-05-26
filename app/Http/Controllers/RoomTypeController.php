<?php

namespace App\Http\Controllers;

use App\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
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

        $room_types = RoomType::all();

        return view('roomtype.index',compact('room_types'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('roomtype.create',[
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

            'name' => 'required',

        ]);

        $request['id'] = time();

        RoomType::create($request->all());

        return redirect()->route('roomtype.index')

            ->with('Correcto','Tipo de habitación creado');
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
        $room_type = RoomType::find($id);

        return view('roomtype.edit',[
            'room_type' => $room_type,
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

        RoomType::find($id)->update($request->except('id'));


        return redirect()->route('roomtype.index')

            ->with('Correcto','Tipo de habitación actualizado');

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
            RoomType::find($id)->delete();
        }
        catch (QueryException $qe)
        {
            return redirect()->route('roomtype.index')
                ->with('Incorrecto',$qe->getMessage());
        }

        return redirect()->route('roomtype.index')

            ->with('Correcto','Tipo de habitación eliminado');
    }
}
