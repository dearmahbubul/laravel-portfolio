<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\BlogPostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogPosts = DB::table('blog_posts')
            ->join('blog_post_categories','blog_post_categories.unique_id','=','blog_posts.category_id')
            ->select('blog_posts.*','blog_post_categories.name')
            ->orderby('blog_posts.id','desc')
            ->get();
        return view('admin.blog_post.manage',compact('blogPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogPostCategories = BlogPostCategory::all();
        return view('admin.blog_post.create',compact('blogPostCategories'));
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
            'post_title'=>'required',
            'image'=>'required|image',
            'image_two'=>'required|image',
            'post_content'=>'required',
        ]);

        $image = $request->file('image');
        $directory = 'images/blogPost-images/';
        $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);

        $image_two = $request->file('image_two');
        $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image_two->getClientOriginalExtension();
        $imageUrl_two = $directory.$imageName;
        $image_two->move($directory,$imageName);


        $unique_id = time().md5(rand(100000,10000000));

        DB::table('blog_posts')->insert([
            'unique_id'=>$unique_id,
            'post_title'=>$request->post_title,
            'image'=>$imageUrl,
            'image_two'=>$imageUrl_two,
            'category_id'=>$request->category_id,
            'post_content'=>$request->post_content,
            'status'=>$request->status,
        ]);
        return redirect('/dashboard/blog-post/manage')->with('message','New Post information saved successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($unique_id)
    {
        $blogPost = BlogPost::where('unique_id',$unique_id)->first();
        return view('admin.blog_post.show',compact('blogPost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($unique_id)
    {
        $blogPost_categories = BlogPostCategory::all();
        $blogPost = BlogPost::where('unique_id',$unique_id)->first();
        return view('admin.blog_post.edit',compact('blogPost','blogPost_categories'));
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
            'post_title'=>'required',
            'image'=>'image',
            'image_two'=>'image',
            'post_content'=>'required'
        ]);
        $imageUrl = $request->previousImageUrl;
        if($request->hasFile('image')){
            unlink($imageUrl);
            $image = $request->file('image');
            $directory = 'images/blogPost-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $image->move($directory,$imageName);
        }

        $imageUrl_two = $request->previousImageUrl_two;
        if($request->hasFile('image_two')){
            unlink($imageUrl_two);
            $image = $request->file('image_two');
            $directory = 'images/blogPost-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $image->move($directory,$imageName);
        }

        DB::table('blog_posts')
            ->where('unique_id',$unique_id)
            ->update([
                'post_title'=>$request->post_title,
                'image'=>$imageUrl,
                'image_two'=>$imageUrl_two,
                'category_id'=>$request->category_id,
                'post_content'=>$request->post_content,
                'status'=>$request->status,
            ]);
        return redirect('/dashboard/blog-post/manage')->with('message','Post information updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$unique_id)
    {
        BlogPost::where('unique_id',$unique_id)
            ->delete();
        unlink($request->image);
        unlink($request->image_two);
        return redirect('/dashboard/blog-post/manage')->with('message','Post information deleted successfully!');
    }
    public function unPublish($unique_id){
        BlogPost::where('unique_id',$unique_id)
            ->update([
                'status'=>0
            ]);
        return redirect('/dashboard/blog-post/manage')->with('message','Post information UnPublished!');
    }
    public function publish($unique_id){
        BlogPost::where('unique_id',$unique_id)
            ->update([
                'status'=>1
            ]);
        return redirect('/dashboard/blog-post/manage')->with('message','Post information Published!');
    }
}
