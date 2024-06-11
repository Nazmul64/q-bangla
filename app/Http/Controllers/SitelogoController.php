<?php

namespace App\Http\Controllers;

use App\Models\sitelogo;
use App\Models\sitemainlogo;
use Illuminate\Http\Request;

class SitelogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sitelogo = sitemainlogo::all();
        return view('admin.sitelogo.index',compact('sitelogo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.sitelogo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'main_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
        ]);

        // Check if the file exists in the request
        if ($request->hasFile('main_logo')) {
            $file = $request->file('main_logo');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $path = public_path('frontend/site_logos');
            $file->move($path, $fileName);
            sitemainlogo::create([
                'main_logo' => $fileName,
            ]);
            return back()->with('success', 'Logo uploaded successfully!');
        }
        return back()->with('error', 'No file uploaded.');
    }


    /**
     * Display the specified resource.
     */
    public function show(sitelogo $sitelogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sitelogo $sitelogo)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sitelogo $sitelogo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sitelogo $sitelogo)
    {
        //
    }
}
