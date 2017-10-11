        <!DOCTYPE html>
<html>
<head>
<script language="javascript">
     function validate()
{
  var fname=document.reg.fn.value;
  var lname=document.reg.ln.value;
   var session=document.reg.session.value;
    var rn=document.reg.rn.value;
    var branch=document.reg.branch.value;
     var year=document.reg.year.value;
      var semester=document.reg.semester.value;
       var mm=document.reg.mm.value;
        var dd=document.reg.dd.value;
         var yy=document.reg.yy.value;
          var address=document.reg.address.value;

if(rn=='')
  {
    window.alert("Enter Roll No!");
    document.reg.rn.focus();
    return false;

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
 
if(fname=='')
  {
    window.alert("Please Enter fname!");
    document.reg.fn.focus();
    return false;

 }

 if(lname=='')
  {
    window.alert("Please Enter lname!");
    document.reg.ln.focus();
    return false;

 }
 
 if(reg.session.selectedIndex==0)
  {
    window.alert("Please Select session!");
    reg.session.focus();
    return false;

 }
 
 if(reg.semester.selectedIndex==0)
  {
    window.alert("Please Select semester!");
    reg.semester.focus();
    return false;

 }
 
 if(reg.dd.selectedIndex==0)
  {
    window.alert("Please Select day !");
    reg.dd.focus();
    return false;

 }
 
 
if(reg.mm.selectedIndex==0)
  {
    window.alert("Please Select month!");
    reg.mm.focus();
    return false;

 }
 
 if(reg.yy.selectedIndex==0)
  {
    window.alert("Please Select year!");
    reg.yy.focus();
    return false;

 }
 

 
 if(address=='')
  {
    window.alert("Please Select Address!");
    document.reg.address.focus();
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
<link rel="stylesheet" href="style1.css" />

</head>

<body class="bg">

<center>
    
    <form method="POST" action="" name="reg" onSubmit="return validate()" class="font">
        <table border="5" bgcolor=#eee> <h1 id="h1n">STUDENT INFORMATION SYSTEM</h1>
            <ul>
                <li> <a href="index_1.php">INSERT</a></li>
                <li> <a href="update1.php">UPDATE</a></li>
                <li><a href="delete.php">DELETE</a></li>
                <li><a href="search.php">SEARCH</a></li>
                <li><a href="logout.php" onclick="return deleteask();">LOGOUT</a></li>
            </ul><br>        
                    </center>
<tr>
		<td>ROLL NO:</td>
		<td><input type="text" name="rn" ></td>
	</tr>
        
        
        <tr>
		<td>BRANCH</td>
<td>
<select name="branch">
<option >Select Branch</option>
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
<option >Select Year</option>
<option value="FIRST">FIRST</option>
<option value="SECOND">SECOND</option>
<option value="THIRD">THIRD </option>
<option value="FOURTH">FOURTH</option>
</select>
</td></tr>

        


<tr>
		<td>FIRST NAME:</td>
		<td><input type="text" name="fn" /></td>
	</tr>
	<tr>
		<td>LAST NAME:</td>
		<td><input type="text" name="ln" /></td>
	</tr>
<tr>
		<td>SESSION:</td>
 <td>
<select name="session">
<option >Select Session</option>
<option >select session</option>
<option value='2014'>2014</option>
<option value='2015'>2015</option>
<option value='2016'>2016</option>
<option value='2017'>2017</option>
<option value='2018'>2018</option>
</select>

</tr>
	
	



<tr>
		<td>SEMESTER:</td>
<td>
<select name="semester">
<option >Select Semester</option>
<option value="FIRST">FIRST</option>
<option value="SECOND">SECOND</option>
<option value="THIRD">THIRD</option>
<option value="FOURTH">FOURTH</option>
<option value="FIFTH">FIFTH</option>
<option value="SIX">SIX</option>
<option value="SEVENTH">SEVENTH</option>
<option value="EIGHT">EIGHT</option>
</select>
</td>
</tr>

<tr>
<td>Date Of Birth(DD-MM-YYYY)</td>
<td><select name="dd">
<option> select day </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>

</select>
<select name="mm">
<option> select month </option>
<option value="jan">JAN</option>
<option value="feb">FEB</option>
<option value="mar">MAR</option>
<option value="apr">APR</option>
<option value="may">MAY</option>
<option value="jun">JUN</option>
<option value="jul">JUL</option>
<option value="aug">AUG</option>
<option value="sep">SEP</option>
<option value="oct">OCT</option>
<option value="nov">NOV</option>
<option value="dec">DEC</option>
</select>
<select name="yy">
<option>select year</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
</select>
</td>
</tr>
<tr>
		<td>ADDRESS:</td>
		<td><input type="text" name="address" /></td>
	</tr>

		
 </table>
        <br>
        <input type="submit" name="submit" value="UPDATE" id="myButton"/>
</form>
</body>
</html>
<?php
require'db_conn.php';
$fn=filter_input(INPUT_POST, 'fn');
$ln=filter_input(INPUT_POST, 'ln');
$session=filter_input(INPUT_POST, 'session');
$rn=filter_input(INPUT_POST, 'rn');
$branch=filter_input(INPUT_POST, 'branch');
$year=filter_input(INPUT_POST, 'year');
$semester=filter_input(INPUT_POST, 'semester');
$dd=filter_input(INPUT_POST, 'dd');
$mm=filter_input(INPUT_POST, 'mm');
$yy=filter_input(INPUT_POST, 'yy');
$address=filter_input(INPUT_POST, 'address');
$cap1=strtoupper($fn);
$cap2=strtoupper($ln);
$cap3=strtoupper($address);



if(isset($_POST['submit']))
 {

 $query ="UPDATE bhup SET fname='$cap1',lname='$cap2',session='$session',rn='$rn',branch='$branch',year='$year',semester='$semester',dob='$dd $mm $yy',address='$cap3' where( rn= '$rn' and branch='$branch' and year='$year')";
mysqli_query($conn , $query);
    
    $result= mysqli_affected_rows($conn);
    
    echo ("<br/> <div class='font'> <font color = 'white' > $result rows updated </font> <div>");
 /*if($q1)
{
 echo"Record Successfully Updated";
}
else
{

echo"Not Update Your Record" ;
}
 */

 }
 
 
 
?>