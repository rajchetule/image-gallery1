@extends('layouts.index')

@section('content')
   <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">MyGallery</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('gallery-card') }}">Gallery</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Gallery</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-4 card-box">
                        <a type="button" class="popup-with-form text-light btn btn-danger waves-effect waves-light"  href="#test-form">
                            Add Category<span class="btn-label-right"><i class="mdi mdi-close-circle-outline"></i></span>
                        </a>
                        <form id="test-form" action="{{ route('gallery-card')}}" method="post" enctype="multipart/form-data" class="mfp-hide white-popup-block">
                            @csrf
                            <h3 class="font-18">Add Category</h3>

                            <div class="form-group">
                                <label for="exampleInputCategoryName">Category Name</label>
                                <input type="text" class="form-control @error('category_name') is-invalid @enderror" id="exampleInputCategoryName" name="category_name" placeholder="Enter Category here...">
                                @error('category_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputImage">Upload Image</label>
                                <input type="file" class="form-control @error('img_url') is-invalid @enderror" id="exampleInputImage" name="img_url" placeholder="Upload image..">
                                <small id="emailHelp" class="form-text text-muted">Image size 900 * 600</small>
                                @error('img_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                        </form>

                        <input type="search" class="float-right form-control w-25 " placeholder="Search category here....">

                    </div>
                </div>
                <div class="row">
                    @foreach($allGalleryList as $gallery)
                        <div class="col-md-4">
                            <div class="card">
                                <a href="{{ route('cat_table', ['cat' => $gallery->slug]) }}">
                                    <img class="card-img-top img-fluid" src="{{ $gallery->img_url }}" alt="Card image cap">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $gallery->category_name }}</h5>
                                    <small class="text-muted">10 photos</small>
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- <a href="#edit-form" class="dropdown-item popup-with-form waves-effect waves-light">Edit</a> -->
                                            <a href="{{ route('gallery-delete', ['cid' => $gallery->id])  }}" class="dropdown-item">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
