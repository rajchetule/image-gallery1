<?php 

class Delete
{
	
	function __construct($data)
	{
		require "session.php";
 		require '../connect.php';
 
	    $obj1= new Connect();
	    $con= $obj1->getcon();

		$user_id= $data['id'];

		$query= "DELETE FROM images WHERE id= '$user_id'";

		 // print_r($query);
		 // exit();

		if ($con->query($query)) {
			header("location: view.php");
		}
		else{
			echo mysqli_error($con);
		}

		}
}

$object= new Delete($_GET);


 ?>