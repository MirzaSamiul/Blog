<?php 

	include("connect/connection.php");

	if (isset($_GET['id'])) {
		$id=$_GET['id'];

		$sql="DELETE FROM `product` WHERE id='$id'";
		$result=mysqli_query($con,$sql);

		if ($result==true) {
			header("Location:blog-list.php");
		}else{
			echo "Problem When Deleting";
		}
	}

?>