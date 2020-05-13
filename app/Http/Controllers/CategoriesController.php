<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getIndex($categoryData){
        $categoryData = Categories::all();
        $routename = Categories::all()->pluck('route');
        return view('frontend.partials.{$routename}', compact('categoryData'));
    }
}
