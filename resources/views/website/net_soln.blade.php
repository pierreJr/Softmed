@extends('website.master')

@section('contents')
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Networking Solutions</h2>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-4 center"><img src="images/services/net_soln.jpg" class="img-responsive img-rounded" alt="Responsive image">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-8 ">
                    <p><b>SOFTMED</b> offers complete and practical solutions to the design, supply,</p>
                    <p>installation and maintenance of IT networks for organizations in diverse sectors.</p>
                   <p> We have the expertise and experience to meet all the requirements of your</p>
                    <p> network at the right cost. In Networking, we offer the entire array of WAN/LAN</p>
                    <p> Solutions &amp; Products incorporating the latest technologies from global pioneers.</p>
                </div>
            </div>
            @include('website.get_stated')

        </div>

    </section>
@endsection
