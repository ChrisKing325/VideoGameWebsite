<?php session_start(); ?>
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
                <li><a href="index.php">Home</a></li>
				<?php
					if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
						echo '<li><a href="mypage.php?id=' . $_SESSION['uid'] . '">My Page</a></li>';
						echo '<li><a href="logout.php">Logout</a></li>';
					} else {
						echo '<li><a href="login.php">Login</a></li>';
					}
				?>
                <li id="active"><a href="aboutus.php" id="current">About Us</a></li>
                <li><a href="reviewlink.php">Reviews</a></li>
                <li><a href="memberlist.php">Member List</a></li>
				<li><a href="search.php">Search</a></li>
            </ul>
        </div>
        <!-- end #navcontainer -->
    </div>
    <!-- end #header -->
    <div class="headerPic"><h2></h2></div>
    
    <div class="sidebar1">
    	<div class="titleBlock">Highest Rated Games</div>
        <h1>Top 5 Games</h1>
        <p>
        	<?php
		include "dbconnect.php";
		$query = 'SELECT * FROM videogames ORDER BY score DESC';
		$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
		
		echo '<div class="gamelist">';
		$i = 0;
		while($row = mysqli_fetch_array($result)) {
  			$game = $row['gamename'];
  			$id = $row['id'];
		  	if($i < 5) {
		  		echo '<a href="showGame.php?id=' . $id . '">- ' . $game . '</a><br/>';
				$i++;
	    	}
	    }
		echo '</div>';
		
	?>
			</p>
    </div>
	
	<div class="sidebar2">
    	<div class="titleBlock">CPSC 350 Team 2</div>
        <h1>
		<?php
		$image = "images/team.jpg";
		$width = 30;
		$height = 28;
		echo'<img src="'.$image.'"style=width:"'.$width.'px;height'.$height.'px;">';
		?>
		</h1>
		
		
        <h1>
        &nbsp;&nbsp;Austin Wegner<font color=black >&nbsp;-&nbsp;Scrum Master</font></br>
		&nbsp;&nbsp;Elizabeth Ashley</br>
		&nbsp;&nbsp;James Deflora</br>
		&nbsp;&nbsp;Chris King<font color=black >&nbsp;-&nbsp;Project Owner</font></br>
		&nbsp;&nbsp;Brendan Prinn</br>
        </h1>
		
		<p>
		 <a href="aboutusMore.php">More About Us</a>
		
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
