<section id="blog" class="scroll-section root-sec grey lighten-5 padd-tb-120 blog-wrap">
    <div class="container">
        <div class="row">
            <div class="blog-inner">
                <div class="col-sm-12 card-box-wrap">
                    <div class="row">
                        <div class="clearfix section-head blog-text">
                            <div class="col-sm-10">
                                <h2 class="title">Blog</h2>
                                <p class="regular-text">{{$administrator->blog_content}}</p>
                            </div>
                        </div>
                        <div class="clearfix card-element-wrapper" id="blog-posts">

                            @php($delay=0)
                          @foreach($blogPosts as $blogPost)
                            <article class="col-sm-6 col-md-4  single-card-box single-post">
                                <div class="card wow fadeInUpSmall" data-wow-delay="{{$delay=$delay+.2}}s" data-wow-duration=".7s">
                                    <div class="card-image">
                                        <div class="card-img-wrap">
                                            <div class="blog-post-thumb waves-effect waves-block waves-light">
                                                <a href="#"><img class="activator" src="{{asset($blogPost->image)}}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-body">
                                                <a href="#" class="post-title-link brand-text"><h2 class="post-title">{{$blogPost->post_title}}</h2></a>
                                                <p class="post-content">{{substr($blogPost->post_title,0,100)."..."}} </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix card-content">
                                        <a href="#" class="left js-favorite active" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                        <a href="#" class="brand-text right waves-effect">Read More</a>
                                    </div>
                                </div>
                            </article> <!-- ./single blog post end -->
                           @endforeach
                        </div>
                        <div class="clearfix left-align">
                            <div class="col-sm-12">
                                <a href="#" class="waves-effect waves-light btn-large load-more">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ./container -->
</section>