<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>


<body>
<?php
include ('dbconnect.php');
$query = "INSERT INTO systems (id, system) VALUES (1,'Xbox 360')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
			echo "finished";
$query = "INSERT INTO systems (id, system) VALUES (2,'OSX')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
			echo "finished2";
$query = "INSERT INTO systems (id, system) VALUES (3,'PS3')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
			echo "finished3";
$query = "INSERT INTO systems (id, system) VALUES (4,'SNES')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
			echo "finished";
$query = "INSERT INTO systems (id, system) VALUES (5,'Gameboy')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
			echo "finished";
$query = "INSERT INTO systems (id, system) VALUES (6,'Gamecube')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
			echo "finished";
$query = "INSERT INTO systems (id, system) VALUES (7,'PS2')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
			echo "finished";
$query = "INSERT INTO systems (id, system) VALUES (8,'PC')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
			echo "finished";
$query = "INSERT INTO systems (id, system) VALUES (9,'PS1')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
			echo "finished";
$query = "INSERT INTO systems (id, system) VALUES (10,'Original Xbox')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
			echo "finished";
$query = "INSERT INTO systems (id, system) VALUES (11,'Android')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
			echo "finished";
?>
</body>
</html>