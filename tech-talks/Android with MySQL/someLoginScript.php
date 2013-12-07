/***
   * Source Code from Portland State University ACM Speech 10/18/2013
   * Author: Sean Walsh (IRC: Azadi)
   * This work may be reproduced without permission
   * and may be modified in any way, and used for commercial
   * products, provided the original authorship is cited.
   */

<?php
$con = mysql_connect("localhost", "username", "password");
if (!$con)
{
die("Could not connect: " . mysql_error());
}
// Ensure the data sent is actually not null.
$username = isset($_POST['username']) ? $_POST['username'] : die("No username");

mysql_select_db("DB", $con);
$result = mysql_query("SELECT * FROM DBTable where username='" . $username . "'");
while ($row = mysql_fetch_assoc($result))
{
$output[] = $row;
// Send output in JSON format.
print(json_encode($output));
}
mysql_close();
?>