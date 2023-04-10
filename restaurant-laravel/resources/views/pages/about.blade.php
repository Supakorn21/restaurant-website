@extends('layouts.app')

@section('title')
About - {{$settings["general"]->site_title}} 
@endsection

@section('content')
    <div id="about-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>About Page</h1>
                    <p>I'm baby butcher vaporware schlitz kombucha solarpunk chicharrones subway tile. Vaporware knausgaard
                        mlkshk butcher shaman hexagon austin polaroid kombucha woke praxis. Cronut photo booth neutral milk
                        hotel paleo drinking vinegar celiac echo park art party fanny pack flannel truffaut praxis. You
                        probably haven't heard of them kitsch cred lo-fi fit williamsburg semiotics organic pabst fixie
                        helvetica woke. Banh mi shoreditch gatekeep stumptown viral trust fund ramps taiyaki slow-carb
                        occupy. Enamel pin direct trade +1 adaptogen, vegan literally craft beer master cleanse austin
                        whatever snackwave subway tile synth.
                    </p>
                    <p>I'm baby butcher vaporware schlitz kombucha solarpunk chicharrones subway tile. Vaporware knausgaard
                        mlkshk butcher shaman hexagon austin polaroid kombucha woke praxis. Cronut photo booth neutral milk
                        hotel paleo drinking vinegar celiac echo park art party fanny pack flannel truffaut praxis. You
                        probably haven't heard of them kitsch cred lo-fi fit williamsburg semiotics organic pabst fixie
                        helvetica woke. Banh mi shoreditch gatekeep stumptown viral trust fund ramps taiyaki slow-carb
                        occupy. Enamel pin direct trade +1 adaptogen, vegan literally craft beer master cleanse austin
                        whatever snackwave subway tile synth.</p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="./images/glass_in_restaurant.png" alt="">
                </div>

            </div>

        </div>
    </div>

@endsection
