<?php

namespace App\Http\Controllers;

use App\Models\totalsolutionheres;
use App\Models\totalsolutions;
use Illuminate\Http\Request;

class totalsolutionhere extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $businesshere =totalsolutionheres::all();
        return view('admin.businesshere.index', compact('businesshere'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.businesshere.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'solution_title' => 'required',
            'solution_description' => 'required',
            'solution_one' => 'required',
            'solution_two' => 'required',
            'solution_three' => 'required',
            'solution_four' => 'required',
            'solution_photo' => 'required|image', // Adjust file types and size as needed
        ]);

        // Check if the file exists in the request
        if ($request->hasFile('solution_photo')) {
            $file = $request->file('solution_photo');

            // Generate a unique filename
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();

            // Define the directory path to store the file
            $path = public_path('frontend/business_solution');

            // Move the uploaded file to the defined directory
            $file->move($path, $fileName);
        }
        // Insert data into the database
        totalsolutionheres::create([
            'solution_title' => $request->solution_title,
            'solution_description' => $request->solution_description,
            'solution_one' => $request->solution_one,
            'solution_two' => $request->solution_two,
            'solution_three' => $request->solution_three,
            'solution_four' => $request->solution_four,
            'solution_photo' => $fileName ?? null, // If file exists, store the filename, otherwise, store null
        ]);

        // Redirect back with success message
        return back()->with('success', 'Data Inserted Successfully');
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
        $businesshere = totalsolutionheres::find($id);
        return view('admin.businesshere.edit', compact('businesshere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request
        $request->validate([
            'solution_title' => 'required',
            'solution_description' => 'required',
            'solution_one' => 'required',
            'solution_two' => 'required',
            'solution_three' => 'required',
        ]);

        // Find the total solution record by ID
        $solution = totalsolutionheres::find($id);

        // Check if a new image file is uploaded
        if ($request->hasFile('new_business_images')) {
            // Remove the previous image file
            if (!empty($solution->solution_photo)) {
                unlink(public_path('frontend/business_solution/' . $solution->solution_photo));
            }

            // Upload and save the new image file
            $file = $request->file('new_business_images');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $path = "frontend/business_solution";
            $file->move(public_path($path), $fileName);
            $solution->update([
                'solution_photo' => $fileName,
            ]);
        }

        // Update other fields of the total solution record
        $solution->update([
            'solution_title' => $request->solution_title,
            'solution_description' => $request->solution_description,
            'solution_one' => $request->solution_one,
            'solution_two' => $request->solution_two,
            'solution_three' => $request->solution_three,
            'solution_four' => $request->solution_four,
        ]);

        // Redirect back
        return back()->with('success', 'Total solution updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $totalsolution= totalsolutions::find($id);
        unlink('frontend/business_solution/'. $totalsolution->solution_photo);
        $totalsolution->delete();
        return back()->with('delete','Data Deleted Successfully');
    }
}
