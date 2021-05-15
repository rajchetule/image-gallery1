<?php 
session_start();
$id = $_SESSION['user'];
echo $id;

if($id != 1){
	session_destroy();
	header("location: index.php"); //redirect to login

}
 ?>