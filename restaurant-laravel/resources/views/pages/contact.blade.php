@extends('layouts.app')

@section('title')
    Contact - {{ $settings['general']->site_title }}
@endsection

@section('content')
    <div id="contact-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Contact Page</h1>
                    <h3>Address </h3>
                    <p>
                        {{ $settings['general']->address_1 }} {{ $settings['general']->address_2 }} <br />
                        {{ $settings['general']->city }}, {{ $settings['general']->province }}
                        {{ $settings['general']->zipcode }}
                    </p>
                    <h3>Phone Number</h3>
                    <p> {{ $settings['general']->phone_number }}</p>
                </div>
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242.63323071215703!2d100.99343961468048!3d13.342083199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d35c99156921d%3A0x201103988e25724a!2sBurger%20King%20-%20PTT%20Chonburi%20Bypass%20Inbound!5e0!3m2!1sth!2sth!4v1681019448692!5m2!1sth!2sth"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

        </div>
    </div>
@endsection
