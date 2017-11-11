<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderby('id','desc')->get();
        return view('admin.team.manage',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
            'name'=>'required',
            'position'=>'required',
            'image'=>'required|image',
            'website_url'=>'url',
            'comment'=>'required'
        ]);

        $image = $request->file('image');
        $directory = 'images/team-images/';
        $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);

        $unique_id = time().md5(rand(100000,10000000));

        DB::table('teams')->insert([
            'unique_id'=>$unique_id,
            'name'=>$request->name,
            'position'=>$request->position,
            'image'=>$imageUrl,
            'website_url'=>$request->website_url,
            'comment'=>$request->comment,
            'status'=>$request->status,
        ]);
        return redirect('/dashboard/team/manage')->with('message','New team information saved successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($unique_id)
    {
        $team = Team::where('unique_id',$unique_id)->first();
        return view('admin.team.show',compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($unique_id)
    {
        $team = Team::where('unique_id',$unique_id)->first();
        return view('admin.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $unique_id)
    {
        $this->validate($request,[
            'name'=>'required',
            'position'=>'required',
            'image'=>'image',
            'website_url'=>'url',
            'comment'=>'required'
        ]);
        $imageUrl = $request->previousImageUrl;
        if($request->hasFile('image')){
            unlink($imageUrl);
            $image = $request->file('image');
            $directory = 'images/team-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $image->move($directory,$imageName);
        }
        DB::table('teams')
            ->where('unique_id',$unique_id)
            ->update([
                'name'=>$request->name,
                'position'=>$request->position,
                'image'=>$imageUrl,
                'website_url'=>$request->website_url,
                'comment'=>$request->comment,
                'status'=>$request->status,
            ]);
        return redirect('/dashboard/team/manage')->with('message','Team information updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$unique_id)
    {
        Team::where('unique_id',$unique_id)
            ->delete();
        unlink($request->image);
        return redirect('/dashboard/team/manage')->with('message','Team information deleted successfully!');
    }
    public function unPublish($unique_id){
        Team::where('unique_id',$unique_id)
            ->update([
                'status'=>0
            ]);
        return redirect('/dashboard/team/manage')->with('message','Team information UnPublished!');
    }
    public function publish($unique_id){
        Team::where('unique_id',$unique_id)
            ->update([
                'status'=>1
            ]);
        return redirect('/dashboard/team/manage')->with('message','Team information Published!');
    }
}
