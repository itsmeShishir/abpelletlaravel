<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Blog;

class BlogController extends Controller
{
     public function index()
    {
        $Blog = Blog::orderby('id')->get();;
        return view('admin.Blog.index',compact('Blog'));
    }
    public function admincompanyStatus(Request $request){
        if($request->mode=='true'){
            DB::table('companys')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('companys')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Successfully updated status','status'=>true]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'required',
            'cat_id'=>'nullable|exists:blogcategories,id',
            'status'=>'nullable|in:active,inactive'
        ]);
        $data= $request->all();
        $slug= Str::slug($request->input('name'));
        $slug_count=Blog::where('slug',$slug)->count();
        if($slug_count>0){
            $slug =time().'-'.$slug;
        }
        $data['slug']=$slug;
        //return $data;
        $status=Blog::create($data);
        if($status){
            return redirect()->route('adminBlog.index')->with('success','Blog Created Successfully');
        }else{
            return back()->with('error','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Blog=Blog::find($id);
        if($Blog){
            return view('admin.Blog.edit',compact(['Blog']));
        }else{
            return back()->with('error','BlogCategory Not Found Make a new Category');
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Blog=Blog::find($id);
        if($Blog){
            $this->validate($request,[
                'name'=>'string|required',
                'description'=>'string|nullable',
                'photo'=>'required',
                'cat_id'=>'required|exists:categories,id',
                'status'=>'nullable|in:active,inactive'
            ]);

            $data=$request->all();
            $status=$Blog->fill($data)->save();
            if($status){
                return redirect()->route('adminBlog.index')->with('success','Blog successfully updated');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Blog not found');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Blog=Blog::find($id);
        if($Blog){
            $status=$Blog->delete();
            if($status){
                return redirect()->route('adminBlog.index')->with('success','Blog delete Successfully');
            }

        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
