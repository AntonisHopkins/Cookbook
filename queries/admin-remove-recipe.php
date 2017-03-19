<?php
session_start();
if($_SESSION["typeOfUser"]==2)
{
	require_once('../connection.php');
	if(!empty($_GET["recipe"]))
	{
		$recipe=$_GET["recipe"];
		if($mysqli->query("DELETE FROM recipe WHERE recipeName='".$recipe."'"))
		{
			if($mysqli->affected_rows==0)
				$_SESSION["msg"]= "There is no recipe with that name!";
			else
				$_SESSION["msg"]= "You removed the recipe succesfully!";
		}else{
			$_SESSION["msg"]= "Something went wrong, the recipe did not removed!";
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