<?php

include("security.php");
include("security_level_check.php");
include("selections.php");

?>
<!DOCTYPE html>
<html>
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
<script src="link.js"></script>
</head>
<head>
<link rel="icon" href="/0/images/pineappleicon.ico"/>
<br>
<center><h1>PROFILE<h1></center>
<br>
<head>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="/0/pineapple.html">PINEAPPLE</a>
</div>
<ul class="nav navbar-nav">
<li><a href="/0/pineapple.html">Home</a></li>
<li><a href="/0/pineos.html">PineOS</a></li>
</li>
<li><a href="/0/aboutus.html">About Us</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="/0/Signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li class="active"><a href="/0/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
<li><button class="btn btn-danger navbar-btn" onclick=alert('FLAG_ERROR')>Buy</button></li>
</ul>
</div>
</nav>
</head>
<center>
<body>
<!--<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
<script src="js/html5.js"></script> 
To View the page which contains flag, CLICK THIS
<h 
  onclick="window.location='<?php echo($_SERVER["SCRIPT_NAME"]);?>?link=flag'"
  style="cursor: pointer;"
  tabindex="1"
>
 <a href="flag.html">LINK</a>.
</h>   
<?php

if(isset($_REQUEST["link"]))
{

    // If the security level is not MEDIUM or HIGH
    if($_COOKIE["security_level"] != "1" && $_COOKIE["security_level"] != "2")
    {

?>
    <p><i><?php @eval ("echo " . $_REQUEST["link"] . ";");?></i></p>

<?php

    }

    // If the security level is MEDIUM or HIGH
    else
    {
?>
    <p><i><?php echo htmlspecialchars($_REQUEST["link"], ENT_QUOTES, "UTF-8");;?></i></p>

<?php

    }

}

?>
</div>	
</body>
</center>
</html>
