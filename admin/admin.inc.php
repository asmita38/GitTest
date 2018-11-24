<?php

session_start();

if(isset($_POST['submit'])){

	include '../includes/dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error handlers
	//Check if inputs are empty
	if(empty($uid) || empty($pwd)){
			header("Location: ../index.php?login=empty");
	     // exit();

	}else {

		$sql="SELECT * FROM admin WHERE admin_uid='$uid'";
		$result=mysqli_query($conn, $sql);
		$resultCheck= mysqli_num_rows($result);
		if($resultCheck < 1){
			header("Location: ../index.php?login=notfound");
	    exit();
		}else{

	
					$_SESSION['u_id'] =$row['user_id'];
					
					$_SESSION['u_uid'] =$row['user_uid'];
					header("Location: admin.php?login=success");
	                exit();


				}
			}
		}
	
else{

	header("Location: ../index.php?login=clicksubmit");
	exit();
}