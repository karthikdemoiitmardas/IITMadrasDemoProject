<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $projects =Project::all();
        return view('project',compact('projects'));
    }

    public function by_category($slug){
        $category=Category::whereSlug($slug)->first();
        $projects =Project::whereCategoryId($category->id)->get();
        return view('project',compact('projects'));
    }
}
