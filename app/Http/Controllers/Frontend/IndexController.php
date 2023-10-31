<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Blog;

class IndexController extends Controller
{
    public function index()
    {
        $slider = Slider::orderBy('id','DESC')->limit('5')->get();
        $blog = Blog::orderBy('id','DESC')->limit('3')->get();
        $home = Home::first();
        $categories = Category::with('products')->orderBy('name')->get();
        return view('Frontend.index', compact('home','categories','slider','blog'));
    }
    public function show($slug){
            
        $data=Product::where('slug',$slug)->first();
        if($data){
            return view('Frontend.productdetails',['product'=>$data]);
        }
        else{
            return 'Product details not Found';
        }
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

    public function mainCategory(Request $request,$id){
        $data =  Category::with('products')->find($id);
        return view('Frontend.product',['categories'=>$data]);
    }
}
