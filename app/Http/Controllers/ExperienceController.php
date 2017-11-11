<?php

namespace App\Http\Controllers;
use App\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('admin.experience.manage',compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experience.create');
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
            'position'=>'required',
            'company_name'=>'required',
            'image'=>'required',
            'comment'=>'required'
        ]);

        $image = $request->file('image');
        $directory = 'images/experience-images/';
        $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);

        $unique_id = time().md5(rand(100000,10000000));

        DB::table('experiences')->insert([
            'unique_id'=>$unique_id,
            'position'=>$request->position,
            'company_name'=>$request->company_name,
            'image'=>$imageUrl,
            'starting_month'=>$request->starting_month,
            'starting_year'=>$request->starting_year,
            'ending_month'=>$request->ending_month,
            'ending_year'=>$request->ending_year,
            'comment'=>$request->comment,
            'status'=>$request->status,
        ]);
        return redirect('/dashboard/experience/manage')->with('message','New experience saved successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($unique_id)
    {
        $experience = Experience::where('unique_id',$unique_id)->first();
        return view('admin.experience.show',compact('experience'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($unique_id)
    {
        $experience = Experience::where('unique_id',$unique_id)->first();
        return view('admin.experience.edit',compact('experience'));
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
            'company_name'=>'required',
            'designation'=>'required',
            'comment'=>'required'
        ]);
        $imageUrl = $request->previousImageUrl;
        if($request->hasFile('image')){
            unlink($imageUrl);
            $image = $request->file('image');
            $directory = 'images/experience-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $image->move($directory,$imageName);
        }
        DB::table('experiences')
            ->where('unique_id',$unique_id)
            ->update([
                'name'=>$request->name,
                'company_name'=>$request->company_name,
                'designation'=>$request->designation,
                'image'=>$imageUrl,
                'comment'=>$request->comment,
                'status'=>$request->status,
            ]);
        return redirect('/dashboard/experience/manage')->with('message','Experience information updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$unique_id)
    {
        Experience::where('unique_id',$unique_id)
            ->delete();
        unlink($request->image);
        return redirect('/dashboard/experience/manage')->with('message','Experience information deleted successfully!');
    }
    public function unPublish($unique_id){
        Experience::where('unique_id',$unique_id)
            ->update([
                'status'=>0
            ]);
        return redirect('/dashboard/experience/manage')->with('message','Experience information UnPublished!');
    }
    public function publish($unique_id){
        Experience::where('unique_id',$unique_id)
            ->update([
                'status'=>1
            ]);
        return redirect('/dashboard/experience/manage')->with('message','Experience information Published!');
    }
}
