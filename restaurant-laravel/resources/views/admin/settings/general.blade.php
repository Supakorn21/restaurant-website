@extends('layouts.admin')

@section('title', 'Page title')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit General Setting </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                        vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit General Setting</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Edit General Setting</h5>
                <div class="card-body">
                    <form method="POST" action="/admin/settings/general" id="basicform"
                        data-parsley-validate="" novalidate="">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="inputSiteTitle">Business Name</label>
                            <input id="inputSiteTitle" type="text"
                                class="form-control form-control-lg @error('site_title') is-invalid @enderror" name="site_title"
                                placeholder="Enter Site title" value="{{ old('site_title', $general_setting->site_title) }}" required
                                autocomplete="site_title" autofocus>
                            @error('site_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputLogoImageUrl">Logo Image Url</label>
                            <input id="inputLogoImageUrl" type="text"
                                class="form-control form-control-lg @error('logo_image_url') is-invalid @enderror" name="logo_image_url"
                                placeholder="Enter Logo Image URL" value="{{ old('logo_image_url', $general_setting->logo_image_url) }}" required
                                autocomplete="logo_image_url" autofocus>
                            @error('logo_image_url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputAddress1">Address 1</label>
                            <input id="inputAddress1" type="text"
                                class="form-control form-control-lg @error('address_1') is-invalid @enderror" name="address_1"
                                placeholder="Enter Address 1" value="{{ old('address_1', $general_setting->address_1) }}" required
                                autocomplete="address_1" autofocus>
                            @error('address_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2 (optional)</label>
                            <input id="inputAddress2" type="text"
                                class="form-control form-control-lg @error('address_2') is-invalid @enderror" name="address_2"
                                placeholder="Enter Address 2" value="{{ old('address_2', $general_setting->address_2) }}" required
                                autocomplete="address_2" autofocus>
                            @error('address_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputCity">City</label>
                            <input id="inputCity" type="text"
                                class="form-control form-control-lg @error('city') is-invalid @enderror" name="city"
                                placeholder="Enter City" value="{{ old('city', $general_setting->city) }}" required
                                autocomplete="city" autofocus>
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputProvince">Province</label>
                            <input id="inputProvince" type="text"
                                class="form-control form-control-lg @error('province') is-invalid @enderror" name="province"
                                placeholder="Enter Province" value="{{ old('province', $general_setting->province) }}" required
                                autocomplete="province" autofocus>
                            @error('province')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputZipcode">Zipcode</label>
                            <input id="inputZipcode" type="text"
                                class="form-control form-control-lg @error('zipcode') is-invalid @enderror" name="zipcode"
                                placeholder="Enter Zipcode" value="{{ old('zipcode', $general_setting->zipcode) }}" required
                                autocomplete="zipcode" autofocus>
                            @error('zipcode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputPhonenumber">Phone Number</label>
                            <input id="inputPhonenumber" type="text"
                                class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number"
                                placeholder="Enter Phone Number" value="{{ old('phone_number', $general_setting->phone_number) }}" required
                                autocomplete="phone_number" autofocus>
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                     

                        <div class="row">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">

                            </div>
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>

                                </p>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>

    </div>
@endsection
