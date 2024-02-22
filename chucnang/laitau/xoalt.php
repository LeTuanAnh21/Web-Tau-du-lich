<?php  
	session_start();
	if(isset($_SESSION['email'])&& isset($_SESSION['pass'])){
		$id_lt=$_GET['id_lt'];
		include_once'../../ketnoi.php';
		$sql = "DELETE FROM laitau WHERE id_lt='$id_lt'";
		$query=mysqli_query($conn,$sql);
		header('location: ../../quantri.php?page_layout=quanlylt');
	}else{
		header('location: ../../index.php');
	}
?>