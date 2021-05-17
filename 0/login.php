<?php

include("connect_i.php");
include("admin/settings.php");

session_start();

$message = "";

if(isset($_POST["form"]))
{

    $login = $_POST["login"];
    $login = mysqli_real_escape_string($link, $login);

    $password = $_POST["password"];
    $password = mysqli_real_escape_string($link, $password);
    $password = hash("sha1", $password, false);

    $sql = "SELECT * FROM users WHERE login = '" . $login;
    $sql.= "' AND BINARY password = '" . $password . "'";
    // Checks if the user is activated
    $sql.= " AND activated = 1";

    // Debugging
    // echo $sql;

    $recordset = $link->query($sql);

    if(!$recordset)
    {

        die("Error: " . $link->error);

    }

    else
    {

        $row = $recordset->fetch_object();

        // Debugging
        // print_r($row);

        if($row)
        {

            session_regenerate_id(true);

            $token = sha1(uniqid(mt_rand(0,100000)));

            $_SESSION["login"] = $row->login;
            $_SESSION["admin"] = $row->admin;
            $_SESSION["token"] = $token;
            $_SESSION["amount"] = 1000;

            $security_level_cookie = $_POST["security_level"];

            switch($security_level_cookie)
            {

                case "0" :

                    $security_level_cookie = "0";
                    break;

                case "1" :

                    $security_level_cookie = "1";
                    break;

                case "2" :

                    $security_level_cookie = "2";
                    break;

                default :

                    $security_level_cookie = "0";
                    break;

            }

            if($evil_bee == 1)
            {

                setcookie("security_level", "666", time()+60*60*24*365, "/", "", false, false);

            }

            else
            {

                setcookie("security_level", $security_level_cookie, time()+60*60*24*365, "/", "", false, false);

            }

            header("Location: profile.php");

            exit;

        }

        else
        {

        $message = "";
$message = "<font color=\"red\">Sign Up before you Login/Invalid credentials! BRUTEFORCE?</font> <br> <font color=\"white\">admin:b4581a839e2e5344ac0c5b19af3be4181bc7842a</font>";
        }

    }

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
<center><h1>LOGIN<h1></center>
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
<li class="active"><a href="/0/login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
<!-- Don't Believe Whatever you see Try to inspect Everything you see Solution to your problem might be Scattered around Look into each and every minute details -->
<li><button class="btn btn-danger navbar-btn" onclick=window.location="/0/login/login.php">Buy</button></li>
</ul>
</div>
</nav>
</head>

<body>
<center>
<br><br><br>
<div id="main">

    <form action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="POST">

        <p><label for="login">Username:</label><br />
        <input type="text" id="login" name="login" size="20" autocomplete="off"></p> 

        <p><label for="password">Password:</label><br />
        <input type="password" id="password" name="password" size="20" autocomplete="off"></p>

        <button class="btn btn-danger navbar-btn" type="submit" name="form" value="submit">Login</button>

    </form>

    <br />
    <?php

    echo $message;

    $link->close();

    ?>
</div>
</center>
</body>

</html>
