<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Contact page</title>
  </head>
  <body >
    <!-- nav section -->
    <div class="container-fluid">
      <div class="container">
        <!-- header section -->
        <div class="row">
          <div class="col">
            <header >
              <nav class="navbar navbar-expand-lg navbar-light " >
                <a class="navbar-brand" style="width: 20%" href="index.php"><img src="img/logo/final-logo.png" class="img-fluid " style="width: 50%" ></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                      <a class="nav-link text-black" href="index.php">GALLARY</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-black" href="about.php">ABOUT</a>
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
                    
                    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                  <!-- </form> -->
                  
                </div>
              </nav>
            </header>    
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center ">
          <h1>WELCOME TO MY GALLARY</h1>
          <h2><i>Contact Us..</i></h2>
          
        </div>
      </div>

      <div class="row contact_info pt-5 ">
        <div class="col-md-4">
          <h2><i>Address :-</i></h2>
          <p>
            Lorem ipsum dolor sit amet consectetur,<br> adipisicing elit sed do eiusmod,
            <br>tempor incididunt ut labore et dolore magna,<br>C/o Ut enim ad minim veniam,
            quis.<br> Nagpur-444444, Maharashtra <br>India
          </p>
        </div>
        <div class="col-md-4">
          <h2><i>Contact :- </i></h2>
          <p><b><i>Office : </i></b>9898989898</p>
          <p><b><i>Phone : </i></b>9898989898</p>
          <p><b><i>Email Address : </i></b><a href="#">info.mygallary@gmail.co.in</a></p>
          
        </div>
      </div>

      <div class="row contact pb-5">
        <div class="col-md-7 py-5">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.390685389088!2d79.09930901424721!3d21.1368449894571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c1ce578c9087%3A0x74226fbc5a129b8c!2sWebGurukul!5e0!3m2!1sen!2sin!4v1611394704510!5m2!1sen!2sin" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            
          </div>
        </div>
        <div class="col-md pt-3">
          <div class="contact-form">
            <h3 class="title">Contact Us </h3>
            <h5 class="subtitle">We are here assist you.</h5>
            <form action="getcontact.php" method="post">
              <p><input type="text" name="name" placeholder="Your Name" /></p>
              <p><input type="email" name="email" placeholder="Your E-mail Adress" /></p>
              <p><input type="tel" name="contact" placeholder="Your Phone Number"/></p>
              <p><textarea name="msg" id="" rows="5" cols="30" placeholder="Your Message"></textarea></p>
              <p><button type="submit" name="submit" value="submit" class="btn-send border-none">Get a Call Back</button></p>
            </form>
          </div>
        </div>
      </div>   

    </div>




     <!-- footer1 section -->
    <div class="container-fluid">
      <!--logo section -->
      <div class="row">
        <div class="col-sm-2 offset-sm-5 col-md-2 offset-md-5 col-lg-2 offset-lg-5 position-relative">
          <div class="img_logo position-absolute text-center pt-3 shadow-lg"  >
            
            <img src="img/logo/final-logo.png" class="img-fluid w-75 "  >
          </div>
        </div>
      </div>
      <section class="footer1  py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <h5>MY GALLERY</h5>
              <P>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.
              </P>
            </div>
            <div class="col-md-3">
              <h5>explore</h5>
              <p><a href="about.php" class="text-black">About Us</a></p>
              <p><a href="" class="text-black">Services</a></p>
              <p><a href="feedback.php" class="text-black">Feedback</a></p>
              <p><a href="contact.php" class="text-black">Contact</a></p>
              <p><a href="" class="text-black">Terms Of Service</a></p>
              <p><a href="" class="text-black">Privacy Policy</a></p>
            </div>
            <div class="col-md-3">
              <h5>visit</h5>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. etur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.
              </p>
            </div>
            <div class="col-md-3">
              <h5 class="text-uppercase">support</h5>
              <p><a href="" class="text-black">FAQ</a></p>
              <p><a href="" class="text-black">downloads</a></p>
              <p><a href="" class="text-black">product registration</a></p>
              <p><a href="" class="text-black">community</a></p>
              <p><a href="" class="text-black">recent posts</a></p>
              <p><a href="" class="text-black">blogs</a></p>
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
              <h3>Become A Family Member <span><button type="button" class="btn btn-dark">JOIN NOW</button>
              </span></h3>
            </div>
          </div>
          <div class="row py-3">
            <div class="col text-center">
              <span><a href="" class="text-black"><i class="fab  fa-facebook-square"></i></a></span>
              <span><a href="" class="text-black"><i class="fab  fa-twitter"></i></a></span>
              <span><a href="" class="text-black"><i class="fab  fa-youtube"></i></a></span>
              <span><a href="" class="text-black"><i class="fab  fa-pinterest-square"></i></a></span>
            </div>
          </div>
        </div>
      </section>

      <!-- footer2 section -->
      <section class="footer2">
        <footer>
          <div class="row">
            <div class="col text-center text-white bg-dark py-3">
              <p class="mb-0">
                Copyright © 2018 Raj Corporation All rights reserved.
              </p>
            </div>
          </div>
        </footer>
      </section>

    </div>

    
    

   


        

   




    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
    <!-- <script> speed = 600</script> -->
    
   
    
  </body>
</html>

