 <!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style1.css" />
        <script language="javascript">
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
 <form method='POST' action='' name='reg' onSubmit='return validate()' class="font">
     <table border="5" bgcolor="#eee"> <h1 id="h1n">STUDENT INFORMATION SYSTEM</h1>
         
         <ul>     
             <li><a href='index_1.php'>INSERT</a></li>
             <li><a href='update1.php'>UPDATE</a></li>
             <li><a href='delete.php'>DELETE</a></li>
             <li><a href='search.php'>SEARCH</a></li>
             <li><a href='logout.php' onclick="return deleteask();">LOGOUT</a></li>
         </ul>
         <br>
</center>


<center>
<tr><td><b>SELECT ANY ONE: &nbsp<select name='sel'><option>Select Category &nbsp</option>

  <option value='fname'>FIRST NAME</option>
  <option value='rn'>ROLL NO</option>
  <option value='branch'>BRANCH</option>
  <option value='semester'>SEMESTER</option>
  <option value='address'>ADDRESS</option>
  <td><input type='text' name='ty'>&nbsp<input type='submit' name='se' value='Search' id="myButton2">&nbsp<input type='submit' name='se1' value='All Search'id='myButton2'>
</tr></table>
</center></form><br>
</body></html>

<?php
 require'db_conn.php';
$sel = filter_input(INPUT_POST, 'sel');
$ty = filter_input(INPUT_POST, 'ty');
 $sel= isset($_POST['sel']) ? $_POST['sel']: '';
   $ty= isset($_POST['ty']) ? $_POST['ty']: '';

if(isset($_POST['se']))
 {

  if($sel=="fname")
  {
$q1=mysqli_query($conn,"select* from bhup where fname='$ty'");
echo"<center><table>";
  echo"<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysqli_fetch_array($q1, MYSQLI_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

 echo"<tr bgcolor=#eee><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
 if($sel=="rn")
  {
$q2= mysqli_query($conn,"select* from bhup where rn='$ty'");
echo"<center><table>";
  echo"<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows= mysqli_fetch_array($q2, MYSQLI_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

 echo"<tr bgcolor=#eee><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
if($sel=="branch")
  {
$q3=mysqli_query($conn,"select* from bhup where branch='$ty'");
echo"<center><table>";
 echo"<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysqli_fetch_array($q3, MYSQLI_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

echo"<tr bgcolor=#eee><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
if($sel=="semester")
  {
$q4=mysqli_query($conn,"select* from bhup where semester='$ty'");
echo"<center><table>";
 echo"<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysqli_fetch_array($q4, MYSQLI_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

echo"<tr bgcolor=#eee><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
if($sel=="address")
  {
$q5=mysqli_query($conn,"select* from bhup where address='$ty'");
echo"<center><table>";
  echo"<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysqli_fetch_array($q5, MYSQLI_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

echo"<tr bgcolor=#eee><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}

}
if(isset($_POST['se1']))
 {
$q8=mysqli_query($conn,"select* from bhup");
echo"<center><table boder='1'>";
  echo"<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows= mysqli_fetch_array($q8,MYSQLI_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

 echo"<tr bgcolor=#eee><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}

?>
