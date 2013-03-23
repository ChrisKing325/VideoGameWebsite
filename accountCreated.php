<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<?php session_start();
	if($_POST['username'] != "" && $_POST['pw1'] != "" && $_POST['pw2'] != "" && $_POST['name'] != "" && $_POST['system'] != "sys"){
		$allfields = true;
		$username = $_POST['username'];
		$pw1 = sha1($_POST['pw1']);
		$pw2 = sha1($_POST['pw2']);
		$name = $_POST['name'];
		$console = $_POST['system'];
		if($pw1 == $pw2){
			$pwmatch = true;
			$query = "SELECT id FROM gamereviews.users WHERE userName = '$username';";
			$result = mysqli_query($db, $query)
				or die("Error Querying Database");
			$row = mysqli_fetch_array($result);
			if(count($row) == 0){
				$usernameavailable = true;
				$query = "INSERT INTO gamereviews.users (id, userName, password, name, favConsole) VALUES(NULL, '$username', '$password', '$name', '$console');";
				mysqli_query($db, $query)
					or die("Error Querying Database");
				$_SESSION['loggedin'] = true;
				$query = "SELECT id FROM gamereviews.users WHERE userName = '$username';";
				$result = mysqli_query($db, $query)
					or die("Error Querying Database");
				$row = mysqli_fetch_array($result);
				$uid = $row['id'];
				$_SESSION['uid'] = $uid;
			} else {
				$usernameavailable = false;
			}
		} else {
			$pwmatch = false;
		}
	} else {
		$allfields = false;
	}





?>
	<title>Search</title>
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
						echo '<li id="active"><a href="logout.php" id="current">Logout</a></li>';
					} else {
						echo '<li id="active"><a href="login.php" id="current">Login</a></li>';
					}
				?>
                <li><a href="#">About</a></li>
                <li><a href="reviewlink.php">Reviews</a></li>
                <li><a href="#">Contact</a></li>
				<li><a href="search.php">Search</a></li>
            </ul>
        </div>
        <!-- end #navcontainer -->
    </div>
    <!-- end #header -->
    <div class="headerPic"><h2></h2></div>
    <div class="sidebar3">
    	<div class="titleBlock">Create an Account!</div>        
			<p>        	
				<?php
					if($_SESSION['loggedin'] == true){
						echo "Your account has successfully been created!";
					} else {
						if($allfields){
							if($pwmatch){
							
							} else {
								echo '<div class="errorMessage">Your passwords don\'t match.</div><br/>';
							}
							if($usernameavailable){
							
							} else {
								echo '<div class="errorMessage">Sorry, that username has already been taken. Please choose another one.</div><br/>';
							}
						} else {
							if($_SESSION['loggedin'] == true){
								echo "You can't create an account if you're already logged in, silly! :P";
							} else {
								echo '<div class="errorMessage">Please fill out all fields.</div><br/>';
							}
						}
						echo "<form method='post' action='accountCreated.php'>
								Please enter your name: <input type='text' id='name' name='name' size='40'/><br/>
								Please choose a username: <input type='text' id='username' name='username' size='40'/><br/>
								Please enter a password: <input type='password' id='pw1' name='pw1' size='40' /><br/>
								Please re-enter your password: <input type='password' id='pw2' name='pw2' size='40' /><br/>
								Please select your favorite console: ";
						echo '<select id="system" name="system">
								<option value="sys">System</option>';
									include "dbconnect.php";
									$query = "SELECT DISTINCT system FROM systems ORDER BY system;";
									$result = mysqli_query($db, $query)
										or die("Error Querying Database");
									while($row = mysqli_fetch_array($result)) {
										echo '<option value="' . $row['system'] . '">' . $row['system'] . '</option>\n';
									}
						echo '</select><br/>';
								
						echo "<input type='submit' value='Create my account!' name='submit' />
								</form>";
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