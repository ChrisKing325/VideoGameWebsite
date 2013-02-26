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
                <li id="active"><a href="#" id="current">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Member List</a></li>
                <li><a href="#">Contact</a></li>
				<li><a href="search.php">Search</a></li>
            </ul>
        </div>
        <!-- end #navcontainer -->
    </div>
    <!-- end #header -->
    <div class="headerPic"><h2>Online <span>GAMES</span> portal</h2></div>
    <div class="sidebar1">
    	<div class="titleBlock">About us</div>
        <h1>Your Flash Site will be look professional!</h1>
        <p>
        An extensive number of unique Flash Templates is at your service. All templates on our site were created specially for you! Our independent designers created flash professional templates. Also our templates are unique. It means you can use our flash templates to create your own site!  
        </p>
        <p>
        	Our studio offers a big choice of free flash templates categories for your business and personal needs. By using our unique products, you can create an excellent animated website and spend minimum time and money on it. Most of our templates are compatible with Flash MX2004, Flash 8, Flash CS3, and Flash CS4. You don’t have to be a professional flash developer to create a website.
        </p>
    </div>
    <div class="sidebar2">
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
