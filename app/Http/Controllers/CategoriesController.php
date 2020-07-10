<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getIndex(){
        $category = Categories::all();
        return view('frontend.home.welcome', compact('category');
    }
}
