@extends('website.master')

@section('contents')
<section id="contact-info" class="transparent-bg">
    <div class="gmap-area">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <div class="gmap">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.2656145593587!2d36.70324431446339!3d-3.4379299974976516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM8KwMjYnMTYuNiJTIDM2wrA0MicxOS42IkU!5e1!3m2!1sen!2stz!4v1471846578123" width="500" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-sm-7 map-content">
                    <ul class="row">
                        <li class="col-sm-6">
                            <address>
                                <h5>Headquarter Arusha</h5>
                                <p>Arusha Ghorofa Mbili Njiro Area, <br>
                                    P.O.Box 1502,</p>
                                <p>Arusha,Tanzania.</p>
                                <p>Phone:+255 752 503 013,+ 255 659 628 803 <br>
                                    Email Address: info@softmedt.com
                            </address>
                        </li>
                        <li class="col-sm-6">
                            <address>
                                <h5>Pwani Branch</h5>
                                <p>Near Miembe Saba Bus Stand,Kibaha,  <br>
                                    P.O.Box 30270,</p>
                                <p>Pwani,Tanzania.</p>
                                <p>Phone:+255 752 503 013,+ 255 659 628 803 <br>
                                    Email Address: info@softmedt.com
                            </address>
                        </li>
                        <li class="col-sm-8 center">
                           <h5>Open Hours</h5>
                            <p>Mon-Fri : 8:30 am -5:00pm. <br>
                            Sat : 9:00am - 3:00pm. <br>
                            Sunday : 10:00am - 9:00pm.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
</section>
<section id="contact-page" class="transparent-bg">
    {{--<div class="container">--}}
        {{--<div class="center">--}}
            {{--<h2>Send Us Your Message</h2>--}}
        {{--</div>--}}
        {{--<div class="row contact-wrap">--}}
            {{--<div class="status alert alert-success" style="display: none"></div>--}}
            {{--{!!Form::open(array("url"=>route('mdau/kopesha{$wadau->id}'), "class"=>"form-horizontal"))!!}--}}
            {{--<div class="row">--}}
                {{--<div class="form-group">--}}
                    {{--<div class="col-xs-6">--}}
                        {{--{!!Form::label('Email *', '', ['class' => 'awesome'])!!}--}}
                        {{--{!!Form::email('email','',array('class'=>'','placeholder'=>'Email','required'=>'required' ) )!!}--}}
                    {{--</div>--}}
                    {{--<div class = col-xs-6>--}}
                        {{--{!!Form::label('Subject *', '', ['class' => 'awesome'])!!}--}}
                        {{--{!!Form::text('subject','',array('class'=>'','placeholder'=>'Subject','required'=>'required' ) )!!}--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<div class = col-xs-6>--}}
                    {{--{!!Form::label('Message *', '', ['class' => 'awesome'])!!}--}}
                    {{--{!!Form::textArea('subject','',array('class'=>'','placeholder'=>'Message','required'=>'required' ) )!!}--}}
                {{--</div>--}}

                {{--<div class="col-sm-offset-2 col-sm-10">--}}
                    {{--{!!Form::submit('Add New Deni', array('class'=>'btn btn-primary','id'=>'submitqn'))!!}--}}


                {{--</div>--}}
            {{--</div>--}}
            {{--{!!Form::close()!!}--}}
        {{--</div>--}}
    {{--</div>--}}
</section>
@endsection
