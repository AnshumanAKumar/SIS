<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
   <script language="javascript">
    function deleteask(){
  if (confirm('Are you sure you want to logout?')){
    return true;
  }else{
    return false;
  }
}
</script>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="style1.css" />
</head>
<body class="bg2">
<center>   
    <div class="loginbox" id="position">
          
        <p><h1 id="h1">Welcome <?php echo $_SESSION['username']; ?>!</h1></p>
    <p id="h1">This is secure area.</p>

<a href="index_1.php"id="myButton">Proceed</a>&nbsp
<a href="logout.php" onclick="return deleteask();" id="myButton">Logout</a>

</div>
</center>    
</body>
</html>