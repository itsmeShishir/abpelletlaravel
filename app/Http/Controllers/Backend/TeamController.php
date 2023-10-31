<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teams;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index()
    {
        $category = Teams::orderby('id')->get();;
        return view('admin.Teams.index',compact('category'));
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
        return view('admin.Teams.create');
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
            'Name'=>'string|required',
            'role'=>'string|required',
            'linkend'=>'string|required',
            'Email'=>'string|required',
        ]);
        $data= $request->all();
        $status=Teams::create($data);
        if($status){
            return redirect()->route('adminTeams.index')->with('success','Team Created Successfully');
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
        $company=Teams::find($id);
        if($company){
            return view('admin.Teams.edit',compact(['company']));
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
        $company=Teams::find($id);
        if($company){
            $this->validate($request,[
                'photo'=>'required',
                'Name'=>'string|required',
                'role'=>'string|required',
                'linkend'=>'string|required',
                'Email'=>'string|required',
            ]);

            $data=$request->all();
            $status=$company->fill($data)->save();
            if($status){
                return redirect()->route('adminTeams.index')->with('success','Teams successfully updated');
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
        $company=Teams::find($id);
        if($company){
            $status=$company->delete();
            if($status){
                return redirect()->route('adminTeams.index')->with('success','Teams delete Successfully');
            }

        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
