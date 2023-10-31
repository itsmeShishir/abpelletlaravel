<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Association;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AssociationController extends Controller
{
    public function index()
    {
        $category = Association::orderby('id')->get();;
        return view('admin.Association.index',compact('category'));
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
        return view('admin.Association.create');
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
            'photo'=>'required',
            'link'=>'string|required',
        ]);
        $data= $request->all();
        $status=Association::create($data);
        if($status){
            return redirect()->route('adminAssociation.index')->with('success','Association Created Successfully');
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
        $company=Association::find($id);
        if($company){
            return view('admin.Association.edit',compact(['company']));
        }else{
            return back()->with('error','Companies Not Found Make a new Category');
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
        $company=Association::find($id);
        if($company){
            $this->validate($request,[
                'photo'=>'required',
                'link'=>'string|required',
            ]);

            $data=$request->all();
            $status=$company->fill($data)->save();
            if($status){
                return redirect()->route('adminAssociation.index')->with('success','Association successfully updated');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Companies not found');
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
        $company=Association::find($id);
        if($company){
            $status=$company->delete();
            if($status){
                return redirect()->route('adminAssociation.index')->with('success','Association delete Successfully');
            }

        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
