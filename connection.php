<?php
$mysqli= new mysqli("localhost", "root", "", "3546_3547");
if(mysqli_connect_error())
	die("Could not connect mysqli_connect_error()");
$mysqli->set_charset("utf8");
?>