<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<?php session_start();
	include "dbconnect.php";
	if($_POST['userName'] != "" && $_POST['pw'] != ""){
		$username = $_POST['userName'];
		$password = sha1($_POST['pw']);
		$query = "SELECT id FROM gamereviews.users WHERE userName = '$username' AND password = '$password';";
		$result = mysqli_query($db, $query)
			or die("Error Querying Database");
			$row = mysqli_fetch_array($result);
		if(count($row) != 0){
			$_SESSION['uid'] = $row['id'];
			$_SESSION['loggedin'] = true;
		}
		
	}
	
	
	
?>
	<title>Login</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
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
<![endif]-->
</head>

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
                <li><a href="index.php">Home</a></li>
				<?php
					if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
						echo '<li><a href="mypage.php?id=' . $_SESSION['uid'] . '>My Page</a></li>';
						echo '<li id="active"><a href="logout.php" id="current">Logout</a></li>';
					} else {
						echo '<li id="active"><a href="login.php" id="current">Login</a></li>';
					}
				?>
                <li><a href="#">About</a></li>
                <li><a href="review.php">Reviews</a></li>
                <li><a href="#">Contact</a></li>
				<li><a href="search.php">Search</a></li>
            </ul>
        </div>
        <!-- end #navcontainer -->
    </div>
    <!-- end #header -->
    <div class="headerPic"><h2></h2></div>
    <div class="sidebar3">
    	<div class="titleBlock">Login</div>
		<p>
		    <?php
				if($_POST['userName'] != "" && $_POST['pw'] != ""){
					if($_SESSION['loggedin'] == true){
						echo "Login successful! Click <a href='index.php'>here</a> to go to the home page!";
					} else {
						echo '<span class="errorMessage">Incorrect username/password combination.</span>
						<form method="post" action="gologin.php">
							<label for="userName">Username:</label>
							<input type="text" id="userName" name="userName" size="40" /><br/>
							<label for="password">Password:</label>
							<input type="password" id="password" name="pw" size="40" />
							<input type="submit" value="Login" name="submit" />
						</form>  ';
					}
					
				}
				
				
			?>
			
			
			
			
			
		</p>
    </div>
    <br class="clearfloat" />
</div>
<!-- end #container -->
<!-- begin #footer -->
    <div id="footer">
        <p>
        Terms of Use |
        <a title="This page validates as XHTML 1.0 Strict" href="http://validator.w3.org/check/referer" class="footerLink"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | 
        <a title="This page validates as CSS" href="http://jigsaw.w3.org/css-validator/check/referer" class="footerLink"><abbr title="Cascading Style Sheets">CSS</abbr></a><br />
        Copyright &copy; Games Club. Designed by <a href="http://www.freewebsite-template.com" title="Free Website Templates">Free Website Templates</a>
        </p>
    </div>
<!-- end #footer -->


	



</body>

</html>