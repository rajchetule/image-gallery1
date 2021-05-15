
<?php 
/**
 * 
 */
class Check 
{
	
	function __construct()
	{
		require '../connect.php';
		$obj1= new Connect();
      	$con= $obj1-> getcon();

		$email = $_POST['email'];
		$password = $_POST['password'];



		if(empty($email)){
			echo "<p>Please enter email</p>";
			exit();
		}
		if(empty($password)){
			echo "<p>Please enter password</p>";
			exit();
		}
		        
		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$this->result = $con->query($query);
		print_r($this->result);
		$data = $this->result->fetch_object();

		if($this->result->num_rows==1 && $data->email==$email && $data->password==$password){
			// echo "User exists";
			session_start();
			$_SESSION['user']=1;
			header("location: dashboard.php");
		}
		else{
			echo "User Does not exit";
		}

			}
		}

$obj=new Check();
?>