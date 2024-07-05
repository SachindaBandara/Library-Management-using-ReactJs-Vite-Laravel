<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WishList;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class WishListController extends Controller
{
    //
    public function addWishlistUser(Request $request){
        $data=$request->validate([
            "book_id"=> "required"
        ]);

        $data['member_id']=Auth::user()->id;
        $data['added_at']=Carbon::now();

        $exist=WishList::where('book_id',$data['book_id'])->where('member_id',$data['member_id'])->first();
        if(is_null($exist)){
            WishList::create($data);
        }
    }
}
