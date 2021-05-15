<?php 

class Update 
{
	public $data;
	function __construct()
	{
		require "session.php";
	    require '../connect.php';
	    $obj1= new Connect();
	    $con= $obj1-> getcon();

		$id = $_POST['id'];
		$img_name = $_POST['image_name'];
		$category=$_POST['category'];



// print_r($_FILES);
// exit();
		if($_FILES['img']['name']!="")
		{
			$img_name = $_FILES['img']['name'];
			$img_type = $_FILES['img']['type'];
			$img_tmp_name = $_FILES['img']['tmp_name']; //server side name
			$img_error = $_FILES['img']['error'];
			$img_size = $_FILES['img']['size'];
			$destination = "uploads/image/".$img_name;
			$image_path=$destination;

			$query = "UPDATE images SET  image_name ='$img_name', image_path='$destination',category_id ='$category' where id='$id'" ;  /*this is query*/  
			// always remember condition is important
			move_uploaded_file($img_tmp_name,$destination);
		}
		else{
				$query = "UPDATE images SET  image_name ='$img_name',category_id ='$category' where id='$id'" ;  /*this is query*/  
		}

			

		if ($con->query($query)) {//fire query in datbase
		  echo "Record updated successfully";
		  header("location: view.php");
		} 
		else {
		  echo  mysqli_error($con);
		}


	}
}

$obj=new Update();

 ?>