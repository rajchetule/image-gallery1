
<?php 
 require "session.php";
 ?>
 
<?php 

	
	class View 
	{
		
		function __construct()
		{
			// require "session.php";
		    require '../connect.php';
		    $obj1= new Connect();
		    $con= $obj1-> getcon();

		    $query= "SELECT images.* ,categories.category_name FROM images INNER JOIN categories ON images.category_id=categories.id";
		    // fire querry in database

			$this->result = $con->query($query);

			// header("location:view.php")

			while ($data=$this->result->fetch_object()) {
			 		 		
	    		echo "<div class='col-md-4 mb-4 px-2 '>";
	    			echo"<img src='$data->image_path' width='100%' height='150px' >";
	    			echo"<p>$data->image_name</p>";
	    			echo"<p> $data->category_name</p>";
	    			echo"<a class='btn btn-info btn-md' href='edit.php?id=$data->id' >Edit</a>";
	    			echo"<a class='btn btn-danger btn-md' href='delete.php?id=$data->id' >Delete</a>";
	    		echo "</div>";
			}

		}
	}
	

	

	
		

// 	$data= $result->fetch_object();

 ?>


 <!DOCTYPE html>
 <html>
	 <head>
	 	<!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="css/bootstrap.min.css" >

	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	    
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	 	<title>view page</title>
	 </head>
	 <body>

	 	<div class="container">
		 	<div class="row ">
		 		<div class="col-md-3 menubar">
		          <div class="row">
		            <div class="col-12 text-center pt-3">
		              <img src="../img/logo/final-logo.png" class="img-fluid " style="width: 28%" >
		            </div>
		            <div class="col-12 u_profile">
		              <img src="../img/user.png" class="img-fluid rounded-circle" style="width: 30%">
		              <p class="pt-3"><b>user-name</b></p>
		              <p><b><a href="">username@gmail.com</a></b></p>
		            </div>
		            <div class="col p-0">
		              <div class="list-group ">
		                <a href="dashboard.php" class="list-group-item list-group-item-action">
		                  DASHBOARD
		                </a>
		                <a href="upload.php" class="list-group-item list-group-item-action">IMAGE UPLOAD</a>
		                <a href="feedback.php" class="list-group-item list-group-item-action">FEEDBACK</a>
		                <a href="contact.php" class="list-group-item list-group-item-action">CONTACT</a>
		                
		              </div>
		            </div>
		          </div>
		        </div>
		        <div class="col-md">
		        	<div class="row pb-5">
			            <div class="col-12 ">
			              <nav class="navbar  navbar-expand-lg navbar-light ">
			                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			                  <span class="navbar-toggler-icon"></span>
			                </button>
			                <div class="collapse navbar-collapse" id="navbarNavDropdown">
			                  <ul class="navbar-nav ml-auto">
			                    <li class="nav-item px-3">
			                      <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
			                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
			                      </svg> </a>
			                    </li>
			                    <li class="nav-item pr-3">
			                      <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
			                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
			                      </svg></a>
			                    </li>
			                    <li class="nav-item">
			                      <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left" viewBox="0 0 16 16">
			                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
			                      </svg></a>
			                    </li>
			                    <li class="nav-item  px-3">
			                      <!-- <input type="submit" name="logout" value="logout" > -->
			                      <button><a href="login.php" class="btn">Logout</a></button>
			                    </li>
			                    
			                  </ul>
			                </div>
			              </nav>
			            </div>
			        </div>
			        <div class="row pb-5 pl-2">
					 	<div class="banner col-md text-center py-5">
				    		<h1 class="text-uppercase">welcome to image gallary</h1>
				    		<h3>Sign In To Explore Your Gallery....</h3>
				    	</div>
				    </div>
		    	
			    	<div class="row dash_view">
			    		<?php 

			 				$obj=new View($_POST);
			    	
			    		?>
			    	</div>
		    	</div>
    		</div>
    		<div class="row">
		        <div class="col">
		          <!-- footer section -->

		          <footer>
		            <div class="row bg-secondary text-center text-white">
		              <div class="col py-3">
		                <p class="mb-0">copyright @2020 reserved by rajcorporation </p>
		              </div>
		            </div>
		          </footer>
		        </div>
		    </div>
    	</div>






	 	<script src="js/jquery-3.5.1.slim.min.js"></script>
    	<script src="js/bootstrap.bundle.min.js" ></script>

	 </body>
 </html>



 <!-- <!DOCTYPE html>
 <html>
	 <head>
	 	<title> Image data view</title>
	 </head>
	 <body>

	 	<table border="1">
	 		<tr>
	 			<th>Id</th>
	 			<th>Image_name</th>
	 			<th>Image_path</th>
	 			<th>Category_name</th>
	 			<th>action</th>
	 			<th>Edit</th>
	 		</tr>
	 		<?php 

	 			while ($data=$result->fetch_object()) {
	 				echo "<tr>";
	 				echo "<td> $data->image_name </td> ";
	 				echo "<td> <img src='$data->image_path'height='100'> </td> ";
	 				echo "<td> $data->category_name </td> ";
	 				echo "<td> <a href='delete.php?id=$data->id'> Delete </a> </td>";
	 				echo "<td> <a href='edit.php?id=$data->id'>Edit</a></td>";
	 				echo "</tr>";
	 			}


	 		 ?>

	 	</table>
	 
	 </body>
 </html> -->