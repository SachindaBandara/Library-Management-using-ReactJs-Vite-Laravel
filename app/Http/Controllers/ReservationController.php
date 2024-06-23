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

    public function getBookUser(Request $request){
        $request = $request->validate([
            'title' => 'required'
        ]);

        $book_title = $request['title'];

        $book = Book::find($book_title);

        #if(is_null($book)){
            #return redirect(route('admin_issue_book'))->with('status', 'Given Book not found.');
        #}
        #else{
            #if( $book['status'] == 'Borrowed'){
                #return redirect(route('admin_issue_book'))->with('status', 'Given Book already borrowed by someone!');
            #}
            #elseif($book['status'] == 'Reserved'){
            #    return redirect(route('admin_issue_book'))->with('status', 'Given Book already reserved by someone!');
            #}
            #else{
            #    return redirect(route('admin_issue_book'))->with('book', $book);
            #}
        #}
    }


}
