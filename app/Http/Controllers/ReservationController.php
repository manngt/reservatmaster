<?php

namespace App\Http\Controllers;

use App\Client;
use App\Reservation;
use App\ReservationSource;
use App\ReservationStatus;
use App\ReservationTime;
use App\Room;
use App\RoomStatus;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
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

        $reservations = Reservation::all();

        return view('reservation.index',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room_status = RoomStatus::where('name','Ocupada')->first();

        $users = User::all();
        $rooms =  Room::where('room_status_id','!=',$room_status->id)->get();
        $clients = Client::all();
        $reservation_statuses = ReservationStatus::all();
        $reservation_sources = ReservationSource::all();
        $reservation_times = ReservationTime::all();



        return view('reservation.create',[
            'users' => $users,
            'rooms' => $rooms,
            'clients' => $clients,
            'reservation_statuses' => $reservation_statuses,
            'reservation_sources' => $reservation_sources,
            'reservation_times' => $reservation_times
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
            'room_id' => 'required',
            'client_id' => 'required',
            'reservation_status_id'=> 'required',
            'reservation_source_id'=>'required',
            'reservation_time_id' => 'required',
            'start'=> 'required',
            'ends'=> 'required',
            'day'=> 'required'

        ]);

        $room_status = RoomStatus::where('name','Ocupada')->first();

        Room::find($request['room_id'])->update(['room_status_id'=>$room_status->id]);

        $request['id'] = time();

        $request['user_id'] = Auth::user()->id;

        Reservation::create($request->all());

        return redirect()->route('reservation.index')
            ->with('Correcto','Reservación creada');
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
        $reservation = Reservation::find($id);
        $users = User::all();
        $rooms = Room::all();
        $clients = Client::all();
        $reservation_statuses = ReservationStatus::all();
        $reservation_sources = ReservationSource::all();
        $reservation_times = ReservationTime::all();

        return view('reservation.edit',[
            'reservation' => $reservation,
            'users' => $users,
            'rooms' => $rooms,
            'clients' => $clients,
            'reservation_statuses' => $reservation_statuses,
            'reservation_sources' => $reservation_sources,
            'reservation_times' => $reservation_times
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
            'client_id' => 'required',
            'reservation_status_id'=> 'required',
            'reservation_source_id'=>'required',
            'reservation_time_id' => 'required',
            'start'=> 'required',
            'ends'=> 'required',
            'day'=> 'required'

        ]);

        $reservation_status = ReservationStatus::where('name','Checkout')->first();
        $room_busy = RoomStatus::where('name','Ocupada')->first();
        $room_status = RoomStatus::where('name','Disponible')->first();

        if($request['reservation_status_id']==$reservation_status->id)
        {
            Room::find($request['room_id'])->update(['room_status_id'=>$room_status->id]);
        }

        $reservation_cancel =ReservationStatus::where('name','Cancelada')->first();

        if($request['reservation_status_id']==$reservation_cancel->id)
        {
            Room::find($request['room_id'])->update(['room_status_id'=>$room_status->id]);
        }

        $reservation_in =ReservationStatus::where('name','Checkin')->first();

        if($request['reservation_status_id']==$reservation_in->id)
        {
            Room::find($request['room_id'])->update(['room_status_id'=>$room_busy->id]);
        }

        $request['user_id'] = Auth::user()->id;

        Reservation::find($id)->update($request->all());

        return redirect()->route('reservation.index')
            ->with('Correcto','Reservación actualizada');
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
            Reservation::find($id)->delete();
        }
        catch (QueryException $qe)
        {
            return redirect()->route('reservation.index')
                ->with('Incorrecto',$qe->getMessage());
        }

        return redirect()->route('reservation.index')

            ->with('Correcto','Reservación eliminada');
    }
}
