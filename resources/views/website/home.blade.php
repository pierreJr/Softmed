@extends('website.master')

@section('contents')
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12 center">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Software and Network Solutions .....</h1>
                                    <h3 class="animation animated-item-2"><b>SOFTMED</b> offers complete and practical solutions to the design, supply,
                                        installation and maintenance of IT networks, <br>
                                        HMIS,Telemedicine apps,e-Learning,mobile solns ,FMIS</h3>

                                </div>
                            </div>
                            {{--<div class="col-sm-6 hidden-xs animation animated-item-4">--}}
                                {{--<div class="slider-img">--}}
                                    {{--<img src="images/slider/img1.png" class="img-responsive">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12 center">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Research and Consultancy ....</h1>
                                    <h3 class="animation animated-item-2">SOFTMED  is involved in research and offers consultancy services
                                        to  Ministry of Health and social welfare</h3>

                                </div>
                            </div>
                            {{--<div class="col-sm-6 hidden-xs animation animated-item-4">--}}
                                {{--<div class="slider-img">--}}
                                    {{--<img src="images/slider/img2.png" class="img-responsive">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12 center">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Training( ICT in Health  care ) ...</h1>
                                    <h3 class="animation animated-item-2"></h3>

                                </div>
                            </div>
                            {{--<div class="col-sm-6 hidden-xs animation animated-item-4">--}}
                                {{--<div class="slider-img">--}}
                                    {{--<img src="images/slider/img3.png" class="img-responsive">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <section id="feature">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Welcome to .....</h2>
                <p class="lead"><b>SOFTMED COMPANY LIMITED</b> As a Tanzanian based ICT consulting company that offers business consultancy services
                    in the areas of<br> business processes automation. Apart from that the company also specializes in the implementation and support
                    of health information <br>systems, currently supporting hospitals, in Tanzania<a href="{{url('about')}}"><h3><b>Read More...</b></h3></a>
                </p>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-mobile-phone"></i>
                            <h4>Software Solutions</h4>
                            <h6>HMIS,Telemedicine apps,e-Learning,mobile solns ,FMIS <a href="{{url('soft_soln')}}"><br><b>Read More ...</b></a>
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-server"></i>
                            <h4>Networking Solutions</h4>
                            <h6><b>SOFTMED</b> offers complete and practical solutions to the design, supply,
                                installation and maintenance of IT networks <a href="{{url('net_soln')}}">&nbsp;<b>Read More ...</b></a>
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-map-marker "></i>
                            <h4>GIS</h4>
                            <h6> Geograpgical Information systems <a href="{{url('#')}}"><br><b>Read More ...</b></a>
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-map-signs"></i>
                            <h4>Research and Consultancy</h4>
                            <h6>SOFTMED  is involved in research and offers consultancy services
                                to  Ministry of Health and social welfare <br> <a href="{{url('research')}}"><b>Read More ...</b></a>
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-medkit"></i>
                            <h4>Training( ICT in Health  care )</h4>
                            <h6> <a href="{{url('ict_training')}}"><br><b>Read More ...</b></a>
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-briefcase"></i>
                            <h4>Business process engineering</h4>
                            <h6> <b>The company</b> provides and actively pursues innovative technologies and new business opportunities that enable
                                 businesses<a href="{{url('business')}}">&nbsp;&nbsp;<b>Read More ...</b></a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection