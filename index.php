<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysql_connect($servername,$username,$password);
if(!$conn)
  echo "Error in Connection".mysql_error();
else
	echo "OK";

  ?>
