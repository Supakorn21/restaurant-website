@extends('layouts.admin')

@section('title', 'Page title')

@section('content')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Food Categories </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                        vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/admin" class="breadcrumb-link">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Food Categories</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->

        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table -->
            <!-- ============================================================== -->
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">All Food Categories</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Date Created</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                     <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>{{$category->title}}</td>
                                    <td>{{ date('m/d/Y', strtotime($category->updated_at)) }}</td>
                                    <td> <a href="/admin/food-categories/{{$category->id}}/edit"><i
                                                class="fa-regular fa-pen-to-square"></i></a></td>
                                    <td> 
                                      <a onclick=" if(confirm('Are you sure you want to delete this category?')) { event.preventDefault(); document.getElementById('delete-category-{{ $category->id }}').submit(); }"                                                 href="#"><i class="far fa-trash-alt "></i></a>
                                            <form id="delete-category-{{ $category->id }}"
                                                action="/admin/food-categories/{{ $category->id }}/delete" method="POST"
                                                class="d-none">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                           {{ $categories->links() }}
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->

        </div>


    </div>
@endsection
