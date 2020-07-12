<?php
/*Add employee detail php file*/
error_reporting(0);
include("db_connection.php");
  if(isset($_POST['add_employee']))
  {
	  $name=$_POST['name'];
	  $f_name=$_POST['f_name'];
	  $cnic=$_POST['cnic'];
	  $local_domicile=$_POST['local_domicile'];
	  $date_of_birth=$_POST['date_of_birth'];
	  $gender=$_POST['gender'];
	  $marital_status=$_POST['marital_status'];
	  $contact_no=$_POST['contact_no'];
	  $email=$_POST['email'];
	  $nationality=$_POST['nationality'];
	  $religion=$_POST['religion'];
	  $address=$_POST['address'];
	  $qualification=$_POST['qualification'];
	  $institute=$_POST['institute'];
	  $designation=$_POST['designation'];
	  $joining_date=$_POST['joining_date'];
	  $salary=$_POST['salary'];
	  $query="insert into employee_tb (name,f_name,cnic,local_domicile,date_of_birth,gender,marital_status,contact_no,email,
	  nationality,religion,address,qualification,institute,designation,joining_date,salary) VALUES('$name','$f_name','$cnic','$local_domicile',
	  '$date_of_birth','$gender','$marital_status','$contact_no','$email','$nationality','$religion','$address','$qualification','$institute','$designation',
  '$joining_date','$salary')";
	 mysql_query($query,$con);
		header("location:view_employee.php");  
  }

?>