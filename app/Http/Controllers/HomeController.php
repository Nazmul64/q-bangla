<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailOffer;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home',[
           'total_user'=>User::count(),
           'total_admin' => User::where('role',2)->count(),
           'total_customer' => User::where('role', 2)->count(),
        ]);
    }
    public function emailoffer(){
        $customers=User::where('role','!=',2)->get();
        return view('emailoffer',compact('customers'));
    }
    public function singlemailoffer($id){
        Mail::to(User::find($id)->email)->send(new EmailOffer());
        return back();
    }
    public function checkemailoffer(Request $request){
      foreach($request->check as $id){
            Mail::to(User::find($id)->email)->send(new EmailOffer());
            return back();
      }
    }
}
