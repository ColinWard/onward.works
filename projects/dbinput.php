<?php
$con = mysql_connect("104.198.252.162","root","****************");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("root", $con);

$sql="INSERT INTO entries (name, content, contact)
VALUES
('$_POST[name]','$_POST[content]','$_POST[contact]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>