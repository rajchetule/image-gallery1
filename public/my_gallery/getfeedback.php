<?php 
require 'connect.php';

class Feedback
{
	
	public $result;
	public $con;
	function __construct()
	{
	    
	    $obj1= new Connect();
	    $this->con=$obj1->getcon();
	    // print_r($con);
	    // 	exit();
	    // extract($_POST);
	}

	function insert(){
	    

	    if (isset($_POST['submit'])) {
	    	
	    	extract($_POST);    	

	    	$query = "INSERT INTO feedback VALUES(NULL,'$name','$email','$contact','$location','$msg')";
	    	if ($this->con->query($query)){
	    		?>
					<script type="text/javascript">
						alert('Data Inserted successfully..!');

						<?php header('location: feedback.php?id=$id')?>

						//window.open('updateform.php?id=<?php //echo $id;?>','_self');
					</script>
				<?php
	    	// print_r($query);
	    	// exit();			
				// echo "data register";
				// header("location:index.php");
			 	// $this->view();
			}
			else
			{
				echo "string<br>";
			   echo mysquli_error($this->con);
			}
	    }
	}
}
	    
	

// 	function view(){

//    		$query = "SELECT * FROM feedback";
// 		$result = $this->con->query($query);
// 		require "../dashboard/feedback.php";	

// 	}

// 	function delete($data)
// 	{
// 		require 'connect.php';
// 		$obj1= new Connect();
//     	$con= $obj1-> getcon();

// 		$user_id = $_POST['id'];
// 		$query = "DELETE FROM feedback WHERE id = '$user_id'";

// 		if ($con->query($query)) {
// 			header("location: ../dashboard/feedback.php");
// 		}
// 		else{
// 			echo mysql_li($con);
// 		}
// 	}
// }
// }

$obj = new Feedback();

if (isset($_POST['submit'])) {
	$obj->insert();
}



?>