<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Report;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

    public function index(){
        $authors = Author::all();
        $reports = Report::all();
        $categories = Category::all();

        return view('front.index', compact('categories','authors','reports'));
    }
}
