<?php  
 require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `PR_MOD` WHERE mail_id='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
if ($username === "admin@uploader.com")
{
echo "<script>alert('Login Credentials verified')</script>";
echo "<script type='text/javascript'>window.location='/phpmyadmin'</script>";
}
else
{
session_start();
$_SESSION['user_id'];
setcookie('uid', $username, time() + (86400 * 30), "/");
echo "<script>alert('Login Credentials verified')</script>";
echo "<script type='text/javascript'>window.location='/0/login/pineapple.php'</script>";
}
}
else{
echo "<script>alert('Invalid Login Credentials')</script>";
echo "<script>window.location='/0/login/login.php#INVALID LOGIN CREDENTIALS'</script>";
}
}

