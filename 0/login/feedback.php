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
<div style="background-color:#FFD700">
<link rel="icon" href="/0/images/pineappleicon.ico"/>
<br>
<center><b style="font-size:70px; color:black">FEEDBACK</b></center>
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
<li><a href="sview.php" target="_system">Server View</a></li>
</li>
<li class="active"><a href="feedback.php">Feedback</a></li>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="/0/login/profile/myprofile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
<li><a href="/0/login/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
<!-- <li><button class="btn btn-danger navbar-btn" onclick=window.location="/0/login/categories/search.php">🔎</button></li>- -->
</ul>
</div>
</nav>
</head>
<body>
<center>
    <form id="contactusform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        <table  width=12% height=25px class="tform" border="0.5" >
           <tr>
<div> <input class="inp" type="text" name="username" id="name" placeholder="Name" required></input>
<!-- <i class="fas fa-lg fa-user-circle" aria-hidden="true"></i> -->
</div>
<!--                <input style="border-color:#00D1FF; background-color:#000000; color:yellow; border-radius: 25px" type="text" name="user_id" id="user_id"> -->
            </tr>
            <br>
            <tr>
<div>
	 <input class="inp" type="email" style="left:-40px; padding-left:40px" name="email" id="mail" placeholder="Email" required></input>
<!--             <i class="fas fa-lg fa-envelope" aria-hidden="true"></i> -->

	</tr>
<br>
                    <tr>

		<textarea cols="40" rows="5" style="left:-40px; padding-left:40px;" class="inp msg" type="text" name="msg" id="message" placeholder="Message" required></textarea>
                <i class="fas fa-lg fa-comment-dots" style="top:-15%"aria-hidden="true"></i>

            </tr>

                <td><center><div><input class="btn" width=10% type="submit" value="Drop us a mail" /><i class="fas fa-lg fa-paper-plane" aria-hidden="true" style="margin-left:-43%; margin-top:1%; position:relative;"></i></div></td>
</table>
</form>
</div>
</center>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
// Assigning POST values to variables.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$username = $_POST['username'];
$email = $_POST['email'];
$msg = $_POST['msg'];

if (empty($username) && empty($msg) && $username === "" && $msg === "")
{
echo "<script>alert('Error Processing your Request. Please fill all the Required Fields')</script>";
echo "<script type='text/javascript'>window.location='/#Required Fields are Empty'</script>";
exit();
}

$res = "[+] Topic: $username [+] E-Mail ID: $email [+] Message: $msg";
error_log("[+] New Mail Recieved");
error_log("$res");

$message = "[+] Topic: $username \r\n[+] E-Mail ID: $email \r\n[+] Message: $msg \r\n\r\n+---------- END OF MESSAGE ----------+";
$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '';   // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

$mail->From = '';
$mail->FromName = 'Postmaster MailGun';
$mail->addAddress('');                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = "Feedback - Someone drooped a message!";
$mail->Body    = "{$message}";

$result = $mail->Send();

if($result == 1){
echo "<script>alert('Success! Your Response has been Submitted')</script>";
echo "<script type='text/javascript'>window.location='/0/login/feedback.php/#Response Submitted'</script>";
}
else{
    echo "ERROR";

}

}
?>
</body>
</html>

