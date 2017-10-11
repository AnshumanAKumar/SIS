 <!DOCTYPE html>       
<html>
<head>
<link rel="stylesheet" href="style1.css" />

<script language="javascript">
     function validate()
     {
      var rn=document.reg.rn.value;
    var branch=document.reg.branch.value;
    var year=document.reg.year.value;
    
   if(rn==='')
  {
    window.alert("Enter Roll No!");
    document.reg.rn.focus();
    return false
  }
    
    if(reg.branch.selectedIndex==0)
  {
    window.alert("Please Select Branch!");
    reg.branch.focus();
    return false;
  }
  
  if(reg.year.selectedIndex==0)
  {
    window.alert("Please Select year!");
    reg.year.focus();
    return false;

 }
 }
 
 function deleteask(){
  if (confirm('Are you sure you want to logout?')){
    return true;
  }else{
    return false;
  }
}
</script>
 
</head>

<body class="bg">
<center>
    <form method="POST" action="" name="reg" onSubmit="return validate()" class="font">
        <table border="5" bgcolor=#eee> <h1 id="h1n">STUDENT INFORMATION SYSTEM</h1>
            
            <ul>
                <li><a href="index_1.php" >INSERT</a></li>
                <li><a href="update1.php">UPDATE</a></li>
                <li><a href="delete.php">DELETE</a></li>
                <li><a href="search.php" >SEARCH</a></li>
                <li><a href="logout.php" onclick="return deleteask();">LOGOUT</a></li>
            </ul><br>
                    </center>

<tr>
		<td>ENTER ROLL NO:</td>
		<td><input type="text" name="rn" /></td>
	</tr>

        
        <tr>
            <td>SELECT BRANCH:</td>
            <td>
<select name="branch">
<option >select branch</option>
<option value="CSE">CSE</option>
<option value="E&TC">E&TC</option>
<option value="CIVIL">CIVIL</option>
<option value="MECHANICAL">MECHANICAL</option>
<option value="AUTO">AUTO</option>
<option value="IT">IT</option>
</select>
</td>
        </tr>	
        
        <tr>
		<td>YEAR:</td>
        <td>
<select name="year">
<option >select year</option>
<option value="FIRST">FIRST</option>
<option value="SECOND">SECOND</option>
<option value="THIRD">THIRD </option>
<option value="FOURTH">FOURTH</option>
</select>
</td>
        </tr>
        
 </table>
        <br>
        <input type="submit" name="submit" value="DELETE" id='myButton' />
</form>
</body>
</html>
<?php
require'db_conn.php';
if(isset($_POST['submit']))
{
    
    
    // get id to delete
    $rn = $_POST['rn'];
    $branch=$_POST['branch'];
     $year=$_POST['year'];
    
    
    // mysql delete query 
    $query = "DELETE FROM `bhup` WHERE `rn` = '$rn' and `branch` = '$branch' and `year` = '$year'" ;
    
    mysqli_query($conn , $query);
    
    $result= mysqli_affected_rows($conn);
    
    echo ("<div class='font'> <font color = 'white'> $result ROWS DELETED </font> </div>");
    
    /*
    if($result)
    {
        echo 'Data Deleted';
    }else{
        echo 'Data Not Deleted';
    }*/
    
}
?>