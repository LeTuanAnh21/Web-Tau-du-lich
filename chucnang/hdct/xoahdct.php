<?php  
	session_start();
	if(isset($_SESSION['email'])&& isset($_SESSION['pass'])){
		$id_hdct=$_GET['id_hdct'];
		include_once'../../ketnoi.php';
		$sql = "DELETE FROM hdct WHERE id_hdct='$id_hdct'";
		$query=mysqli_query($conn,$sql);
		header('location: ../../quantri.php?page_layout=quanlyhdct');
	}else{
		header('location: ../../index.php');
	}
?>