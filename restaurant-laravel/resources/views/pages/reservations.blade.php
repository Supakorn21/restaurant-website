@extends('layouts.app')

@section('title', 'Page title')

@section('content')
    <div id="waitlist-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Get on the list</h1>
                    <form method="POST" action="/reservations">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="inputfname">First Name</label>
                            <input id="inputfname" type="text"
                                class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname"
                                value="{{ old('fname') }}" placeholder="John" required autocomplete="fname" autofocus>
                            @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputlname">Last Name</label>
                            <input id="inputlname" type="text"
                                class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname"
                                value="{{ old('lname') }}" placeholder="Doe" required autocomplete="lname" autofocus>
                            @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputemail">Email address</label>
                            <input id="inputemail" type="email"
                                class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" placeholder="example@gmail.com" required autocomplete="email"
                                autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputphonenumber">Phone Number</label>
                            <input id="inputphonenumber" type="tel"
                                class="form-control form-control-lg @error('phone_number') is-invalid @enderror"
                                name="phone_number" value="{{ old('phone_number') }}" placeholder="093*******" required
                                autocomplete="phone_number" autofocus>
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="guestsInput">Guests</label>
                            <select name="guests_total"
                                class="form-control form-control-lg @error('guests_total') is-invalid @enderror"
                                id="guestsInput">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            @error('guests_total')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="timeInput">Time</label>
                            <select name="time" class="form-control form-control-lg @error('time') is-invalid @enderror"
                                id="timeInput">
                                <option value="6">6:00 PM</option>
                                <option value="7">7:00 PM</option>
                                <option value="8">8:00 PM</option>
                                <option value="9">9:00 PM</option>
                                <option value="10">10:00 PM</option>
                            </select>
                            @error('time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                        </div>

                    </form>

                </div>
                <div class="col-md-6">
                    <p>Please Note: This is not a researvation. You will be added to the current wait list. You may have a
                        short wait once you arrive while we prepare your table.</p>
                </div>

            </div>
        </div>

    @endsection
