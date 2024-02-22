<?php  
	session_start();
	if(isset($_SESSION['email'])&& isset($_SESSION['pass'])){
		$id_hdkh=$_GET['id_hdkh'];
		include_once'../../ketnoi.php';
		$sql = "DELETE FROM hdkh WHERE id_hdkh='$id_hdkh'";
		$query=mysqli_query($conn,$sql);
		header('location: ../../quantri.php?page_layout=quanlyhdkh');
	}else{
		header('location: ../../index.php');
	}
?>