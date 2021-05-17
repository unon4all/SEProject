<?php  
 require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass']) and isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['user_recid'])){
	
// Assigning POST values to variables.
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$username = $_POST['user_id'];
$recusername = $_POST['user_recid'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "INSERT INTO `PR_MOD` (first_name, last_name, mail_id, recovery_mailid, password) VALUES ('$fname', '$lname', '$username', '$recusername', '$password')";
$cmp = "SELECT * FROM `PR_MOD` WHERE mail_id = '$username'";

$result = mysqli_query($connection, $cmp) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 0){
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
echo "<script>alert('Registration Successful')</script>";
echo "<script type='text/javascript'>window.location='/0/login/login.php'</script>";
}
else{
echo "<script>alert('Registration Failed! MailID already Exists')</script>";
echo "<script>window.location='/0/login/signup.php#REGISTRATION FAILED'</script>";
}
}
?>
