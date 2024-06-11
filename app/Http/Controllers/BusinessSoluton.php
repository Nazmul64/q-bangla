<?php

namespace App\Http\Controllers;

use App\Models\BusinessSoluton as ModelsBusinessSoluton;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BusinessSoluton extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $businesssolution = ModelsBusinessSoluton::all();
        return view('admin.business_top.index',compact('businesssolution'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view('admin.business_top.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'business_tag' => 'required',
            'business_title' => 'required',
            'business_description' => 'required',
            'business_images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adding image validation rules
        ]);

        if ($request->hasFile('business_images')) {
            $file = $request->file('business_images');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension(); // Use getClientOriginalExtension to get the file extension
            $path = "frontend/business_photos/";
            $file->move(public_path($path), $fileName); // Use public_path() to get the correct path

            // Using Eloquent to insert data
            ModelsBusinessSoluton::create([
                'business_tag' => $request->business_tag,
                'business_title' => $request->business_title,
                'business_description' => $request->business_description,
                'business_images' => $fileName,
                'created_at' => Carbon::now()
            ]);

            return back()->with('insert', 'Data Inserted Successfully');
        }

        // Handle if no file is uploaded
        return back()->withErrors(['message' => 'Please upload an image']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $businessSolution=ModelsBusinessSoluton::find($id);
        return view('admin.business_top.show',compact('businessSolution'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $businesssolution = ModelsBusinessSoluton::find($id);
      return view('admin.business_top.edit',compact('businesssolution'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $businessSolution = ModelsBusinessSoluton::find($id); // Find the business solution by ID

        if ($request->hasFile('new_business_images')) {
            // Delete the old image file
            unlink(public_path('frontend/business_photos/' . $businessSolution->business_images));

            // Upload and save the new image file
            $file = $request->file('new_business_images');
            $new_business_images = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $path = 'frontend/business_photos/';
            $file->move(public_path($path), $new_business_images);
        } else {
            $new_business_images = $businessSolution->business_images; // Keep the existing image if no new image is uploaded
        }

        // Update business solution data
        $businessSolution->update([
            'business_tag' => $request->business_tag,
            'business_title' => $request->business_title,
            'business_description' => $request->business_description,
            'business_images' => $new_business_images,
        ]);

        return back()->with('update', 'Business solution updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $delete=ModelsBusinessSoluton::find($id);
        unlink(public_path('frontend/business_photos/'. $delete->business_images));
        $delete->delete();
        return back()->with('delete', 'Business solution delete successfully');
    }
}
