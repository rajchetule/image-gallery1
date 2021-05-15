
<?php 
 
class Connect 
{
	private $servername="localhost";
	private $username="root";
	private $password="";
	private $dbname="facebook";
	private $con;
	function __construct()
	{
		$this->con = new mysqli($this->servername,$this->username, $this->password, $this->dbname);


		if (isset($this->con->client_info)) {
			
			// echo "db connected";
			return $this->con;
		}
		else{
			echo mysqli_error($this->con);
		}
	}
	function getcon(){
		return $this->con;
	}
}

$obj=new Connect();


?>