<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name'=>'required',
            'category_tagline' => 'required',
            'category_photo' => 'required',
        ]);

        // photo uploads statr
        $file = $request->file('category_photo');
        $category_photos = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension(); // Getting the original extension of the uploaded file
        $path = "uploads/category_photos"; // Assuming you want to save photos in this directory

        // Move the uploaded file to the desired location
        $file->move(public_path($path), $category_photos);

        // photo uploads end
       Category::create([
            'category_name'=>$request->category_name,
            'category_tagline' => $request->category_tagline,
            'category_photo' => $category_photos,
            'created_at'=>Carbon::now(),
       ]);
        Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-right"]);
       return back()->with('insert','Data Insert Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
