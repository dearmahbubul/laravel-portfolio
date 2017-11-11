<?php

namespace App\Http\Controllers;

use App\Administrator;
use App\BlogPost;
use App\BlogPostCategory;
use App\Education;
use App\Experience;
use App\PortfolioCategory;
use App\Portfolio;
use App\Skill;
use App\Team;
use App\Testimonial;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::where('status',1)->get();
        $testimonials = Testimonial::where('status',1)->get();
        $experiences = Experience::where('status',1)->get();
        $educations = Education::where('status',1)->orderby('id','desc')->get();
        $teams = Team::where('status',1)->orderby('id','asc')->get();
        $portfolio_categories = PortfolioCategory::where('status',1)->orderby('id','asc')->get();
        $portfolios = Portfolio::where('status',1)->orderby('id','desc')->get();
        $blogPosts = BlogPost::where('status',1)->orderby('id','desc')->get();
        $administrator = Administrator::where('status',1)->orderby('id','desc')->limit(1)->first();
        return view('front.master',compact('skills','testimonials','experiences','educations','administrator','teams','portfolio_categories','portfolios','blogPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
