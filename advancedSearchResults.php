<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<title>Search Results</title>
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
                <li><a href="#">About</a></li>
                <li><a href="reviewlink.php">Reviews</a></li>
                <li><a href="#">Member List</a></li>
                <li><a href="#">Contact</a></li>
				<li id="active"><a href="search.php" id="current">Search</a></li>
            </ul>
        </div>
        <!-- end #navcontainer -->
    </div>
    <!-- end #header -->
    <div class="headerPic"><h2></h2></div>
    <div class="sidebar3">
    	<div class="titleBlock">Search Results</div>
        <p>
        	
			<?php
				include "dbconnect.php";
				$query = "SELECT id,gamename from videogames";
				if($_GET['name'] != ""){
					$name = mysqli_real_escape_string($db, $_GET['name']);
					$query = $query . " WHERE gamename LIKE '%$name%'";
				}
				if($_GET['esrb'] != "none"){
					if($_GET['name'] != ""){
						$query = $query . " AND ";
					} else {
						$query = $query . " WHERE ";
					}
					$esrb = mysqli_real_escape_string($db, $_GET['esrb']);
					$query = $query . "ESRBrating='$esrb'";
				}
				if($_GET['genre'] != ""){
					if($_GET['name'] != "" || $_GET['esrb'] != "none"){
						$query = $query . " AND ";
					} else {
						$query = $query . " WHERE ";
					}
					$genre = mysqli_real_escape_string($db, $_GET['genre']);
					$query = $query . "genre LIKE '%$genre%'";
				}
				if($_GET['month'] != "m" && $_GET['day'] != "d" && $_GET['year'] != "y"){
					if($_GET['name'] != "" || $_GET['esrb'] != "none" || $_GET['genre'] != ""){
						$query = $query . " AND ";
					} else {
						$query = $query . " WHERE ";
					}
					$month = $_GET['month'];
					$day = $_GET['day'];
					$year = $_GET['year'];
					$query = $query . " releasedate = '$year-$month-$day'";
				}
				$query = $query . ";";
				//echo $query;
				$result = mysqli_query($db, $query)
					or die("Error Querying Database");
				echo '<div class="gamelist" id="gamelist">';
				
				while($row = mysqli_fetch_array($result)) {
					$game = $row['gamename'];
					$id = $row['id'];
					echo '<a href="showGame.php?id=' . $id . '"> - ' . $game . '</a><br/>';
				}
				echo '</div>';
		
		
			?>
			<div>
				Don't see the game you're looking for? 
				<a href="addGame.php">Create a page for it!</a>
			</div>
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