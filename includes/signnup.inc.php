<?php

if (isset($_POST['submit'])){
   include_once 'dbh.inc.php';
   $first=mysqli_real_escape_string($conn, $_POST['first']);
   $last=mysqli_real_escape_string($conn, $_POST['last']);
   $email=mysqli_real_escape_string($conn, $_POST['email']);
   $uid=mysqli_real_escape_string($conn, $_POST['uid']);
   $pwd=mysqli_real_escape_string($conn, $_POST['pwd']);
   $gender=mysqli_real_escape_string($conn, $_POST['gender']);
$faculty=mysqli_real_escape_string($conn, $_POST['faculty']);
$phone=mysqli_real_escape_string($conn, $_POST['phone']);


       //Error handlers
       //Check for empty fields

       if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd)||empty($phone)){
         	header("Location: ../signup.php?signup=empty");
	       exit();
          }else{
          	//check if input characters are valid

          	if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last)){
          			header("Location: ../signup.php?signup=invalid");
          			exit();
          	}else{
          		//Check if email is valid
          		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          			header("Location: ../signup.php?signup=email");
          			exit();

          		}else{
          			$sql="SELECT * FROM users WHERE user_uid='$uid'";
          			$result= mysqli_query($conn, $sql);
          			$resultCheck= mysqli_num_rows($result);

          			if($resultCheck > 0){
          				header("Location: ../signup.php?signup=userTaken");
          			exit();

          			}else{
          				//Hashing the password
          				$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
          				//insert the user into the database
          				$sql ="INSERT INTO users (user_first,user_last, user_email, user_uid, user_pwd,faculty,gender,phone) VALUES ('$first','$last', '$email', '$uid', '$hashedPwd','$faculty','$gender','$phone'); ";
          				 mysqli_query($conn, $sql);
                    header("Location: ../main.php?signup=success");
          				  echo "Success";
          				 exit();

          			}
              }
            }
          }
        }
        
          	

else{

	header("Location: ../signup.php");
	exit();
}