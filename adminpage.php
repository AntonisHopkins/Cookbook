<?php
session_start();
if($_SESSION["typeOfUser"]==2)
{
		require_once("connection.php");
		$result= $mysqli->query("SELECT * FROM ingredients");
		if($result==false)
		{
			die("Database return false");
		}
		echo "<!DOCTYPE html >
			<html >
			<head>
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

			<title>Cook Book</title>
				<link rel='stylesheet' type ='text/css' href='index.css' />
				<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css'/>
				<script src='//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
       			<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js'></script>
				<script type='text/javascript' src='./scripts/accordion.js'></script>
			</head>
			<body background='./imgs/img5.jpg'>
			<div class='container'>
				<div class='header'><a href='login.php'><img src='./imgs/cookbook.jpg' alt='Insert Logo Here' name='Insert_logo' width='180' height='90' id='Insert_logo' style='background: #C6D580; display:block;' /></a> 
			</div>
				<div class='sidebar1'>
				<ul class='nav'>
					<li><a href='index.php'>Home page</a></li>
				</ul>
				</div>
			    <p>&nbsp;</p>
				<div class='content'>
					<div id='menu'>
						<h3>Add Recipe</h3>
						<div>
						   <form action='./queries/admin-submit-recipe.php' method='post'>
								<label for='recipename' >recipe name:</label>
								<input type='text' name='recipename' maxlength='3500' />
								<br></br>
								<label for='recipedescription' >recipe description:</label>
								<input type='text' name='recipedescription' maxlength='3500' />
								<br/>";
								$i=0;
								while($record=$result->fetch_array())
    							{
    								echo "<input type='checkbox' name='".$record["ingredient"]."' value='".$record["id"]."'/>".$record["ingredient"]."";
         							$_SESSION["ingred-name"][$i]=$record["ingredient"];
          							$_SESSION["ingred-code"][$i]=$record["id"];
							        $i++;
							    }
						    echo "<input type='submit'/>
						    </form>
						    </div>
						    <h3>Add Ingredient</h3>
							<div>
						    <form action='./queries/admin-submit-ingredients.php' method='post'>
								<br/>
								<label for='newIngredient' >New Ingredients:</label>
								<input type='text' name='newIngredient' maxlength='25' />
								<input type='submit'/>
						   </form>
						   </div>
						   <h3>Remove Ingredient</h3>
							<div>
						    <form action='./queries/admin-remove-ingredients.php' method='post'>
								<br/>
								<label for='ingredient' >Ingredient:</label>
								<input type='text' name='ingredient' maxlength='25' />
								<input type='submit'/>
						   </form>
						   </div>
						   <h3>Remove Recipe</h3>
						   <div>
						   <form action='./queries/admin-remove-recipe.php' method='get'>
								<label for='recipename' >recipe name:</label>
								<input type='text' name='recipe' maxlength='3500' /><br/>
								<input type='submit'/>
							</form>
						   </div>
						</div>";
						if(!empty($_SESSION["msg"]))
						   		echo "<p>".$_SESSION["msg"]."</p>";
						$_SESSION["msg"]=null;
						echo "
			  		</div>
				 	<div class='footer'>
						<p>Copyrights reserved to cook book developers</p>
					</div>	
				</div>
			</body>
			</html>";
}else{
	header("Location: index.php");
}
$mysqli->close();
?>