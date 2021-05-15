@extends('layouts.website')
@section('content')
<!-- banner section -->
    <div class="container-fluid">
      <section class="banner">
        <div class="row">
          <div class="col">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('my_gallery/assets/img/banner_img/img1.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-left">My Gallery <br>Best Free Images With High Resolution Is Only For You...</h5>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control border-radius=50%" placeholder="Search for free photos.." aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                      </div>
                    </div>
                    <p class="text-left ">
                      Trending :wildlife , grass , outdoors , abstract ,food, men style, dark background more....
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('my_gallery/assets/img/banner_img/img2.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-left">My Gallery <br>Best Free Images With  High Resolution Is Only For You...</h5>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search for free photos.." aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                      </div>
                    </div>
                    <p class="text-left ">
                      Trending :wildlife , grass , outdoors , abstract ,food, men style, dark background more....
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('my_gallery/assets/img/banner_img/img3.jpg') }}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-left">My Gallery <br>Best Free Images With High Resolution Is Only For You...</h5>
                    <div class="input-group mb-3 " >
                      <input type="text" class="form-control" placeholder="Search for free photos.." aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                      </div>
                    </div>
                    <p class="text-left ">
                      Trending :wildlife , grass , outdoors , abstract ,food, men style, dark background more....
                    </p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>

      </section>
    </div>
    <!-- category section -->
    <section class="category my-5">
      <div class="container">
        <div class="row ">
          <div class="col-sm-6 col-md-4 image_pkt">
            <div class="row">
              <div class="col-12">
                <a href="nature_pic.php">
                  <img src="{{ asset('my_gallery/assets/img/categoty_img/cat1.jpg') }}" class="img-fluid">
                </a>
              </div>
              <div class="col sub_pkt">
                <a href="nature_pic.php"><P><span>NATURE</span></P></a>
              </div>

            </div>

          </div>

          <div class="col-sm-6 col-md-4 image_pkt">
            <div class="row">
              <div class="col-12">
                <a href="fashion_pic.php">
                  <img src="{{ asset('my_gallery/assets/img/categoty_img/cat2.jpg') }}" class="img-fluid">
                </a>
              </div>
              <div class="col sub_pkt">
                <a href="fashion_pic.php"><P><span>FASHION</span></P></a>
              </div>

            </div>

          </div>

          <div class="col-sm-6 col-md-4 image_pkt">
            <div class="row">
              <div class="col-12">
                <a href="vehicle_pic.php">
                  <img src="{{ asset('my_gallery/assets/img/categoty_img/cat3.jpg') }}" class="img-fluid">
                </a>
              </div>
              <div class="col sub_pkt">
                <a href="vehicle_pic.php"><P><span>VEHICLE</span></P></a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 image_pkt">
            <div class="row">
              <div class="col-12">
                <a href="travel_pic.php">
                  <img src="{{ asset('my_gallery/assets/img/categoty_img/cat4.jpg') }}" class="img-fluid">
                </a>
              </div>
              <div class="col sub_pkt">
                <a href="travel_pic.php"><P><span>TRAVEL</span></P></a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 image_pkt">
            <div class="row">
              <div class="col-12">
                <a href="animated_pic.php">
                  <img src="{{ asset('my_gallery/assets/img/categoty_img/cat5.jpg') }}" class="img-fluid">
                </a>
              </div>
              <div class="col sub_pkt">
                <a href="animated_pic.php"><P><span>ANIMATION</span></P></a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 image_pkt">
            <div class="row">
              <div class="col-12">
                <a href="food_pic.php">
                  <img src="{{ asset('my_gallery/assets/img/categoty_img/cat6.jpg') }}" class="img-fluid">
                </a>
              </div>
              <div class="col sub_pkt">
                 <a href="food_pic.php"><P><span>FOOD</span></P></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <hr width="40%">

      <!-- welcome section -->
      <section class="welcome my-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <h2 class="text-center mb-5">Welcome To My Gallery... </h2>
            </div>
            <div class="col-sm-12 col-md-6 mb-5">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('my_gallery/assets/img/categoty_img/wel1.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('my_gallery/assets/img/categoty_img/wel2.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('my_gallery/assets/img/categoty_img/wel3.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 mb-5">
              <h3>What We Have For You..</h3>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.era <br>
                consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.era
              </p>
            </div>
            <div class="col-sm-12 col-md-6 mb-5">
              <h3>Most Viewed Images..</h3>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.era
                consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.era
              </p>
            </div>
            <div class="col-sm-12 col-md-6 mb-5">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('my_gallery/assets/img/categoty_img/wel6.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('my_gallery/assets/img/categoty_img/wel5.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('my_gallery/assets/img/categoty_img/wel4.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('my_gallery/assets/img/categoty_img/wel4.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('my_gallery/assets/img/categoty_img/wel5.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('my_gallery/assets/img/categoty_img/wel6.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <h3>Great For Photographers...</h3>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.era <br>
                consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.era
              </p>
            </div>
          </div>
        </div>
      </section>
      <hr width="40%">

      <!-- review section -->
    <div class="container">
      <div class="row py-5">
        <div class="col text-center">
          <h2>What People Say About Us</h2>
          <h3>Loved by 13000 Happy Customer</h3>
        </div>
      </div>

      <!-- review slider -->
      <section class="review py-5">
        <div class="row">
          <div class="col col-md">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-2">
                          <img src="{{ asset('my_gallery/assets/img/rev1.jpg') }}" class="img-fluid">
                        </div>
                        <div class="col-8">
                          <blockquote class="blockquote">
                            <p class="mb-0">
                              “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”
                            </p>
                            <footer class="blockquote-footer"><cite title="Source Title">Jon Doe</cite></footer>
                          </blockquote>

                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-3">
                          <img src="{{ asset('my_gallery/assets/img/rev2.jpg') }}" class="img-fluid">
                        </div>
                        <div class="col-7">
                          <blockquote class="blockquote ">
                            <p class="mb-0">
                              “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”
                            </p>
                            <footer class="blockquote-footer"><cite title="Source Title">Jon Doe</cite></footer>
                          </blockquote>

                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-2">
                          <img src="{{ asset('my_gallery/assets/img/rev3.jpg') }}" class="img-fluid">
                        </div>
                        <div class="col-8">
                          <blockquote class="blockquote ">
                            <p class="mb-0">
                              “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”
                            </p>
                            <footer class="blockquote-footer"><cite title="Source Title">Jon Doe</cite></footer>
                          </blockquote>

                        </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
          </div>
        </div>
      </section>

    </div>
@endsection
