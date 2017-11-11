<section id="education" class="root-sec grey lighten-5 padd-tb-120 education-wrap">
    <div class="container">
        <div class="row">
            <div class="education-inner">
                <div class="col-sm-12 col-md-10 card-box-wrap">
                    <div class="row">
                        <div class="clearfix section-head education-text">
                            <div class="col-sm-12">
                                <h2 class="title">education</h2>
                                <p class="regular-text">{{$administrator->education_content}}</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="overflow-hidden">
                                <div class="row">
                                    <div id="educationSlider" class="clearfix card-element-wrapper">

                                        @php($delay=0)
                                        @foreach($educations as $education)
                                        <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay="{{$delay=$delay+.2}}s" data-wow-duration=".7s">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <h2 class="left-align card-title-top">{{$education->starting_year}} - {{$education->ending_year}}</h2>
                                                    <div class="card-img-wrap">
                                                        <img class="activator" src="{{asset($education->image)}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <span class="card-title activator brand-text">{{$education->degree_name}}<i class="mdi-navigation-more-vert right"></i></span>
                                                    <p>{{$education->institute_name}}</p>
                                                </div>
                                                <div class="card-reveal">
                                                    <div class="rev-title-wrap">
                                                        <span class="card-title activator brand-text">{{$education->degree_name}}<i class="mdi-navigation-close right"></i></span>
                                                        <p>{{$education->institute_name}}</p>
                                                    </div>
                                                    <p class="rev-content">
                                                        {{$education->comment}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                        <!-- single education -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-wrapp edu-ctrl">
                    <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-left"><i class="mdi-navigation-chevron-left"></i></a>
                    <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-right"><i class="mdi-navigation-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>