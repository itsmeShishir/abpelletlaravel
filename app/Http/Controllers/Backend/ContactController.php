<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact=Contact::orderby('id','DESC')->get();
        return view('admin.contact',compact('contact'));
    }
    public function destroy($id)
    {
        $contact=Contact::find($id);
        if($contact){
           $status=$contact->delete();
           if($status){
               return redirect()->back()->with('success','Contact delete Successfully');
           }

        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
