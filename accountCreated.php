!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Video Game Reviews</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<!--[if IE 5]>
<style type="text/css"> 
/* place css box model fixes for IE 5* in this conditional comment */
#sidebar1 { width: 230px; }
</style>
<![endif]--><!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
#sidebar1 { padding-top: 30px; }
#mainContent { zoom: 1; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]--></head>

<body>
<!-- begin #container -->
<div id="container">
	<!-- begin #header -->
    <div id="header">
    	<div class="logoContainer">
            <div class="logo">Video Game <span>Reviews</span></div>
            <div class="author"><a href="http://www.freewebsite-template.com"></a></div>
        </div>
        <!-- begin #navcontainer -->
        <div id="navcontainer">
            <ul id="navlist">
                <li ><a href="index.php">Home</a></li>
				<li class="tab_selected"><a href="login.php">Login</a></li>
				<li><a href="search.php">Search for Game</a></li>
				<li><a href="about_us.html">About Us</a></li>
				<li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
        <!-- end #navcontainer -->
    </div>
    <!-- end #header -->
					<p>Thanks for registering! </p>
					
					<?php
					include('dbconnect.php');
					$name = $_POST['name'];
					$username = $_POST['username'];
					$password = $_POST['password'];
					$favconsole = $_POST['favconsole'];
					echo "<p>Your username is $username</p>";
					echo "<p>Your password is $password</p>";
					echo "<p>Your name is $name</p>";
					echo "<p>Your favorite Console is $favconsole</p>";
					$query = "INSERT INTO users (name, username, password, favconsole) VALUES ('";
					$query = $query . $name ."', '" .$username . "', '" . sha1($password) . "', '" .$favconsole . "')";
					echo "<p>QUERY   $query</p>";
					$result = mysqli_query($db, $query)
                         or die("Error Querying Database");

					
					?>
					
					
					
					</form>
					<!-- END CONTENT -->
					
				</div>
				


    <div id="site_content_bottom"></div>
    </div>