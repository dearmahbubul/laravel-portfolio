<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.manage',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
            'company_name'=>'required',
            'designation'=>'required',
            'image'=>'required',
            'comment'=>'required'
        ]);

        $image = $request->file('image');
        $directory = 'images/testimonial-images/';
        $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);

        $unique_id = time().md5(rand(100000,10000000));

        DB::table('testimonials')->insert([
            'unique_id'=>$unique_id,
            'name'=>$request->name,
            'company_name'=>$request->company_name,
            'designation'=>$request->designation,
            'image'=>$imageUrl,
            'comment'=>$request->comment,
            'status'=>$request->status,
            'recycle_id'=>1
        ]);
        return redirect('/dashboard/testimonial/manage')->with('message','New Testimonial saved successfully!');

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
    public function edit($unique_id)
    {
        $testimonial = Testimonial::where('unique_id',$unique_id)->first();
        return view('admin.testimonial.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *{!! Form::open(['url' => '/dashboard/testimonial/update/'.$testimonial->unique_id,'method'=>'PATCH','files' => true,'class'=>'form-horizontal form-label-left']) !!}
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
            $directory = 'images/testimonial-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $image->move($directory,$imageName);
        }
        DB::table('testimonials')
            ->where('unique_id',$unique_id)
            ->update([
                'name'=>$request->name,
                'company_name'=>$request->company_name,
                'designation'=>$request->designation,
                'image'=>$imageUrl,
                'comment'=>$request->comment,
                'status'=>$request->status,
            ]);
        return redirect('/dashboard/testimonial/manage')->with('message','Testimonial information updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$unique_id)
    {
        Testimonial::where('unique_id',$unique_id)
            ->delete();
        unlink($request->image);
        return redirect('/dashboard/testimonial/manage')->with('message','Testimonial information deleted successfully!');
    }
    public function unPublish($unique_id){
        Testimonial::where('unique_id',$unique_id)
            ->update([
                'status'=>0
            ]);
        return redirect('/dashboard/testimonial/manage')->with('message','Testimonial information UnPublished!');
    }
    public function publish($unique_id){
        Testimonial::where('unique_id',$unique_id)
            ->update([
                'status'=>1
            ]);
        return redirect('/dashboard/testimonial/manage')->with('message','Testimonial information Published!');
    }
}
