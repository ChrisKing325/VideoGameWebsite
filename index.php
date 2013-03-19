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
                <li id="active"><a href="index.php" id="current">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="review.php">Reviews</a></li>
                <li><a href="#">Member List</a></li>
                <li><a href="#">Contact</a></li>
				<li><a href="search.php">Search</a></li>
            </ul>
        </div>
        <!-- end #navcontainer -->
    </div>
    <!-- end #header -->
    <div class="headerPic"><h2></h2></div>
    
    <div class="sidebar1">
    	<div class="titleBlock">Welcome to us</div>
        <h1>All website template is released under a Creative Commons Avttribution 2.5 License</h1>
        <p>
        	<?php
		include "dbconnect.php";
		$query = 'SELECT * FROM videogames';
		$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
		
		echo '<div class="gamelist">';
		while($row = mysqli_fetch_array($result)) {
  			$game = $row['gamename'];
  			$id = $row['id'];
		  	echo '<a href="showGame.php?id=' . $id . '">- ' . $game . '</a><br/>';
	    }
		echo '</div>';
		
	?>
			</p>
    </div>
	
	<div class="sidebar2">
    	<div class="titleBlock">I am a title!</div>
        <h1>What do you guys think should go here?</h1>
        <p>
        Do you guys think that we should put anything here? Should we just have one bar like on the search page? Or should we utilize this space? Maybe we could put the list of games here, and put the most recent reviews in the larger section.
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
