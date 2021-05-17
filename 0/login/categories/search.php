<?php
if(!(count($_COOKIE) > 0)) 
{
echo "<script>window.location='/0/login/login.php'</script>";
}
?>
<!DOCTYPE html>	
<html>
<title>
Pineapple
</title>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<head>
<link rel="icon" href="/0/images/pineappleicon.ico"/>
<br>
<center><h1>SEARCH<h1></center>
<br>
<head>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="/0/pineapple.html">PINEAPPLE</a>
</div>
<ul class="nav navbar-nav">
<li><a href="/0/pineapple.html">Home</a></li>
<li><a href="/0/pineos.html">PineApps</a></li>
</li>
<li><a href="/0/aboutus.html">About Us</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="/0/login/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li class="active"><a href="/0/login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
<!-- Don't Believe Whatever you see Try to inspect Everything you see Solution to your problem might be Scattered around Look into each and every minute details -->
<li><button class="btn btn-danger navbar-btn" onclick=window.location="/0/login/categories/search.php">🔎</button></li>
</ul>
</div>
</nav>
</head>

<html>
<center>
<form id="search_id" method="post" action="searching.php">
<label for="search">SEARCH:</label><br />
<input type="text" name="q" id="q">
<input id="button" type="submit" name="submit" value="🔎">
</form>
</center>
</html>
<br />
