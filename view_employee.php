<!DOCTYPE html>
<!-- View Employee-->

<?php
session_start();
error_reporting(0);
 include("main_header.php");?>
 <?php
if($_SESSION["username"]) {
?>
	<h1>Employee View</h1>
	 <?php 
	 include("db_connection.php"); //database connection file
	 $sql = 'SELECT *FROM employee_tb'; //selecting all data from the "employee_tb" table
   $retval = mysql_query( $sql, $con);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
    echo '<table class="table table-hover table-bordered"> <tr>
	   
	   <th>Name</th>
	   <th>Father Name</th>
	   <th>CNIC</th>
	   <th>Local/Domicile</th>
	   <th>Edit Record</th>
	   <th>Delete Record</th></tr>';
	
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
  
   ?>
   
  
   <td><?php echo $row['name']?></td>
   <td><?php echo $row['f_name']?></td>
   <td><?php echo $row['cnic']?></td>
   <td><?php echo $row['local_domicile']?></td>
   <td align="center"><a href="view_detail.php?id=<?php echo $row['emp_ID'];?>">Edit</a></td>
   <td align="center"><a href="delete_emp.php?id=<?php echo $row['emp_ID'];?>">Delete</a></td>
  </tr>
  
  <?php 
   }
  ?>
	 </table>
		 </div>
    
  </div>
</div>

<?php

include("footer.php");?>
<?php
}
else {header("Location:admin_login.php");}
?>
</body>
</html>
