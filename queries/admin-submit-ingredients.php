<?php
session_start();
if($_SESSION["typeOfUser"]==2)
{
	require_once('../connection.php');
	if(!empty($_POST["newIngredient"]))
	{
		$count=0;
		$code="";
		$newIngredient=$_POST["newIngredient"];
		if($mysqli->query("INSERT INTO ingredients (ingredient)
			VALUES('".$newIngredient."')"))
		{
				$_SESSION["msg"]= "You added the ingredient succesfully!";
		}else{
			$_SESSION["msg"]= "Something went wrong, you did not add the ingredient!";
		}
	}else{
		$_SESSION["msg"]="You did not fill all the fields!";//Apothikeuse to minima oti dn exei dwsei dedomena sto textbox
	}
}else{
	header("Location: ../index.php");
}
$mysqli->close();
header("Location: ../adminpage.php");
?>