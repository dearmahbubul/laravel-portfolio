<?php

namespace App\Http\Controllers;

use App\BlogPostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogPostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_post_categories = BlogPostCategory::orderby('id','desc')->get();
        return view('admin.blog_post_category.manage',compact('blog_post_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog_post_category.create');
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
        ]);

        $unique_id = time().rand(100000,10000000);

        DB::table('blog_post_categories')->insert([
            'unique_id'=>$unique_id,
            'name'=>$request->name,
            'status'=>$request->status,
        ]);
        return redirect('/dashboard/blog-post-category/manage')->with('message','New Blog post category information saved successfully!');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($unique_id)
    {
        $blog_post_category = BlogPostCategory::where('unique_id',$unique_id)->first();
        return view('admin.blog_post_category.edit',compact('blog_post_category'));
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
        ]);
        DB::table('blog_post_categories')
            ->where('unique_id',$unique_id)
            ->update([
                'name'=>$request->name,
                'status'=>$request->status,
            ]);
        return redirect('/dashboard/blog-post-category/manage')->with('message','Blog post category information updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($unique_id)
    {
        BlogPostCategory::where('unique_id',$unique_id)
            ->delete();
        return redirect('/dashboard/blog-post-category/manage')->with('message','Blog post category information deleted successfully!');
    }
    public function unPublish($unique_id){
        BlogPostCategory::where('unique_id',$unique_id)
            ->update([
                'status'=>0
            ]);
        return redirect('/dashboard/blog-post-category/manage')->with('message','Blog post category information UnPublished!');
    }
    public function publish($unique_id){
        BlogPostCategory::where('unique_id',$unique_id)
            ->update([
                'status'=>1
            ]);
        return redirect('/dashboard/blog-post-category/manage')->with('message','Blog post category information Published!');
    }
}
