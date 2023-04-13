@extends('layouts.app')

@section('title')
    About - {{ $settings['general']->site_title }}
@endsection

@section('content')
    <div id="about-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>About Us</h1>
                    <p>Tommy Burger is a beloved fast-food chain that has been serving up delicious burgers and sides to the
                        people of Thailand for over a decade. With a commitment to using only the freshest and highest
                        quality ingredients, Tommy Burger has earned a reputation as one of the best burger joints in the
                        country.</p>

                    <p>Our story began in 2010, when Tommy Burger first opened its doors in Bangkok. From the very
                        beginning, we set out to create a fast-food experience that was unlike any other. We wanted to serve
                        up burgers that were made with real, wholesome ingredients and that tasted like they were straight
                        off the grill.</p>

                    <p>Over the years, we've expanded our menu to include a variety of other mouth-watering options,
                        including crispy fried chicken, hearty hot dogs, and savory sides like onion rings and fries. And
                        while we've grown and evolved, one thing has always remained the same: our commitment to quality.
                    </p>

                    <p>At Tommy Burger, we believe that food should be more than just fuel for your body. It should be an
                        experience, something that you look forward to and savor with every bite. That's why we take such
                        care in sourcing our ingredients, preparing our food, and creating an atmosphere that's welcoming
                        and friendly.</p>
                    <p>So whether you're a longtime fan of Tommy Burger or you're just discovering us for the first time, we
                        invite you to come in and experience the taste sensation that's been winning over burger lovers in
                        Thailand for over a decade.</p>
                    </p>

                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="./images/glass_in_restaurant.png" alt="">
                </div>

            </div>

        </div>
    </div>
@endsection
