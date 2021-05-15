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
                                    <li class="breadcrumb-item"><a href="#">{{ ucfirst($cat) }}</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">{{ ucfirst($cat) }}</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col mb-4 card-box">
                        <a type="button" class="popup-with-form text-light btn btn-danger waves-effect waves-light"  href="#img-form">
                            Add Images<span class="btn-label-right"><i class="mdi mdi-close-circle-outline"></i></span>
                        </a>

                        <input type="search" class="float-right form-control w-25 " placeholder="Search category here....">

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">{{ ucfirst($cat) }} Images</h4>
                                <p class="text-muted font-13 mb-4">
                                    This example shows the multi option. Note how a click on a row will toggle its selected state without effecting other rows,
                                    unlike the os and single options shown in other examples.
                                </p>

                                <table id="selection-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th width="10%">Sr no.</th>
                                            <th>Image</th>
                                            <th>Image Name</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach($subCategories as $subCategory)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ $subCategory->img_url }}" alt="image" class="rounded-circle avatar-lg"></td>
                                                <td>{{ $subCategory-> name }}</td>
                                                <td><a href="{{ route('subCategory-delete', ['cat' => $cat, 'id' => $subCategory->id])  }}" class="btn btn-xs btn-danger">Delete</a></td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div>
                    </div>
                </div>

                <!-- pop up form -->
                <form id="img-form" action="{{ route('subcategory-image')}}" method="post" enctype="multipart/form-data" class="mfp-hide white-popup-block">
                    @csrf
                    <h3 class="font-18">Add {{ ucfirst($cat) }} Image</h3>

                    <input type="hidden" class="form-control " id="hiddenId" name="category_id" value="{{ $sub_cat  }}">
                    <div class="form-group">
                        <label for="exampleInputName">Image Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" name="name" placeholder="Enter Image here...">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputImage">Upload Image</label>
                        <input type="file" class="form-control @error('img_url') is-invalid @enderror" id="exampleInputImage" name="img_url" placeholder="Upload image..">
                        <small id="imgHelp" class="form-text text-muted">Image size 900 * 600</small>
                        @error('img_url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Add Image</button>
                </form>
            </div>
        </div>
    </div>
@endsection
