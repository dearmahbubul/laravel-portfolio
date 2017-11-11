<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = DB::table('portfolios')
                        ->join('portfolio_categories','portfolio_categories.unique_id','=','portfolios.category_id')
                        ->select('portfolios.*','portfolio_categories.name')
                        ->orderby('portfolios.id','desc')
                        ->get();
        return view('admin.portfolio.manage',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portfolio_categories = PortfolioCategory::all();
        return view('admin.portfolio.create',compact('portfolio_categories'));
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
            'item_name'=>'required',
            'title'=>'required',
            'image'=>'required|image',
            'image_two'=>'required|image',
            'demo_url'=>'url',
            'portfolio_content'=>'required'
        ]);

        $image = $request->file('image');
        $directory = 'images/portfolio-images/';
        $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);

        $image_two = $request->file('image_two');
        $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image_two->getClientOriginalExtension();
        $imageUrl_two = $directory.$imageName;
        $image_two->move($directory,$imageName);


        $unique_id = time().md5(rand(100000,10000000));

        DB::table('portfolios')->insert([
            'unique_id'=>$unique_id,
            'item_name'=>$request->item_name,
            'title'=>$request->title,
            'image'=>$imageUrl,
            'image_two'=>$imageUrl_two,
            'category_id'=>$request->category_id,
            'demo_url'=>$request->demo_url,
            'portfolio_content'=>$request->portfolio_content,
            'status'=>$request->status,
        ]);
        return redirect('/dashboard/portfolio/manage')->with('message','New portfolio information saved successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($unique_id)
    {
        $portfolio = Portfolio::where('unique_id',$unique_id)->first();
        return view('admin.portfolio.show',compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($unique_id)
    {
        $portfolio_categories = PortfolioCategory::all();
        $portfolio = Portfolio::where('unique_id',$unique_id)->first();
        return view('admin.portfolio.edit',compact('portfolio','portfolio_categories'));
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
            'item_name'=>'required',
            'title'=>'required',
            'image'=>'image',
            'image_two'=>'image',
            'demo_url'=>'url',
            'portfolio_content'=>'required'
        ]);
        $imageUrl = $request->previousImageUrl;
        if($request->hasFile('image')){
            unlink($imageUrl);
            $image = $request->file('image');
            $directory = 'images/portfolio-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $image->move($directory,$imageName);
        }

        $imageUrl_two = $request->previousImageUrl_two;
        if($request->hasFile('image_two')){
            unlink($imageUrl_two);
            $image = $request->file('image_two');
            $directory = 'images/portfolio-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $image->move($directory,$imageName);
        }

        DB::table('portfolios')
            ->where('unique_id',$unique_id)
            ->update([
                'item_name'=>$request->item_name,
                'title'=>$request->title,
                'image'=>$imageUrl,
                'image_two'=>$imageUrl_two,
                'category_id'=>$request->category_id,
                'demo_url'=>$request->demo_url,
                'portfolio_content'=>$request->portfolio_content,
                'status'=>$request->status,
            ]);
        return redirect('/dashboard/portfolio/manage')->with('message','Portfolio information updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$unique_id)
    {
        Portfolio::where('unique_id',$unique_id)
            ->delete();
        unlink($request->image);
        return redirect('/dashboard/portfolio/manage')->with('message','Portfolio information deleted successfully!');
    }
    public function unPublish($unique_id){
        Portfolio::where('unique_id',$unique_id)
            ->update([
                'status'=>0
            ]);
        return redirect('/dashboard/portfolio/manage')->with('message','Portfolio information UnPublished!');
    }
    public function publish($unique_id){
        Portfolio::where('unique_id',$unique_id)
            ->update([
                'status'=>1
            ]);
        return redirect('/dashboard/portfolio/manage')->with('message','Portfolio information Published!');
    }
}
