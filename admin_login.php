<!DOCTYPE html>

<?php 
error_reporting(0);
session_start();
include('db_connection.php')

?>

<html>
<head>
  <title>HRMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <link rel="stylesheet" rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" rel="stylesheet" href="css/Style.css">
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script> <!-- form validation-->
function validateForm()
{
var a=document.forms["admin"]["u_name"].value;
var b=document.forms["admin"]["pass"].value;
if ((a==null || a=="") && (b==null || b==""))
	{
  alert("Enter the username and password");
  return false;
  }
if (a==null || a=="")
  {
  alert("Enter Username");
  return false;
  }
if (b==null || b=="")
  {
  alert("Enter Password");
  return false;
  }
}
</script>
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<h1 style="margin-top:50px; color:#b32d00;">HRMS</h1>
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form name="admin" action="admin_login.php" onsubmit="return validateForm()" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="u_name" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="pass" class="form-control input_pass" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<a href="home.php"><input type="submit" name="login" class="btn login_btn" value="Login"></a>
				   </div>
					</form>
				</div>
		
				</div>
			</div>
		</div>
	</div>
	<?php 
	include("db_connection.php");
	if(isset($_POST['login']))
  {
  $name=$_POST['u_name'];
$pass=$_POST['pass'];
 $query1="select *from  admin_login where user_name like '$name' AND password like '$pass' ";
 
$run=mysql_query($query1,$con);

while($row=mysql_fetch_array($run))
{
if( $name==$row['user_name']  && $pass==$row['password'])
{
$_SESSION['username']=$row['user_name'];
$_SESSION['password']=$row['password'];
header("location:home.php");
}
else
{
	echo '<script>alert("Incorrect username or password");</script>';
}
}
  }
mysql_close($con)
	?>
</body>
</html>
