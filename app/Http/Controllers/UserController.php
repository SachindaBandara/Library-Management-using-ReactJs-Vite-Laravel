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


    public function deleteUserAdmin($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect(route('admin_users'))->with('success', 'User deleted successfully');
    }
}
