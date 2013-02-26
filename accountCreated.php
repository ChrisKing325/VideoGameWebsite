<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Transitional//EN”
   “http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd”>
<body>
  <div id="main">
    <div id="links"></div>
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1>Harlem Cake<span class="alternate_colour"> Fails</span></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li ><a href="index.php">Home</a></li>
          <li class="tab_selected"><a href="login.php">Login</a></li>
          <li><a href="search.php">Search for Game</a></li>
		  <li><a href="about_us.html">About Us</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
        <!-- insert the page content here -->
<h3></h3>
					<p>Thanks for registering! </p>
					
					<?php
					include('db_connect.php');
					$username = $_POST['userName'];
					$password = $_POST['password'];
					echo "<p>Your username is $userName</p>";
					echo "<p>Your password is $password</p>";
					$query = "INSERT INTO users (userName, password) VALUES ('";
					$query = $query . $userName . "', '" . sha1($password) . "')";
					echo "<p>QUERY   $query</p>";
					$result = mysqli_query($db, $query)
                         or die("Error Querying Database");

					
					?>
					
					
					
					</form>
					<!-- END CONTENT -->
					
				</div>
				


    <div id="site_content_bottom"></div>
    </div>