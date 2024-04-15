<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsPaper;

class NewsPaperController extends Controller
{
    //
    public function getAllNewsPapersAdmin(){
        $newsPapers=NewsPaper::all();
        return view('admin.newsPapers', ['newsPapers' => $newsPapers]);
    }

    public function addNewsPaperAdmin(){
        return view('admin.addNewsPaper');
    }

    public function storeNewsPaperAdmin(Request $request){
        $data=$request->validate([
            'title'=>'required',
            'author'=>'required',
            'ISBN'=>'required',
            'genre'=>'required',
            'publicationYear'=>'required',
            'description'=>'required',
            'quantityAvailable'=>'required'
        ]);

        $newBook = Book::create($data);

        return redirect(route('admin_addBook'))->with('success', 'Book added successfully');
    }


    public function editNewsPaperAdmin(Book $book){
        return view('admin.editBook', ['book' => $book]);
    }

    public function updateNewsPaperAdmin(Book $book, Request $request){
        $data=$request->validate([
            'title'=>'required',
            'author'=>'required',
            'ISBN'=>'required',
            'genre'=>'required',
            'publicationYear'=>'required',
            'description'=>'required',
            'quantityAvailable'=>'required'
        ]);

        $book-> update($data);

        return redirect(route('admin_books'))->with('success', 'Book edited successfully');
    }

    public function deleteNewsPaperAdmin($id){
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect(route('admin_books'))->with('success', 'Book deleted successfully');
    }

    public function getAllNewsPaperUser(){
        $newsPapers=NewsPaper::all();
        return view('user.viewBooks', ['newsPapers' => $newsPapers]);
    }
}
