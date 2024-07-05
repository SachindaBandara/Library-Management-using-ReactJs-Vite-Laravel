<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fine;


class FineController extends Controller
{
    //
    public function showFineDetailsAdmin(){
        return view('admin.payFine');

    }

}
