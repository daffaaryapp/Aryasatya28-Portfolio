<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Project;
use App\Models\Report;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

    public function index(){
        $authors = Author::all();
        $reports = Report::all();
        $categories = Category::all();
        $projects = Project::all();

        return view('front.index', compact('categories','authors','reports','projects'));
    }
}
