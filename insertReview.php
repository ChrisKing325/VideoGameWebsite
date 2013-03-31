<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<?php session_start(); ?>
	<title>Review</title>
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
    <div class="sidebar3">
    	<div class="titleBlock">Review</div>
        <p>
        	
			<?php
			include "dbconnect.php";
			if(isset($_POST['review']) && $_POST['rating'] !=0 && $_POST['replayability'] !=0){
				$reviewText = mysqli_real_escape_string($db, $_POST['review']);
				$rating = $_POST['rating'];
				$replayability = $_POST['replayability'];
				$query = "INSERT INTO gamereviews.reviews (userReview, userID, gameID, rating, replayability) 
					VALUES ('$reviewText', " . $_SESSION['uid'] . " , " . $_GET['id'] . " , " . $rating . " , " . $replayability . ");";
				//echo $query;
				mysqli_query($db, $query)
					or die("Error Putting into Database");
					
					
				echo "Thanks for your feedback! <a href='showGame.php?id=" . $_GET['id'] . "'>Click here</a> to go back to the game you reviewed.";
				
				// now update the score and replayability value for this game
				
				$query = "SELECT rating,replayability FROM gamereviews.reviews WHERE gameID=" . $_GET['id'] . ";";
				$result = mysqli_query($db, $query)
					or die("Error Putting into Database");
				$ratingtotal = 0;
				$replayabilitytotal = 0;
				$count = 0;
				while($row = mysqli_fetch_array($result)) {
					$ratingtotal += $row['rating'];
					$replayabilitytotal += $row['replayability'];
					$count ++;
				}
				
				$rating = $ratingtotal / $count;
				$replayability = $replayabilitytotal / $count;
				
				$replay = "";
				if($replayability <= 2){
					$replay = "Low";
				} else {
					if($replayability <= 4){
						$replay = "Low-Medium";
					} else {
						if($replayability <= 6){
							$replay = "Medium";
						} else {
							if($replayability <= 8){
								$replay = "Medium-High";
							} else {
								$replay = "High";
							}
						}
					}
				}
				
				
				$query = "UPDATE gamereviews.videogames SET score=$rating, replayability='$replay' WHERE id=" . $_GET['id'] . ";";
				mysqli_query($db, $query)
					or die("Error Putting into Database");
			} else {
				echo '<div class="errorMessage">Please fill out all fields.</div>
						<form method="post" action="insertReview.php?id=' . $_GET['id'] .'">
						<span class="dontbeallthewayontheright">Enter your review of the game here: </span><br/>
						<textarea rows="10" cols="30" name="review" class="dontbeallthewayontheright">';
				if(isset($_POST['review'])){
					echo $_POST['review'];
				}
						
				echo '</textarea>	<br />	
						<span class="dontbeallthewayontheright">Choose your rating for this game: 
						<select name="rating" id="rating">
							<option value=0>-</option>
							<option value=1>1</option>
							<option value=2>2</option>
							<option value=3>3</option>
							<option value=4>4</option>
							<option value=5>5</option>
							<option value=6>6</option>
							<option value=7>7</option>
							<option value=8>8</option>
							<option value=9>9</option>
							<option value=10>10</option>
						</select></span><br/>
						
						<span class="dontbeallthewayontheright">Choose your replayability value for this game:
						<select name="replayability" id="replayability">
							<option value=0>-</option>
							<option value=1>1</option>
							<option value=2>2</option>
							<option value=3>3</option>
							<option value=4>4</option>
							<option value=5>5</option>
							<option value=6>6</option>
							<option value=7>7</option>
							<option value=8>8</option>
							<option value=9>9</option>
							<option value=10>10</option>
						</select></span><br/>';
			
			
					if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
						echo ' <input type="submit" value="Review" class="dontbeallthewayontheright"/> ' ;
					} else {
						echo '<div class=errorMessage> Please log in before reviewing</div>';
					}
			
			
		
				echo "</form>";
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