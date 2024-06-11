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
use Illuminate\Support\Facades\Artisan;

class FrontendController extends Controller
{
    public function frontend(){
        $businesssolution=BusinessSoluton::all();
        $goalobjective=Goalobjective::all();
        $totalsolution = totalsolutionheres::all();
        $sitelogo = sitemainlogo::all();
        $ourservices =Ourservices::all();
        return view('frontend.index',compact('businesssolution','goalobjective', 'sitelogo', 'totalsolution', 'ourservices'));
    }

    public function cacheClear(){
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('optimize:clear');
        Artisan::call('migrate');

        dd("done");
    }

}
