<?php
error_reporting(1);

$db = mysqli_connect('localhost','root','','db_forum');
if(!$db)
{
	echo "Database connection failed";
}
?>