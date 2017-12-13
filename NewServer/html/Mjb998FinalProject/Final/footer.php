<div align = "center" class="footer">
    <p>&copy; Matthew Barmann</p>
                 
	<?php


	//If user is already logged in
	//echo "LOGGEDIN!"  . "<br>" . $_SESSION['login'] ."<br>". $hash ;
	if (isset($_SESSION['login']) && $_SESSION['login'] == $hash) {

	  ?>
	<div id = "login"

	    <p>Hello <?php echo $username; ?>, you have logged in!</p>
	    <a href="?logout=true">Click here to logout</a>
	    <br>
	</div>
	  <?php

	}

	else {
	    //Error message
	    display_login_form();
	    if(isset($_POST['submit'])){
	      echo '<p>Please Enter Your Login Information Again</p>';   
	    }
	}

	//Submit the form
	 
	function display_login_form(){ ?>
	<div id = "login"
	  <p>Login to access special pricing!
	  <form action="<?php echo $self; ?>" method='post'>
	  <label for="username">username</label>
	  <input type="text" name="username" id="username">
	  <label for="password">password</label>
	  <input type="password" name="password" id="password">
	  <br>
	  <input type="submit" name="submit" value="submit">
	  </form> 
	  </p>
	</div>


	<?php } ?>



</div>