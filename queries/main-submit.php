<?php
require_once("../connection.php");
session_start();
$code="";
		for($i=0;$i<count($_SESSION["ingred-name"]);$i++)//Check which of ingredients are checked
		{
			if(isset($_POST[$_SESSION["ingred-name"][$i]]))
			{
				$code=$code.$_POST[$_SESSION["ingred-name"][$i]].",";
			}
		}
		$recipe=$mysqli->query("SELECT * FROM recipe WHERE code='".$code."'");
		echo "
<!DOCTYPE html >
<html >
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

<title>Cook Book</title>
    <link rel='stylesheet' type ='text/css' href='../index.css' />
</head>
<body background='../imgs/img2.jpg'>
	<div class='container'>
	  <div class='header'><a href='../index.php'><img src='../imgs/cookbook.jpg' alt='Insert Logo Here' name='Insert_logo' width='180' height='90' id='Insert_logo' style='background: #C6D580; display:block;' /></a> 
		</div>
	  <div class='sidebar1'>
		<ul class='nav'>
		  <li><a href='../index.php'>Home page</a></li>
		  <li><a href='../main.php'>Cook Book Search</a></li>
		</ul>
		</div>
	  <p>&nbsp;</p>
	  <div class='content'>";
			if(isset($recipe))
			{
				while($record=$recipe->fetch_array())
				{
				echo "<h1>".$record["recipeName"]."</h1> <p>".$record["recipeDescription"]."</p>";
				}
			}
		echo"
			</div>
			<div class='footer'>
			<p>Copyrights reserved to cook book developers</p>
			</div>
	  </div>
</body>
</html>";
$mysqli->close();
?>