<?php  
	session_start();
	if(isset($_SESSION['email'])&& isset($_SESSION['pass'])){
		$id_t=$_GET['id_t'];
		include_once'../../ketnoi.php';
		$sql = "DELETE FROM tau WHERE id_t='$id_t'";
		$query=mysqli_query($conn,$sql);
		header('location: ../../quantri.php?page_layout=quanlyt');
	}else{
		header('location: ../../index.php');
	}
?>