<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index(){
        $about=About::first();
        return view('admin.aboutpage',compact('about'));
    }
    
    public function update(Request $request){
        $about=About::first();
        $status = $about->update([
            'messagemd'=>$request->input('messagemd'),
            'whoweare'=>$request->input('whoweare'),
            'history'=>$request->input('history'),
            'photo'=>$request->photo,
        ]);
        if($status){
            return redirect()->back()->with('success','About us Updated Successfully');
        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
