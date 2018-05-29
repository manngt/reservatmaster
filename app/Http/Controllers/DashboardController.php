<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $ventas = DB::table('check_details')
            ->select('check_id', DB::raw('sum(amount) as total'))
            ->groupBy('check_id')
            ->get();

        $top_rooms = DB::table('reservations')
            ->select('room_id', DB::raw('count(*) as cantidad'))
            ->groupBy('room_id')
            ->get();

        return view('dashboard.index',[
            'ventas' => $ventas,
            'top_rooms' => $top_rooms
        ]);
    }
}
