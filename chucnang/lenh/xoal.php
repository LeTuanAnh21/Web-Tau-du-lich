<?php  
	session_start();
	if(isset($_SESSION['email'])&& isset($_SESSION['pass'])){
		$id_lenh=$_GET['id_lenh'];
		include_once'../../ketnoi.php';
		$sql = "DELETE FROM lenh WHERE id_lenh='$id_lenh'";
		$query=mysqli_query($conn,$sql);
		header('location: ../../quantri.php?page_layout=quanlyl');
	}else{
		header('location: ../../index.php');
	}
?>