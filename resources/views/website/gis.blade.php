@extends('website.master')

@section('contents')
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>GIS (Geograpgical Information systems )</h2>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-4 center">Image</div>
                <div class="col-xs-12 col-sm-6 col-md-8 center">.Descriptions</div>
            </div>
          @include('website.get_stated')
        </div>
    </section>
@endsection
