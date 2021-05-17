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
<div style="background-color:#00D1FF">
<head>
<link rel="icon" href="/0/images/pineappleicon.ico"/>
<br>
<center><b style="font-size:75px; color:black">LOGIN</b></center>
<br>
</head>
</div>
<head>
<nav class="navbar navbar-inverse" style="border-color:yellow">
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
<!-- -<li><button class="btn btn-danger navbar-btn" onclick=window.location="/0/login/login.php">🔎</button></li>- -->
</ul>
</div>
</nav>
</head>
<center>
<fieldset style="width:30%; color:yellow"><legend style="border-color:yellow; font-size:30px; color:#00D1FF">Login Form</legend>
<table border="0">
<tr>
</tr>
</table>
</fieldset>
</center>
<div>
</div>
<body style="background-color:#000000">
<div align="center">
<div>
    <form id="login-form" method="post" action="/0/login/authen_login.php" >
        <table  width=12% height=25px	px class="bottom-container" border="0.5" >
           <tr>
        <p><label style="color:#00D1FF; font-size:20px; position:relative" width=10% for="login">MailID:</label><br>
                <input style="border-color:#00D1FF; background-color:#000000; color:yellow; border-radius: 25px" type="text" name="user_id" id="user_id" required>
            </tr>
            <br>
            <tr>
        <p><label style="color:#00D1FF; font-size:20px; position:relative" width=10% for="password">Password:</label><br />
                <input style="border-color:#00D1FF; background-color:#000000; color:yellow; border-radius: 25px" type="password" name="user_pass" id="user_pass" required></input>
            </tr>
<br>			
</div>        
				
                <td><center><input class="btn" style="background-color:#00D1FF; border-color:yellow; border-radius: 7.5px; font-size:15px; position:relative" width=10% type="submit"  value="Submit" /></center>
                <td><center><input class="btn" style="background-color:#00D1FF; border-color:yellow; border-radius: 7.5px; font-size:15px; position:relative" width=10% type="reset" value="Reset"/></center>
				
            
        </table>
    </form>
		</div>
</center>
</body>
</html>
