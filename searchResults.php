<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<title>Search Results</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>

	<h1>Search Results</h1>
	<?php
		include "dbconnect.php";
		if(isset($_GET[searchterm])){
			$searchTerm = $_GET[searchterm];
			$query = mysqli_real_escape_string("SELECT * FROM videogames WHERE name LIKE %$searchTerm% ORDER BY name;");
			$result = mysqli_query($db, $query)
				or die("Error Querying Database");
		}
		echo '<div id="gamelist">';
		while($row = mysqli_fetch_array($result)) {
  			$game = $row['gamename'];
  			$id = $row['id'];
		  	echo '<a href="/showGame.php?id=' . $id . '">• ' . $game . '</a>';
	    }
		echo '</div>';
		
	?>



</body>

</html>