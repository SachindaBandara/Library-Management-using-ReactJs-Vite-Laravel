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

        foreach ($reservations as $reservation){
            $book_id=$reservation->book_id;
            $reservation->title=Book::where('id', $book_id)->first()->title;
            $reservation->shelfLocation=Book::where('id', $book_id)->first()->shelfLocation;
            $reservation->status=Book::where('id', $book_id)->first()->status;
        }

        return view('user.reservation', ['reservations' => $reservations]);
    }

    public function makeReservationsUser(){
        return view('user.makeReservation');
    }


}
