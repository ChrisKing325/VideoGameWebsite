<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<title>The Harlem Cake is a Lie</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
	<?php
		include "dbconnect.php";
		$id = $_GET['id'];
		$query = "SELECT * FROM videogames WHERE id= $id";
		$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
		
		echo '<div id="gamelist">';
		$row = mysqli_fetch_array($result);
  		$game = $row['gamename'];
		$rating = $row['ESRBrating'];
		$genre = $row['genre'];
		$date = $row['releasedate'];
		$score = $row['score'];
		$replayability = $row['replayability'];
		$picture = $row['picturelink'];
		echo "<h1>$game</h1>";
		echo "ESRB rating: $rating <br/>";
		echo "Genre: $genre <br/>";
		echo "Release date: $date <br/>";
		echo "Score: $score <br/>";
		echo "Replayability: $replayability <br/>";
		echo '<img src = "' . $picture . '"/>';
		echo '</div>';
		
	?>



</body>

</html>