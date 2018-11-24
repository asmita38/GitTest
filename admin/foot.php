<?php  
 $connect = mysqli_connect("localhost", "root", "", "registration");  
 $sql = "SELECT users.user_id,users.user_uid,users.faculty,users.gender, football.*
FROM users,football
WHERE users.user_id=football.id
ORDER BY users.user_id"; 
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Users</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Your Events</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>ID</th>  
                               <th>Username</th>
                               <th>Faculty</th>
                               <th>Gender</th>  
                               <th>Games</th>  
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  <td><?php echo $row["user_id"];?></td>
                               <td><?php echo $row["user_uid"];?></td>
                               <td><?php echo $row["faculty"];?></td>
                               <td><?php echo $row["gender"];?></td>  
                               <td><?php echo $row["team_name"]; ?></td> 
                               <td><?php echo $row["team_name"]; ?></td> 
                               <td><?php echo $row["team_name"]; ?></td> 
                               <td><?php echo $row["team_name"]; ?></td> 
                               <td><?php echo $row["team_name"]; ?></td> 
                               <td><?php echo $row["team_name"]; ?></td> 
                               <td><?php echo $row["team_name"]; ?></td> 
                               <td><?php echo $row["team_name"]; ?></td> 
                               <td><?php echo $row["team_name"]; ?></td> 
                               <td><?php echo $row["team_name"]; ?></td> 
                               <td><?php echo $row["team_name"]; ?></td>  
                               <td><?php echo $row["team_name"]; ?></td> 
                               <td><?php echo $row["team_name"]; ?></td> 
                               <td><?php echo $row["team_name"]; ?></td> 
                               <td><?php echo $row["team_name"]; ?></td> 
                               
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  