<?php 

  class Cat_food 
{
  
  public $result;
  function __construct()
  {
      require'connect.php';
      $obj1= new Connect();

      $con= $obj1-> getcon();

    // echo "<pre>";


    $query= "SELECT images. * ,categories.category_name FROM images INNER JOIN categories ON images.category_id=categories.id WHERE images.category_id=6";
    
    // fire querry in database

    $this->result = $con->query($query);

    while ($data=$this->result->fetch_object()){
          echo "<div class='col-md-4 pb-4'>";
            echo "<img src='dashboard/$data->image_path' class='img-fluid' <br>";
            echo "<p>$data->image_name</p>";
            echo "<p><a href='download.php?path=dashboard/$data->image_path' class='btn btn-info btn-md'>Download</a></p>";
             echo "</div>";
          }



    }
}

?>

<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css" >

    <title>Food pics</title>
  </head>
  <body>
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
                      <a class="nav-link text-black" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-black" href="#">FEEDBACK</a>
                    </li>
                    <li class="nav-item" >
                      <a class="nav-link text-black" href="#">CONTACT</a>
                    </li>
                    
                    
                  </ul >

                  <!-- <form class="ml-auto  my-2 my-lg-0"> -->
                    <a class="btn btn-light " href="./dashboard/login.php" role="button">LOG IN</a>
                    <a class="btn btn-light" href="#" role="button">JOIN</a>
                    <a class="btn btn-success" href="dashboard.upload.php" role="button"><i class="fas fa-upload"></i> UPLOAD</a>
                    
                    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                  <!-- </form> -->
                  
                </div>
              </nav>
            </header>
            
          </div>
        </div>
      </div>
    </div>
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
                  <img src="img/banner_img/img1.jpg" style="height: 700px" class="d-block w-100 img-fluid" alt="...">
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
                  <img src="img/banner_img/img2.jpg" class="d-block w-100 img-fluid" alt="...">
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
                  <img src="img/banner_img/img3.jpg" class="d-block w-100" alt="...">
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
    <!-- nature pictures -->
    <div class="container">

      <div class="row py-4">
        <div class="col">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link " href="nature_pic.php">NATURE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="fashion_pic.php">FASHION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vehicle_pic.php">VEHICLE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="travel_pic.php">TRAVEL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="animated_pic.php">ANIMATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="food_pic.php">FOOD</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

      <!-- DISPLAY PICS -->
    <div class="container">
      
      <div class="row">
        <?php 

        $obj=new Cat_food($_POST);
        // while ($obj->data=$obj->result->fetch_object()){

        // echo "<div class='col-md-4 pb-4'>";
        //   echo "<img src='dashboard/$obj->data->image_path' class='img-fluid' <br>";
        //   echo "<p>$obj->data->image_name</p>";
        //   echo "<p><a href='download.php?path=dashboard/$obj->data->image_path' class='btn btn-info btn-md'>Download</a></p> <br>";

          // echo "<a href='download.php' class='btn btn-primary px-3'>Download</a> <br>";
          
          // <a href="#" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
          //   <path d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
          // </svg></a>        
        // echo "</div>";
        
        ?>

      </div>

    </div>

    <!-- footer1 section -->
    <div class="container-fluid">
      <!--logo section -->
      <div class="row ">
        <div class="col-2 align-self-center">
         <img src="img/logo/final-logo.png" class="img-fluid " style="width: 50%;" >
        </div>
      </div>
      <section class="footer1 bg-secondary">
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
              <p><a href="">About Us</a></p>
              <p><a href="">Services</a></p>
              <p><a href="">Feedback</a></p>
              <p><a href="">Contact</a></p>
              <p><a href="">Terms Of Service</a></p>
              <p><a href="">Privacy Policy</a></p>
            </div>
            <div class="col-md-3">
              <h5>visit</h5>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. etur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.
              </p>
            </div>
            <div class="col-md-3">
              <h5 class="text-uppercase">support</h5>
              <p><a href="">FAQ</a></p>
              <p><a href="">downloads</a></p>
              <p><a href="">product registration</a></p>
              <p><a href="">community</a></p>
              <p><a href="">recent posts</a></p>
              <p><a href="">blogs</a></p>
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
              <h3>Become A Family Member <span><button type="button" class="btn btn-dark">JOIN NOW</button>
              </span></h3>
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
              <span><a href=""><i class="fab fa-facebook-square"></i></a></span>
              <span><a href=""><i class="fab fa-twitter"></i></a></span>
              <span><a href=""><i class="fab fa-youtube"></i></a></span>
              <span><a href=""><i class="fab fa-pinterest-square"></i></a></span>
            </div>
          </div>
        </div>
      </section>

      <!-- footer2 section -->
      <section class="footer2">
        <footer>
          <div class="row py-3">
            <div class="col text-center">
              <p class="mb-0">
                Copyright © 2018 Raj Corporation All rights reserved.
              </p>
            </div>
          </div>
        </footer>
      </section>

    </div>
    




    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
   
    
    
  </body>
</html>

 