<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<title>Advanced Search</title>
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
						echo '<li><a href="mypage.php?id=' . $_SESSION['uid'] . '">My Page</a></li>';
						echo '<li id=><a href="logout.php">Logout</a></li>';
					} else {
						echo '<li id=><a href="login.php">Login</a></li>';
					}
				?>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="reviewlink.php">Reviews</a></li>
                <li><a href="memberlist.php">Member List</a></li>
				<li id="active"><a href="search.php" id="current">Search</a></li>
            </ul>
        </div>
        <!-- end #navcontainer -->
    </div>
    <!-- end #header -->
    <div class="headerPic"><h2></h2></div>
    <div class="sidebar3">
    	<div class="titleBlock">Advanced Search</div>
        <p>
        	<form method="get" action="advancedSearchResults.php">
		Enter your search terms here: <br/>
		Name of game: <input type="text" id="name" name="name" size="40"/><br/>
		ESRB Rating: 
			<select id="esrb" name="esrb">
				<option value="none">Select...</option>
				<option value="Early Childhood">EC - Early Childhood</option>
				<option value="Everyone 10+">E10 - Everyone 10+</option>
				<option value="Teen">T - Teen</option>
				<option value="Mature">M - Mature</option>
				<option value="Adults Only">A - Adults Only</option>
				<option value="Rating Pending">RP - Rating Pending</option>
			</select><br/>
		Genre: <input type="text" id="genre" name="genre" size="40"/><br/>
		Release Date:
			<select id="month" name="month">
				<option value="m">Month</option>
				<option value="1">January</option>
				<option value="2">February</option>
				<option value="3">March</option>
				<option value="4">April</option>
				<option value="5">May</option>
				<option value="6">June</option>
				<option value="7">July</option>
				<option value="8">August</option>
				<option value="9">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
			</select>
			<select id="day" name="day">
				<option value="d">Day</option>
				<?php
					for($i=1; $i<32; $i++){
						echo "<option value=\"$i\">$i</option>\n";
					}
				?>
			</select>
			<select id="year" name="year">
				<option value="y">Year</option>
				<?php
					for($i=2050; $i>1949; $i--){
						echo "<option value=\"$i\">$i</option>\n";
					}
				?>
			</select><br/>
			System: 
			<select id="system" name="system">
				<option value="sys">System</option>
				<?php
					include "dbconnect.php";
					$query = "SELECT DISTINCT system FROM systems ORDER BY system;";
					$result = mysqli_query($db, $query)
						or die("Error Querying Database");
					while($row = mysqli_fetch_array($result)) {
						echo '<option value="' . $row['system'] . '">' . $row['system'] . '</option>\n';
					}
				?>
			</select><br/>
		<input type="submit" value="Search" name="submit" /><br/>
	</form>
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