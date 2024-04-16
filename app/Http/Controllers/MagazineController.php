<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Magazine;

class MagazineController extends Controller
{
    //

    public function getAllMagazinesAdmin(){
        $magazines=Magazine::all();
        return view('admin.magazines', ['magazines' => $magazines]);
    }

    public function addNewsPaperAdmin(){
        return view('admin.addNewsPaper');
    }

    public function storeNewsPaperAdmin(Request $request){
        $data=$request->validate([
            'title'=>'required',
            'publisher'=>'required',
            'publicationDate'=>'required',
            'shelfLocation'=>'required'
        ]);

        $newNewsPaper = NewsPaper::create($data);

        return redirect(route('admin_addNewsPaper'))->with('success', 'News Paper added successfully');
    }


    public function editNewsPaperAdmin(NewsPaper $newsPaper){
        return view('admin.editNewsPaper', ['newsPaper' => $newsPaper]);
    }

    public function updateNewsPaperAdmin(NewsPaper $newsPaper, Request $request){
        $data=$request->validate([
            'title'=>'required',
            'publisher'=>'required',
            'publicationDate'=>'required',
            'shelfLocation'=>'required'
        ]);

        $newsPaper-> update($data);

        return redirect(route('admin_newsPapers'))->with('success', 'Newspaper edited successfully');
    }

    public function deleteNewsPaperAdmin($id){
        $newsPaper = NewsPaper::findOrFail($id);
        $newsPaper->delete();

        return redirect(route('admin_newsPapers'))->with('success', 'Newspaper deleted successfully');
    }

    public function getAllNewsPaperUser(){
        $newsPapers=NewsPaper::all();
        return view('user.viewBooks', ['newsPapers' => $newsPapers]);
    }
}
