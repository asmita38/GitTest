<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    font-family: arials;
}
.signup-form{
    margin:0 auto;
    width:400px;
    padding-top: 30px;
    
}
.signup-form input[type=text]{

    width:90%;
    height: 40px;
    padding:0px 5%;
   margin-bottom: 4px;
    border:none;
    background-color: #c2c3c4;
    font-family: arial;
    font-size: 16px;
    line-height: 40px;
   
}
.signup-form input[type=password]{

    width:90%;
    height: 40px;
    padding:0px 5%;
   margin-bottom: 4px;
    border:none;
    background-color:#c2c3c4;
    font-family: arial;
    font-size: 16px;
    line-height: 40px;
   
}
.signup-form button{
    display:block;
    width:30%;
    height: 40px;
    margin:0 auto;
    padding: 1px;
    color: white;
    border:none;
    background-color:black;
    font-family: arial;
    font-size: 16px;
cursor: pointer;   
border-radius: 8px;
}
/* Fixed sidenav, full height */
.sidenav {
    height: 100%;
    width: 250px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
    color: #f1f1f1;
}

/* Main content */
.main {
    margin-left: 200px; /* Same as the width of the sidenav */
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
    background-color: green;
    color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
    display: none;
    background-color: #262626;
    padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
    float: right;
    padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
.logout{
    display:block;
    width:80%;
    height: 40px;
    margin:0 auto;
    padding: 1px;
    color: white;
    border:none;
    background-color:black;
    font-family: arial;
    font-size: 16px;
cursor: pointer;   
border-radius: 8px;
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="users.php">View Users</a>
  <a href="#services">Delete Users</a>
  <a href="#clients">Add Scores</a>
  <a href="tie.php">Add Tiesheet</a>
  <button class="dropdown-btn">View Participants 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="individual.php">Individual Games</a>
    <a href="#">Football Teams</a>
    <a href="#">Cricket Teams</a>
  </div>
  <form action="../includes/logout.inc.php" method="POST">
                                   <button class="logout" type="submit" name="submit">Logout</button>
                                   </form>';
</div>

<div class="main">
  <center><img src="admin.jpg" alt="adminLogo" id="adminLogo"><br>This is Admin Panel.Please proceed with caution!</center><hr>
  <p style="text-align: center;font-size: 20px;padding: 5px;"> Current admin info</p>
  <ul style="text-align: center;">
  <li> Name : Admin</li>
  <li> Email : admin@mail.com</li>
  </ul>
  <h1 style="text-align: left;font-size: 25px;margin-left:80px;">Add other admins:</h1>
  <form class="signup-form" action="adsignup.php" method="POST">
                        
                              <input type="text" name="first" placeholder="First Name" >
                              <input type="text" name="last" placeholder="Last Name" >
                              <input type="text" name="last" placeholder="Last Name" >
                              <input type="text" name="uname" placeholder="User Id" >
                              <input type="password" name="pwd" placeholder="Password" >
                              <button type="submit" name="submit">Sign up</button>

            </form>
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html> 
