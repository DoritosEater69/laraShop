<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function getIndex(){
        $categories = Categories::all();
        return view('frontend.home.welcome', ['categories' => $categories]);
    }
}
