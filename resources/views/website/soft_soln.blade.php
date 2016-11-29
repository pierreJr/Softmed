@extends('website.master')

@section('contents')
<section id="feature" class="transparent-bg">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Software Solutions (HMIS,Telemedicine apps,e-Learning,mobile solns ,FMIS )</h2>
           </div>
        <div class="row">
            <div class="col-xs-6 col-md-4 center"><img src="images/services/soft_soln.jpg" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8 center"></div>
        </div>
        @include('website.get_stated')
    </div>
</section>
@endsection    
    