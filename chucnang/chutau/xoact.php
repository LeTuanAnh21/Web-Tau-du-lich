<?php  
	session_start();
	if(isset($_SESSION['email'])&& isset($_SESSION['pass'])){
		$id_ct=$_GET['id_ct'];
		include_once'../../ketnoi.php';
		$sql = "DELETE FROM chutau WHERE id_ct='$id_ct'";
		$query=mysqli_query($conn,$sql);
		header('location: ../../quantri.php?page_layout=quanlyct');
	}else{
		header('location: ../../index.php');
	}
?>