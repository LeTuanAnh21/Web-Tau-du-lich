<?php  
	session_start();
	if(isset($_SESSION['email'])){
		session_destroy();
		header('location: ../../../quantri');
	}
	else{
		header('location: ../../../quantri');
	}
?>