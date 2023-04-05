@extends('layouts.admin')

@section('title', 'Page title')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit Food Item </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                        vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/food-items" class="breadcrumb-link">All Food Items</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Food Item</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Edit a new Item</h5>
                <div class="card-body">
                   <form method="POST" action="/admin/food-items/{{ $item->id }}">
                        @csrf
                               @method('PUT')
                        <div class="form-group">
                            <label for="inputItem">Item Name</label>
                            <input id="inputItem" type="text"
                                class="form-control form-control-lg @error('title') is-invalid @enderror" name="title"
                                value="{{ old('title') }}" placeholder="Enter Item name" required autocomplete="name"
                                autofocus>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputPrice">Price </label>
                            <input id="inputPrice" type="text"
                                class="form-control form-control-lg @error('price') is-invalid @enderror" name="price"
                                value="{{ old('price') }}" placeholder="Enter the Item Price " required autocomplete="price"
                                autofocus>
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Description</label>
                            <textarea id="inputDescription" type="text" value="{{ old('description') }}"
                                class="form-control form-control-lg @error('description') is-invalid @enderror" name="description"
                                placeholder="Write a Description" required autocomplete="name" autofocus> </textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputItemImageUrl"> Image Url</label>
                            <input id="inputItemImageUrl" type="text"
                                class="form-control form-control-lg @error('image_url') is-invalid @enderror"
                                name="image_url" value="{{ old('image_url') }}"
                                placeholder="http://www.billys.com/images/desserts.png"  autocomplete="name"
                                autofocus>
                            @error('image_url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="inputCategory">Category</label>
                            <select name="category_id" class="form-control" id="inputCategory">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" >
                                        {{ $category->title }}</option>
                                @endforeach
                            </select>
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
