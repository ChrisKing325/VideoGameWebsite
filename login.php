<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
   <head>
      
	  <?php
  	   include "dbconnect.php";
  	   if (isset($_POST['userName'])){
  	     $name = $_POST['userName'];
         $pw = sha1($_POST['pw']);

         $query = "select * from users WHERE userName = '$name' AND password = '$pw'";
         $result = mysqli_query($db, $query)
         or die("Error Querying Database");
         if ($row = mysqli_fetch_array($result))
         {
   		#echo $query;
   		echo '<META http-equiv="refresh" content="0;URL=index.php">';
       }}
?>
      
      <div id="content">
        <!-- insert the page content here -->
    
        <?php
        if (isset($_POST['username'])) {
        echo "<h2>Incorrect Username/Password</h2>";
        }
        ?>
        <div class="sidebar2">
			<div class="titleBlock">Let's Begin Reviewing</div>
			<h1>Thank you for coming to VideoGameWebsite</h1>
			<p>
        	For our returning members:
			<br /><br />
			Thank you for returning to our website. We appreciate your loyalty to our video game review website over other sites. Please login and read or write some reviews
			<br /><br />
			For our first time members:
			<br /><br />
			WELCOME TO VIDEOGAMEWEBSITE! Here we try and provide a simple way of reading reviews and writing reviews for videogames. Please join us in the quest to make picking video games as easy as possible.
			</p>
		</div>
        <h1>Login</h1>
          <form method="post" action="login.php">
    <p>
    <label for="userName">Username:</label>
    <input type="text" id="userName" name="userName" size="40" </p>
    <p>
    <label for="password">Password:</label>
    <input type="password" id="password" name="pw" size="40" /></p>

    <p><input type="submit" value="login" name="submit" /></p>
  </form>
  
</html>