<?php 
	
	$host="localhost";
	$username="mirzanuh_ash";
	$password=",oZM.v+*^2kp";
	$dbname="mirzanuh_ash";

	$con=mysqli_connect($host,$username,$password,$dbname);

	if (!$con) {
		die("Problem When Connecting");
	}else{
		return $con;
	}

?>