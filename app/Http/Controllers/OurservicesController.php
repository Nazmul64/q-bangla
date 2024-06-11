<?php

namespace App\Http\Controllers;

use App\Models\Ourservices;
use Illuminate\Http\Request;

class OurservicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.ourservices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ourservice_tag' => 'required',
            'ourservices_shortdescription' => 'required', // Corrected typo
            'main_title' => 'required',
            'main_description' => 'required',
            'main_logo' => 'required|image', // Added image validation
        ]);

        $file = $request->file('main_logo');
        $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension(); // Use getOriginalExtension to get the extension
        $path = "public/frontend/ourservices_photos";
        $file->move(base_path($path), $fileName);

        // Create a new instance of Ourservices model and save it to the database
        ourservices::create([
            'ourservice_tag' => $request->ourservice_tag,
            'ourservices_shortdescription' => $request->ourservices_shortdescription, // Corrected typo
            'main_title' => $request->main_title,
            'main_description' => $request->main_description,
            'main_logo' => $fileName, // Store the file name in the database
        ]);

        return back()->with('success', 'Data Inserted Successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Ourservices $ourservices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ourservices $ourservices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ourservices $ourservices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ourservices $ourservices)
    {
        //
    }
}
