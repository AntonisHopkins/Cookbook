<?php
	require_once("../connection.php");
	session_start();
	if(!empty($_POST["username"]) && !empty($_POST["password"]))
	{
		$user=$_POST["username"];
		$pass=$_POST["password"];
		$return_user=$mysqli->query("SELECT * FROM users WHERE userName='".$user."' 
		AND userPassword='".$pass."'");
		if($return_user->num_rows==1)
		{
			$user_data = $return_user->fetch_array();
			$_SESSION["userName"]=$user_data["userName"];
			$_SESSION["typeOfUser"]=$user_data["typeOfUser"];
			$ip=$_SERVER['REMOTE_ADDR'];
			if(empty($ip))
				{
				  	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
				}
			$mysqli->query("UPDATE users SET IP='".$ip."' WHERE userName='".$user."'");
			header("Location: ../main.php");
			exit();
		}else{
			$_SESSION["msg"]="Check your username or password.";//Apothikeuse to minima oti dn exei dwsei dedomena sto textbox
		}
	}else{
		$_SESSION["msg"]="You did not fill all the fields!";//Apothikeuse to minima oti dn exei dwsei dedomena sto textbox
	}
$mysqli->close();
header("Location: ../login.php");
?>