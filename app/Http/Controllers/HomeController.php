<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\NewsPaper;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        $bookCount=Book::count();
        $userCount=User::count();
        $newsPaperCount=NewsPaper::count();

        return view('admin.adminDashboard', ['bookCount' => $bookCount, 'userCount' => $userCount, 'newsPaperCount' => $newsPaperCount]);
    }

}
