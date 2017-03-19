<?php
session_start();
if($_SESSION["typeOfUser"]==2)
{
	require_once('../connection.php');
	if(!empty($_POST["recipedescription"]) && !empty($_POST["recipename"]))
	{
		$code="";
		$recdescription=$_POST["recipedescription"];
		$recname=$_POST["recipename"];
		for($i=0;$i<count($_SESSION["ingred-name"]);$i++)//Check which of ingredients are checked
		{
			if(isset($_POST[$_SESSION["ingred-name"][$i]]))
			{
				$code=$code.$_POST[$_SESSION["ingred-name"][$i]].",";
			}
		}
		if($mysqli->query("INSERT INTO recipe (recipeName,recipeDescription,code)
		VALUES('".$recname."', '".$recdescription."','".$code."')"))
			$_SESSION["msg"]= "You submitted the recipe succesfully!";
		else
			$_SESSION["msg"]= "Something went wrong, you could not add the recipe!";
	}else{
		$_SESSION["msg"]="You did not fill all the fields!";//Apothikeuse to minima oti dn exei dwsei dedomena sto textbox
	}
}else{
	header("Location: ../index.php");
}
header("Location: ../adminpage.php");
$mysqli->close();
?>