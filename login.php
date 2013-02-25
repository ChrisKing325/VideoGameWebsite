<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Transitional//EN”
   “http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd”>
<html xmlns=”http://www.w3.org/1999/xhtml” xml:lang=”en” lang=”en”>
   <head>
      
	  <?php
  	   include "db_connect.php";
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
	  <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
      <title>Login</title>
   </head>
   <body>
  <div id="main">
    <div id="links"></div>
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1>Games<span class="alternate_colour"> Review</span></h1>
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
      
      <div id="content">
        <!-- insert the page content here -->
    
        <?php
        if (isset($_POST['username'])) {
        echo "<h2>Incorrect Username/Password</h2>";
        }
        ?>
        
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