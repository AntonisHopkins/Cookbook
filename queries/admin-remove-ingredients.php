<?php
session_start();
if($_SESSION["typeOfUser"]==2)
{
	require_once('../connection.php');
	if(!empty($_POST["ingredient"]))
	{
		$count=0;
		$code="";
		$ingredient=$_POST["ingredient"];
		if($mysqli->query("DELETE FROM ingredients WHERE ingredient='".$ingredient."'"))
		{
				if($mysqli->affected_rows!=0){
					$_SESSION["msg"]= "You removed the ingredient succesfully!";
				}else{
					$_SESSION["msg"]="There is no ingredient with that name.";
				}
		}else{
			$_SESSION["msg"] ="Something went wrong, the ingredient did not removed!";
		}
	}else{
		$_SESSION["msg"]="You did not fill all the fields!";//Apothikeuse to minima oti dn exei dwsei dedomena sto textbox
	}
}else{
	header("Location: ../index.php");
}
header("Location: ../adminpage.php");
$mysqli->close();
?>