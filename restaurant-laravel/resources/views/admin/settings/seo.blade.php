@extends('layouts.admin')

@section('title', 'Page title')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit SEO Setting </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                        vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit SEO Setting</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Edit SEO Setting</h5>
                <div class="card-body">
                    <form method="POST" action="/admin/settings/seo" id="basicform"
                        data-parsley-validate="" novalidate="">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="inputdescription">Business Description</label>
                            <textarea id="inputdescription" type="text"
                                class="form-control form-control-lg @error('description') is-invalid @enderror" name="description"
                                placeholder="Write a description"  required
                                autocomplete="description" autofocus>{{ old('description', $seo_setting->description) }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputKeywords">Keywords</label>
                            <input id="inputKeywords" type="text"
                                class="form-control form-control-lg @error('keywords') is-invalid @enderror" name="keywords"
                                placeholder="Enter Address 1" value="{{ old('keywords', $seo_setting->keywords) }}" required
                                autocomplete="keywords" autofocus>
                            @error('keywords')
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
