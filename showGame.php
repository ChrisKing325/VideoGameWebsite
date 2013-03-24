<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<?php session_start(); ?>
	<title>
	<?php
	include "dbconnect.php";
		$id = $_GET['id'];
		$query = "SELECT * FROM videogames WHERE id= $id";
		$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
		$row = mysqli_fetch_array($result);
		echo $row['gamename'];
	?>
	</title>
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
                <li id=><a href="index.php">Home</a></li>
				<?php
					if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
						echo '<li><a href="mypage.php?id=' . $_SESSION['uid'] . '>My Page</a></li>';
						echo '<li><a href="logout.php">Logout</a></li>';
					} else {
						echo '<li><a href="login.php">Login</a></li>';
					}
				?>
                <li><a href="#">About</a></li>
                <li id="active"><a href="reviewlink.php" id="current">Reviews</a></li>
                <li><a href="#">Contact</a></li>
				<li><a href="search.php">Search</a></li>
            </ul>
        </div>
        <!-- end #navcontainer -->
    </div>
    <!-- end #header -->
    <div class="headerPic"><h2></h2></div>
    <div class="sidebar1">
    	<div class="titleBlock">Game Info</div>
        <p>
        <?php
			$game = $row['gamename'];
			$rating = $row['ESRBrating'];
			$genre = $row['genre'];
			$date = $row['releasedate'];
			$score = $row['score'];
			$replayability = $row['replayability'];
			$picture = $row['picturelink'];
			echo "<h1>$game</h1>";
			echo '<div id="gamelist">';
			echo '<a href="' . $picture . '"><img src = "' . $picture . '" width=200px/></a>';
			echo "ESRB rating: $rating <br/>";
			echo "Genre: $genre <br/>";
			echo "Release date: $date <br/>";
			echo "Score: $score <br/>";
			echo "Systems:<br/>";
			echo "<ul>";
			$query = "SELECT system FROM gamereviews.systems WHERE id=$id ORDER BY system;";
			$result = mysqli_query($db, $query)
					or die("Error Querying Database");
			while($row = mysqli_fetch_array($result)) {
				echo '- '.$row['system'];
			}
			echo '</div>';
		
		?>
        </p>
    </div>
    <div class="sidebar2">
    	<div class="titleBlock">Reviews</div>
        <h1>Generic Review 1</h1>
        <p>
			Like, omg this game is AWESOME! Everybody totally needs to play it nao!!!!!!!!!!!!!!!!!!!!11
			</p>
		<h1>Generic Review 2</h1>
		<p>
			Eh, this game is okay.
		</p>
		<h1>Generic Review 3</h1>
		<p>
			Oh. Em. Gee. This is the absolute WORST game that anybody has ever made, ever. Anybody who plays it has no life whatsoever, and the creators need to go into a hole and die.
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