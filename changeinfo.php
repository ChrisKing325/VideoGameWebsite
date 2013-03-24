<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<?php session_start(); ?>
	<title>Update my Info</title>
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
						echo '<li id="active"><a href="mypage.php" id="current">My Page</a></li>';
						echo '<li><a href="logout.php">Logout</a></li>';
					} else {
						echo '<li><a href="login.php">Login</a></li>';
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
    	<div class="titleBlock">Update my Info</div>        
			<p>    

				<?php
				if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
					include "dbconnect.php";
					$id = $_GET['id'];
					$query = "SELECT * FROM gamereviews.users WHERE id= $id";
					$result = mysqli_query($db, $query)
						or die("Error Querying Database");
					$row = mysqli_fetch_array($result);
					$username = $row['userName'];
					$uid = $row['id'];
					$name = $row['name'];
					$console = $row['favConsole'];
					$aboutme = $row['aboutMe'];
					if($uid == $id){
						echo "<form method='post' action='gochangeinfo.php'>
							Name: <input type='text' id='name' name='name' size='25' value='" . $name . "'/><br/>
							Favorite console: ";
						echo '<select id="system" name="system">
								<option value="sys">System</option>';
									$query = "SELECT DISTINCT system FROM systems ORDER BY system;";
									$result = mysqli_query($db, $query)
										or die("Error Querying Database");
									while($row = mysqli_fetch_array($result)) {
										echo '<option value="' . $row['system'] . '">' . $row['system'] . '</option>\n';
									}
						echo '</select><br/>';
						echo "About me:<br/>
							<textarea rows='10' cols='30' id='aboutme' name='aboutme'>" . $aboutme . "</textarea><br/>	
							<input type='submit' value='Update my information' name='submit' />
							</form>";
					} else {
						echo "Nice try, trying to change somebody else's info. Hacker. :P";
					}
				} else {
					echo "You can only edit your information if you\'re logged in.";
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