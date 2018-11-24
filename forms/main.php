<!DOCTYPE html>
<html>
<title>User Page</title>
<style>
.logout{
    display:block;
    width:10%;
    height: 30px;
    margin:4px 5px;
    padding: 1px 1px;
    color: white;
    border:none;
    background-color:grey;
    font-family: arial;
    font-size: 16px;
    float: right;
cursor: pointer;   
border-radius: 8px;
}
</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="games.html" class="w3-bar-item w3-button">Event Info</a>
  <a href="admin/tiesheet.php" class="w3-bar-item w3-button">Tie Sheet2</a>
  <a href="#" class="w3-bar-item w3-button">Scores</a>
  
</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Developers</a>
  <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
  <a href="#venue" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Venue</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Event Info <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="games.html" class="w3-bar-item w3-button"> Games</a>
      <a href="#" class="w3-bar-item w3-button">Tie Sheet</a>
      <a href="#" class="w3-bar-item w3-button">Scores</a>
    </div>
  </div>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Participate <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="gameregister.php" class="w3-bar-item w3-button"> Individual Games</a>
      <a href="football.php" class="w3-bar-item w3-button">Football</a>
      <a href="cricket.php" class="w3-bar-item w3-button">Cricket</a>
       <a href="view.php" class="w3-bar-item w3-button">All Participants</a>
    </div>
  </div>
  <form action="includes/logout.inc.php" method="POST">
                                   <button class="logout" type="submit" name="submit">Logout</button>
                                   </form>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Developers</a>
    <a href="#work" class="w3-bar-item w3-button">About</a>
    <a href="#pricing" class="w3-bar-item w3-button">Venue</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Logout</a>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="images/foot2.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
 <h1 style="color: white;">Welcome user! </h1>
  </div>
</div>



<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM</h2>
<p>Meet the team</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="images/suj.jpg" alt="Suju" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Sujata Chand</h3>
  <p>Front end Developer</p>
</div>

<div class="w3-quarter">
  <img src="images/asmi.png" alt="Asmita" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Asmita Mallik</h3>
  <p>Back-end Developer</p>
</div>

<div class="w3-quarter">
  <img src="images/sam.jpg" alt="Sameer" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Sameer Karna</h3>
  <p>System Analyser</p>
</div>



</div>
</div>

<!-- About Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="about">

<h2 style="text-align: center;font-size: 40px;">ABOUT</h2>
<p>This software is aimed at scheduling group Event . This is a web-based tool. The user can call for a meeting and send the detailed co-ordinates of the meeting(location, time, date etc...) to all invites. This is usefull for a small office or a department or for that matter any group who is intrested to organise it effectively.</p>

 

<h1>Functionalities of Event Management</h1>

<ol>

<li>Facility to see participants information</li>

<li>Facility to post notices</li>

<li>Facility to cancel the Events</li>

<li>Participants option for denying the invitation</li>

<li>User registration</li>

<li>Administrator privilage to upload scores</li>
</ol>
</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- venue Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="venue">
    <h2>Venue</h2>
    <p>All events are going to take place in Sainik Ground,Sallaghari,Bhaktapur.</p>
        </div>
<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Organizers Contact Info</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>Ncit, Balkumari</p>
            <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>admin@mail.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>I Like it!</label>
      <button type="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>

<!-- Google Maps -->
<div id="googleMap" style="width:100%;height:420px;"></div>
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(27.671382, 85.338738);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqZ3RpvSQohpnpW9ZT35Sa1HHVTxSExB4&callback=myMap"
  type="text/javascript"></script>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
 

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
