<section id="portfolio" class="scroll-section root-sec white portfolio-wrap">
    <div class="padd-tb-120 brand-bg portfolio-top">
        <div class="portfolio-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="title">PORTFOLIO</h2>
                        <ul class="inline-menu clearfix portfolio-category" id="portfolio-msnry-sort">
                            <li class="active"><a href="#" data-target="*">All</a>
                            </li>
                            @foreach($portfolio_categories as $portfolio_category)
                            <li><a href="#" data-target=".{{$portfolio_category->unique_id}}">{{$portfolio_category->name}}</a>
                            </li>
                           @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </div>
    @foreach($portfolios as $portfolio)
    <div id="portfolioModal" class="modal white">
        <div class="model-img"></div>
        <div class="modal-content">
            <h2 class="title">{{$portfolio->title}}</h2>
            <p class="m-content">{{$portfolio->portfolio_content}}</p>
        </div>

        <div class="modal-footer">
            <a href="{{$portfolio->demo_url}}" target="_blank" class="waves-effect btn-flat brand-text modal-action">Live Demo</a>
            <a href="#" class="waves-effect btn-flat brand-text modal-action modal-close">cancel</a>
        </div>
    </div>
    @endforeach
    <div class="portfolio-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="clearfix protfolio-item" id="protfolio-msnry">
                        @foreach($portfolios as $portfolio)
                        <!-- Single Portfolio-->
                        <li class="single-port-item {{$portfolio->category_id}}">
                            <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="{{$portfolio->image_two}}" data-title="{{$portfolio->title}}" data-content="{{$portfolio->portfolio_content}}" data-demo-link="#"> <!-- Portfolio pop-up content-->
                                <div class="protfolio-image">
                                    <img src="{{$portfolio->image}}" alt="portfolio"> <!-- portfolio thumbnail-->
                                    <div class="protfolio-content waves-effect waves-block waves-light">
                                        <div class="protfolio-content__inner">
                                            <h2 class="p-title">{{$portfolio->item_name}}</h2>
                                        </div>
                                    </div>
                                    <div class="p-overlay"></div>
                                </div>
                            </a>
                        </li>
                        <!--/ single portfolio -->
                        @endforeach

                    </ul>
                    <!-- portfolio load more button-->
                    <a id="portfolio-item-loader" href="#" class="btn-floating btn-large waves-effect waves-light brand-bg"><i class="mdi-content-add"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>