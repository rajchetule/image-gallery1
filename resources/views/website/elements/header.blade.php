 <!-- nav section -->
    <div class="container-fluid">
        <div class="container">
            <!-- header section -->
            <div class="row">
                <div class="col">
                    <header >
                        <nav class="navbar navbar-expand-lg navbar-light " >
                            <a class="navbar-brand" style="width: 20%" href="index.php"><img src="{{ asset('my_gallery/assets/img/logo/final-logo.png') }}" class="img-fluid " style="width: 50%" ></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item ">
                                <a class="nav-link text-black" href="index.php">GALLARY</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('website-about') }}">ABOUT</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-black" href="feedback.php">FEEDBACK</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-black" href="contact.php">CONTACT</a>
                                </li>

                            </ul>

                            <!-- <form class="ml-auto  my-2 my-lg-0"> -->
                                <a class="btn btn-light " href="./dashboard/login.php" role="button">LOG IN</a>
                                <a class="btn btn-light" href="#" role="button">JOIN</a>
                                <a class="btn btn-success" href="#" role="button"><i class="fas fa-upload"></i> UPLOAD</a>
                            <!-- </form> -->

                            </div>
                        </nav>
                    </header>
                </div>
            </div>
        </div>
    </div>
