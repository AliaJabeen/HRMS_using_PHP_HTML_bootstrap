<?php 
/*update record php file*/
session_start();
error_reporting(0);
include("db_connection.php");
if(isset($_POST['update']))
{
$id=$_POST["id"];
$name=$_POST['emp_name'];
$f_name=$_POST['fname'];
$cnic=$_POST['emp_cnic'];
$local_domicile=$_POST['localDomicile'];
$date_of_birth=$_POST['date_birth'];
$gender=$_POST['emp_gender'];
$marital_status=$_POST['maritalStatus'];
$contact_no=$_POST['contactNo'];
$email=$_POST['emp_email'];
$nationality=$_POST['emp_nationality'];
$religion=$_POST['emp_religion'];
$address=$_POST['emp_address'];
$qualification=$_POST['emp_qualification'];
$institute=$_POST['emp_institute'];
$designation=$_POST['emp_designation'];
$joining_date=$_POST['joiningDate'];
$salary=$_POST['emp_salary'];
$qry="update employee_tb set name='".$name."',f_name='".$f_name."',cnic='".$cnic."',local_domicile='".$local_domicile."',
date_of_birth='".$date_of_birth."',gender='".$gender."',marital_status='".$marital_status."',contact_no='".$contact_no."',
email='".$email."',nationality='".$nationality."',religion='".$religion."',address='".$address."',qualification='".$qualification."',
institute='".$institute."',designation='".$designation."',joining_date='".$joining_date."',salary='".$salary."' where emp_ID=".$id;


$retval = mysql_query( $qry, $con);
if(! $retval )
{
die('Could not update data: ' . mysql_error());
}
else {
echo "<script>alert('Record Updated Successfully...');</script>";
header("location:view_employee.php");
}

}

?>
