<?php

namespace App\Http\Controllers;

use App\Administrator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrators = Administrator::orderby('id','desc')->get();
        return view('admin.administrator.manage',compact('administrators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.administrator.create');
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
            'age'=>'required|min:1',
            'email'=>'required|email',
            'phone'=>'required',
            'phone_two'=>'required',
            'city'=>'required',
            'country'=>'required',
            'image'=>'required|image',
            'resume'=>'required|file',
            'address'=>'required',
            'story_content'=>'required',
            'skill_content'=>'required',
            'experience_content'=>'required',
            'education_content'=>'required',
            'our_team_content'=>'required',
            'testimonial_content'=>'required',
            'blog_content'=>'required',
            'website_link'=>'required|url',
            'facebook_link'=>'url',
            'twitter_link'=>'url',
            'google_plus_link'=>'url',
            'linkedin_link'=>'url',
            'pinterest_link'=>'url',
            'dribble_link'=>'url',
            'behance_link'=>'url',

        ]);
        $image = $request->file('image');
        $directory = 'images/administrator-images/';
        $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);

        $resume = $request->file('resume');
        $directory = 'resume/';
        $resumeName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$resume->getClientOriginalExtension();
        $resumeUrl = $directory.$resumeName;
        $resume->move($directory,$resumeName);


        $unique_id = time().md5(rand(100000,10000000));

        DB::table('administrators')->insert([
            'unique_id'=>$unique_id,
            'name'=>$request->name,
            'position'=>$request->position,
            'age'=>$request->age,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'phone_two'=>$request->phone_two,
            'city'=>$request->city,
            'country'=>$request->country,
            'address'=>$request->address,
            'story_content'=>$request->story_content,
            'skill_content'=>$request->skill_content,
            'experience_content'=>$request->experience_content,
            'education_content'=>$request->education_content,
            'our_team_content'=>$request->our_team_content,
            'testimonial_content'=>$request->testimonial_content,
            'blog_content'=>$request->blog_content,
            'website_link'=>$request->website_link,
            'facebook_link'=>$request->facebook_link,
            'twitter_link'=>$request->twitter_link,
            'google_plus_link'=>$request->google_plus_link,
            'linkedin_link'=>$request->linkedin_link,
            'pinterest_link'=>$request->pinterest_link,
            'dribble_link'=>$request->dribble_link,
            'behance_link'=>$request->behance_link,
            'image'=>$imageUrl,
            'resume'=>$resumeUrl,
            'status'=>$request->status,
        ]);
        return redirect('/dashboard/administrator/manage')->with('message','New administrator saved successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($unique_id)
    {
        $administrator = Administrator::where('unique_id',$unique_id)->first();
        return view('admin.administrator.show',compact('administrator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($unique_id)
    {
        $administrator = Administrator::where('unique_id',$unique_id)->first();
        return view('admin.administrator.edit',compact('administrator'));
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
            'age'=>'required|min:1',
            'email'=>'required|email',
            'phone'=>'required',
            'phone_two'=>'required',
            'city'=>'required',
            'country'=>'required',
            'image'=>'image',
            'resume'=>'file',
            'address'=>'required',
            'story_content'=>'required',
            'skill_content'=>'required',
            'experience_content'=>'required',
            'education_content'=>'required',
            'our_team_content'=>'required',
            'testimonial_content'=>'required',
            'blog_content'=>'required',
            'website_link'=>'required|url',
            'facebook_link'=>'url',
            'twitter_link'=>'url',
            'google_plus_link'=>'url',
            'linkedin_link'=>'url',
            'pinterest_link'=>'url',
            'dribble_link'=>'url',
            'behance_link'=>'url',
        ]);
        $imageUrl = $request->previousImageUrl;
        if($request->hasFile('image')){
            unlink($imageUrl);
            $image = $request->file('image');
            $directory = 'images/administrator-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $image->move($directory,$imageName);
        }
        $resumeUrl = $request->previousResumeUrl;
        if($request->hasFile('resume')){
            unlink($resumeUrl);
            $resume = $request->file('resume');
            $directory = 'resume/';
            $resumeName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$resume->getClientOriginalExtension();
            $resumeUrl = $directory.$resumeName;
            $resume->move($directory,$resumeName);
        }


        DB::table('administrators')
            ->where('unique_id',$unique_id)
            ->update([
                'name'=>$request->name,
                'position'=>$request->position,
                'age'=>$request->age,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'phone_two'=>$request->phone_two,
                'city'=>$request->city,
                'country'=>$request->country,
                'address'=>$request->address,
                'story_content'=>$request->story_content,
                'skill_content'=>$request->skill_content,
                'experience_content'=>$request->experience_content,
                'education_content'=>$request->education_content,
                'our_team_content'=>$request->our_team_content,
                'testimonial_content'=>$request->testimonial_content,
                'blog_content'=>$request->blog_content,
                'website_link'=>$request->website_link,
                'facebook_link'=>$request->facebook_link,
                'twitter_link'=>$request->twitter_link,
                'google_plus_link'=>$request->google_plus_link,
                'linkedin_link'=>$request->linkedin_link,
                'pinterest_link'=>$request->pinterest_link,
                'dribble_link'=>$request->dribble_link,
                'behance_link'=>$request->behance_link,
                'image'=>$imageUrl,
                'resume'=>$resumeUrl,
            ]);
        return redirect('/dashboard/administrator/manage')->with('message','Administrator information updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$unique_id)
    {
        Administrator::where('unique_id',$unique_id)
            ->delete();
        unlink($request->image);
        unlink($request->resume);
        return redirect('/dashboard/administrator/manage')->with('message','Administrator information deleted successfully!');
    }
    public function unPublish($unique_id){
        $administratorCount = Administrator::where('status',1)->count();
        --$administratorCount;
        if($administratorCount < 1 ){
            $message='Unpublished Successfully But at least 1 Administrator information you should keep Published for your website';
        }else{
            $message='Administrator information UnPublished!';
        }

        Administrator::where('unique_id',$unique_id)
            ->update([
                'status'=>0
            ]);

        return redirect('/dashboard/administrator/manage')->with('message',$message);
    }
    public function publish($unique_id){
        $administratorCount = Administrator::where('status',1)->count();

        if($administratorCount > 0 ){
            return redirect('/dashboard/administrator/manage')->with('message','Max 1 Administrator information You can keep Published for your website!');
        }
        Administrator::where('unique_id',$unique_id)
            ->update([
                'status'=>1
            ]);
        return redirect('/dashboard/administrator/manage')->with('message','Administrator information Published!');
    }
}
