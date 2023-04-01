@extends('layouts.app')

@section('title', 'Page title')

@section('content')
    <div id="waitlist-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Get on the list</h1>
                    <form>
                             <div class="form-group mb-3">
                            <label for="fnameInput">First Name</label>
                            <input type="text" class="form-control" name="fname"
                            id="fnameInput"
                                placeholder="Billy">
                        </div>
                             <div class="form-group mb-3">
                            <label for="lnameInput">Last Name</label>
                            <input type="text" class="form-control" name="lname"
                            id="lnameInput"
                                placeholder="Ray">
                        </div>
                        <div class="form-group mb-3">
                            <label for="emailInput">Email address</label>
                            <input type="email" class="form-control" id="emailInput" name="email"
                                placeholder="name@example.com">
                        </div>
                         <div class="form-group mb-3">
                            <label for="phoneInput">Phone Number</label>
                            <input type="text" class="form-control" name="phone"
                            id="phoneInput"
                                placeholder="091*******">
                        </div>
                        <div class="form-group mb-3">
                            <label for="guestsInput">Guests</label>
                            <select name="guests" class="form-control" id="guestsInput">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="timeInput">Time</label>
                              <select name="time" class="form-control" id="timeInput">
                                <option value="6">6:00 PM</option>
                                <option value="7">7:00 PM</option>
                                <option value="8">8:00 PM</option>
                                <option value="9">9:00 PM</option>
                                <option value="10">10:00 PM</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                        </div>

                    </form>

                </div>
                <div class="col-md-6">
                    <p>Please Note: This is not a researvation. You will be added to the current wait list. You may have a short wait once you arrive while we prepare your table.</p>
                </div>

            </div>
        </div>

    @endsection
