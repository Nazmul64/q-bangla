<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradeViewController extends Controller
{
    public function tradeform(){
         return view('admin.tradeview.tradeform');
    }
    public function tradereport()
    {
        return view('admin.tradeview.tradereport');
    }
    public function mytradelist()
    {
        return view('admin.tradeview.mytradelist');
    }
}
