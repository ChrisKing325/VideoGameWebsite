<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<title>The Harlem Cake is a Lie</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>

	<h1>The Harlem Cake is a Lie!!!</h1>
	<?php
		include "dbconnect.php";
		$query = 'SELECT * FROM videogames';
		$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
		
		echo '<div id="gamelist">';
		while($row = mysqli_fetch_array($result)) {
  			$game = $row['gamename'];
  			$id = $row['id'];
		  	echo '<a href="showGame.php?id=' . $id . '">- ' . $game . '</a><br/>';
	    }
		echo '</div>';
		
	?>



</body>

</html>