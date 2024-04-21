<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\NewsPaper;
use App\Models\Magazine;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function indexAdmin() {
        $bookCount=Book::count();
        $userCount=User::count();
        $newsPaperCount=NewsPaper::count();
        $magazineCount=Magazine::count();

        return view('admin.adminDashboard', ['bookCount' => $bookCount, 'userCount' => $userCount, 'newsPaperCount' => $newsPaperCount, 'magazineCount' => $magazineCount]);
    }

    public function indexUser() {
        $member_id=Auth::user()->id;

        $notifications = Notification::where('member_id', $member_id)->get();

        return view('user.userDashboard', ['notifications' => $notifications]);
    }

}
