/***
   * Source Code from Portland State University ACM Speech 10/18/2013
   * Author: Sean Walsh (IRC: Azadi)
   * This work may be reproduced without permission
   * and may be modified in any way, and used for commercial
   * products, provided the original authorship is cited.
   */

<?php
$con = mysql_connect("localhost", "username", "password");
if(mysqli_connect_errno($connect))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
    echo "success";
}
	$DBColumn = isset($_POST['DBColumn']) ? $_POST['DBColumn'] : '';

// The NULL here is for the auto-increment ID. If you have no ID column, delete.
$query = mysqli_query($connect, "insert into activities(id, DBColumn) values (NULL, '$DBColumn') ");

mysqli_close($connect);
echo "Finished";
?>