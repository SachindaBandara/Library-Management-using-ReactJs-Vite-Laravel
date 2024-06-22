<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Book;

class ReservationController extends Controller
{
    //
    public function reservationsUser(){
        $reservations=Reservation::all();
        return view('user.reservation', ['reservations' => $reservations]);
    }


}
