@extends('layouts.app')

@section('title', 'Page title')

@section('content')
    <div id="offers-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Sign Up For Deals</h1>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="firstnameInput">First Name</label>
                                    <input type="text" class="form-control" id="firstnameInput" name="fname"
                                        placeholder="Supakorn">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="lastnameInput">Last Name</label>
                                    <input type="text" class="form-control" name="lname" id="lastnameInput"
                                        placeholder="Charoen">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="emailInput">Email address</label>
                                    <input type="email" class="form-control" id="emailInput" name="email"
                                        placeholder="name@example.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="phoneInput">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="phoneInput"
                                        placeholder="091*******">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <p>
                                        In signing up I acknowledge that I am 18 years of age or older, want to receive
                                        email offers from Billys Burgers and, If I select to join Dine Rewards, agree to the terms and conditions of the program.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                                </div>
                            </div>
                        </div>




                    </form>

                </div>
            
            </div>
        </div>

    @endsection
