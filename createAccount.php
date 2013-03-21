<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Video Game Reviews</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
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
                <li id="active"><a href="#" id="current">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="search.php">Search for Games</a></li>
                <li><a href="#">Member List</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <!-- end #navcontainer -->
    </div>
    <!-- end #header -->
    <div id="content">
        <!-- insert the page content here -->
		<form method = "post" action = "accountCreated.php">
		<table>
		<tr><td>name</td><td><input type="text" id="name" name="name" /></td></tr>
		<tr><td>username</td><td><input type="text" id="username" name="username" /></td></tr>
		<tr><td>password</td><td><input type="text" id="password" name="password" /></td></tr>
		<tr><td>favConsole</td><td><input type="text" id="favConsole" name="favConsole" /></td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" value="Submit" /></td></tr>
		</table>
					
		</form>
		<!-- END CONTENT -->
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
