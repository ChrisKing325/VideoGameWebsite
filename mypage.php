<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<?php session_start(); ?>
	<title>
	<?php
		include "dbconnect.php";
		$id = $_GET['id'];
		$query = "SELECT * FROM gamereviews.users WHERE id= $id";
		$result = mysqli_query($db, $query)
			or die("Error Querying Database");
		$row = mysqli_fetch_array($result);
		echo $row['userName'];
		if(isset($_SESSION['uid']) && $_SESSION['uid'] == $id){
			$isthisuser = true;
		} else {
			$isthisuser = false;
		}
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
                <li><a href="index.php">Home</a></li>
				<?php
					if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
						echo '<li id="active"><a href="mypage.php?id=' . $_SESSION['uid'] . '" id="current">My Page</a></li>';
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
	<div class="sidebar1">
		<div class="titleBlock">
			Picture
		</div>
		<img src=" <?php echo $row['piclink'] ?> " width=200px />
	</div>
    <div class="sidebar2">
    	<div class="titleBlock">
			<?php
				echo $row['userName'] . "'s Page";
			?>
		</div>        
			<p>        	
				<h1>Name:</h1>
				<span class="dontbeallthewayontheright">
				<?php echo $row['name']; ?></span> 
				<br/><br />
				<h1>My favorite console:</h1>
				<span class="dontbeallthewayontheright">
				<?php echo $row['favConsole']; ?></span> 
				<br/><br/>
				<h1>About me:</h1>
				<span class="dontbeallthewayontheright">
				<?php
					echo $row['aboutMe'];
					echo "<br/>";
					echo "<br/>";
					echo "<hr>";
					if($isthisuser){
						echo "<br/><a href='changeinfo.php' class='dontbeallthewayontheright'>Click here</a> to change the above information.";
					}
					echo "<br/>";
					echo "<br/>";
					echo "<hr>";
				?></span> 
				<br/>
			</p>
			<p>
				<h1>My reviews:</h1>
				<?php
					$query = "SELECT * FROM gamereviews.reviews WHERE userID = " . $_GET['id'] . " ORDER BY timeReviewed DESC";
					$result = mysqli_query($db, $query)
						or die("Error Querying Database 2");
					echo '<div class="reviewlist" id="reviewlist">';
				
					while($row = mysqli_fetch_array($result)) {
						$gid = $row['gameID'];
						$review = $row['userReview'];
						
						$query3 = "SELECT * FROM gamereviews.videogames WHERE id = $gid";
						$result3 = mysqli_query($db, $query3)
							or die("Error Querying Database 3");
						$row3 = mysqli_fetch_array($result3);
						$game = $row3['gamename'];
						
						echo '<h1><a href="showGame.php?id=' . $gid . '"> ' . $game . ':</a></h1>' . $row['timeReviewed'];
						echo '<br/> Scored: ' . $row['rating'] . '<br/> Replayability: ' . $row['replayability'] . '<br/>';
						echo "<br/>";
						echo "<br/>";
						echo '<span class="dontbeallthewayontheright">' . $review . "</span><br/><br/>";
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