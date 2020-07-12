<?php 
/* view employee detail*/
session_start();
error_reporting(0);
include("main_header.php")
?>
<?php
if($_SESSION["username"]) {
?>
<script>
function validateForm()
{
var a=document.forms["view"]["emp_name"].value;
var b=document.forms["view"]["fname"].value;
var c=document.forms["view"]["emp_cnic"].value;
var d=document.forms["view"]["localDomicile"].value;
var e=document.forms["view"]["date_birth"].value;
var f=document.forms["view"]["emp_gender"].value;
var g=document.forms["view"]["maritalStatus"].value;
var h=document.forms["view"]["contactNo"].value;
var i=document.forms["view"]["emp_email"].value;
var j=document.forms["view"]["emp_nationality"].value;
var k=document.forms["view"]["emp_religion"].value;
var l=document.forms["view"]["emp_address"].value;
var m=document.forms["view"]["emp_qualification"].value;
var n=document.forms["view"]["emp_institute"].value;
var o=document.forms["view"]["emp_designation"].value;
var p=document.forms["view"]["joiningDate"].value;
var q=document.forms["view"]["emp_salary"].value;
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
<h1>Update or Delete Employee Information</h1>
<?php 
include("db_connection.php");
$id=$_GET['id'];
$sql="SELECT *FROM employee_tb WHERE emp_ID='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

?>
	 
	 <table class="table">
	 <form action="update_info.php" method="POST" name="view" onsubmit="return validateForm()">
	 <tr>
	 <td colspan="6">Basic Detail</td>
	 </tr>
	 <tr><td><input name="id" type="hidden" id="id" value="<?php echo $rows['emp_ID'];?>"></td></tr>
	 <tr>
	 <td>Name</td>
	 <td><input type="text" name="emp_name" value="<?php echo $rows['name']?>"></td>
	 <td>F/Name</td>
	 <td><input type="text" name="fname" value="<?php echo $rows['f_name']?>"></td>
	 <td>CNIC</td>
	 <td><input type="text" name="emp_cnic" value="<?php echo $rows['cnic']?>"></td>
	 </tr>
	 <tr> 
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

<select style="width:185px;" name="localDomicile">
<option><?php echo $rows['local_domicile']?></option>
  <?php while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
	
	$city=$row['local_city'];
 echo '<option>'.$city.'</option>';
}
?>
  
</select></td>
	<td>Date of Birth</td>
	 <td><input type="Date" name="date_birth" value="<?php echo $rows['date_of_birth']?>"></td>
	 <td>Gender</td>
	 <td><select style="width:185px;" name="emp_gender">
<option><?php echo $rows['gender']?></option>
<option>Male</option>
<option>Female</option>
	 </select></td>
	 
	 </tr>
	 <tr>
	 
	  <td>Marital Status</td>
	 <td><select style="width:185px;" name="maritalStatus">
<option><?php echo $rows['marital_status']?></option>
<option>Married</option>
<option>Unmarried</option>
	 </select></td>
	 <td>Contact NO</td>
	 <td><input type="text" name="contactNo" value="<?php echo $rows['contact_no']?>"></td>
	 <td>Email Address</td>
	 <td><input type="text" name="emp_email" value="<?php echo $rows['email']?>"></td>
	 </tr>
	 <tr>
	 <td>Nationality</td>
	 <td><input type="text" name="emp_nationality" value="<?php echo $rows['nationality']?>"></td>
	 <td>Religion</td>
	 <td><input type="text" name="emp_religion" value="<?php echo $rows['religion']?>"></td>
	 
	 </tr>
	 <tr>
	 <td>Adress</td>
	 <td colspan='6'><input type="text" style="width:800px;" name="emp_address" value="<?php echo $rows['address']?>"></td>
	 </tr>
	 <tr>
	 <td colspan="6">Qualification Detail</td>
	 </tr>
	 <tr>
	 <td>Qualification</td>
	 <td><select style="width:185px;" name="emp_qualification">
	 <option><?php echo $rows['qualification']?></option>
  <?php while($ret=mysql_fetch_array($r,MYSQL_ASSOC))
{
	
	$qualification=$ret['qualification'];
 echo '<option>'.$qualification.'</option>';
}
?>
  
</select></td>
	 <td>Last Attended Institute</td>
	 <td><input type="text" name="emp_institute" value="<?php echo $rows['institute']?>"></td>
	 </tr>
	 <tr>
	 <td colspan="6">Official Detail</td>
	 </tr>
	 <tr>
	 <td>Designation</td>
	 <td><select style="width:185px;" name="emp_designation">
	 <option><?php echo $rows['designation']?></option>
  <?php while($rws=mysql_fetch_array($rs,MYSQL_ASSOC))
{
	
	$designation=$rws['designation'];
 echo '<option>'.$designation.'</option>';
}
?>
  
</select></td>
	 <td>Joining Date</td>
	 <td><input type="Date" name="joiningDate" value="<?php echo $rows['joining_date']?>"></td>
	 <td>Salary</td>
	 <td><input type="text" name="emp_salary" value="<?php echo $rows['salary']?>"></td>
	 </tr>
	 <?php mysql_close($con);?>
	 <tr>
	 <td colspan="6" style="text-align:right;">
	 <button type="submit" class="btn btn-primary" name="update" style="background:#5c5c8a;">Update Employee Info</button> 
	 </td> </form>
	 </tr>
	 </table>
	
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