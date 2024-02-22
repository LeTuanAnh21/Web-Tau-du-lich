<?php  
	session_start();
	if(isset($_SESSION['email'])&& isset($_SESSION['pass'])){
		$id_khachhang=$_GET['id_khachhang'];
		include_once'../../ketnoi.php';
		$sql = "DELETE FROM khachhang WHERE id_khachhang='$id_khachhang'";
		$query=mysqli_query($conn,$sql);
		header('location: ../../quantri.php?page_layout=quanlykh');
	}else{
		header('location: ../../index.php');
	}
?>