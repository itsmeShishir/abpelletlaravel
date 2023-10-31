<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Distributer; 

class DistributionController extends Controller
{
    public function index()
    {
        $distributter=Distributer::orderby('id','DESC')->get();
        return view('admin.distributer.index',compact('distributter'));
    }
    public function admindistributterStatus(Request $request){
        if($request->mode=='true'){
            DB::table('distributters')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('distributters')->where('id',$request->id)->update(['status'=>'inactive']);
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
        return view('admin.distributer.create');
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
        ]);
        $data= $request->all();
        $status=Distributer::create($data);
        if($status){
            return redirect()->route('admindistributter.index')->with('success','distributter Created Successfully');
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
        $distributter=Distributer::find($id);
        if($distributter){
            return view('admin.distributter.edit',compact(['distributter']));
        }else{
            return back()->with('error','distributer Not Found Make a new Category');
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
        $distributter=Distributer::find($id);
        if($distributter){
            $this->validate($request,[
                'name'=>'string|required',
                'description'=>'string|nullable',
            ]);

            $data=$request->all();
            $status=$distributter->fill($data)->save();
            if($status){
                return redirect()->route('admin.distributter.index')->with('success','distributter successfully updated');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','distributer not found');
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
        $distributter=Distributer::find($id);
        if($distributter){
            $status=$distributter->delete();
            if($status){
                return redirect()->route('admindistributter.index')->with('success','distributter delete Successfully');
            }

        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
