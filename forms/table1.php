 
<?php
//connect to MySQL
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="registration";

$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword);

 

// make sure you’re using the right database
mysqli_select_db($dbName, $db) or die(mysqli_error($db));
$query = 'SELECT
 id,pid,games
 FROM
 gane_register;'
 
$result = mysqli_query($query, $db) or die(mysqli_error($db));

// determine number of rows in returned result
$num_movies = mysqli_num_rows($result);


 


?>




 <!DOCTYPE html>
 <html>



<body>

<div style="text-align: center;">
  <h2> Your Events </h2 >
 <table border="1" cellpadding="2" cellspacing="2" style="width: 70%;margin-left: auto;margin-right: auto;">
 
 <tr>
  <th> Student name </th >
 <th > Faculty </th >
 <th > Events </th >
  </tr>
  <?php
// loop through the results
while ($row = mysqli_fetch_assoc($result)) {
 extract($row);
 echo '<tr>';
 echo '<td>'.$id.'</td>;' 
 echo '<td>'.$pets.'</td>'; 

}
?> 
  </table>
  <p> <?php echo $num_movies; ?>Movies </p > 
  </div>
