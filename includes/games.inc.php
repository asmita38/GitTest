<?php

if (isset($_POST['submit'])){
   $dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="registration";

$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName)or die("cannot connect");

   
   $checkbox1=$_POST['l'];  
   $pets="";
   $flag=0;
   foreach ($checkbox1 as $key => $entry) {
		$pets .=$entry."|";
		$flag=1;   	
   }

   if($flag==1){

   	$pets=rtrim($pets);
   }
      $sql="INSERT INTO game_register(games)VALUES('$pets')";
mysqli_query($conn, $sql);

      echo'<script>alert("Inserted Successfully")</script>';  
   header("Location: ../main.php?register=success");
}
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
 
?>






