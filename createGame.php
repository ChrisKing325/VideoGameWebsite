<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
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
                <li><a href="#">About</a></li>
                <li id="active"><a href="review.php" id="current">Reviews</a></li>
                <li><a href="#">Member List</a></li>
                <li><a href="#">Contact</a></li>
				<li><a href="search.php">Search</a></li>
            </ul>
        </div>
        <!-- end #navcontainer -->
    </div>
    <!-- end #header -->
    <div class="headerPic"><h2></h2></div>
    <div class="sidebar3">
    	<div class="titleBlock">Search</div>        
			<p>
				<?php
				include "dbconnect.php";
				//echo $_POST["name"];
				if($_POST["name"] != "" && $_POST["esrb"] != "none" && $_POST["genre"] != "" && $_POST["month"] != "m" && $_POST["day"] != "d" && $_POST["year"] != "y" && $_POST["piclink"] != ""){
					$name = $_POST["name"];
					$esrb = $_POST["esrb"];
					$genre = $_POST["genre"];
					$month = $_POST["month"];
					$day = $_POST["day"];
					$year = $_POST["year"];
					$piclink = $_POST["piclink"];
					
					//echo $year/4;
					if((($month == 9 || $month == 4 || $month == 6 || $month == 11) && $day > 30) || ($month == 2 && (($year % 4 != 0 && $day > 28) || $day > 29))){
						echo "Ha, ha. Very funny. Please enter a valid date.";
					} else {
						//at this point, everything has been filled out, and the date given is a valid date.
						$query = 'INSERT INTO gamereviews.videogames (id, gamename, ESRBrating, genre, releasedate, score, replayability, AdminReview, picturelink) VALUES (NULL, "'.$name.'", "'.$esrb.'", "'.$genre.'", "'.$year.'-'.$month.'-'.$day.'", NULL, NULL, NULL, "'.$piclink.'");';
						mysqli_query($db, $query)
								or die("Error Querying Database");
						$query = 'SELECT * FROM gamereviews.videogames WHERE gamename = "'.$name.'" AND ESRBRating = "'.$esrb.'" AND releasedate = "'.$year.'-'.$month.'-'.$day.'";';
						//echo $query;
						$result = mysqli_query($db, $query)
								or die("Error Querying Database");
						$row = mysqli_fetch_array($result);
						$id = $row['id'];
						echo 'Click <a href="showGame.php?id=' . $id . '">here</a> to go to the page you just created!';
						
					}
					
				} else {
					echo "Please fill out all required fields.";
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