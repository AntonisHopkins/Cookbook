<?php
session_start();
echo "<!DOCTYPE html >
<html >
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

<title>Cook Book</title>
    <link rel='stylesheet' type ='text/css' href='index.css' />
</head>
<body background='./imgs/img4.jpg'>

<div class='container'>
  <div class='header'><a href='index-admin.php'><img src='./imgs/cookbook.jpg' alt='Insert Logo Here' name='Insert_logo' width='180' height='90' id='Insert_logo' style='background: #C6D580; display:block;' /></a> 
    </div>
  <div class='sidebar1'>
    <ul class='nav'>
	  <li><a href='index.php'>Home page</a></li>
    </ul>
	</div>
  <p>&nbsp;</p>
  <div class='content'>
    <div class='login'>
	    <form id='login' action='./queries/login-admin.php' method='post' accept-charset='UTF-8'>
            <fieldset >
                <legend><b>Login Admin</b></legend>
                <input type='hidden' name='submitted' id='submitted' value='1'/>
 
                <label for='username' >UserName*:</label>
                <input type='text' name='username' id='username'  maxlength='50' />
 
                <label for='password' >Password*:</label>
                <input type='password' name='password' id='password' maxlength='50' />
 
                <input type='submit' name='Submit' value='Submit' />
 
            </fieldset>
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
?>