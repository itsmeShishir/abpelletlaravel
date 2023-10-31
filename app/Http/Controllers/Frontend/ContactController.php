<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('Frontend.contact', compact('setting'));
    }

    public function ContactForm(Request $request)
    {
        $data = array();
        $data['fullname'] = $request->fullname;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['message'] = $request->message;
        Contact::insert($data);
        // return $data;
        $notification = array(
            'message' => 'Your Message Sent Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with('success','Contact us Message Send Successfully');
    }
}
