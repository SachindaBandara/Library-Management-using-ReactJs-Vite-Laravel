<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    //
    public function reservationsUser(){
        $member_id=Auth::user()->id;

        $reservations=Reservation::where('member_id', $member_id)->get();

        return view('user.reservation', ['reservations' => $reservations]);
    }


}
