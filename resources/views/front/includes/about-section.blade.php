<div class="row" {{--style="position:relative;right: 20px"--}}>
    <div class="col-lg-5 text-center">
        {{--@if(session()->has('message'))--}}
        @if($message = Session::get('message'))
            <p class="alert" style="font-weight: 500;font-size: 16px;background-color: #61d864;padding:12px;color:#fff;margin-top: 1px;/*position:fixed;right: 50px;z-index: 1*/">{{ $message }}</p>
        @endif
    </div>
    <!-- /.col-lg-12 -->
</div>
<section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
    <div class="container">
        <div class="row">
            <div class="clearfix about-inner">

                <div class="col-sm-12 col-md-4">
                    <div class="person-about">
                        <h3 class="about-subtitle">My Story</h3>
                        <p>{{$administrator->story_content}}</p>
                        <a class="waves-effect waves-light btn-large brand-bg white-text"><i class="mdi-content-archive left"></i> Download Resume</a>
                    </div>
                </div>
                <!-- about me description -->

                <div class="col-sm-6 col-md-4">
                    <div class="person-img wow fadeIn">
                        <img class="z-depth-1" src="{{asset($administrator->image)}}" alt="">
                    </div>
                </div>
                <!-- about me image -->

                <div class="col-sm-6 col-md-4">
                    <div class="person-info">
                        <h3 class="about-subtitle">Personal Information</h3>
                        <h5><span>Name :</span> {{$administrator->name}}</h5>
                        <h5><span>Age :</span> {{$administrator->age}} Years</h5>
                        <h5><span>Phone :</span> +88 {{$administrator->phone}}</h5>
                        <h5><span>Email :</span> {{$administrator->email}}</h5>
                        <h5><span>Address :</span> {{$administrator->city}}, {{$administrator->country}}</h5>
                    </div>

                    <div class="about-social">
                        <ul>
                            <li>
                                <a href="{{$administrator->facebook_link}}" class="btn-floating waves-effect waves-light white"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="{{$administrator->twitter_link}}" class="btn-floating waves-effect waves-light white"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{$administrator->google_plus_link}}" class="btn-floating waves-effect waves-light white"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="{{$administrator->linkedin_link}}" class="btn-floating waves-effect waves-light white"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="{{$administrator->pinterest_link}}" class="btn-floating waves-effect waves-light white"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- about me info -->

            </div>
        </div>
    </div>
    <!-- .container end -->
</section>