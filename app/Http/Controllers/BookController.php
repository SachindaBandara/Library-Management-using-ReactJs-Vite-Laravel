<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //

    public function addBook(){
        return view('admin.addBook');
    }

    public function storeBook(Request $request){
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

    public function getAllBooks(){
        $books=Book::all();
        return view('admin.books', ['books' => $books]);
    }

    public function editBook(Book $book){
        return view('admin.editBook', ['book' => $book]);
    }

    public function updateBook(Book $book, Request $request){
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

    public function deleteBook($id){
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect(route('admin_books'))->with('success', 'Book deleted successfully');
}


}
