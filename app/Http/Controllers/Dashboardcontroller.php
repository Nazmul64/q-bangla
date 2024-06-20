<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{
  public function account(){
     return view('admin.account.account');
  }
    public function commission()
    {
        return view('admin.account.commission');
    }
    public function profile_view()
    {
        return view('admin.account.profile_view');
    }
    public function changepassword()
    {
        return view('admin.account.changepassword');
    }

}
