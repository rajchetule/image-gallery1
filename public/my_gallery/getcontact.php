<?php 

require 'connect.php';

class Contact
{
	public $result;
	public $con;
	function __construct()
	{
		$obj1= new Connect();
	    $this->con=$obj1->getcon();
	}

	function insert(){
	    

	    if (isset($_POST['submit'])) {
	    	
	    	extract($_POST);    	

	    	$query = "INSERT INTO contact VALUES(NULL,'$name','$email','$contact','$msg')";
	    	if ($this->con->query($query)==True){
	    	// print_r($query);
	    	// exit();			
				echo "data register";
				header("location:index.php");
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

$obj = new Contact();

if (isset($_POST['submit'])) {
	$obj->insert();
}

?>