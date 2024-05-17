<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function index(){
        // return view('frontend.index',[
        //      'categories' =>Category::where('status','show')->get()
        // ]);

        if (Category::where('status', 'show')->count() == 0) {
            $categories= Category::latest()->limit(3)->get();
        } else {
            $categories = Category::where('status', 'show')->get();
        }
        return view('frontend.index', compact('categories'));
   }
}
