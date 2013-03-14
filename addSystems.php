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



?>
</body>
</html>