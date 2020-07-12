<!DOCTYPE html>
<?php 
session_start();
error_reporting(0);
include("main_header.php")?>
  <style>
  .button1{
	  background-color: #5c5c8a;
  color: white;
  padding: 16px;
  font-size: 16px;
  margin-top:10px;
  margin-bottom:10px;
  margin-left:100px;
  border: none;
  width:200px;
  height:200px;
  text-align:center;
  }
  </style>
  <?php
if($_SESSION["username"]) {
?>
      <center><h1 style="color:#5c5c8a;">Dashboard of HRMS</h1></center>
	  
    
	 

<br><br><br><br><br><button class="button1">Total No of Employees <?php include("db_connection.php");
	  $total_employee=mysql_query("select count(name) from employee_tb");
while($rows=mysql_fetch_array($total_employee))
{$total=$rows['count(name)']; echo $total;}?></button>

<button class="button1">Total Salary is <br><?php include("db_connection.php");
	  $total_salary=mysql_query("select sum(salary) from employee_tb");
while($row=mysql_fetch_array($total_salary))
{$sum=$row['sum(salary)']; echo $sum;}?></button><br><br><br><br><br><br><br><br>

    </div>
    
  </div>
</div>


<?php include("footer.php")?>
<?php 
}
else 
{
	header("Location:admin_login.php");
}
?>

</body>
</html>
