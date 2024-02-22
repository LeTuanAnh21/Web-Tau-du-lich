<?php  
	session_start();
	if(isset($_SESSION['email'])&& isset($_SESSION['pass'])){
		$id=$_GET['id'];
		include_once'../../ketnoi.php';
		$sql = "DELETE FROM bangcap WHERE id='$id'";
		$query=mysqli_query($conn,$sql);
		header('location: ../../quantri.php?page_layout=quanlybc');
	}else{
		header('location: ../../index.php');
	}
?>