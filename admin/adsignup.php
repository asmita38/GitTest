<?php

if (isset($_POST['submit'])){
   include_once '../includes/dbh.inc.php';
   $first=mysqli_real_escape_string($conn, $_POST['first']);
   $last=mysqli_real_escape_string($conn, $_POST['last']);
   $email=mysqli_real_escape_string($conn, $_POST['email']);
   $uid=mysqli_real_escape_string($conn, $_POST['uid']);
   $pwd=mysqli_real_escape_string($conn, $_POST['pwd']);
   
       //Error handlers
       //Check for empty fields

       if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd)){
         	header("Location: ../admin.php?signup=empty");
	       exit();
          }else{
          	//check if input characters are valid

          	if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last)){
          			header("Location: ../admin.php?signup=invalid");
          			exit();
          	}else{
          		//Check if email is valid
          		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          			header("Location: ../admin.php?signup=email");
          			exit();

          		}else{
          			$sql="SELECT * FROM users WHERE user_uid='$uid'";
          			$result= mysqli_query($conn, $sql);
          			$resultCheck= mysqli_num_rows($result);

          			if($resultCheck > 0){
          				header("Location: ../admin.php?signup=userTaken");
          			exit();

          			}else{
          				//Hashing the password
          				$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
          				//insert the user into the database
          				$sql ="INSERT INTO users (fname,lname, user_email, admin_uid, password) VALUES ('$first','$last', '$email', '$uid', '$hashedPwd'); ";
          				 mysqli_query($conn, $sql);
                    header("Location: ../admin.php?signup=success");
          				  echo "Success";
          				 exit();

          			}
              }
            }
          }
        }
        
          	

else{

	header("Location: ../admin.php");
	exit();
}