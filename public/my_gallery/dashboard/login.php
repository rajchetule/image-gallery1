<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >

    <title>login page</title>
  </head>
  <body>
    <div class="container-fluid bg_pur">
      <div class="container bg-white p-0">
        <div class="row">
        	<div class="col-md-2 py-3">
        		<img src="../img/logo/final-logo.png" class="img-fluid " style="width: 60%" >
        	</div>
        </div>

        <!-- login section -->

        <div class="row">
        	<div class="col-md-7 banner px-0">
                <div class="bg-color px-5 ">
                    <h1 class="text-uppercase ">welcome to image gallary</h1>
                    <h3 class="">Sign In To Explore Your Gallery....</h3>
                </div>
        		
        		
        	</div>
        	<div class="col-md login2">
        		<div class="row ">
        			<div class="col-12 py-3 ">
        				<img src="../img/logo/final-logo.png" class="img-fluid " style="width: 30%" >
        			</div>
        			<div class="col">

        				<form method="post" action="check.php" enctype="multipart/form-data">
						  <div class="form-group">
						  	<h2>LOG IN</h2>
						    <label for="exampleInputEmail1"> Username Or Email</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username Or Email" name="email">
						    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
						  </div>
						  <button type="submit" class="btn btn-primary"><b>Log In</b></button>
						  <div class="form-check">
						    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						    <label class="form-check-label" for="exampleCheck1">stay looged in</label>

						    <a href="">Forgot password ?</a>
						    <a href="">Forgot username or email ?</a>
						    <p><button type="submit" class="btn btn-outline-primary"><b>Create an account</b></button></p>

						  </div>
						</form>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
    </div>
    




    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
   
    
    
  </body>
</html>

