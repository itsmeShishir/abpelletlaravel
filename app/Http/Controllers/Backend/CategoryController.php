<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::orderby('id')->get();;
        return view('admin.category.index',compact('category'));
    }
    public function categoryStatus(Request $request){
        if($request->mode=='true'){
            DB::table('blogcategories')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('blogcategories')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Successfully updated status','status'=>true]);
    }
    public function blogcreate()
    {
        return view('admin.category.create');
    }
    public function blogstore(Request $request)
      {
//         return $request->all();
        $this->validate($request,[
            'name'=>'string|required',
            'description'=>'string|nullable',
            'status'=>'nullable|in:active,inactive'
        ]);
        $data=$request->all();
//        return $data;
        $slug=Str::slug($request->input('name'));
        $slug_count=Category::where('slug',$slug)->count();
        if($slug_count>0){
            $slug = time().'-'.$slug;
        }
        $data['slug']=$slug;
//        return $data;
        $status=Category::create($data);
        if($status){
            return redirect()->route('list.category')->with('success','Category successfully created');
        }
        else{
            return back()->with('error','Something went wrong!');
        }
    }
    public function blogedit($id)
    {
        $category=Category::find($id);
        return view('admin.category.edit',compact('category'));
    }
   
    public function blogupdate(Request $request, $id)
    {
        $category=Category::find($id);
        if($category){
            $this->validate($request,[
                'name'=>'string|required',
                'description'=>'string|nullable',
                'status'=>'nullable|in:active,inactive'
            ]);
            $data=$request->all();
            $status=$category->fill($data)->save();
            if($status){
                return redirect()->route('list.category')->with('success','Category successfully updated');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Category not found');
        }
    }
    public function blogdestroy($id)
    {
        $category=Category::find($id);
        if($category){
            $status=$category->delete();
            if($status){
                return redirect()->route('list.category')->with('success','Blog Category delete Successfully');
            }

        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
