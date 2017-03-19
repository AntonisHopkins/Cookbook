<?php
require_once("../connection.php");
session_start();
if(!empty($_POST["username"]) && !empty($_POST["password"]))
	{
		$username=$_POST["username"];
		$userpass=$_POST["password"];
		$i=1;
		$check=$mysqli->query("SELECT * FROM users WHERE userName='".$username."'");
			if($check->num_rows==0)
			{
				$_SESSION["userName"]=$username;
				 $_SESSION["typeOfUser"]=1;
				  $ip=$_SERVER['REMOTE_ADDR'];
					if(empty($ip))
					{
						$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
					}
				$mysqli->query("INSERT INTO users (userName , userPassword , typeOfUser,IP)
				VALUES('".$username."' , '".$userpass."' , '".$i."' , '".$ip."')");
				$_SESSION["msg"] = null;
			}else{
				$_SESSION["msg"] ="The username is used.";
				header("Location: ../signin.php");
				exit();
			}
	}else{
		$_SESSION["msg"]="You did not fill all the fields!";//Apothikeuse to minima oti dn exei dwsei dedomena sto textbox
		header("Location: ../signin.php");
		exit();
	}
	header("Location: ../main.php");
?>