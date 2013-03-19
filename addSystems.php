<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>


<body>
<?php
include ('dbconnect.php');
$query = "INSERT INTO systems (id, system) VALUES (1,'xbox 360')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
echo "Finished adding system 1!";
$query = "INSERT INTO systems (id, system) VALUES (1,'gamecube')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
echo "Finished adding system 2!";
$query = "INSERT INTO systems (id, system) VALUES (1,'vita')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
echo "Finished adding system 3!";
$query = "INSERT INTO systems (id, system) VALUES (1,'ps3')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
echo "Finished adding system 4!";
$query = "INSERT INTO systems (id, system) VALUES (1,'wii')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
echo "Finished adding system 5!";
$query = "INSERT INTO systems (id, system) VALUES (1,'snes')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
echo "Finished adding system 6!";
$query = "INSERT INTO systems (id, system) VALUES (1,'pc')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
echo "Finished adding system 7!";
$query = "INSERT INTO systems (id, system) VALUES (1,'ds')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
echo "Finished adding system 8!";
$query = "INSERT INTO systems (id, system) VALUES (1,'ps2')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
echo "Finished adding system 9!";
$query = "INSERT INTO systems (id, system) VALUES (1,'n64')";
$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
echo "Finished adding system 10!";


?>
</body>
</html>