<?php
error_reporting(0);
include("db_connection.php");
$sql = "DELETE FROM employee_tb WHERE emp_ID='" . $_GET['id'] . "'";
if (mysql_query($sql,$con)) {
    header("Location:view_employee.php");
} else {
    echo "Error deleting record: " . mysql_error($con);
}
mysql_close($con);
?>