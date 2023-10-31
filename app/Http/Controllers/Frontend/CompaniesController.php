<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Companies;
use Illuminate\Support\Facades\DB;

class CompaniesController extends Controller
{
    public function index(){
        $company = Companies::orderby('id')->get();
        return view('Frontend.ourcompanies',compact('company'));
    }
}
