<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        $bookCount=Book::count();
        return view('admin.adminDashboard', ['bookCount' => $bookCount]);
    }

}
