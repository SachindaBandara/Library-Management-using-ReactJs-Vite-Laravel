<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getAllUsersAdmin(){
        $users=User::all();
        return view('admin.users', ['users' => $users]);
    }

    public function addUserAdmin(){
        return view('admin.addUser');
    }

    public function storeUserAdmin(Request $request){
        $data=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'userType'=>'required',
            'password' =>'required'
        ]);

        $data['password'] = Hash::make($data['password']);

        $newUser = User::create($data);

        return redirect(route('admin_addUser'))->with('success', 'User added successfully');
    }


    public function editUserAdmin(User $user){
        return view('admin.editBook', ['book' => $book]);
    }

    public function updateBookAdmin(Book $book, Request $request){
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

    public function deleteBookAdmin($id){
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect(route('admin_books'))->with('success', 'Book deleted successfully');
    }
}
