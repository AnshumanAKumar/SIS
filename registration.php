<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style1.css" />
</head>
<body class="bg2">
<center>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='loginbox' id='position'>
                <font class='font'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div> </font>";
        }
        else {
     echo "<div class='loginbox' id='position'>
                <font class='font'>
<h3> USERNAME $username already exist....</h3>
<br/>Click here to go back <a href='index.php'>Home</a></div>";
     
 }
    }else{
?>
<div class="loginbox" id="position">
    <div id="h1">STUDENT INFORMATION SYSTEM</div>
<div id="h1">Registration</div>
<form name="registration" action="" method="post">
    <input type="text" name="username" placeholder="Username" required /><br>
    <input type="email" name="email" placeholder="Email" required /><br>
    <input type="password" name="password" placeholder="Password" required /><br>
<input type="submit" name="submit" value="Register" id="button" />
</form>
</div>
<?php } ?>
</center>
</body>
</html>
