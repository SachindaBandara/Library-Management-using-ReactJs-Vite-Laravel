<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getAllUsersAdmin(){
        return view('admin.users');
    }

    public function addUserAdmin(){
        return view('admin.addUser');
    }
}
