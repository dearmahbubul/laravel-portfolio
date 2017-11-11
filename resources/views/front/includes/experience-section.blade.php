<section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
    <div class="container">
        <div class="row">
            <div class="experience-inner">
                <div class="col-sm-12 col-md-10 card-box-wrap">
                    <div class="row">
                        <div class="clearfix section-head experience-text">
                            <div class="col-sm-12">
                                <h2 class="title">Experience</h2>
                                <p class="regular-text">{{$administrator->experience_content}}</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="overflow-hidden">
                                <div class="row">
                                    <div id="experienceSlider" class="clearfix card-element-wrapper">
                                        @php($delay=0)
                                        @foreach($experiences as $experience)
                                        <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay="{{$delay=$delay+.2}}s" data-wow-duration=".7s">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <h2 class="left-align card-title-top">January {{$experience->starting_year}} - Present</h2>
                                                    <div class="valign-wrapper card-img-wrap">
                                                        <img class="activator" src="{{asset($experience->image)}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <span class="card-title activator brand-text">{{$experience->position}}<i class="mdi-navigation-more-vert right"></i></span>
                                                    <p>{{$experience->company_name}}</p>
                                                </div>
                                                <div class="card-reveal">
                                                    <div class="rev-title-wrap">
                                                        <span class="card-title activator brand-text">{{$experience->position}}<i class="mdi-navigation-close right"></i></span>
                                                        <p>{{$experience->company_name}}</p>
                                                    </div>
                                                    <p class="rev-content">
                                                        {{$experience->comment}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-wrapp exp-ctrl">
                    <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                    <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>