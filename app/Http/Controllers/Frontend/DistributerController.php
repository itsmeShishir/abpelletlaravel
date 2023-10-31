<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Distributer;
use Illuminate\Support\Facades\DB;

class DistributerController extends Controller
{
    public function index(){
        $dist = Distributer::orderby('id')->get();;
        return view('Frontend.distributer',compact('dist'));
    }
}
