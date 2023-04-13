@extends('layouts.landing-page')

@section('title')
    {{ $settings['general']->site_title }} | Thailand's number #1 Burger
@endsection

@section('content')
    <section id="information">
        <div class="restaurant-image">
            <img src="./images/top-down.jpeg" alt="" />
        </div>
        <div class="info">
            <h2>We Started From The Bottom In 2020</h2>
            <div class="paragraphs">
                <p>
                    Tommy Burger is a beloved fast-food chain that has been serving up delicious burgers and sides to the
                    people of Thailand for over a decade. With a commitment to using only the freshest and highest
                    quality ingredients, Tommy Burger has earned a reputation as one of the best burger joints in the
                    country.
                </p>
                <p>
                    Our story began in 2010, when Tommy Burger first opened its doors in Bangkok. From the very
                    beginning, we set out to create a fast-food experience that was unlike any other. We wanted to serve
                    up burgers that were made with real, wholesome ingredients and that tasted like they were straight
                    off the grill.
                </p>
            </div>
            <a href="/about" class="about-link">
                <span>Learn More About Our Restaurant </span>
                <div class="circle-right">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </a>
        </div>
    </section>

    @include('includes.food-categories-slider')
@endsection
