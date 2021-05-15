<?php 

	
	class Upload
	{
		
		function __construct()
		{
			require "session.php";
		    require '../connect.php';
		    $obj1= new Connect();
		    $con= $obj1-> getcon();
			// echo "<pre>";
			// print_r($_FILES);

			$img_name = $_FILES['img']['name'];
			$img_type = $_FILES['img']['type'];
			$img_tmp_name = $_FILES['img']['tmp_name']; //server side name
			$img_error = $_FILES['img']['error'];
			$img_size = $_FILES['img']['size'];
			$destination = "uploads/image/".$img_name;
			$image_path=$destination;
			$category=$_POST['category'];

			$format =explode(".", $img_name);
		// by using extension method 



			if ($format[1]=="jpg" || $format[1]=="jpeg" || $format[1]=="png"  ) {

				$destination = "uploads/image/".$img_name;
				if (move_uploaded_file($img_tmp_name,$destination)) {
				echo "Image successfully upload ! <br>";

				echo "<a href='view.php'>view</a> <br>";

				$query="INSERT INTO images VALUES(NULL,'$img_name','$image_path','$category')";
					if ($con->query($query)) {
						echo "<br>new images uploaded";

			  			// header('location:view.php');
					}
					else
					{
					   echo mysquli_error($con);
					}
				}
				else{
					echo "try again..!";
				}
				
			}
			
			else  {

				echo "something went wrong...!";
				
			}

					
				}
			}
			
	
$obj=new Upload();

?>

