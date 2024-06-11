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

class TeamController extends Controller
{
    public function generalView(){

        return view('admin.team.generalview');
    }

}
