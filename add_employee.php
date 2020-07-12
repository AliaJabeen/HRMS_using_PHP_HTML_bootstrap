<!-- Add Employee Detail-->
<?php session_start(); 
error_reporting(0);
include("main_header.php");?>
<?php
if($_SESSION["username"]) {
?>
 <script>
function validateForm()
{
var a=document.forms["add"]["name"].value;
var b=document.forms["add"]["f_name"].value;
var c=document.forms["add"]["cnic"].value;
var d=document.forms["add"]["local_domicile"].value;
var e=document.forms["add"]["date_of_birth"].value;
var f=document.forms["add"]["gender"].value;
var g=document.forms["add"]["marital_status"].value;
var h=document.forms["add"]["contact_no"].value;
var i=document.forms["add"]["email"].value;
var j=document.forms["add"]["nationality"].value;
var k=document.forms["add"]["religion"].value;
var l=document.forms["add"]["address"].value;
var m=document.forms["add"]["qualification"].value;
var n=document.forms["add"]["institute"].value;
var o=document.forms["add"]["designation"].value;
var p=document.forms["add"]["joining_date"].value;
var q=document.forms["add"]["salary"].value;
if ((a==null || a=="") && (b==null || b=="")&& (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") 
	&& (g==null || g=="") && (h==null || h=="") && (i==null || i=="") && (j==null || j=="") && (k==null || k=="") && (l==null || l=="")
&& (m==null || m=="") && (n==null || n=="") && (o==null || n=="") && (p==null || p=="") && (q==null || q=="")) 
  {
  alert("All Field must be filled out");
  return false;
  }
  if(a==null || a=="")
  {
	  alert("Name is mandatory");
  return false;
  }
  if(b==null || b=="")
  {
	  alert("Father Name is mandatory");
  return false;
  }
  if(c==null || c=="")
  {
	  alert("CNIC field is mandatory");
  return false;
  }
if (e==null || e=="")
  {
  alert("Date of Birth is mandatory");
  return false;
  }
if (f==null || f=="")
  {
  alert("Gender field is mandatory");
  return false;
  }
  if (g==null || g=="")
  {
  alert("Marital status field is mandatory");
  return false;
  }
  if (h==null || h=="")
  {
  alert("Contact NO is mandatory");
  return false;
  }
  if (i==null || i=="")
  {
  alert("Email is mandatory");
  return false;
  }
  if (j==null || j=="")
  {
  alert("Nationality record is mandatory");
  return false;
  }
  if (k==null || k=="")
  {
  alert("Religion record is mandatory");
  return false;
  }
  
 if (l==null || l=="")
  {
  alert("Address record is mandatory");
  return false;
  }
  
  if (m==null || m=="")
  {
  alert("Qualification record is mandatory");
  return false;
  }
  if (n==null || n=="")
  {
  alert("Institute record is mandatory");
  return false;
  }
  if (o==null || o=="")
  {
  alert("Designation record is mandatory");
  return false;
  }
  if (p==null || p=="")
  {
  alert("Joining_Date record is mandatory");
  return false;
  }
  if (q==null || q=="")
  {
  alert("Salary record is mandatory");
  return false;
  }
  
  
}

 
 </script>

	<h1>Add Employee Information</h1>
	 <form action="add_employee_detail.php" method="POST" name="add" onsubmit="return validateForm()">
	 <table class="table">
	 <tr>
	 <td colspan="6"><h3>Basic Detail</h3></td>
	 </tr>
	 <tr><td><input type="hidden" name="emp_ID"><td></tr>
	 <tr>
	 <td>Name</td>
	 <td><input type="text" name="name"></td>
	 <td>F/Name</td>
	 <td><input type="text" name="f_name"></td>
	 <td>CNIC</td>
	 <td><input type="text" name="cnic"></td>
	 </tr>
	 <?php 
include("db_connection.php");
$qry="select local_city from city";
$result=mysql_query($qry,$con);
$q="select qualification from qualification_tb";
$r=mysql_query($q,$con);
$qr="select designation from designation_tb";
$rs=mysql_query($qr,$con);

?>
	 <tr> 
	 <td>Local/Domicile</td>
	 <td>

<select style="width:185px;" name="local_domicile">
<option>Select...</option>
  <?php while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
	
	$city=$row['local_city'];
 echo '<option>'.$city.'</option>';
}
?>
  
</select></td>

	<td>Date of Birth</td>
	 <td><input type="Date" name="date_of_birth"></td>
	 <td>Gender</td>
	 <td><select style="width:185px;" name="gender">
<option>Select Gender</option>
<option>Male</option>
<option>Female</option>
	 </select></td>
	 </tr>
	 <tr>
	  <td>Marital Status</td>
	 <td><<select style="width:185px;" name="marital_status">
<option>Select Marital Status</option>
<option>Married</option>
<option>Unmarried</option>
	 </select></td>
	 <td>Contact NO</td>
	 <td><input type="text" name="contact_no"></td>
	 <td>Email Address</td>
	 <td><input type="text" name="email"></td>
	 </tr>
	 <tr>
	 <td>Nationality</td>
	 <td><input type="text" name="nationality" value="Pakistani"></td>
	 <td>Religion</td>
	 <td><input type="text" name="religion"></td>
	  <!--td colspan="2">Upload Picture <input type="submit" value="Brows"></td-->
	 </tr>
	 <tr>
	 <td>Adress</td>
	 <td colspan='6'><input type="text" style="width:800px;" name="address"></td>
	 </tr>
	 <tr>
	 <td colspan="6"><h3>Qualification Detail</h3></td>
	 </tr>
	 <tr>
	 <td>Qualification</td>
	 <td><select style="width:185px;" name="qualification">
	 <option>Select Qualification</option>
  <?php while($rows=mysql_fetch_array($r,MYSQL_ASSOC))
{
	
	$qualification=$rows['qualification'];
 echo '<option>'.$qualification.'</option>';
}
?>
  
</select></td>
	 <td>Last Attended Institute</td>
	 <td><input type="text" name="institute"></td>
	 </tr>
	 <tr>
	 <td colspan="6"><h3>Official Detail</h3></td>
	 </tr>
	 <tr>
	 <td>Designation</td>
	 <td><select style="width:185px;" name="designation">
	 <option>Select Designation</option>
  <?php while($rws=mysql_fetch_array($rs,MYSQL_ASSOC))
{
	
	$designation=$rws['designation'];
 echo '<option>'.$designation.'</option>';
}
?>
  
</select></td>
	 <td>Joining Date</td>
	 <td><input type="Date" name="joining_date"></td>
	 <td>Salary</td>
	 <td><input type="text" name="salary"></td>
	 </tr>
	 <tr>
	 <td colspan="6" style="text-align:right;">
	 <button type="submit" class="btn btn-primary" name="add_employee" style="background:#5c5c8a;">Add Employee</button> 
	 </td>
	 </tr>
	 </table>
	 </form>
		 </div>
    
  </div>
</div>

<?php include("footer.php")?>
<?php
}
else {header("Location:admin_login.php");}
?>
</body>
</html>
