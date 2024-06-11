<?php

namespace App\Http\Controllers;

use App\Models\Goalobjective as ModelsGoalobjective;
use Illuminate\Http\Request;

class Goalobjective extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $goalobjective = ModelsGoalobjective::all();
        return view('admin.goal_category.index',compact('goalobjective'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.goal_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'goal_title' => 'required',
            'goal_description' => 'required',
            'goal_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the file type and size as needed
        ]);

        if ($request->hasFile('goal_photo')) {
            $file = $request->file('goal_photo');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $path = "frontend/object_photos/";
            $file->move(public_path($path), $fileName);

            ModelsGoalobjective::insert([
                'goal_title' => $request->goal_title,
                'goal_description' => $request->goal_description,
                'goal_photo' => $fileName,
            ]);

            return back()->with('success', 'Goal created successfully.');
        }

        return back()->with('error', 'Failed to create goal.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $goal= ModelsGoalobjective::find($id);
        return view('admin.goal_category.show',compact('goal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $goalobjective=ModelsGoalobjective::find($id);
        return view('admin.goal_category.edite',compact('goalobjective'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $goal = ModelsGoalobjective::find($id);

        if (!$goal) {
            return back()->with('error', 'Goal not found.');
        }

        if ($request->hasFile('new_goal_photo')) {
            $existingPhoto = $goal->goal_photo;
            if ($existingPhoto) {
                unlink(public_path('frontend/object_photos/' . $existingPhoto));
            }

            $file = $request->file('new_goal_photo');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $path = "frontend/object_photos";
            $file->move(public_path($path), $fileName);

            $goal->update([
                'goal_photo' => $fileName,
            ]);
        }

        $goal->update([
            'goal_title' => $request->goal_title,
            'goal_description' => $request->goal_description,
        ]);

        return back()->with('success', 'Goal updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $goal_photo = ModelsGoalobjective::find($id);
        unlink('frontend/object_photos/'.$goal_photo->goal_photo);
        $goal_photo->delete();
        return back();
    }
}
