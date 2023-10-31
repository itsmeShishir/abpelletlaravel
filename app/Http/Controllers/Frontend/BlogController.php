<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
        $blog = Blog::orderby('id')->get();
        return view('Frontend.blog',compact('blog'));
    }

    public function blogshow($slug){
        $data=Blog::where('slug',$slug)->first();
        if($data){
            return view('Frontend.blogdetail',['blog'=>$data]);
        }
        else{
            return 'Blog details not Found';
        }
    }


}
