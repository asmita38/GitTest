<?php
	include_once 'header.php';
?>
     		<section class="main-container">
     			<div class="main-wrapper">
     				<h2>Sign up</h2>
                         <form class="signup-form" action="includes/signnup.inc.php" method="POST">
                        
                              <input type="text" name="first" placeholder="First Name" >
                              <input type="text" name="last" placeholder="Last Name" >
                              <input type="text" name="email" placeholder="E-mail" >
                              
                               <select id="mylist" name="faculty">
                               <option value = "Computer" >Computer</option>
                                <option value = "IT">IT</option>
                                  <option value = "Software">Software</option>
                                <option value = "Elx">Elx.</option>
                                </select>
                              <input type="text" name="phone" placeholder="Phone no." >
                              <input type="text" name="uid" placeholder="Username" >
                              <input type="password" name="pwd" placeholder="Password" >
                              <label><b style="color: white;">Gender:</label>
                              <input type="radio" name="gender" value="Male">Male
                              <input type="radio" name="gender" value="Female">Female</b>
                              <button type="submit" name="submit">Sign up</button>

     				</form>
     			</div>
     		</section>
     		<?php
     		 include_once 'footer.php';
     		?>