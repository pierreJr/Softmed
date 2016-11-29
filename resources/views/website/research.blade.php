@extends('website.master')

@section('contents')
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Research and Consultancy</h2>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-4 center"><img src="images/services/research.jpg" class="img-responsive img-rounded" alt="Responsive image">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-8 ">
                   <p> <b>SOFTMED</b>  is involved in research and offers consultancy services to  Ministry of Health and social
                    welfare where its Consultants was involved in the preparation of eHealth strategy in which Telemedicine was among of the components .</p>

                  <p> <b>SOFTMED</b>   has been collaborating with various partner organizations, such as Muhimbili University of
                    Health and Allied Sciences,Tanga region Administrative office , University of Stockholm,d-tree international ,
                    Harvard school of Public Health ,Christian Social Service Commission, Evangelical Lutheran Church in Tanzania,
                    etc. in conducting various health systems strengthening Consultancies and studies .</p>
                </div>
            </div>
           @include('website.get_stated')
        </div>
    </section>
@endsection
