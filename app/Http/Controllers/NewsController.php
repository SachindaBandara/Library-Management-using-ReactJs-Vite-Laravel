<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    //
    public function getNews() {
        $news=News::all();
        return view('user.userDashboard', ['news' => $news]);

    }
}
