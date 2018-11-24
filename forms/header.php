<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Kavivanar|Alegreya+Sans" rel="stylesheet">
<link href="register.css" type="text/css" rel="stylesheet">

	<title>User registration</title>
</head>
<body>
  <header>
     <nav>
     		<div class="main-wrapper">
     		<h1>SPORTS EVENT MANAGEMENT SYSTEM</h1>
              

     			<div class="nav-login">
                         <?php

                              if(isset($_SESSION['u_id'])){
                                   echo '<form action="includes/logout.inc.php" method="POST">
                                   <button type="submit" name="submit">Logout</button>
                                   </form>';
                              } else {

                                   echo '<form action="includes/login.inc.php" method="POST">
                                      <input type="text" name="uid" placeholder="Username/email">

                              <input type="password" name="pwd" placeholder="password">
                              <button type="submit" name="submit">Login</button>
                              </form>
                              <a href="signup.php">Signup</a>';
                              }
                         ?>
                         

     				
     					</div>
     				</div>
     			</nav>
     		</header>