<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teams;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function index(){
        $teams = Teams::orderby('id')->get();
        return view('Frontend.teams',compact('teams'));
    }
}
