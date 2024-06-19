<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddFundcontroller extends Controller
{
  public function addfund(){
    return view('admin.transactions.addfund');
  }
  public function addeddeposite(){
    return view('admin.transactions.addeddeposite');
  }
public function addedbankdeposite(){
        return view('admin.transactions.addedbankdeposite');
    }
    public function balancetransfer()
    {
        return view('admin.transactions.balancetransfer');
    }
public function balancetransfer_report(){
  return view('admin.transactions.balancetransfer_report');
}
public function senderrecvierreport(){
     return view('admin.transactions.balance_receiver_report');
}
}


