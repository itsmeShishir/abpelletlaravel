<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;


class HomeController extends Controller
{
    public function index(){
        $home=Home::first();
        return view('admin.house',compact('home'));
    }
    public function update(Request $request){
        $home=Home::first();
        $status = $home->update([
            'photo'=>$request->photo,
            'danatitle'=>$request->danatitle,
            'author'=>$request->author,
            'description'=>$request->input('description'),
        ]);
        if($status){
            return redirect()->back()->with('success','Home Data Updated Successfully');
        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
