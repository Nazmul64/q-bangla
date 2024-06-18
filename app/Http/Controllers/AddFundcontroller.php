<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddFundcontroller extends Controller
{
  public function addfund(){
    return view('admin.transactions.addfund');
  }
}
