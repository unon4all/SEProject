<!DOCTYPE>	
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
<div style="background-color:#000000">
<center><b style="font-size:100px; color:#e8af0a">MY PROFILE</b></center>
<head> </div>
<div style="background-color:black">
<link rel="icon" href="/0/images/pineappleicon.ico"/>
<br>
<!-- -<center><img src="/0/images/pineappletitle.jpg"></center> -->
<br>
</div>
<head>
<nav class="navbar navbar-inverse" style="border-color:#00D1FF">
<div class="container-fluid">
<div style="position:10px;" class="navbar-header">
<a class="navbar-brand" href="/0/login/pineapple.php">PINEAPPLE</a>
</div>
<ul class="nav navbar-nav">
<li><a href="/0/login/pineapple.php">Home</a></li>
<!-- 9 -->
<li><a href="/0/login/lstream.html">Local Stream</a></li>
</li>
<li><a href="/0/login/sview.php" target="_system">Server View</a></li>
</li>
<li><a href="#feedback.html">Feedback</a></li>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li class="active"><a href="/0/login/profile/myprofile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
<li><a href="/0/login/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
<!-- -<li><button class="btn btn-danger navbar-btn" onclick=window.location="/0/login/categories/search.php">🔎</button></li>- -->
</ul>
</div>
</nav>
</head>
<?php
if(!(count($_COOKIE) > 0)) 
{
echo "<script>window.location='/0/login/login.php'</script>";
}
?>
<?php
require ('../db_connect.php');
$currentuser = $_COOKIE['uid'];
$result = mysqli_query($connection,"SELECT * FROM PR_MOD WHERE mail_id = '$currentuser'");
while($row = mysqli_fetch_array($result))
{
echo "<b>First Name:</b> ". $row['first_name'];
echo "<br /><b>Last Name:</b> ". $row['last_name'];
echo "<br /><b>E-Mail ID:</b> ". $row['mail_id'];
echo "<br /><b>Recovery E-Mail ID:</b> ". $row['recovery_mailid'];
}

?>
