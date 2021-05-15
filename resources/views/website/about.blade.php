@extends('layouts.website')
@section('content')
<div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>WELCOME TO MY GALLARY</h1>
          <h3 class="py-5"><i>Our Users Should Know About Us..!</i> </h3>
        </div>
      </div>

      <!-- about text -->

        <div class="row py-5">
            <div class="col-8">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
            <div class="col-4">
            <img src="{{ asset('my_gallery/assets/img/categoty_img/images_4.jpg') }}" class="img-fluid text-center">
            </div>
            <div class="col-4">
            <img src="{{ asset('my_gallery/assets/img/categoty_img/images_4.jpg') }}" class="img-fluid text-center">
            </div>
            <div class="col-8">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
        </div>

      <!-- ask_us section -->
        <!-- <section class="ask_us py-5" >
            <div class="container">
            <div class="row py-5">
                <div class="col-md-4">
                    <img src="{{ asset('my_gallery/assets/img/abt1.jpg') }}" class="img-fluid">
                    <h2>Have a question?</h2>
                    <p>If you have any question please do not hesitate to drop us an email.</p>
                    <a href="#" class="text-danger">Ask the community</a>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('my_gallery/assets/img/abt2.jpg') }}" class="img-fluid">
                    <h2>Watch and learn</h2>
                    <p>We help with product demo and let you experience the whole new world of technology.</p>
                    <a href="#" class="text-danger">Ask the community</a>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('my_gallery/assets/img/abt3.jpg') }}" class="img-fluid">
                    <h2>Get quick tips</h2>
                    <p>Our team is trying all possible ways to assist you with our services.</p>
                    <a href="#" class="text-danger">Ask the community</a>
                </div>
            </div>
            </div>
        </section> -->

    </div>
@endsection
