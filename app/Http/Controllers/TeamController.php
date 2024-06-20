<?php

namespace App\Http\Controllers;

use App\Models\BusinessSoluton;
use App\Models\Goalobjective;
use App\Models\Ourservices;
use App\Models\sitemainlogo;
use App\Models\totalsolution;
use App\Models\totalsolutionheres;
use App\Models\totalsolutions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function generalView(){

        return view('admin.team.generalview');
    }

    public function partnerTeam()
    {
        $teams = User::where('created_by', Auth::user()->id);

        if(request()->mem_id){
            $teams = $teams->where('created_by', request()->mem_id);
        }

        $teams = $teams->get();

        return view('admin.team.partnerteam', compact('teams'));
    }
    public function partnerAdd(){
        return view('admin.team.register');
    }
    public function sponsorlist()
    {
        return view('admin.team.sponsorlist');
    }
    public function sponsorlavel()
    {
        return view('admin.team.sponsorlavel');
    }



    public function teamRegister(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'user_name' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'number' => 'required',
            'country' => 'required',
            'sponsor_id' => 'required',
            'placement_id' => 'required',
            'position_set' => 'required',
            'password_confirmation' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'number' => $data['number'],
            'country' => $data['country'],
            'user_name' => $data['user_name'],
            'sponsor_id' => $data['sponsor_id'],
            'placement_id' => $data['placement_id'],
            'position_set' => $data['position_set'],
            'password' => Hash::make($data['password']),
            'created_by' => Auth::user()->id,
        ]);

        return redirect()->route('generalView');
    }

}
