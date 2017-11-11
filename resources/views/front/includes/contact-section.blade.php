<section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
    <div class="container">
        <div class="row">
            <div class="contact-inner">
                <div class="col-sm-12 card-box-wrap">
                    <div class="row">
                        <div class="clearfix section-head contact-text">
                            <div class="col-sm-12">
                                <h2 class="title">Contact</h2>
                                <p class="regular-text">{{$administrator->address}}, {{$administrator->city}}, {{$administrator->country}}</p>
                                <ul class="clearfix contact-info">
                                    <li><a href="">+88 {{$administrator->phone_two}}</a>
                                    </li>
                                    <li><a href="">{{$administrator->email}}</a>
                                    </li>
                                    <li><a href="">{{$administrator->website_link}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- contact text end -->

                        <div class="clearfix contact-form">

                            <!-- Map Start -->
                            <div class="col-sm-7">
                                <div class="map-wrapper">
                                    <div id="map"></div>
                                </div>
                            </div> <!-- Map end -->

                            <!-- Contact Form start -->
                            <div class="col-sm-5">
                                <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                                    {!! Form::open(['url' => '/front-contact/store','method'=>'POST','id'=>'mainContactForm']) !!}

                                        <div class="input-field">
                                            {!! Form::text('name',null,['class'=>'input-box','id'=>'name','required'=>'required']) !!}
                                            @if ($errors->has('name'))
                                                <span class="error">
                                                    <strong style="color: red;">{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                            {!! Form::label('name','Name *',['class'=>'input-label']) !!}
                                        </div>
                                        <div class="input-field">
                                            {!! Form::email('email',null,['class'=>'input-box','id'=>'email','required'=>'required']) !!}
                                            @if ($errors->has('email'))
                                                <span class="error">
                                                    <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                            {!! Form::label('email','Email *',['class'=>'input-label']) !!}
                                        </div>
                                        <div class="input-field">
                                            {!! Form::text('subject',null,['class'=>'input-box','id'=>'subject','required'=>'required']) !!}
                                            @if ($errors->has('subject'))
                                                <span class="error">
                                                    <strong style="color: red;">{{ $errors->first('subject') }}</strong>
                                                </span>
                                            @endif
                                            {!! Form::label('subject','Subject',['class'=>'input-label']) !!}
                                        </div>
                                        <div class="input-field textarea-input">
                                            {!! Form::textarea('message',null,['style'=>'height:18px','class'=>'materialize-textarea','id'=>'message','required'=>'required']) !!}
                                            @if ($errors->has('subject'))
                                                <span class="error">
                                                    <strong style="color: red;">{{ $errors->first('subject') }}</strong>
                                                </span>
                                            @endif
                                            {!! Form::label('message','Message *',['class'=>'input-label']) !!}

                                        </div>
                                        <div class="input-field clearfix">
                                            {!! Form::submit('Send message',['class'=>'btn btn-success']) !!}
                                            {{--<button type="submit" class="left waves-effect btn-flat brand-text ">send message</button>--}}
                                           {{-- <div class="right form-loader-area">
                                                <svg class="circular size-20" height="20" width="20">
                                                    <circle class="path" cx="10" cy="10" r="7" fill="none" stroke-width="3" stroke-miterlimit="10" />
                                                </svg>
                                            </div>--}}
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div> <!-- ./contact form end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ./container end -->
    <div class="section-call-to-area">
        <div class="container">
            <div class="row">
                <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
                    <i class="mdi-navigation-expand-less"></i>
                </a>
            </div>
        </div>
    </div>
</section>