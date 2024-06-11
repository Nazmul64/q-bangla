<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserProfileController extends Controller
{
    public function profile(){
        return view('userprofile.userprofile');
    }
    public function userprofileupdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adding image validation rules
        ]);

        if ($request->hasFile('profile_photo')) {

            if ($request->profile_photo !== 'logo.jpg') {
                $oldPhotoPath = public_path('uploads/users_photo/' .Auth::user()->profile_photo);
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath);
                }
            }

            $file = $request->file('profile_photo');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension(); // Using getClientOriginalExtension() instead of getClientOriginalName()
            $file->move(public_path('uploads/users_photo/'), $fileName); // Moving the file with correct path

            User::find(Auth::user()->id)->update([
                'name' => $request->name,
                'profile_photo' => $fileName,
            ]);
            // $referralCode =Str::random(10);
            // if(isset($request->referral_code)){
            //    $uerData=User::where('referral_code',$request->referral_code)->get();
            //    if(count($uerData)>0){
            //     User::insertGetId([
            //         'name'=>$request->name,
            //     ]);
            //    }
            // }else{

            // }

            return back()->with('success', 'User name and photo updated successfully');
        }

        return back()->withErrors(['profile_photo' => 'Profile photo not found']); // Error handling if profile photo is not found
    }

    public function userpasswordupdated(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirmation_password' => 'required', // Adding image validation rules
        ]);
    }

}


