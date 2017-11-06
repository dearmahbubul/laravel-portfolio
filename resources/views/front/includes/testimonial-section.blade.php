<section id="testimonial" class="scroll-section root-sec brand-bg padd-tb-120 testimonial-wrap">
    <div class="container">
        <div class="row">
            <div class="testimonial-inner">
                <div class="col-sm-12 col-md-10 card-box-wrap">
                    <div class="row">
                        <div class="clearfix section-head testimonial-text">
                            <div class="col-sm-12">
                                <h2 class="title">testimonial</h2>
                                <p class="regular-text">Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="overflow-hidden">
                                <div class="row">
                                    <div id="testimonialSlider" class="clearfix card-element-wrapper">
                                        @foreach($testimonials as $testimonial)
                                        <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <div class="card-img-wrap">
                                                        <img class="activator" src="{{asset($testimonial->image)}}" alt="">
                                                        <p class="saying-about">{{$testimonial->comment}}</p>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <span class="card-title activator brand-text">{{$testimonial->name}} -</span>
                                                    <a href="#">{{$testimonial->designation}}, {{$testimonial->company_name}}</a>
                                                </div>
                                            </div>
                                        </div> <!-- ./single testimonial box -->
                                        @endforeach
                                    </div> <!-- #testimonialSlider end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-wrapp tmo-ctrl">
                    <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                    <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                </div>
            </div>
        </div>
    </div> <!-- ./container end -->
</section>