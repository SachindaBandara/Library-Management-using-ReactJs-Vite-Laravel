<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //

    public function addBook(){
        $books=Book::all();
        return view('admin.addBook', ['books' => $books]);
    }

    public function getAllBooks(){
        $books=Book::all();
        return view('admin.books', ['books' => $books]);
    }

}
