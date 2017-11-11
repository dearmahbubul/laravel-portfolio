<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $educations = Education::orderby('id','desc')->get();
        return view('admin.education.manage',compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.education.create');
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
            'degree_name'=>'required',
            'institute_name'=>'required',
            'image'=>'required|image',
            'starting_year'=>'required|numeric',
            'ending_year'=>'required|numeric',
            'comment'=>'required'
        ]);

        $image = $request->file('image');
        $directory = 'images/education-images/';
        $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);

        $unique_id = time().md5(rand(100000,10000000));

        DB::table('education')->insert([
            'unique_id'=>$unique_id,
            'degree_name'=>$request->degree_name,
            'institute_name'=>$request->institute_name,
            'image'=>$imageUrl,
            'starting_year'=>$request->starting_year,
            'ending_year'=>$request->ending_year,
            'comment'=>$request->comment,
            'status'=>$request->status,
        ]);
        return redirect('/dashboard/education/manage')->with('message','New education information saved successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($unique_id)
    {
        $education = Education::where('unique_id',$unique_id)->first();
        return view('admin.education.show',compact('education'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($unique_id)
    {
        $education = Education::where('unique_id',$unique_id)->first();
        return view('admin.education.edit',compact('education'));
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
            'degree_name'=>'required',
            'institute_name'=>'required',
            'image'=>'image',
            'starting_year'=>'required|numeric',
            'ending_year'=>'required|numeric',
            'comment'=>'required'
        ]);
        $imageUrl = $request->previousImageUrl;
        if($request->hasFile('image')){
            unlink($imageUrl);
            $image = $request->file('image');
            $directory = 'images/education-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $image->move($directory,$imageName);
        }
        DB::table('education')
            ->where('unique_id',$unique_id)
            ->update([
                'degree_name'=>$request->degree_name,
                'institute_name'=>$request->institute_name,
                'image'=>$imageUrl,
                'starting_year'=>$request->starting_year,
                'ending_year'=>$request->ending_year,
                'comment'=>$request->comment,
                'status'=>$request->status,
            ]);
        return redirect('/dashboard/education/manage')->with('message','Education information updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$unique_id)
    {
        Education::where('unique_id',$unique_id)
            ->delete();
        unlink($request->image);
        return redirect('/dashboard/education/manage')->with('message','Education information deleted successfully!');
    }
    public function unPublish($unique_id){
        Education::where('unique_id',$unique_id)
            ->update([
                'status'=>0
            ]);
        return redirect('/dashboard/education/manage')->with('message','Education information UnPublished!');
    }
    public function publish($unique_id){
        Education::where('unique_id',$unique_id)
            ->update([
                'status'=>1
            ]);
        return redirect('/dashboard/education/manage')->with('message','Education information Published!');
    }
}
