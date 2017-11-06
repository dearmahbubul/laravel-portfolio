<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skill.manage',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skill.create');
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
            'skill_name'=>'required|alpha',
            'skill_percentage'=>'required',
        ]);
        $unique_id = time().md5(rand(100000,10000000));
        DB::table('skills')->insert([
            'unique_id'=>$unique_id,
            'skill_name'=>$request->skill_name,
            'skill_percentage'=>$request->skill_percentage,
            'status'=>$request->status,
        ]);
        /*
         * Store data in one line
         * Skill::create($request->all());
         * session()->flash('message','Data inserted successfully');
         * */
        return redirect('/dashboard/skill/manage')->with('message','New Skill Added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($unique_id)
    {
        $skill = Skill::where('unique_id',$unique_id)->first();
        return view('admin.skill.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $unique_id)
    {
        $this->validate($request,[
            'skill_name'=>'required',
            'skill_percentage'=>'required',
        ]);
        Skill::where('unique_id',$unique_id)
            ->update([
                'skill_name'=>$request->skill_name,
                'skill_percentage'=>$request->skill_percentage,
                'status'=>$request->status
            ]);
        return redirect('/dashboard/skill/manage')->with('message','Skill information updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function unPublish($unique_id){
        Skill::where('unique_id',$unique_id)
            ->update([
                'status'=>0
            ]);
        return redirect('/dashboard/skill/manage')->with('message','Skill information UnPublished!');
    }
    public function publish($unique_id){
        Skill::where('unique_id',$unique_id)
            ->update([
                'status'=>1
            ]);
        return redirect('/dashboard/skill/manage')->with('message','Skill information Published!');
    }

    public function destroy($unique_id)
    {
        Skill::where('unique_id',$unique_id)
            ->delete();
        return redirect('/dashboard/skill/manage')->with('message','Skill information deleted!');
    }
}
