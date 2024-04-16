<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\NewsPaper;
use App\Models\Magazine;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        $bookCount=Book::count();
        $userCount=User::count();
        $newsPaperCount=NewsPaper::count();
        $magazineCount=Magazine::count();

        return view('admin.adminDashboard', ['bookCount' => $bookCount, 'userCount' => $userCount, 'newsPaperCount' => $newsPaperCount, 'magazineCount' => $magazineCount]);
    }

}
