<?php

namespace App\Http\Controllers;

use App\Models\BusinessSoluton;
use App\Models\Goalobjective;
use App\Models\sitemainlogo;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function frontend(){
        $businesssolution=BusinessSoluton::all();
        $goalobjective=Goalobjective::all();
        $sitelogo = sitemainlogo::all();
        return view('frontend.index',compact('businesssolution','goalobjective', 'sitelogo'));
    }

}
