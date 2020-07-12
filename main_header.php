<!DOCTYPE html>
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
  <style>
  .button{
	  background-color: #5c5c8a;
  color: white;
  padding: 16px;
  font-size: 16px;
  margin-top:10px;
  margin-bottom:10px;
  border: none;
  width:120px;
  }
.dropbtn {
  background-color: #5c5c8a;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  width:120px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #d6d6f5;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #5c5c8a;}

</style>
  </head>
<body>

					<div style=" width:auto;background:#666699;height:150px; "  class="main-header">
						<h1><a href="home.php" style="color:white;margin-left:250px">Welcome to Qambrani's Institue of Knowledge</a></h1>
						<h2  style="color:white;margin-left:500px">HR Management System</h2>
						<a href="admin_logout.php"><button class="button" style="color:#5c5c8a;margin-left:1100px;background:#d6d6f5;padding:5px"><b>Log out</b></button></a>
					</div>
					
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
	<a href="home.php"><button class="button">Dashboard</button></a>
	<div class="dropdown">
	
  <button class="dropbtn">Employee</button>
  <div class="dropdown-content">
    <a href="add_employee.php">Add Employee</a>
    <a href="view_employee.php">View Employee</a>
  </div>
</div>		
    </div>
    <div class="col-sm-8 text-left"> 