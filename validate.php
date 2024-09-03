<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$username=$_POST["username"];
	$password=$_POST["password"];
	
	try{
		
	}catch(PDOException $e){
		die("Query failed:" .$e->getMessage());
	}
}else{
	header("Location: ../studentlogin.php");
	die();
}
?>