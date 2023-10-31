<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product=Product::orderby('id','DESC')->get();
        return view('admin.product.index',compact('product'));
    }
    public function adminproductStatus(Request $request){
        if($request->mode=='true'){
            DB::table('products')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('products')->where('id',$request->id)->update(['status'=>'inactive']);
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
        return view('admin.product.create');
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
            'cat_id'=>'nullable|exists:categories,id',
            'status'=>'nullable|in:active,inactive'
        ]);
        $data= $request->all();
        $slug= Str::slug($request->input('name'));
        $slug_count=Product::where('slug',$slug)->count();
        if($slug_count>0){
            $slug =time().'-'.$slug;
        }
        $data['slug']=$slug;
        //return $data;
        $status=Product::create($data);
        if($status){
            return redirect()->route('adminproduct.index')->with('success','Product Created Successfully');
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
        $product=Product::find($id);
        if($product){
            return view('admin.product.edit',compact(['product']));
        }else{
            return back()->with('error','product Not Found Make a new Category');
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
        $product=Product::find($id);
        if($product){
            $this->validate($request,[
                'name'=>'string|required',
                'description'=>'string|nullable',
                'photo'=>'required',
                'cat_id'=>'required|exists:categories,id',
                'status'=>'nullable|in:active,inactive'
            ]);

            $data=$request->all();
            $status=$product->fill($data)->save();
            if($status){
                return redirect()->route('adminproduct.index')->with('success','Product successfully updated');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Product not found');
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
        $product=Product::find($id);
        if($product){
            $status=$product->delete();
            if($status){
                return redirect()->route('adminproduct.index')->with('success','Product delete Successfully');
            }

        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
