@extends('layouts.app')

@section('title')
Thankyou - {{$settings["general"]->site_title}} 
@endsection

@section('content')
    <div id="offers-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-8 offset-md-2 thank-you">
                    <h1>Thank You for Signing Up</h1>
                    <p>You will be notified of all the special offers we have through email.</p>
                </div>

            </div>
        </div>

    @endsection
