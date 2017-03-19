<?php
require_once("connection.php");
session_start();
$result= $mysqli->query("SELECT * FROM ingredients");
echo "<!DOCTYPE html >
<html >
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

<title>Cook Book</title>
    <link rel='stylesheet' type ='text/css' href='index.css' />
</head>
<body background='./imgs/img3.jpg'>

<div class='container'>
  <div class='header'><a href='login.php'><img src='./imgs/cookbook.jpg' alt='Insert Logo Here' name='Insert_logo' width='180' height='90' id='Insert_logo' style='background: #C6D580; display:block;' /></a> 
    </div>
	";
	if(isset($_SESSION["userName"]))
		{
			echo "<p>Welcome, ".$_SESSION["userName"]."</p>";
		}
	echo "<div class='sidebar1'>
      <ul class='nav'>
  	  <li><a href='index.php'>Home page</a></li>
        <li><a href='queries/logout-submit.php'>Log out</a></li>
      </ul>
  	</div>
    <p>&nbsp;</p>
    <div class='content'>
      <div class='main-app'>
  	    <form action='./queries/main-submit.php' method='post'>";
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
	
    <p></p>
  </div>
  <div class='footer'>
    <p>Copyrights reserved to cook book developers</p>
    </div>
  </div>
</body>
</html>";
$_SESSION["msg"]=null;
$mysqli->close();
?>