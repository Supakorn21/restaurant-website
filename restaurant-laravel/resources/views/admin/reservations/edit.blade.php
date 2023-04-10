@extends('layouts.admin')

@section('title', 'Page title')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit Reservation </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                        vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/reservations" class="breadcrumb-link">All
                                        Reservations</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Reservation</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Edit a  Reservation</h5>
                <div class="card-body">
               <form method="POST" action="/admin/reservations/{{ $reservation->id }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="inputfname">First Name</label>
                            <input id="inputfname" type="text"
                                class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname"
                                value="{{ old('fname', $reservation->fname) }}" placeholder="John" required autocomplete="fname" autofocus>
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
                                value="{{ old('lname', $reservation->lname) }}" placeholder="Doe" required autocomplete="lname" autofocus>
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
                                value="{{ old('email', $reservation->email) }}" placeholder="example@gmail.com" required autocomplete="email"
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
                                name="phone_number" value="{{ old('phone_number', $reservation->phone_number) }}" placeholder="093*******" required
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
                                <option value="1"  {{ $reservation->guests_total == 1 ? 'selected' : '' }}>1</option>
                                <option value="2"  {{ $reservation->guests_total == 2 ? 'selected' : '' }}>2</option>
                                <option value="3"  {{ $reservation->guests_total == 3 ? 'selected' : '' }}>3</option>
                                <option value="4"  {{ $reservation->guests_total == 4 ? 'selected' : '' }}>4</option>
                                <option value="5"  {{ $reservation->guests_total == 5 ? 'selected' : '' }}>5</option>
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
                                <option value="6" {{ $reservation->time == 6 ? 'selected' : '' }}>6:00 PM</option>
                                <option value="7" {{ $reservation->time == 7 ? 'selected' : '' }}>7:00 PM</option>
                                <option value="8" {{ $reservation->time == 8 ? 'selected' : '' }}>8:00 PM</option>
                                <option value="9" {{ $reservation->time == 9 ? 'selected' : '' }}>9:00 PM</option>
                                <option value="10" {{ $reservation->time == 10 ? 'selected' : '' }}>10:00 PM</option>
                            </select>
                            @error('time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
