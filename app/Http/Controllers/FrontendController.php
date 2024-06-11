<?php

namespace App\Http\Controllers;

use App\Models\BusinessSoluton;
use App\Models\Goalobjective;
use App\Models\Ourservices;
use App\Models\sitemainlogo;
use App\Models\totalsolution;
use App\Models\totalsolutionheres;
use App\Models\totalsolutions;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function frontend(){
        $businesssolution=BusinessSoluton::all();
        $goalobjective=Goalobjective::all();
        $totalsolution = totalsolutionheres::all();
        $sitelogo = sitemainlogo::all();
        $ourservices = Ourservices::all();
        return view('frontend.index',compact('businesssolution','goalobjective', 'sitelogo', 'totalsolution', 'ourservices'));
    }

}
