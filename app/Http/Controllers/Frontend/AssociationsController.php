<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Association;
use Illuminate\Support\Facades\DB;

class AssociationsController extends Controller
{
    public function index(){
        $associations = Association::orderby('id')->get();
        return view('Frontend.associations',compact('associations'));
    }
}
