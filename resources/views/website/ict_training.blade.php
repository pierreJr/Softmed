@extends('website.master')

@section('contents')
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Training( ICT in Health  care )</h2>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-4 center"><img src="images/services/ict.jpg" class="img-responsive img-rounded" alt="Responsive image">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-8 center">
                    <b>SOFTMED</b> conducts different training on ICT for Health project as to persuade awareness to
                    citizens with chronic diseases and medical professionals in the partner
                    regions to more readily accept eHealth, and to have the capacity and knowledge to
                    use eHealth technologies in prevention and treatmento of arising and existing diseases.</div>
            </div>
            @include('website.get_stated')
         </div>
    </section>
@endsection
